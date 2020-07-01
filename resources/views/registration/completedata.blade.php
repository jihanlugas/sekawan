@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Complate Data</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('completedata') }}">
                            @csrf

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="" class="">{{ __('Full Name') }}</label>
                                    <input id="invitation_cd" type="text" class="form-control"
                                           value="{{ $mUser->name }}"
                                           disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="">{{ __('Email Address') }}</label>
                                    <input id="invitation_cd" type="text" class="form-control"
                                           value="{{ $mUser->email }}"
                                           disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="">{{ __('Select Bank') }}</label>
                                    <select name="bank_id" class="form-control @error('bank_id') is-invalid @enderror"
                                            required autofocus>
                                        <option>Select Bank</option>
                                        @foreach(\App\Bank::orderBy('bank_cd', 'asc')->get() as $bank)
                                            <option
                                                value="{{ $bank->id }}">{{ $bank->bank_cd . ' - ' . $bank->name}}</option>
                                        @endforeach
                                        @error('bank_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="">{{ __('No. Rekening') }}</label>
                                    <input type="text"
                                           class="form-control @error('bank_account_number') is-invalid @enderror"
                                           name="bank_account_number" value="{{ old('bank_account_number') }}" required
                                           placeholder="ex: 123456" autofocus>
                                    @error('bank_account_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="">{{ __('Nama Direkening') }}</label>
                                    <input type="text"
                                           class="form-control @error('bank_account_name') is-invalid @enderror"
                                           name="bank_account_name" value="{{ old('bank_account_name') }}" required
                                           placeholder="ex: {{ $mUser->name }}" autofocus>
                                    @error('bank_account_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="birth_dt" class="">{{ __('Birth of Date') }}</label>
                                    <input type="date"
                                           class="form-control @error('birth_dt') is-invalid @enderror"
                                           name="birth_dt" value="{{ old('birth_dt') }}" required autofocus>
                                    @error('birth_dt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-md-right">
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

@push('script')

@endpush
