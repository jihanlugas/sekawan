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
                                    <form method="POST" action="{{ route('upload') }}"  class="col-md-6 col-sm-12" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card mb-4 usertreeCard"  style="width: 100%">
                                            @if(!$mUsertree->photo_id)
                                                <img class="card-img-top btnInputimage" src="{{ asset('img/default-photo.jpg') }}"
                                                     alt="Card image cap">
                                                <input type="file" class="d-none inputImage" name="photo_id">
                                                <input type="text" class="d-none" name="parent_id" value="{{ $mUsertree->parent_id }}">
                                            @else
                                                <img class="card-img-top" src="{{ asset($mUsertree->photo) }}"
                                                     alt="Card image cap">
                                            @endif
                                            <div class="card-body">
                                                <h5 class="card-title"><label>Status
                                                        : {{ \App\Usertree::$status_photo[$mUsertree->status_photo] }}</label>
                                                </h5>
                                                <p class="card-text">{{ $mUsertree->user->name }}</p>
                                                {{--                                                <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @else
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
                var form = $(this).closest('#form')[0];
                var formData = new FormData(form);
                var url = '{{ route('upload') }}';

                $.ajax({
                    url: url,
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(res){
                        console.log('res' ,res)
                        // if(response != 0){
                        //     $("#img").attr("src",response);
                        //     $(".preview img").show(); // Display image element
                        // }else{
                        //     alert('file not uploaded');
                        // }
                    },
                });
            })
        })
    </script>
@endpush
