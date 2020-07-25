@extends('layouts.app')

@section('content')
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header">Invitation</div>--}}

    {{--                    <div class="card-body">--}}
    {{--                        @include('layouts.flash')--}}
    {{--                        <form method="POST" action="{{ route('invitation') }}">--}}
    {{--                            @csrf--}}

    {{--                            <div class="form-group row">--}}
    {{--                                <label for="email" class="col-md-12 col-form-label">{{ __('Invitation Code') }}</label>--}}

    {{--                                <div class="col-md-12">--}}
    {{--                                    <input id="invitation_cd" type="text"--}}
    {{--                                           class="form-control @error('invitation_cd') is-invalid @enderror"--}}
    {{--                                           name="invitation_cd" value="{{ old('invitation_cd') }}" required--}}
    {{--                                           autocomplete="email" autofocus>--}}

    {{--                                    @error('invitation_cd')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                    @enderror--}}
    {{--                                </div>--}}
    {{--                            </div>--}}

    {{--                            <div class="form-group row mb-0">--}}
    {{--                                <div class="col-md-12 text-right">--}}
    {{--                                    <button type="submit" class="btn btn-primary">--}}
    {{--                                        {{ __('Save') }}--}}
    {{--                                    </button>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">
            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Invitation
                </div>

                <div class="w-full p-6">
                    @include('layouts.flash')
                    <form method="POST" action="{{ route('invitation') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="invitation_cd" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('Invitation Code') }}:
                            </label>

                            <input id="invitation_cd" type="text"
                                   class="form-input w-full @error('invitation_cd') border-red-500 @enderror"
                                   name="invitation_cd" value="{{ old('invitation_cd') }}" required autofocus>

                            @error('invitation_cd')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="flex flex-wrap items-center">
                            <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
