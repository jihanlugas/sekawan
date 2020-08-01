@extends('layouts.app')

@section('header', 'Beranda')

@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">
        <div class="flex mb-8">
            <div class="w-full flex flex-col justify-center items-center">
                <span class="text-3xl font-bold mb-2">Selamat Datang</span>
                <span class="text-1xl font-bold mb-6">Program Peduli Sesama</span>
                <p class="text-base" align="center">Sebuah Program Solusi Keuangan Tanpa Kerja Tanpa Ribet Semua
                    Transparan & Amanah</p>
            </div>
        </div>
        <div class="flex flex-wrap">

            @foreach([1,2,3,4] as $i)
                <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                    <div class="rounded overflow-hidden shadow-lg mb-4">
                        <img class="w-full" src="{{ asset('img/public/image-1.jpg') }}" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2"> {{ $i }} The Coldest Sunset</div>
                            <p class="text-gray-700 text-base">
                                tes ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et
                                perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                        <div class="px-6 py-4">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
                            <span
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
