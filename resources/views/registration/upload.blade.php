@extends('layouts.app')
@section('header', 'Upload Bukti')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">
        <div class="flex flex-wrap">
            @forelse($mUsertrees as $i => $mUsertree)
                <div class="w-full p-0 sm:w-full md:w-1/2 lg:w-1/2 md:p-4 lg:p-4 usertreeCard">
                    <form method="POST" action="{{ route('upload') }}"
                          id="form-{{ $mUsertree->parent_id }}" enctype="multipart/form-data">
                        @csrf
                        <img class="w-full usertreeImage btnInputimage"
                             src="{{ $mUsertree->photo ? $mUsertree->photo : asset('img/default-photo.jpg') }}" alt="">
                        <img class="w-full hidden usertreeImageloading"
                             src="{{ asset('img/loading.gif') }}" alt="">
                        <input type="file" class="hidden inputImage" name="photo_id"
                               data-parentid="{{ $mUsertree->parent_id }}">
                        <input type="text" class="hidden" name="parent_id"
                               value="{{ $mUsertree->parent_id }}">
                        <div class="py-4 px-0">
                            <div class="font-bold text-xl mb-2 usertreeStatus">
                                <?= $mUsertree->status_photo ?>
                            </div>
                            <div class="font-bold text-xl mb-2">{{ $mUsertree->parent->name }}</div>
                            <div class="flex justify-between items-center text-gray-700 text-base">
                                <span>Bank</span>
                                <span>{{ $mUsertree->parent->userdetail->bank->name }}</span>
                            </div>
                            <div class="flex justify-between items-center text-gray-700 text-base">
                                <span>No. Rekening</span>
                                <span>{{ $mUsertree->parent->userdetail->bank_account_number }}</span>
                            </div>
                            <div class="flex justify-between items-center text-gray-700 text-base">
                                <span>Jumlah</span>
                                <span>{{ 'Rp ' . \App\Helpers\Formater::formatNumber($mUsertree->parent_level == \App\Usertree::ADMIN_LEVEL ?  $mUsertree->price->admin_price : $mUsertree->price->non_admin_price) }}</span>
                            </div>
                        </div>
                    </form>
                </div>
            @empty
            @endforelse
        </div>


        @if($complete)
            <div class="flex flex-wrap">
                <a href="{{ route('completedata') }}"
                   class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">Complete
                    Data</a>
            </div>
        @endif

        @endsection

        @push('script')
            <script>
                $(document).ready(function () {
                    $('.btnInputimage').click(function () {
                        $(this).closest('.usertreeCard').find('input').click();
                    })

                    $('.inputImage').change(function () {
                        var jThis = $(this);
                        var jForm = jThis.closest('form');

                        jForm.find('.usertreeImage').toggleClass('hidden');
                        jForm.find('.usertreeImageloading').toggleClass('hidden');

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
                                    jForm.find('.usertreeImage').attr('src', res.data.photo);
                                    jForm.find('.usertreeStatus').html(res.data.status_photo);
                                } else {

                                }
                            },
                        }).done(function () {
                            jForm.find('.usertreeImage').toggleClass('hidden');
                            jForm.find('.usertreeImageloading').toggleClass('hidden');
                        });
                    })
                })
            </script>
    @endpush
