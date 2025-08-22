<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paket</title>
    @vite('resources/css/app.css')
</head>

<body class="text-gray-800">
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

    <div class="w-full h-70 bg-center bg-cover rounded mb-6 flex items-center justify-center"
        style="background-image: url('/image/bg1.jpg');">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-white drop-shadow-md">
                Galeri
            </h1>
            <p class="text-xl text-white font-normal drop-shadow-md mt-5">
                Home / Galeri
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-10 px-4">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-10 justify-items-center">
            @foreach ($galeris as $galeri)
                <img src="{{ asset('galeri/' . $galeri->gambar) }}" alt="{{ $galeri->nama }}"
                    class="w-50 h-50 object-cover rounded-lg" />
            @endforeach
        </div>
    </div>

    <footer class="bg-[#008ECC] text-white py-10 mt-15">
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
</body>

</html>