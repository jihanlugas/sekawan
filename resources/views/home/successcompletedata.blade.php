@extends('layouts.app')
@section('header', 'Success')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">

        {{--                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">--}}
        {{--                    Success--}}
        {{--                </div>--}}

            <p class="text-gray-700">
                Thanks for your participation in <strong>{{ env('APP_NAME', 'Laravel') }}</strong>. Now you
                can invite another people with invitation code <strong>{{ $mUser->invitation_cd }}.</strong>
            </p>
    </div>
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-body">--}}
    {{--                        @include('layouts.flash')--}}

    {{--                        <p>Hi {{ $mUser->name }}</p>--}}
    {{--                        <p>Thanks for your participation in <strong>{{ env('APP_NAME', 'Laravel') }}</strong>. Now you--}}
    {{--                            can invite another people with invitation code <strong>{{ $mUser->invitation_cd }}.</strong>--}}
    {{--                        </p>--}}

    {{--                        <div class="form-group row mb-0">--}}
    {{--                            <div class="col-md-12 text-md-right">--}}
    {{--                                <a href="{{ route('home') }}" class="text-right btn btn-primary">Home</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
