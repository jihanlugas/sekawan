@extends('layouts.app')

@section('header', 'Kode Undangan')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">
        @include('layouts.flash')
        <form method="POST" action="{{ route('invitation') }}">
            @csrf
            <div class="flex flex-wrap mb-6">
                <label for="invitation_cd" class="block text-gray-700 text-sm font-bold mb-2">
                    {{ __('Kode Undangan') }}:
                </label>

                <input id="invitation_cd" type="text"
                       class="form-input w-full @error('invitation_cd') border-red-500 @enderror"
                       name="invitation_cd" value="{{ old('invitation_cd') }}" required autofocus>
                @error('invitation_cd')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
                @if(Auth::user()->request_by)
                    <p class="text-red-500 text-xs italic mt-4">
                        * Jika anda memasukan kode undangan kembali, semua data dari kode undangan sebelumnya akan
                        terhapus
                    </p>
                @endif
            </div>
            <div class="flex flex-wrap items-center justify-end">
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    {{ __('Simpan') }}
                </button>
            </div>
        </form>
    </div>
@endsection
