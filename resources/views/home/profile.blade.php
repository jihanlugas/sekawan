@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

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
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush
