@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Success</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>Hi {{ $mUser->name }}</p>
                        <p>Thanks for your participation in <strong>{{ env('APP_NAME', 'Laravel') }}</strong>. Now you
                            can invite another people with invitation code <strong>{{ $mUser->invitation_cd }}.</strong>
                        </p>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-md-right">
                                <a href="{{ route('home') }}" class="text-right btn btn-primary">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
