@extends('layouts.app')

@section('header', 'Sukses')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">

        <div class="w-full p-6 text-center">
            <p class="text-gray-700 text-2xl font-bold mb-4">
                Registrasi Berhasil
            </p>

            <p class="text-gray-700 text-base">
                Silahkan login untuk melanjutkan
            </p>

            <a href="{{ route('login') }}" class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 mt-8">Login Disini</a>
        </div>
    </div>

@endsection
