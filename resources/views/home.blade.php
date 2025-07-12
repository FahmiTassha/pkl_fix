<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('/image/bg1.jpg')">
        <header x-data="{ open: false }" @keydown.window.escape="open = false" :data-open="open"
            class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1 items-center">
                    <a href="/" class="-m-1.5 p-1.5">
                        <img class="h-15 w-auto" src="/image/logo1.png" alt="" />
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white"
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
                    <a href="/" class="text-sm/6 font-semibold text-white">Home</a>
                    <a href="/sewa" class="text-sm/6 font-semibold text-white">Sewa Kendaraan</a>
                    <a href="/paket" class="text-sm/6 font-semibold text-white">Paket Travel&Tour</a>
                    <a href="/antar" class="text-sm/6 font-semibold text-white">Antar Jemput</a>
                    <a href="/galleri" class="text-sm/6 font-semibold text-white">Galeri</a>
                    <a href="/sk" class="text-sm/6 font-semibold text-white">S&K</a>
                </div>
                <a href="https://wa.me/6285739846238"
                    class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:space-x-3 flex items-center space-x-3 text-sm/6 font-semibold text-white">
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

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="lg:mx-15 mx-auto py-32 sm:py-48 lg:py-30">
                <div class="lg:text-start text-center max-w-2xl">
                    <h1 class="text-5xl font-semibold tracking-tight text-balance text-white md:text-7xl lg:text-7xl">
                        Ayo
                        Jelajahi Bali Tanpa Batas</h1>
                </div>
                <div class="lg:max-w-lg max-w-2xl lg:text-start text-center">
                    <p class="mt-8 lg:text-lg md:text-lg font-normal text-pretty text-white text-sm">Liburan ke Bali
                        jadi
                        lebih mudah dan nyaman bersama kami – sahabat perjalanan terpercaya di Pulau Dewata. Mulai dari
                        sewa motor, paket tour, hingga antar jemput bandara, semua bisa kamu dapatkan dengan cepat dan
                        tanpa ribet!</p>
                    <div class="mt-10 flex lg:items-start items-center lg:justify-start justify-center gap-x-10">
                        <a href="/sewa"
                            class="rounded-md bg-[#008ECC] px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-white hover:text-[#008ECC]  hover:outline-2 hover:outline-offset-0 hover:outline-[#008ECC]">Sewa
                            Kendaraan</a>
                        <a href="/paket"
                            class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-black shadow-xs hover:bg-black hover:text-white hover:outline-2 hover:outline-offset-0 hover:outline-white">Paket
                            Travel&Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lg:h-screen h-auto bg-cover bg-center bg-no-repeat bg-white">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="max-w-7xl mx-auto px-6">
                <div class="lg:text-start text-center">
                    <h1 class="text-5xl font-bold text-black mb-8">About Us</h1>
                </div>
                <div class="lg:text-lg md:text-lg text-xs">
                    <p class="text-gray-700 mb-6">
                        [Nama Usaha Anda] adalah layanan lokal Bali yang dibangun dari semangat memberikan pengalaman
                        terbaik
                        untuk setiap wisatawan yang datang ke pulau kami tercinta.
                    </p>

                    <p class="text-gray-700 mb-6">
                        Kami bukan perusahaan besar, tapi kami punya komitmen besar: menjadikan setiap perjalananmu
                        berkesan
                        dan tak terlupakan.
                        Tim kami terdiri dari anak-anak muda Bali yang enerjik, komunikatif, dan tahu betul seluk-beluk
                        tempat-tempat keren di sini.
                    </p>

                    <p class="text-gray-700 mb-6">
                        Kami percaya bahwa pelayanan yang tulus, komunikasi yang jujur, dan fleksibilitas adalah kunci
                        membuat liburanmu lancar dan menyenangkan.
                    </p>

                    <p class="text-gray-700 mb-2">Kami hadir untuk kamu yang:</p>
                    <ul class="list-disc list-inside text-gray-700 mb-6">
                        <li>Pertama kali ke Bali dan butuh bantuan</li>
                        <li>Ingin liburan hemat tapi tetap nyaman</li>
                        <li>Cari transportasi fleksibel tanpa ribet</li>
                        <li>Suka explore tempat-tempat antimainstream</li>
                    </ul>

                    <p class="text-gray-700">
                        Dengan pengalaman melayani wisatawan dari berbagai negara, kami siap membantu kamu dari A sampai
                        Z.
                        Mulai dari rekomendasi tempat wisata, booking kendaraan, hingga reservasi penginapan, kami bisa
                        bantu semua.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="h-auto bg-cover bg-center bg-no-repeat bg-white mb-15">
        <div class="relative isolate max-w-7xl mx-auto px-6 pt-14 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-4xl font-bold">Sewa Kendaraan</h1>
                <a href="/sewa" class="text-sm text-gray-600 hover:text-black">Lihat Semua →</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($mobils->take(3) as $mobil)
                    <div class="rounded-xl p-4 bg-[#FAFAFA]">
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
                        <a href="https://wa.me/6285739846238?text=Halo%20Kak,%20saya%20mau%20cek%20ketersediaan%20mobil%20{{ $mobil->nama }}%20dan%20booking%20untuk%20di%20Bali."
                            class="flex items-center justify-center gap-2 mt-4 bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4 rounded-md text-center">
                            <img class="h-5 w-5" src="/icon/wa.png" alt="WA Icon" />
                            Pesan Sekarang
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-4">
                @foreach ($motors->take(3) as $motor)
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
                        <a href="https://wa.me/6285739846238?text=Halo%20Kak,%20saya%20mau%20cek%20ketersediaan%20motor%20{{ $motor->nama }}%20dan%20booking%20untuk%20di%20Bali."
                            class="flex items-center justify-center gap-2 mt-4 bg-sky-500 hover:bg-sky-600 text-white font-semibold py-2 px-4 rounded-md text-center">
                            <img class="h-5 w-5" src="/icon/wa.png" alt="WA Icon" />
                            Pesan Sekarang
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="h-auto bg-cover bg-center bg-no-repeat bg-white">
        <div class="relative isolate max-w-7xl mx-auto px-6 pt-14 lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-4xl font-bold">Paket Travel & Tour</h1>
                <a href="/paket" class="text-sm text-gray-600 hover:text-black">Lihat Semua →</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-4">
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
                                <p class="text-sm text-sky-600 font-semibold">{{ $tour->tempat }}</p>
                                <span class="text-gray-500 font-normal">/ Orang</span>
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

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-4">
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
                                <span class="text-gray-500 font-normal">/ Orang</span>
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

    <div class="h-auto bg-cover bg-center bg-no-repeat bg-white mb-25">
        <div class="relative isolate mx-auto px-6 pt-14 lg:px-8">
            <section class="py-12 bg-white text-center">
                <h2 class="text-4xl font-bold mb-10">Testimoni Customer</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-7xl mx-auto px-4">
                    <!-- Testimoni 1 -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-sm">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('image/testi1.png') }}" class="w-20 h-20 rounded-full object-cover"
                                alt="Andi Setiawan">
                            <div class="text-left">
                                <p class="font-semibold text-lg">Andi Setiawan</p>
                                <p class="text-yellow-400 text-lg">★★★★★</p>
                            </div>
                            <img class="ml-auto h-7 w-auto" src="/icon/maps.png" alt="" />
                        </div>
                        <p class="text-normal text-left text-gray-500 mt-7">Pelayanannya luar biasa! Mobil bersih, sopir
                            ramah, dan
                            perjalanan ke Bali jadi pengalaman tak terlupakan. Pasti akan pakai lagi!</p>
                    </div>

                    <!-- Testimoni 2 -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-sm">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('image/testi2.png') }}" class="w-20 h-20 rounded-full object-cover"
                                alt="Dewi Lestari">
                            <div class="text-left">
                                <p class="font-semibold text-lg">Dewi Lestari</p>
                                <p class="text-yellow-400 text-lg">★★★★★</p>
                            </div>
                            <img class="ml-auto h-7 w-auto" src="/icon/maps.png" alt="" />
                        </div>
                        <p class="text-normal text-left text-gray-500 mt-7">Booking-nya gampang dan cepat. Paket
                            wisatanya fleksibel, cocok
                            buat keluarga. Anak-anak juga senang banget selama trip ke Bali.</p>
                    </div>

                    <!-- Testimoni 3 -->
                    <div class="bg-gray-50 p-6 rounded-xl shadow-sm">
                        <div class="flex items-center gap-3 mb-3">
                            <img src="{{ asset('image/testi3.png') }}" class="w-20 h-20 rounded-full object-cover"
                                alt="Nada Rasya">
                            <div class="text-left">
                                <h1 class="font-semibold text-lg">Nada Rasya</h1>
                                <p class="text-yellow-400 text-lg">★★★★★</p>
                            </div>
                            <img class="ml-auto h-7 w-auto" src="/icon/maps.png" alt="" />
                        </div>
                        <p class="text-normal text-left text-gray-500 mt-7">Profesional dan tepat waktu. Harga sesuai
                            dengan kualitas
                            layanan. Sangat direkomendasikan untuk liburan tanpa ribet!</p>
                    </div>
                </div>
            </section>

            <section class="py-12 bg-white">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-4 text-center">
                    <!-- Paket Fleksibel -->
                    <div>
                        <div class="text-4xl mb-4">📩</div>
                        <h3 class="font-bold text-xl mb-2">Paket Fleksibel</h3>
                        <p class="text-sm text-gray-600">Pilih dan sesuaikan sendiri destinasi serta durasi
                            perjalanan sesuai kebutuhan dan anggaran Anda.</p>
                    </div>

                    <!-- Armada Terawat -->
                    <div>
                        <div class="text-4xl mb-4">🚗</div>
                        <h3 class="font-bold text-xl mb-2">Armada Terawat</h3>
                        <p class="text-sm text-gray-600">Semua mobil kami selalu dalam kondisi prima untuk
                            memastikan perjalanan Anda aman dan nyaman.</p>
                    </div>

                    <!-- Layanan Profesional -->
                    <div>
                        <div class="text-4xl mb-4">🤝</div>
                        <h3 class="font-bold text-xl mb-2">Layanan Profesional</h3>
                        <p class="text-sm text-gray-600">Tim kami siap melayani Anda dengan cepat, ramah, dan penuh
                            tanggung jawab setiap saat.</p>
                    </div>
                </div>
            </section>
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
</body>

</html>