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

    <div class="w-full h-100 bg-center bg-cover rounded mb-6 flex items-center justify-start"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('{{ asset($tipe . '/' . $paket->gambar) }}');">
        <div class="pl-15">
            @if ($tipe === 'tour')
                <h1 class="text-5xl font-bold text-white drop-shadow-md">
                    Paket {{ ucfirst($tipe) }} {{ $paket->id }}
                </h1>
            @else
                <h1 class="text-5xl font-bold text-white drop-shadow-md">
                    Paket {{ $paket->nama }}
                </h1>
            @endif
            <p class="text-xl text-white drop-shadow-md mt-5">
                Mulai dari {{ number_format($paket->harga, 0, ',', '.') }}
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-10 px-4 grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Kolom Kiri: Detail Paket -->
        <div class="md:col-span-2 space-y-6">
            <!-- Deskripsi Tour -->
            <div>
                <h2 class="text-3xl font-bold mb-2">Deskripsi {{ ucfirst($tipe) }}</h2>
                <p class="text-gray-700">{{$paket->deskripsi }}</p>
            </div>

            <!-- Destinasi Wisata -->
            <div>
                <h2 class="text-3xl font-bold mb-2">Destinasi Wisata</h2>
                <p class="mb-2 ms-5">🕗 Penjemputan pukul 08.00 WITA dari hotel Anda</p>
                <ul class="list-disc list-inside space-y-1 text-gray-700">
                    @foreach(explode("\n", $paket->destinasi) as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- Paket Termasuk -->
            <div>
                <h2 class="text-3xl font-bold mb-2">Paket Termasuk</h2>
                <ul class="list-disc list-inside space-y-1 text-gray-700">
                    @foreach(explode("\n", $paket->include) as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- Harga -->
            <div>
                <h2 class="text-2xl font-bold mb-4">Harga</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-[400px] text-center border border-gray-300">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-2 px-4 border-b">Orang</th>
                                <th class="py-2 px-4 border-b">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @for ($i = 1; $i <= 8; $i++)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $i }} Orang</td>
                                    <td class="py-2 px-4 border-b">Rp {{ number_format($i * $paket->harga, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Booking Form -->
        <div>
            <div class="bg-white rounded-lg p-6 border-3">
                <h2 class="text-xl font-bold mb-4">Booking Form</h2>
                <form action="#" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="nama" name="nama"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-1">
                    </div>
                    <div>
                        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-1">
                    </div>
                    <div>
                        <label for="jumlah" class="block text-sm font-medium text-gray-700">Banyak Orang</label>
                        <input type="number" id="jumlah" name="jumlah"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-1">
                    </div>
                    <div>
                        <label for="mobil" class="block text-sm font-medium text-gray-700">Hotel</label>
                        <input type="text" id="mobil" name="mobil"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-1">
                    </div>
                    <button type="submit"
                        class="w-full bg-sky-500 hover:bg-sky-600 text-white py-2 px-4 rounded-md flex items-center justify-center space-x-2">
                        <img class="h-5 w-5" src="/icon/wa.png" alt="WA Icon" />
                        <span>Pesan Sekarang</span>
                    </button>
                </form>
            </div>
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