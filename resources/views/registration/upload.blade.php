@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Upload Bukti</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="usertrees row">
                            @if($mUsertrees)
                                @foreach($mUsertrees as $i => $mUsertree)
                                    <form method="POST" action="{{ route('upload') }}"
                                          id="form-{{ $mUsertree->parent_id }}" class="col-md-6 col-sm-12"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="card mb-4 usertreeCard" style="width: 100%">
                                            <img
                                                class="card-img-top usertreeImage {{ $mUsertree->photo ? '' : 'btnInputimage' }} "
                                                src="{{ $mUsertree->photo ? $mUsertree->photo : asset('img/default-photo.jpg') }}"
                                                alt="Card image cap">
                                            <input type="file" class="d-none inputImage" name="photo_id"
                                                   data-parentid="{{ $mUsertree->parent_id }}">
                                            <input type="text" class="d-none" name="parent_id"
                                                   value="{{ $mUsertree->parent_id }}">
                                            <div class="card-body">
                                                <h5 class="card-title usertreeStatus"><label>Status
                                                        : {{ $mUsertree->status_photo }}</label></h5>
                                                <p class="card-text">{{ 'Name : ' . $mUsertree->parent->name }}</p>
                                                <p class="card-text">{{ 'Bank : ' . $mUsertree->parent->userdetail->bank->name }}</p>
                                                <p class="card-text">{{ 'No. Rekening : ' . $mUsertree->parent->userdetail->bank_account_number }}</p>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @else
                            @endif
                        </div>
                        @if($complete)
                            <div class="row">
                                <div class="col text-right">
                                    <a href="{{ route('completedata') }}" class="btn btn-primary">Complete Data</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            jThis.closest('form').find('.usertreeStatus').text(res.data.status_photo);
                        } else {

                        }
                    },
                });
            })
        })
    </script>
@endpush
