@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Invitation</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('invitation') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-12 col-form-label">{{ __('Invitation Code') }}</label>

                                <div class="col-md-12">
                                    <input id="invitation_cd" type="text"
                                           class="form-control @error('invitation_cd') is-invalid @enderror"
                                           name="invitation_cd" value="{{ old('invitation_cd') }}" required
                                           autocomplete="email" autofocus>

                                    @error('invitation_cd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
