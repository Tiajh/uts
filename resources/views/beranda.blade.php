@extends('layouts.app')

@section('title', 'Beranda - RedConnect')

@section('content')
<div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center md:items-start gap-8 py-12 px-6">
<!-- Bagian Kiri: Gambar -->
<div class="md:w-1/2">
<img src="{{ asset('images/Gambar.JPG') }}" alt="Gambar" class="rounded-lg shadow-lg w-full object-cover">
</div>

<!-- Bagian Kanan: Teks -->
<div class="md:w-1/2 space-y-6">
<h1 class="text-4xl font-bold text-red-700">Selamat Datang di RedConnect</h1>
<p class="text-gray-700 text-lg leading-relaxed">
RedConnect hadir untuk mempermudah proses donor darah dan meningkatkan kesadaran masyarakat tentang pentingnya donor darah.
Bergabunglah dengan kami untuk membantu menyelamatkan nyawa dan menyebarkan kebaikan.
</p>
</div>
</div>

<!-- Info Donor & Jadwal Donor -->
<section class="max-w-6xl mx-auto px-4 py-8">
<div class="grid md:grid-cols-2 gap-6">

<!-- Info Donor -->
<div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-red-600 flex flex-col justify-between">
<div>
<h2 class="text-xl font-semibold text-red-600 mb-2">Info Donor</h2>
<p class="text-gray-700 mb-4">
Donor darah dapat membantu menyelamatkan nyawa hingga tiga orang. Prosesnya cepat, aman, dan bermanfaat tidak hanya bagi penerima tetapi juga pendonor.
</p>
</div>
<a href="/info-donor" class="inline-block mt-auto bg-red-600 text-white px-4 py-2 rounded-md text-sm hover:bg-red-700 transition">
Seterusnya →
</a>
</div>

<!-- Jadwal Donor -->
<div class="bg-white shadow-md rounded-xl p-6 border-l-4 border-red-600 flex flex-col justify-between">
<div>
<h2 class="text-xl font-semibold text-red-600 mb-2">Jadwal Donor</h2>
<ul class="text-gray-700 list-disc list-inside mb-4">
<li>Senin - Jumat: 09.00 - 15.00</li>
<li>Sabtu: 09.00 - 12.00</li>
<li>Lokasi: PMI Kota Terdekat</li>
</ul>
</div>
<a href="/jadwal-donor" class="inline-block mt-auto bg-red-600 text-white px-4 py-2 rounded-md text-sm hover:bg-red-700 transition">
Seterusnya →
</a>
</div>

</div>
</section>

<section class="bg-red-50 py-16 px-4">
<div class="max-w-6xl mx-auto">
<h2 class="text-4xl font-bold text-center text-red-700 mb-12">Ulasan Para Pendonor</h2>

<div class="relative">
<!-- Carousel Wrapper -->
<div id="carousel" class="flex overflow-x-auto scroll-smooth gap-6 snap-x snap-mandatory pb-4">

<!-- Slide 1 -->
<div class="min-w-full md:min-w-[50%] lg:min-w-[33%] bg-white p-6 rounded-xl shadow text-center snap-start">
<img src="/img/pendonor1.jpg" alt="Pendonor 1" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover" />
<h3 class="text-lg font-semibold text-red-600">Ayu Ramadhani</h3>
<p class="text-gray-500 text-sm mb-2">Pendonor sejak 2018</p>
<p class="text-gray-700 text-sm">"Donor darah membuatku merasa lebih sehat dan bermanfaat."</p>
</div>

<!-- Slide 2 -->
<div class="min-w-full md:min-w-[50%] lg:min-w-[33%] bg-white p-6 rounded-xl shadow text-center snap-start">
<img src="/img/pendonor2.jpg" alt="Pendonor 2" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover" />
<h3 class="text-lg font-semibold text-red-600">Budi Santoso</h3>
<p class="text-gray-500 text-sm mb-2">Pendonor aktif</p>
<p class="text-gray-700 text-sm">"Rasanya luar biasa ketika tahu darah kita bisa menyelamatkan nyawa."</p>
</div>

<!-- Slide 3 -->
<div class="min-w-full md:min-w-[50%] lg:min-w-[33%] bg-white p-6 rounded-xl shadow text-center snap-start">
<img src="/img/pendonor3.jpg" alt="Pendonor 3" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover" />
<h3 class="text-lg font-semibold text-red-600">Citra Amelia</h3>
<p class="text-gray-500 text-sm mb-2">Pendonor pemula</p>
<p class="text-gray-700 text-sm">"Awalnya takut, tapi ternyata donor darah sangat nyaman."</p>
</div>

<!-- Slide 4 -->
<div class="min-w-full md:min-w-[50%] lg:min-w-[33%] bg-white p-6 rounded-xl shadow text-center snap-start">
<img src="/img/pendonor4.jpg" alt="Pendonor 4" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover" />
<h3 class="text-lg font-semibold text-red-600">Dewi Kartika</h3>
<p class="text-gray-500 text-sm mb-2">Donor rutin tiap 3 bulan</p>
<p class="text-gray-700 text-sm">"Saya merasa lebih fit setelah rutin mendonor. Ini juga jadi kebiasaan baik."</p>
</div>

<!-- Slide 5 -->
<div class="min-w-full md:min-w-[50%] lg:min-w-[33%] bg-white p-6 rounded-xl shadow text-center snap-start">
<img src="/img/pendonor5.jpg" alt="Pendonor 5" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover" />
<h3 class="text-lg font-semibold text-red-600">Rizky Maulana</h3>
<p class="text-gray-500 text-sm mb-2">Pendonor sejak kuliah</p>
<p class="text-gray-700 text-sm">"Donor darah adalah kontribusi kecil dengan dampak besar bagi sesama."</p>
</div>
</div>

<!-- Navigasi Tombol -->
<div class="flex justify-center mt-6 gap-4">
<button onclick="scrollCarousel(-1)" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">&larr;</button>
<button onclick="scrollCarousel(1)" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">&rarr;</button>
</div>
</div>
</div>
</section>

<script>
 function scrollCarousel(direction) {
   const carousel = document.getElementById("carousel");
   const scrollAmount = carousel.offsetWidth;
   carousel.scrollBy({ left: scrollAmount * direction, behavior: 'smooth' });
 }
</script>

<!-- Tombol Pendaftaran -->
<section class="bg-white py-10 px-4 shadow-inner">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Siap Jadi Pahlawan?</h2>
        <p class="text-gray-600 mb-6">Klik tombol di bawah ini untuk mulai mendaftar sebagai pendonor darah.</p>

        <a href="/daftar" class="bg-red-600 text-white px-6 py-3 rounded hover:bg-red-700 transition inline-block">
            Daftar Sebagai Pendonor
        </a>
    </div>
</section>

<!-- Daftar Pendonor -->
<section class="bg-white py-10 px-4 shadow-inner mt-8">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Daftar Pendonor</h2>

        <div class="bg-white rounded shadow p-4 text-left mt-6">
            <ul class="divide-y divide-gray-200">
                <li class="py-2 flex justify-between items-center">
                    <div>
                        <p class="text-gray-800 font-semibold">Ayu Ramadhani</p>
                        <p class="text-gray-500 text-sm">Golongan Darah: A+</p>
                    </div>
                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-xs">
                        Lihat Detail
                    </button>
                </li>
                <li class="py-2 flex justify-between items-center">
                    <div>
                        <p class="text-gray-800 font-semibold">Budi Santoso</p>
                        <p class="text-gray-500 text-sm">Golongan Darah: O+</p>
                    </div>
                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-xs">
                        Lihat Detail
                    </button>
                </li>
                <li class="py-2 flex justify-between items-center">
                    <div>
                        <p class="text-gray-800 font-semibold">Citra Amelia</p>
                        <p class="text-gray-500 text-sm">Golongan Darah: B+</p>
                    </div>
                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-xs">
                        Lihat Detail
                    </button>
                </li>
                <li class="py-2 flex justify-between items-center">
                    <div>
                        <p class="text-gray-800 font-semibold">Rizky Maulana</p>
                        <p class="text-gray-500 text-sm">Golongan Darah: AB+</p>
                    </div>
                    <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-xs">
                        Lihat Detail
                    </button>
                </li>
            </ul>
        </div>
    </div>
</section>


<!-- Toggle Script -->
<script>
    document.getElementById('toggleFormBtn').addEventListener('click', function () {
        document.getElementById('pendonorForm').classList.toggle('hidden');
    });
</script>

 <!-- Tentang Kami -->
    <section class="bg-white py-16 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-red-700 mb-4">Tentang Kami</h2>
            <p class="text-gray-700 text-lg leading-relaxed">
                RedConnect adalah platform digital yang didedikasikan untuk memudahkan proses donor darah dan meningkatkan kesadaran masyarakat
                akan pentingnya donor darah. Kami bekerja sama dengan PMI dan relawan untuk menyediakan informasi, jadwal, dan lokasi donor darah.
            </p>
            <p class="mt-4 text-gray-700 text-lg">
                Bersama RedConnect, jadilah bagian dari gerakan kebaikan yang nyata. Karena setetes darahmu sangat berarti bagi yang membutuhkan.
            </p>
        </div>
    </section>

<!-- Lokasi Donor -->
<section class="bg-red-50 py-12 px-4">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        
        <!-- Daftar Lokasi -->
        <div>
            <h2 class="text-2xl font-bold text-red-700 mb-4">Lokasi Donor Darah di Pontianak</h2>
            <ul class="space-y-4 text-gray-700">
                <li>
                    <strong>PMI Kota Pontianak</strong><br>
                    Jl. Gusti Sulung Lelanang No.25, Kota Pontianak, Kalimantan Barat 78121<br>
                    Telp: (0561) 734991
                </li>
                <li>
                    <strong>PMI Provinsi Kalimantan Barat</strong><br>
                    Jl. Ahmad Yani No.12, Pontianak Selatan, Pontianak<br>
                    Telp: (0561) 736402
                </li>
            </ul>
        </div>

        <!-- Peta Google Maps -->
        <div class="w-full h-80 rounded-lg shadow overflow-hidden">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7720758027684!2d109.335148!3d-0.026635899999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d596cf0e2ab7f%3A0x7f23652b3ddc6b1c!2sPalang%20Merah%20Indonesia%20(PMI)%20Kota%20Pontianak!5e0!3m2!1sen!2sid!4v1716646482557!5m2!1sen!2sid" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
</section>

@endsection