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
            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_01.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-gray-700 text-base">Kehidupan Semakin Sulit..?</p>
                        <p class="text-gray-700 text-base">Kebutuhan Semakin Mahal...?</p>
                        <p class="text-gray-700 text-base">Hutang Kiri Kanan...?</p>
                        <p class="text-gray-700 text-base">Kerja Dirumahkan...?</p>
                        <p class="text-gray-700 text-base">Sekolah Anak Terputus...??</p>
                    </div>
                </div>
            </div>

            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_02.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">

                        <p class="text-gray-700 text-base">Semua manusia ingin Hidup layak Walaupun sederhana, tidak perlu Wah namun masih bisa mencari Nafkah.</p>
                    </div>
                </div>
            </div>

            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_03.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">

                        <p class="text-gray-700 text-base">Mereka yang sangat  tidak mampu, mereka bukan pemalas
                            mencari kerja sangat susah....
                            Bertani hanya sebagai buruh..
                            Nelayan hanya abk..</p>
                    </div>
                </div>
            </div>

            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_04.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">

                        <p class="text-gray-700 text-base">Nelayan Sudah tidak lagi bisa melaut karena alat tangkap dan bbm tidak sanggup untuk dibeli</p>
                    </div>
                </div>
            </div>

            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_05.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">

                        <p class="text-gray-700 text-base">Mereka ingin tumbuh dikeluarga kaya, namun Nasib berkata lain. Mereka butuh menyambung hidup.</p>
                    </div>
                </div>
            </div>

            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_06.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">

                        <p class="text-gray-700 text-base">Bekerja Kantoran
                            Gaji Pas-pasan..??
                            Tidak cukup untuk
                            biaya hidup....??</p>
                    </div>
                </div>
            </div>

            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_07.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">

                        <p class="text-gray-700 text-base">Usaha kecil kecilan
                            Akhirnya bangkrut dan tutup
                            Susah untuk bangkit kembali</p>
                    </div>
                </div>
            </div>

            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_08.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">

                        <p class="text-gray-700 text-base">kebutuhan semakin tinggi
                            di era Modern,
                            Teknologi semakin canggih
                            Kebutuhan transportasi
                            Baik Roda 2 dan Roda 4</p>
                    </div>
                </div>
            </div>

            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_09.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">

                        <p class="text-gray-700 text-base">Mentok.....??
                            Tidak bisa berpikir
                            Mau Melakukan kejahatan
                            Bertolak belakang dengan hati nurani....!!</p>
                    </div>
                </div>
            </div>

            <div class="sm:w-full md:w-1/2 lg:w-1/2 p-4">
                <div class="rounded overflow-hidden shadow-lg mb-4">
                    <img class="w-full" src="{{ asset('img/public/image_10.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">

                        <p class="text-gray-700 text-base">Stress Memikirkan Cicilan
                            Tagihan dan SPP anak
                            Apakah yang harus dikerjakan
                            Untuk bisa mencukupi keluarga</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center text-lg font-bold text-red-500 p-4" align="center">
                Kesempatan untuk memperbaiki Taraf Hidup kita masih ada jangan menyerah........!!!
            </div>

            <div class="flex justify-center items-center text-lg font-bold p-4" align="center">
                Mari Bergandengan Tangan untuk bangkit
                Mari Rapatkan Barisan untuk bisa mulai Usaha
                Bahu-membahu untuk membantu dalam meningkatkan kesejahteraan
            </div>

            <div class="flex justify-center items-center text-lg font-bold p-4" align="center">
                Dengan Mengikuti Program kami
                Program untuk saling berbagi demi kehidupan yang layak.
            </div>

            @guest()
                <div class="text-center w-full mt-8">
                    <a href="{{ route('register') }}" class="bg-blue-600 py-2 px-4 text-gray-100 font-bold rounded">Mendaftar</a>
                </div>
            @endguest

        </div>
    </div>
@endsection
