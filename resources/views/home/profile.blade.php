@extends('layouts.app')

@section('header', 'Profile')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">
        <div class="w-full flex flex-col">
            <div class="w-full flex flex-col justify-center items-center">
                <img class="h-40 w-40 rounded-full"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt="">
                <div class="text-2xl font-bold ">{{ $mUser->name }}</div>
                <div class="text-xl font-bold ">{{ $mUser->invitation_cd }}</div>
            </div>

        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <span>Name</span>
                </div>
                <div class="col-md-6">
                    <span>{{ $mUser->name }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span>Email</span>
                </div>
                <div class="col-md-6">
                    <span>{{ $mUser->email }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span>Invitation Code</span>
                </div>
                <div class="col-md-6">
                    <span>{{ $mUser->invitation_cd }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span>Birth Date</span>
                </div>
                <div class="col-md-6">
                    <span>{{ \App\Helpers\Formater::formatDate($mUser->userdetail->birth_dt) }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span>Bank Name</span>
                </div>
                <div class="col-md-6">
                    <span>{{ $mUser->userdetail->bank->name }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span>Bank Code</span>
                </div>
                <div class="col-md-6">
                    <span>{{ $mUser->userdetail->bank->bank_cd }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span>Bank Account Name</span>
                </div>
                <div class="col-md-6">
                    <span>{{ $mUser->userdetail->bank_account_name }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span>Bank Account Number</span>
                </div>
                <div class="col-md-6">
                    <span>{{ $mUser->userdetail->bank_account_number }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
