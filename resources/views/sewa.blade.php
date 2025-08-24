<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body x-data="{
        mobils: {{ Js::from($mobils) }},
        motors: {{ Js::from($motors) }},
        currentIndex: 0,
        tipe: 'mobil',
        get currentList() {
            return this.tipe === 'mobil' ? this.mobils : this.motors;
        },
        get currentItem() {
            return this.currentList[this.currentIndex];
        },
        prev() {
            this.currentIndex = (this.currentIndex === 0) ? this.currentList.length - 1 : this.currentIndex - 1;
        },
        next() {
            this.currentIndex = (this.currentIndex + 1) % this.currentList.length;
        }
    }">
    <div class="h-auto bg-cover bg-center bg-no-repeat bg-white">
        <header x-data="{ open: false }" @keydown.window.escape="open = false" :data-open="open"
            class="relative inset-x-0 top-0 z-50 bg-white">
            <nav class="flex items-center justify-between p-3 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1 items-center">
                    <a href="/" class="-m-1.5 p-1.5">
                        <img class="h-15 w-auto" src="/image/logo2.png" alt="" />
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-black"
                        @click="open = true">
                        <span class="sr-only">Open main menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="/" class="text-sm/6 font-semibold text-black">Home</a>
                    <a href="/sewa" class="text-sm/6 font-semibold text-black">Sewa Kendaraan</a>
                    <a href="/paket" class="text-sm/6 font-semibold text-black">Paket Travel&Tour</a>
                    <a href="/antar" class="text-sm/6 font-semibold text-black">Antar Jemput</a>
                    <a href="/galleri" class="text-sm/6 font-semibold text-black">Galeri</a>
                    <a href="/sk" class="text-sm/6 font-semibold text-black">S&K</a>
                </div>
                <a href="https://wa.me/6285739846238"
                    class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:space-x-3 flex items-center space-x-3 text-sm/6 font-semibold text-black">
                    <img class="h-8 w-auto" src="/image/icon1.png" alt="Hubungi Kami" />
                    <span>
                        Hubungi<br>Kami
                    </span>
                </a>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" x-description="Mobile menu, show/hide based on menu open state." x-ref="dialog"
                x-show="open" aria-modal="true" style="display: none;">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"
                    x-description="Background backdrop, show/hide based on slide-over state."></div>
                <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                    @click.away="open = false">
                    <div class="flex items-center justify-between">
                        <a href="/" class="-m-1.5 p-1.5">
                            <img class="h-15 w-auto" src="/image/logo2.png" alt="" />
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
                            <span class="sr-only">Close menu</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="/"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                                <a href="/sewa"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Sewa
                                    Kendaraan</a>
                                <a href="/paket"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Paket
                                    Travel&Tour</a>
                                <a href="/antar"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Antar
                                    Jemput</a>
                                <a href="/galleri"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Galeri</a>
                                <a href="/sk"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">S&K</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


    <div class="bg-gray-50 flex items-center justify-center h-auto">
        <div class="max-w-7xl w-full p-4 rounded-lg">
            <!-- Tombol Toggle Mobil/Motor -->
            <div class="flex justify-center mb-6">
                <div dir="ltr">
                    <div @click="tipe = 'mobil'; currentIndex = 0"
                        :class="tipe === 'mobil' ? 'text-black bg-white' : 'bg-sky-500 text-white'"
                        class="cursor-pointer border px-6 py-2 transition-all duration-300 font-semibold rounded-s-lg">
                        Mobil
                    </div>
                </div>
                <div dir="rtl">
                    <div @click="tipe = 'motor'; currentIndex = 0"
                        :class="tipe === 'motor' ? 'text-black bg-white' : 'bg-sky-500 text-white'"
                        class="cursor-pointer border px-6 py-2 transition-all duration-300 font-semibold rounded-s-lg">
                        Motor
                    </div>
                </div>
            </div>

            <!-- Gambar Kendaraan -->
            <div class="flex justify-center items-center">
                <img :src="'/' + tipe + '/' + currentItem.gambar" alt="Image"
                    class="w-full h-auto max-h-95 object-contain">
            </div>

            <!-- Navigasi Panah -->
            <div class="absolute top-1/2 left-25 cursor-pointer text-2xl" @click="prev">&#10094;</div>
            <div class="absolute top-1/2 right-25 cursor-pointer text-2xl" @click="next">&#10095;</div>

            <!-- Informasi Kendaraan -->
            <div class="mt-6 p-4 border rounded-md bg-white">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-600" x-text="tipe === 'mobil' ? 'Mobil' : 'Motor'"></p>
                        <p class="font-bold text-lg" x-text="currentItem.nama"></p>
                    </div>
                    <div>
                        <p class="text-gray-600">Harga</p>
                        <p class="font-bold text-lg" x-text="'Rp ' + currentItem.harga.toLocaleString() + ' / Hari'">
                        </p>
                    </div>
                    <div>
                        <a :href="'https://wa.me/6285739846238?text=' + encodeURIComponent(
                            'Halo *BALIOH TRANS*\n\n' +
                            'Saya ingin menyewa ' + tipe + ' ' + currentItem.nama + ' dengan keterangan berikut:\n\n' +
                            'Atas nama : ........\n' +
                            'Tanggal pemesanan : ........\n' +
                            tipe.charAt(0).toUpperCase() + tipe.slice(1) + ' : ' + currentItem.nama +'\n\n' +
                            'Catatan : ........\n\n' +
                            'Terimakasih Admin')" target="_blank"
                            class="flex items-center justify-center gap-2 bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4 rounded-md text-center">
                            <img class="h-5 w-5" src="/icon/wa.png" alt="WA Icon" />
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-auto bg-cover bg-center bg-no-repeat bg-white mb-15">
        <div class="relative isolate max-w-7xl mx-auto px-6 pt-14 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-4xl font-bold" x-text="tipe === 'mobil' ? 'Sewa Mobil' : 'Sewa Motor'"></h1>
                <a href="/sewa" class="text-sm text-gray-600 hover:text-black">Lihat Semua →</a>
            </div>

            {{-- Bagian Foreach MOBIL --}}
            <div x-show="tipe === 'mobil'" x-cloak>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($mobils as $mobil)
                        @php
                            $pesanMobil = (
                                "Halo *BALIOH TRANS*\n\n" .
                                "Saya ingin menyewa mobil {$mobil->nama} dengan keterangan berikut:\n\n" .
                                "Atas nama : ........\n" .
                                "Tanggal pemesanan : ........\n" .
                                "Mobil : {$mobil->nama}\n\n" .
                                "Catatan : ........\n\n" .
                                "Terimakasih Admin"
                            );
                            $whatsappLink = 'https://wa.me/6285739846238?text=' . urlencode($pesanMobil);
                        @endphp

                        <div class="rounded-xl p-4 bg-[#FAFAFA] transition duration-300 ease-in-out">
                            <img src="{{ asset('mobil/' . $mobil->gambar) }}" alt="{{ $mobil->nama }}"
                                class="mx-auto h-40 object-contain" />
                            <div class="flex justify-between items-center mt-2">
                                <h3 class="text-lg font-semibold">{{ $mobil->nama }}</h3>
                                <p class="text-sky-600 font-bold text-sm">
                                    Rp {{ number_format($mobil->harga, 0, ',', '.') }}
                                </p>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-sm text-gray-500">{{ $mobil->tempat }} Orang</p>
                                <span class="text-gray-500 font-normal">/ Hari</span>
                            </div>
                            <div class="mt-3 mb-3 px-2 grid grid-cols-3 gap-17 text-sm">
                                <div class="flex items-start w-auto gap-2">
                                    <img class="h-6" src="/icon/person.png" alt="" />
                                    <p>Sopir</p>
                                </div>
                                <div class="flex items-center w-auto gap-2">
                                    <img class="h-6" src="/icon/bensin.png" alt="" />
                                    <p>BBM</p>
                                </div>
                                <div class="flex items-center w-auto gap-2">
                                    <img class="h-6" src="/icon/kursi.png" alt="" />
                                    <p>{{ $mobil->tempat }} Seat</p>
                                </div>
                            </div>
                            <a href="{{ $whatsappLink }}" target="_blank"
                                class="flex items-center justify-center gap-2 mt-4 bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4 rounded-md text-center">
                                <img class="h-5 w-5" src="/icon/wa.png" alt="WA Icon" />
                                Pesan Sekarang
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Bagian Foreach MOTOR --}}
            <div x-show="tipe === 'motor'" x-cloak>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($motors as $motor)
                        @php
                            $pesanMotor = (
                                "Halo *BALIOH TRANS*\n\n" .
                                "Saya ingin menyewa motor {$motor->nama} dengan keterangan berikut:\n\n" .
                                "Atas nama : ........\n" .
                                "Tanggal pemesanan : ........\n" .
                                "Motor : {$motor->nama}\n\n" .
                                "Catatan : ........\n\n" .
                                "Terimakasih Admin"
                            );
                            $whatsappLink = 'https://wa.me/6285739846238?text=' . urlencode($pesanMotor);
                        @endphp

                        <div class="rounded-xl p-4 bg-[#FAFAFA]">
                            <img src="{{ asset('motor/' . $motor->gambar) }}" alt="{{ $motor->nama }}"
                                class="mx-auto h-40 object-contain" />
                            <div class="flex justify-between items-center mt-2">
                                <h3 class="text-lg font-semibold">{{ $motor->nama }}</h3>
                                <p class="text-sky-600 font-bold text-sm">
                                    Rp {{ number_format($motor->harga, 0, ',', '.') }}
                                </p>
                            </div>
                            <div class="flex justify-between items-center">
                                <p class="text-sm text-gray-500">{{ $motor->tempat }} Orang</p>
                                <span class="text-gray-500 font-normal">/ Hari</span>
                            </div>
                            <div class="mt-3 mb-3 px-2 grid grid-cols-3 gap-7 text-sm">
                                <div class="flex items-start w-auto gap-2">
                                    <img class="h-6" src="/icon/helm.png" alt="" />
                                    <p>Helm</p>
                                </div>
                                <div class="flex items-center w-auto gap-2">
                                    <img class="h-6" src="/icon/bensin.png" alt="" />
                                    <p>BBM</p>
                                </div>
                                <div class="flex items-center w-auto gap-2">
                                    <img class="h-6" src="/icon/jas.png" alt="" />
                                    <p>Jas Hujan</p>
                                </div>
                            </div>
                            <a href="{{ $whatsappLink }}" target="_blank"
                                class="block text-center mt-4 bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4 rounded-md">
                                Pesan Sekarang
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-[#008ECC] text-white py-10">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 text-sm mb-10">
            <!-- Kontak Info -->
            <div class="flex justify-center items-center gap-2">
                <img class="h-10" src="/icon/address.png" alt="" />
                <div>
                    <p class="text-white font-light">Address</p>
                    <p class="font-semibold">Bali</p>
                </div>
            </div>
            <div class="flex justify-center items-center gap-2">
                <img class="h-10" src="/icon/email.png" alt="" />
                <div>
                    <p class="text-white font-light">Email</p>
                    <a href="mailto:she@gmail.com" class="font-semibold">she@gmail.com</a>
                </div>
            </div>
            <div class="flex justify-center items-center gap-2">
                <img class="h-10" src="/icon/telepon.png" alt="" />
                <div>
                    <p class="text-white font-light">Phone</p>
                    <a href="https://wa.me/6285739846238" class="font-semibold">+62857 3984 6238</a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
            <!-- Logo -->
            <div class="flex items-start justify-center">
                <img src="{{ asset('image/logo1.png') }}" alt="Logo" class="h-70 object-contain">
            </div>

            <!-- Profil -->
            <div class="items-center">
                <h4 class="font-bold mb-2 text-xl">Profil</h4>
                <p class="text-white/90 mb-4 text-lg">Nama adalah layanan penyewaan mobil dan paket wisata terpercaya
                    yang
                    siap menemani perjalanan Anda dengan aman, nyaman, dan mudah….</p>
                <div class="flex gap-4 text-xl">
                    <a href="https://wa.me/6285739846238">
                        <img class="h-9" src="/icon/wa2.png" alt="" />
                    </a>
                    <a href="https://instagram.com">
                        <img class="h-9" src="/icon/ig.png" alt="" />
                    </a>
                </div>
            </div>

            <!-- Menu Lain -->
            <div>
                <h4 class="font-bold mb-2 text-xl">Menu Lain</h4>
                <ul class="space-y-2 text-lg text-white/90">
                    <li><a href="/" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="/galleri" class="hover:underline">Galeri</a></li>
                    <li><a href="https://wa.me/6285739846238" class="hover:underline">Kontak</a></li>
                    <li><a href="/sk" class="hover:underline">Syarat dan Ketentuan</a></li>
                </ul>
            </div>
        </div>

        <div class="text-center text-normal text-white mt-10">
            © Copyright Nama 2025. Design by Fahmi
        </div>
    </footer>

    <script>
        function kirimWhatsApp() {
            const pesan = encodeURIComponent(
                `Halo *BALIOH TRANS*\n\n` +
                `Saya ingin menyewa Mobil ${tipe} di Bali dengan keterangan berikut:\n\n` +
                `Atas nama : ........\n` +
                `Tanggal pemesanan : ........\n` +
                `Mobil : ${paket}\n\n` +
                `Catatan : ........\n\n` +
                `Terimakasih Admin`
            );

            const nomorWA = '6285739846238';
            const url = `https://wa.me/${nomorWA}?text=${pesan}`;

            window.open(url, '_blank');
            return false;
        }
    </script>
</body>

</html>