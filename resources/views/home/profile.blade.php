@extends('layouts.app')

@section('header', 'Profile')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">
        <div class="w-full flex flex-col mb-8">
            <div class="w-full flex flex-col justify-center items-center">
                <img class="h-40 w-40 rounded-full border-2"
                     src="{{ asset('img/default-user.png') }}"
                     alt="">
                <div class="text-2xl font-bold mb-4">{{ $mUser->name }}</div>
                <div class="text-base mb-2">Kode Undangan</div>
                <div class="text-lg font-bold py-2 px-4 text-gray-100 bg-blue-600 rounded">{{ $mUser->invitation_cd }}</div>
            </div>

        </div>

        <div class="card-body">
            <div class="flex justify-between items-center">
                    <span>Nama</span>
                <span><strong>{{ $mUser->name }}</strong></span>
            </div>
            <div class="flex justify-between items-center">
                    <span>Email</span>
                <span><strong>{{ $mUser->email }}</strong></span>
            </div>
            <div class="flex justify-between items-center">
                    <span>Tanggal Lahir</span>
                <span><strong>{{ \App\Helpers\Formater::formatDate($mUser->userdetail->birth_dt) }}</strong></span>
            </div>
            <div class="flex justify-between items-center">
                    <span>Nama Bank</span>
                <span><strong>{{ '(' . $mUser->userdetail->bank->bank_cd . ') ' . $mUser->userdetail->bank->name }}</strong></span>
            </div>
            <div class="flex justify-between items-center">
                    <span>No. Rekening</span>
                <span><strong>{{ $mUser->userdetail->bank_account_number }}</strong></span>
            </div>
            <div class="flex justify-between items-center">
                    <span>Nama Pemilik Rek</span>
                    <span><strong>{{ $mUser->userdetail->bank_account_name }}</strong></span>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
