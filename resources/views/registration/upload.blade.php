@extends('layouts.app')
@section('header', 'Uploads')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">
        @if($mUsertrees)
            @foreach($mUsertrees as $i => $mUsertree)
                <form method="POST" action="{{ route('upload') }}"
                      id="form-{{ $mUsertree->parent_id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="max-w-full rounded overflow-hidden shadow-lg mb-3 usertreeCard">
                        <img class="w-full usertreeImage btnInputimage"
                             src="{{ $mUsertree->photo ? $mUsertree->photo : asset('img/default-photo.jpg') }}"
                             alt="">
                        <input type="file" class="hidden inputImage" name="photo_id"
                               data-parentid="{{ $mUsertree->parent_id }}">
                        <input type="text" class="hidden" name="parent_id"
                               value="{{ $mUsertree->parent_id }}">
                        <div class="p-4">
                            <div class="font-bold text-xl mb-2 usertreeStatus">
                                <?= $mUsertree->status_photo ?>
                            </div>
                            <div class="font-bold text-xl mb-2">{{ $mUsertree->parent->name }}</div>
                            <p class="text-gray-700 text-base">{{ 'Bank : ' . $mUsertree->parent->userdetail->bank->name }}</p>
                            <p class="text-gray-700 text-base">{{ 'No. Rekening : ' . $mUsertree->parent->userdetail->bank_account_number }}</p>
                            <p class="text-gray-700 text-base">{{ 'Price : Rp ' }} {{ \App\Helpers\Formater::formatNumber($mUsertree->parent_level == \App\Usertree::ADMIN_LEVEL ?  $mUsertree->price->admin_price : $mUsertree->price->non_admin_price) }}</p>

                        </div>
                        {{--                        <div class="px-6 py-4">--}}
                        {{--                                    <span--}}
                        {{--                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>--}}
                        {{--                            <span--}}
                        {{--                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>--}}
                        {{--                            <span--}}
                        {{--                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>--}}
                        {{--                        </div>--}}
                    </div>
                </form>
            @endforeach
        @endif

        @if($complete)
            <div class="flex flex-wrap">
                <a href="{{ route('completedata') }}"
                   class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">Complete
                    Data</a>
            </div>
        @endif


        {{--    <div class="container">--}}
        {{--        <div class="row justify-content-center">--}}
        {{--            <div class="col-md-8">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="card-header">Upload Bukti</div>--}}

        {{--                    <div class="card-body">--}}
        {{--                        @if (session('status'))--}}
        {{--                            <div class="alert alert-success" role="alert">--}}
        {{--                                {{ session('status') }}--}}
        {{--                            </div>--}}
        {{--                        @endif--}}
        {{--                        <div class="usertrees row">--}}
        {{--                            @if($mUsertrees)--}}
        {{--                                @foreach($mUsertrees as $i => $mUsertree)--}}
        {{--                                    <form method="POST" action="{{ route('upload') }}"--}}
        {{--                                          id="form-{{ $mUsertree->parent_id }}" class="col-md-6 col-sm-12"--}}
        {{--                                          enctype="multipart/form-data">--}}
        {{--                                        @csrf--}}
        {{--                                        <div class="card mb-4 usertreeCard" style="width: 100%">--}}
        {{--                                            <img--}}
        {{--                                                class="card-img-top usertreeImage btnInputimage"--}}
        {{--                                                src="{{ $mUsertree->photo ? $mUsertree->photo : asset('img/default-photo.jpg') }}"--}}
        {{--                                                alt="Card image cap">--}}
        {{--                                            <input type="file" class="d-none inputImage" name="photo_id"--}}
        {{--                                                   data-parentid="{{ $mUsertree->parent_id }}">--}}
        {{--                                            <input type="text" class="d-none" name="parent_id"--}}
        {{--                                                   value="{{ $mUsertree->parent_id }}">--}}
        {{--                                            <div class="card-body">--}}
        {{--                                                <h3 class="card-title usertreeStatus"><?= $mUsertree->status_photo ?></h3>--}}
        {{--                                                <p class="card-text">{{ 'Name : ' . $mUsertree->parent->name }}</p>--}}
        {{--                                                <p class="card-text">{{ 'Bank : ' . $mUsertree->parent->userdetail->bank->name }}</p>--}}
        {{--                                                <p class="card-text">{{ 'No. Rekening : ' . $mUsertree->parent->userdetail->bank_account_number }}</p>--}}
        {{--                                                <p class="card-text">{{ 'Price : Rp ' }} {{ \App\Helpers\Formater::formatNumber($mUsertree->parent_level == \App\Usertree::ADMIN_LEVEL ?  $mUsertree->price->admin_price : $mUsertree->price->non_admin_price) }}</p>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </form>--}}
        {{--                                @endforeach--}}
        {{--                            @else--}}
        {{--                            @endif--}}
        {{--                        </div>--}}
        {{--                        @if($complete)--}}
        {{--                            <div class="row">--}}
        {{--                                <div class="col text-right">--}}
        {{--                                    <a href="{{ route('completedata') }}" class="btn btn-primary">Complete Data</a>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        @endif--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
        @endsection

        @push('script')
            <script>
                $(document).ready(function () {
                    $('.btnInputimage').click(function () {
                        $(this).closest('.usertreeCard').find('input').click();
                    })

                    $('.inputImage').change(function () {
                        var jThis = $(this);
                        var form = jThis.closest('#form-' + $(this).data('parentid'))[0];
                        var formData = new FormData(form);
                        var url = '{{ route('upload') }}';

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            url: url,
                            type: 'post',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (res) {
                                if (res.status) {
                                    jThis.closest('form').find('.usertreeImage').attr('src', res.data.photo);
                                    jThis.closest('form').find('.usertreeStatus').html(res.data.status_photo);
                                } else {

                                }
                            },
                        });
                    })
                })
            </script>
    @endpush
