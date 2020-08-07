@extends('layouts.app')
@section('header', 'Sukses')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">

        {{--                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">--}}
        {{--                    Success--}}
        {{--                </div>--}}

{{--            <p class="text-gray-700">--}}
{{--                Thanks for your participation in <strong>{{ env('APP_NAME', 'Laravel') }}</strong>. Now you--}}
{{--                can invite another people with invitation code <strong>{{ $mUser->invitation_cd }}.</strong>--}}
{{--            </p>--}}

        <div class="" align="justify">
            <p class="text-gray-700 text-2xl font-bold mb-4 text-center">Pendaftaran Sukses</p>
            <p class="text-gray-700 mb-2">
                Selamat Pendaftaran anda Berhasil dalam program Peduli sesama <strong>{{ env('APP_NAME', 'Laravel') }}</strong>.</strong>
            </p>

            <p class="text-gray-700 mb-2">
                Selamat bergabung dan terima kasih telah bersedekah untuk kesejahateraan sesama anggota
                Dengan mendaftarkan diri anda berarti anda setuju dan ikhlas bersedekah tidak ada unsur paksaan dari pihak manapun demi berjalannya program ini diharapkan anda secepat mungkin untuk mendapatkan calon anggota yang berjumlah 10 orang untuk terciptanya system bergantian pendapatan
                Nomor undangan anda adalah
            </p>
            <p class="text-gray-700 text-xl text-center">
                <strong>{{ $mUser->invitation_cd }}</strong>
            </p>
        </div>


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
