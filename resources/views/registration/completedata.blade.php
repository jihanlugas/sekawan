@extends('layouts.app')

@section('header', 'Data Anggota')

@section('content')
    <?php
//        if($errors->all()){
//            dd($errors->all());
//        }
    ?>
    <div class="py-6 px-4 max-w-3xl mx-auto">
        @include('layouts.flash')
        <form method="POST" action="{{ route('completedata') }}">
            @csrf
            <div class="flex flex-wrap mb-6">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Nama') }}
                </label>
                <input id="name" type="text" class="form-input w-full cursor-not-allowed bg-gray-200" name="name"
                       value="{{ $mUser->name }}" readonly>
            </div>

            <div class="flex flex-wrap mb-6">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Email') }}
                </label>
                <input id="email" type="text" class="form-input w-full cursor-not-allowed bg-gray-200" name="email"
                       value="{{ $mUser->email }}" readonly>
            </div>

            <div class="flex flex-wrap mb-6 relative">
                <label for="birth_dt" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Tanggal Lahir') }}
                </label>

                <input id="birth_dt" type="text"
                       class="form-input w-full flatpickr @error('birth_dt') border-red-500 @enderror" name="birth_dt"
                       value="{{ old('birth_dt') }}" placeholder="Tanggal Lahir"  autofocus>

                @error('birth_dt')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap mb-6">
                <label for="bank_id" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Nama Bank') }}
                </label>
                <div class="relative w-full">
                    <select class="block form-input appearance-none w-full pr-8 @error('bank_id') border-red-500 @enderror" id="grid-state" name="bank_id"
                            value="{{ old('bank_id') }}" autofocus>
                        <option value="">Select Bank</option>
                        @foreach(\App\Bank::orderBy('bank_cd', 'asc')->get() as $bank)
                            <option
                                value="{{ $bank->id }}">{{ $bank->bank_cd . ' - ' . $bank->name}}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
                @error('bank_id')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex flex-wrap mb-6">
                <label for="bank_account_number" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('No. Rekening') }}
                </label>

                <input id="bank_account_number" type="text"
                       class="form-input w-full @error('bank_account_number') border-red-500 @enderror"
                       name="bank_account_number" value="{{ old('bank_account_number') }}" placeholder="No. Rekening"  autofocus>

                @error('bank_account_number')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap mb-6">
                <label for="bank_account_name" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Atas Nama Rekening') }}
                </label>

                <input id="bank_account_name" type="text"
                       class="form-input w-full @error('bank_account_name') border-red-500 @enderror"
                       name="bank_account_name" value="{{ old('bank_account_name') }}" placeholder="Nama Pemilik Rekening"  autofocus>

                @error('bank_account_name')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap justify-end">
                <button type="submit"
                        class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>

    {{--    <h1>---------------------------------------------------------------------------</h1>--}}

    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-md-8">--}}
    {{--                    <div class="card">--}}
    {{--                        <div class="card-header">Complate Data</div>--}}

    {{--                        <div class="card-body">--}}
    {{--                            <form method="POST" action="{{ route('completedata') }}">--}}
    {{--                                @csrf--}}

    {{--                                @if (session('status'))--}}
    {{--                                    <div class="alert alert-success" role="alert">--}}
    {{--                                        {{ session('status') }}--}}
    {{--                                    </div>--}}
    {{--                                @endif--}}

    {{--                                <div class="form-group row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <label for="" class="">{{ __('Full Name') }}</label>--}}
    {{--                                        <input id="invitation_cd" type="text" class="form-control"--}}
    {{--                                               value="{{ $mUser->name }}"--}}
    {{--                                               disabled>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="form-group row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <label for="email" class="">{{ __('Email Address') }}</label>--}}
    {{--                                        <input id="invitation_cd" type="text" class="form-control"--}}
    {{--                                               value="{{ $mUser->email }}"--}}
    {{--                                               disabled>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="form-group row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <label for="email" class="">{{ __('Select Bank') }}</label>--}}
    {{--                                        <select name="bank_id" class="form-control @error('bank_id') is-invalid @enderror"--}}
    {{--                                                 autofocus>--}}
    {{--                                            <option>Select Bank</option>--}}
    {{--                                            @foreach(\App\Bank::orderBy('bank_cd', 'asc')->get() as $bank)--}}
    {{--                                                <option--}}
    {{--                                                    value="{{ $bank->id }}">{{ $bank->bank_cd . ' - ' . $bank->name}}</option>--}}
    {{--                                            @endforeach--}}
    {{--                                            @error('bank_id')--}}
    {{--                                            <span class="invalid-feedback" role="alert">--}}
    {{--                                                <strong>{{ $message }}</strong>--}}
    {{--                                            </span>--}}
    {{--                                            @enderror--}}
    {{--                                        </select>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="form-group row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <label for="email" class="">{{ __('No. Rekening') }}</label>--}}
    {{--                                        <input type="text"--}}
    {{--                                               class="form-control @error('bank_account_number') is-invalid @enderror"--}}
    {{--                                               name="bank_account_number" value="{{ old('bank_account_number') }}" required--}}
    {{--                                               placeholder="ex: 123456" autofocus>--}}
    {{--                                        @error('bank_account_number')--}}
    {{--                                        <span class="invalid-feedback" role="alert">--}}
    {{--                                            <strong>{{ $message }}</strong>--}}
    {{--                                        </span>--}}
    {{--                                        @enderror--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="form-group row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <label for="email" class="">{{ __('Nama Direkening') }}</label>--}}
    {{--                                        <input type="text"--}}
    {{--                                               class="form-control @error('bank_account_name') is-invalid @enderror"--}}
    {{--                                               name="bank_account_name" value="{{ old('bank_account_name') }}" required--}}
    {{--                                               placeholder="ex: {{ $mUser->name }}" autofocus>--}}
    {{--                                        @error('bank_account_name')--}}
    {{--                                        <span class="invalid-feedback" role="alert">--}}
    {{--                                            <strong>{{ $message }}</strong>--}}
    {{--                                        </span>--}}
    {{--                                        @enderror--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="form-group row">--}}
    {{--                                    <div class="col-md-12">--}}
    {{--                                        <label for="birth_dt" class="">{{ __('Birth of Date') }}</label>--}}
    {{--                                        <input type="date"--}}
    {{--                                               class="form-control @error('birth_dt') is-invalid @enderror" placeholder="dd-mm-yyyy"--}}
    {{--                                               name="birth_dt" value="{{ old('birth_dt') }}" required autofocus>--}}
    {{--                                        @error('birth_dt')--}}
    {{--                                        <span class="invalid-feedback" role="alert">--}}
    {{--                                            <strong>{{ $message }}</strong>--}}
    {{--                                        </span>--}}
    {{--                                        @enderror--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}

    {{--                                <div class="form-group row mb-0">--}}
    {{--                                    <div class="col-md-12 text-md-right">--}}
    {{--                                        <button type="submit" class="btn btn-primary">--}}
    {{--                                            {{ __('Save') }}--}}
    {{--                                        </button>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </form>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
@endsection

@push('script')
    <script>
        $(document).ready(function () {
            // $(".flatpickrr").flatpickr({
            //     enableTime: false,
            //     dateFormat: "Y-m-d",
            //     disableMobile: true,
            // });
        })

    </script>
@endpush
