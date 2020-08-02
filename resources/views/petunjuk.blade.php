@extends('layouts.app')

@section('header', 'Petunjuk')


@section('content')
    <div class="py-6 px-4 max-w-3xl mx-auto">
        <div class="pb-4" align="justify">
            Sebagai ilustrasi <strong>[ Si A. Posisi 4 ]</strong>
        </div>
        <div class="pb-4" align="justify">
            Baru bergabung dalam program “<strong>{{ env('APP_NAME', 'Laravel') }}</strong>” telah registrasi dan telah mendapatkan ID Peserta untuk jaringan
            peserta baru, dalam program sekawan ini, jumlah target mencari anggota baru dibatasi 10 orang tidak lebih
            dan tidak di perbolehkan mencari anggota lagi karena diatur sistem untuk menciptakan pergantian level.
        </div>
        <div class="pb-4" align="justify">
            Setelah <strong>[Si A]</strong> mendapatka n calon peserta 10 orang maka <strong>[Si A]</strong> akan naik menjadi level 3 secara otomatis
            apabila anggota baru 10 orang (satu anggkatan <strong>[Si B]</strong>) telah mendapatkan anggota 10 orang lagi dan akan naik
            tingkat sesuai anggota di bawah dan seterusnya. <strong>[Si A]</strong> tidak lagi mencari anggota lagi, hanya hanya menunggu
            dan cek pemasukan.
        </div>
        <div class="pb-4" align="justify">
            Setelah <strong>[Si A]</strong> meduduki posisi 1 dengan target yang telah di tentukan yakni 250 juta maka ID peserta <strong>[Si A]</strong>
            akan hangus dengan sendirinya. Maka terciptanya system bergantian mendapatkannya, semua ingin merasakan hal
            yang sama dan pendapatan yang sama pula hanya perbedaan waktunya untuk mendapatknya.
        </div>
        <div class="" align="justify">
            Persyaratan jadi Anggota adalah :
        </div>
        <div class="pb-2" align="justify">
            1. Memiliki Rekening Aktif (Bank Apa saja) untuk di daftarkan sebagai penerima transfer baru anggota baru
            yang di dapat.
        </div>
        <div class="pb-2" align="justify">
            2. Mentransfer ke Rekening 5 rekening yang tertera dalam kolom pendaftaran Pengajak posisi 4 dan Posisi 3,
            Posisi 2, Posisi 1 dan Admin ( sebagian disumbangkan ke yatim dan saranah ibadah)
            <div class="pl-4" align="justify">
                <p>a. Admin Rp. 25.000</p>
                <p>b. Posisi 1 Rp. 25.000</p>
                <p>c. Posisi 2 Rp. 25.000</p>
                <p>d. Posisi 3 Rp. 25.000</p>
                <p>e. Posisi 4 Rp. 25.000</p>
            </div>
            <div class="pb-2" align="justify">
                <p>Total harus di transfer Adalah Rp. 125.000,-</p>
            </div>
        </div>
        <div class="pb-4" align="justify">
            3. Mencari Aggota donatur (sedekah) baru sebanyak 10 orang sesuai system apabila memaksakan untuk mencari
            orang lebih untuk mendapatkan lebih banyak lagi pemasukan maka system tidak bisa hanya dizinkan mencari
            anggota sebanyak 10 orang.
        </div>
        <div class="pb-4" align="justify">
            Illustrasi pendapatan sesuai level (posisi) yang akan masuk ke rekening kita yang sudah didaftarkan
            <p>1. Posisi 4 mendapatkan Rp. 250,000,-</p>
            <p>2. Posisi 3 mendapatkan Rp. 2,500,000,-</p>
            <p>3. Posisi 2 mendapatkan Rp. 25,000,000,-</p>
            <p>4. Posisi 1 mendapatkan Rp. 250,000,000,-</p>
            Total Pendapatan dari semua level Rp. 277,750,000 (maka level terakhir yang di dapat) tidak bisa lebih
            karena ID Peserta telah hangus dan posisi telah digantikan oleh dibawahnya.
        </div>

        <div class="pb-4" align="justify">
            Insya allah akan tercipta pendapatan sampingan dan bisa untuk modal usaha bayar hutang dan keperluan
            lainnya. Anda dalam posisi 4 telah mendapatkan uang 250.000 rupiah, maka Sedekah anda 125.000 maka sudah
            kembali dari yang anda sedekahkan dan masih mendapatkan bonus berlipat ganda level 3, 2, 1 Keberkahan
            tercipta dari sedekah.
        </div>

        <div class="pb-4" align="justify">
            Tidak berpatokan bulan, apabila telah mencapai target, tidak sampai sebulan sudah selesai, dengan Sedekah
            pertama atau pun pendaftaran hanya Rp. 125.000 dan tidak unsur tipu menipu, Apabila Anggota baru tidak bisa
            mencari calon anggota baru maka akan terputus atau berkurangnya pendapatan yg akan di terima oleh posisi
            atas, maka dari itu calon anggota bersungguh sungguh untuk mencari anggota baru demi berjalannya program
            “Sekawan” (sedekah estafet kawan-kawan).
        </div>

        <div class="pb-4" align="justify">

        </div>

        <div class="pb-4" align="justify">
            Pihak admin tidak memegang suluruh keuangan namun hanya mengatur alur jalanya program ini, tidak ada unsur
            tipu menipu dalam program ini, semua anggota berhak mendapatkan sedekah yang sama yang akan diterima hanya
            perbedaan waktu.
        </div>

        <div class="pb-4" align="justify">
            Program ini ditujukam untuk masyarakat bawah untuk menambah penghasilan bagi masyarakat kurang mampu, Insya
            Allah akan mendapatkan lebih dari yang sudah di sedekahkan.
        </div>

        <div class="pb-4" align="justify">
            Program ini tidak membutuhkan waktu untuk bekerja hanya hanya memanfaatkan medsos yang sehari harinya di
            pegang bisa sambil santai dan semua Alur akan di catatan dalam system web yang secara otomatis.
        </div>
        <div class="pb-4" align="justify">
            Insya allah kita saling membantu mewujudkan masyarkat sejahtera demi kebutuhan keluarga tercinta. Amin...
        </div>

        <div class="text-center text-2xl font-bold">
            Selamat Bergabung
        </div>

    </div>
@endsection
