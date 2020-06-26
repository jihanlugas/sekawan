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

                        <form method="POST" action="{{ route('upload') }}"
                              enctype="multipart/form-data">
                            @csrf

                            @if($mUsertrees)
                                @foreach($mUsertrees as $i => $mUsertree)

                                    @if(!$mUsertree->photo_id)
                                        <div class="form-group">
                                            <label>{{ $mUsertree->user->name }}</label>
{{--                                            <input type="file"--}}
{{--                                                   class="form-control-file @error('photo_id') is-invalid @enderror"--}}
{{--                                                   name="photo_id[{{ $mUsertree->parent_id }}]"--}}
{{--                                                   value="{{ old('invitation_code') }}">--}}
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input @error('photo_id') is-invalid @enderror" name="photo_id[{{ $mUsertree->parent_id }}]">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            @error('photo_id')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label>{{ $mUsertree->user->name }}</label>
                                            <div class="" style="width: 100%; max-width: 250px">
                                                <img src="{{ asset($mUsertree->photo) }}" alt="" width="100%" height="auto">
                                            </div>
                                            <label>{{ 'Done' }}</label>
                                        </div>
                                    @endif
                                @endforeach
                            @else

                            @endif

                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
