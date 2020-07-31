@extends('layouts.app')

@section('header', 'Invitation')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">
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
@endsection
