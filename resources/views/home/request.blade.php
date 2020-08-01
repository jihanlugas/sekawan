@extends('layouts.app')

@section('header', 'Request')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">
        @foreach($mUsertrees as $level => $mUsertree)
            <div class="accordion-item shadow-lg rounded    -lg mb-4">
                <h3 class="accordion-item__title flex justify-between items-center p-3 cursor-pointer text-lg font-bold">
                    {{ 'Level ' . $level }}
                    <span class="accordion-item__arrow">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                                         clip-rule="evenodd">
                                        <path
                                            d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm5.247 8l-5.247 6.44-5.263-6.44-.737.678 6 7.322 6-7.335-.753-.665z"/>
                                    </svg>
                                </span>
                </h3>

                <div class="accordion-item__content p-3" style="display: none">
                    @if(!$mUsertree->isEmpty())
                        @foreach($mUsertree as $i => $usertree)
                            <div class="entry max-w-full rounded overflow-hidden shadow-lg mb-3">
                                <img class="w-full"
                                     src="{{ $usertree->photo ? $usertree->photo : asset('img/default-photo.jpg') }}"
                                     alt="">
                                <div class="p-4">
                                    <div class="mb-2 usertreeStatus"><?= \App\Usertree::$status_photo_tag[$usertree->status_photo] ?></div>
                                    <div class="font-bold text-xl mb-2">{{ $usertree->user->name }}</div>
                                    @if($usertree->status_photo == \App\Usertree::STATUS_PHOTO_WAITING)
                                        <div class="flex w-full justify-end items-center actionButton">
                                            <button
                                                data-userid="{{ $usertree->user_id }}" class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 mr-2 btnApprove">
                                                Approve
                                            </button>
                                            <button
                                                data-userid="{{ $usertree->user_id }}" class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-red-500 hover:bg-red-700 btnReject">
                                                Reject
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{--                            <div class="entry p-4">--}}
                            {{--                                <div class="card mb-4 usertreeCard" style="width: 100%">--}}
                            {{--                                    <img--}}
                            {{--                                        class="card-img-top usertreeImage {{ $usertree->photo ? '' : 'btnInputimage' }} "--}}
                            {{--                                        src="{{ $usertree->photo ? $usertree->photo : asset('img/default-photo.jpg') }}"--}}
                            {{--                                        alt="Card image cap">--}}
                            {{--                                    <input type="file" class="d-none inputImage" name="photo_id "--}}
                            {{--                                           data-userid="{{ $usertree->user_id }}">--}}
                            {{--                                    <input type="text" class="d-none" name="parent_id"--}}
                            {{--                                           value="{{ $usertree->user_id }}">--}}
                            {{--                                    <div class="card-body">--}}
                            {{--                                        <h5 class="card-title usertreeStatus">--}}
                            {{--                                            <label>{{ \App\Usertree::$status_photo[$usertree->status_photo] }}</label>--}}
                            {{--                                        </h5>--}}
                            {{--                                        <p class="card-text">{{ 'Name : ' . $usertree->user->name }}</p>--}}
                            {{--                                        @if($usertree->status_photo == \App\Usertree::STATUS_PHOTO_WAITING)--}}
                            {{--                                            <div class="form-group row mb-0">--}}
                            {{--                                                <div class="col text-right">--}}
                            {{--                                                    <button class="btn btn-danger btnReject"--}}
                            {{--                                                            data-userid="{{ $usertree->user_id }}">Reject--}}
                            {{--                                                    </button>--}}
                            {{--                                                    <button class="btn btn-primary btnApprove"--}}
                            {{--                                                            data-userid="{{ $usertree->user_id }}">Approve--}}
                            {{--                                                    </button>--}}
                            {{--                                                </div>--}}
                            {{--                                            </div>--}}
                            {{--                                        @endif--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        @endforeach
                    @else
                        <div class="entry p-4">
                            <p>No Data Available</p>
                        </div>
                    @endif
                </div>
                <div class="accordion-item__detail p-3">
                    <div class="accordion-item__detail-item">
                        <div class="accordion-item__detail-item-title">
                            Telah Didapat
                        </div>
                        <div class="accordion-item__detail-item-contain">
                            <div class="">Jumlah</div>
                            <div class="">{{ 'Rp ' . $mUsertree->total_didapat }}</div>
                        </div>
                    </div>
                    <div class="accordion-item__detail-item">
                        <div class="accordion-item__detail-item-title">
                            Belum Didapat
                        </div>
                        <div class="accordion-item__detail-item-contain">
                            <div class="">Jumlah</div>
                            <div class="">{{ 'Rp ' . $mUsertree->belum_didapat }}</div>
                        </div>
                    </div>

                    <div class="accordion-item__detail-item">
                        <div class="accordion-item__detail-item-title">
                            Total
                        </div>
                        <div class="accordion-item__detail-item-contain">
                            <div class="">Jumlah</div>
                            <div class="">{{ 'Rp ' . $mUsertree->total }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            var requsetapprove = '{{ \App\Usertree::STATUS_PHOTO_APPROVED }}';
            var requsetreject = '{{ \App\Usertree::STATUS_PHOTO_REJECTTED }}';
            var url = '{{ route('request') }}';

            $('.btnReject').click(function () {
                var jThis = $(this);
                postrequest(jThis, requsetreject)
            })

            $('.btnApprove').click(function () {
                var jThis = $(this);
                postrequest(jThis, requsetapprove)
            })

            function postrequest(jThis, requeststatus) {
                var user_id = jThis.data('userid');
                var usertreeStatus = jThis.closest('.entry').find('.usertreeStatus');
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: url,
                    type: 'post',
                    data: {
                        user_id: user_id,
                        status_photo: requeststatus,
                    },
                    success: function (res) {
                        if (res.status) {
                            usertreeStatus.html(res.status_photo_tag);
                            jThis.closest('.actionButton').remove();
                        } else {

                        }
                    },
                });
            }

        })
    </script>
@endpush
