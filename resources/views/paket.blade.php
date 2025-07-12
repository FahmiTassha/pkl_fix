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
        tours: {{ Js::from($tours) }},
        travels: {{ Js::from($travels) }},
        currentIndex: 0,
        tipe: 'tour',
        get currentList() {
            return this.tipe === 'tour' ? this.tours : this.travels;
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
                    <a href="#" class="-m-1.5 p-1.5">
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
                    <a href="#" class="text-sm/6 font-semibold text-black">Home</a>
                    <a href="#" class="text-sm/6 font-semibold text-black">Sewa Kendaraan</a>
                    <a href="#" class="text-sm/6 font-semibold text-black">Paket Travel&Tour</a>
                    <a href="#" class="text-sm/6 font-semibold text-black">Antar Jemput</a>
                    <a href="#" class="text-sm/6 font-semibold text-black">Galeri</a>
                    <a href="#" class="text-sm/6 font-semibold text-black">S&K</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:space-x-3">
                    <img class="h-8 w-auto" src="/image/icon1.png" alt="" />
                    <a href="#" class="text-sm/6 font-semibold text-black">Hubungi<br>Kami</a>
                </div>
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
                        <a href="#" class="-m-1.5 p-1.5">
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
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Sewa
                                    Kendaraan</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Paket
                                    Travel&Tour</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Antar
                                    Jemput</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Galeri</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">S&K</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


    <div class="flex items-center justify-center h-screem bg-center bg-cover bg-no-repeat"
        :style="'background-image: url(/' + tipe + '/' + currentItem.gambar + ')'">
        <div class="max-w-7xl w-full p-4 rounded-lg">
            <!-- Tombol Toggle Mobil/Motor -->
            <div class="flex justify-center mb-6">
                <div dir="ltr">
                    <div @click="tipe = 'tour'; currentIndex = 0"
                        :class="tipe === 'tour' ? 'text-black bg-white' : 'bg-sky-500 text-white'"
                        class="border px-6 py-2 transition-all duration-300 font-semibold rounded-s-lg">
                        Tour
                    </div>
                </div>
                <div dir="rtl">
                    <div @click="tipe = 'travel'; currentIndex = 0"
                        :class="tipe === 'travel' ? 'text-black bg-white' : 'bg-sky-500 text-white'"
                        class="border px-6 py-2 transition-all duration-300 font-semibold rounded-s-lg">
                        Travel
                    </div>
                </div>
            </div>

            <!-- Gambar Kendaraan -->
            <div class="flex justify-center items-center h-95">
            </div>

            <!-- Navigasi Panah -->
            <div class="absolute top-1/2 left-25 cursor-pointer text-2xl text-white" @click="prev">&#10094;</div>
            <div class="absolute top-1/2 right-25 cursor-pointer text-2xl text-white" @click="next">&#10095;</div>

            <!-- Informasi Kendaraan -->
            <div class="mt-6 p-4 border rounded-md bg-white">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-gray-600" x-text="tipe === 'tour' ? 'Tour' : 'Travel'"></p>
                        <p class="font-bold text-lg" x-text="tipe === 'tour' ? currentItem.tempat : currentItem.nama">
                        </p>
                    </div>
                    <div>
                        <p class="text-gray-600">Harga</p>
                        <p class="font-bold text-lg" x-text="'Rp ' + currentItem.harga.toLocaleString() + ' / Hari'">
                        </p>
                    </div>
                    <div>
                        <a :href="'https://wa.me/?text=Halo%20saya%20ingin%20memesan%20' + encodeURIComponent(currentItem.nama)"
                            class="flex items-center justify-center gap-2 bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4 rounded-md text-center">
                            <img class="h-5 w-5" src="/icon/wa.png" alt="WA Icon" />
                            Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-auto bg-cover bg-center bg-no-repeat bg-white mb-15">
        <div class="relative isolate max-w-7xl mx-auto px-6 pt-14 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-4xl font-bold" x-text="tipe === 'tour' ? 'Paket Tour Bali' : 'Paket Travel'"></h1>
                <a href="#" class="text-sm text-gray-600 hover:text-black">Lihat Semua →</a>
            </div>

            {{-- Bagian Foreach Tour --}}
            <div x-show="tipe === 'tour'" x-cloak>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($tours->take(3) as $tour)
                        <div class="rounded-xl bg-[#FAFAFA] overflow-hidden">
                            <img src="{{ asset('tour/' . $tour->gambar) }}" alt="{{ $tour->nama }}"
                                class="w-full h-40 object-cover" />

                            <div class="p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold">{{ $tour->nama }}</h3>
                                    <p class="text-sky-600 font-bold text-sm">
                                        Rp {{ number_format($tour->harga, 0, ',', '.') }}
                                    </p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="text-sm text-sky-600 font-semibold">{{ $tour->tempat }} Orang</p>
                                    <span class="text-gray-500 font-normal">/ Hari</span>
                                </div>
                                <div class="flex mt-3">
                                    <p class="font-normal text-gray-500 text-sm">
                                        {{ \Illuminate\Support\Str::words($tour->deskripsi, 25, '...') }}
                                    </p>
                                </div>
                                <a href="{{ route('paket.detail', ['tipe' => 'tour', 'id' => $tour->id]) }}"
                                    class="block text-center mt-4 bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4 rounded-md">
                                    Lihat Detail
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Bagian Foreach Travel --}}
            <div x-show="tipe === 'travel'" x-cloak>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach ($travels->take(3) as $travel)
                        <div class="rounded-xl bg-[#FAFAFA] overflow-hidden">
                            <img src="{{ asset('travel/' . $travel->gambar) }}" alt="{{ $travel->nama }}"
                                class="w-full h-40 object-cover" />

                            <div class="p-4">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-lg font-semibold">{{ $travel->nama }}</h3>
                                    <p class="text-sky-600 font-bold text-sm">
                                        Rp {{ number_format($travel->harga, 0, ',', '.') }}
                                    </p>
                                </div>
                                <div class="flex justify-between items-center">
                                    <p class="text-sm text-sky-600 font-semibold">Wisata</p>
                                    <span class="text-gray-500 font-normal">/ Hari</span>
                                </div>
                                <div class="flex mt-3">
                                    <p class="font-normal text-gray-500 text-sm">
                                        {{ \Illuminate\Support\Str::words($travel->deskripsi, 25, '...') }}
                                    </p>
                                </div>
                                <a href="{{ route('paket.detail', ['tipe' => 'travel', 'id' => $travel->id]) }}"
                                    class="block text-center mt-4 bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4 rounded-md">
                                    Lihat Detail
                                </a>
                            </div>
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
                    <p class="font-semibold">She@gmail.com</p>
                </div>
            </div>
            <div class="flex justify-center items-center gap-2">
                <img class="h-10" src="/icon/telepon.png" alt="" />
                <div>
                    <p class="text-white font-light">Phone</p>
                    <p class="font-semibold">+62858 7805 3610</p>
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
                    <img href="#" class="h-9" src="/icon/wa2.png" alt="" />
                    <img href="#" class="h-9" src="/icon/ig.png" alt="" />
                </div>
            </div>

            <!-- Menu Lain -->
            <div>
                <h4 class="font-bold mb-2 text-xl">Menu Lain</h4>
                <ul class="space-y-2 text-lg text-white/90">
                    <li><a href="#" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="#" class="hover:underline">Galeri</a></li>
                    <li><a href="#" class="hover:underline">Kontak</a></li>
                    <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                    <li><a href="#" class="hover:underline">Syarat dan Ketentuan</a></li>
                </ul>
            </div>
        </div>

        <div class="text-center text-normal text-white mt-10">
            © Copyright Nama 2025. Design by Fahmi
        </div>
    </footer>
</body>

</html>