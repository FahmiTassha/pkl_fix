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

    <section class="py-10 px-4 md:px-20 bg-white">
        <h2 class="text-2xl md:text-3xl font-bold text-center mb-2">Layanan Antar Jemput</h2>
        <p class="text-center text-sm md:text-base max-w-3xl mx-auto text-gray-600 mb-8">
            Nikmati perjalanan yang aman, nyaman, dan tepat waktu bersama layanan transport antar jemput profesional
            kami yang tersedia di seluruh wilayah Bali. Kami hadir untuk memenuhi kebutuhan mobilitas Anda, baik untuk
            keperluan liburan, bisnis, hingga perjalanan pribadi bersama keluarga maupun rombongan.
        </p>

        <div class="max-w-4xl mx-auto bg-white border border-gray-300 rounded-lg p-6 shadow">
            <h3 class="font-bold text-lg mb-4">Form Antar Jemput</h3>

            <form onsubmit="return kirimWhatsApp();" class="space-y-4 text-sm">
                <!-- Hari & Tanggal -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center">
                        <label class="w-32 font-medium">Hari</label>
                        <input type="text" id="hari" class="flex-1 border border-gray-300 rounded px-3 py-2 bg-gray-100"
                            placeholder="">
                    </div>
                    <div class="flex items-center">
                        <label class="w-32 font-medium text-center">Tanggal</label>
                        <input type="date" id="tanggal"
                            class="flex-1 border border-gray-300 rounded px-3 py-2 bg-gray-100">
                    </div>
                </div>

                <hr class="my-4">

                <!-- Data Personal -->
                <div class="grid gap-4">
                    <div class="flex items-center">
                        <label class="w-32 font-medium">Nama</label>
                        <input type="text" id="nama"
                            class="flex-1 border border-gray-300 rounded px-3 py-2 bg-gray-100">
                    </div>
                    <div class="flex items-center">
                        <label class="w-32 font-medium">Nomor HP</label>
                        <input type="text" id="nohp"
                            class="flex-1 border border-gray-300 rounded px-3 py-2 bg-gray-100">
                    </div>
                    <div class="flex items-center">
                        <label class="w-32 font-medium">Jumlah Orang</label>
                        <input type="number" id="jumlah"
                            class="flex-1 border border-gray-300 rounded px-3 py-2 bg-gray-100">
                    </div>
                    <div class="flex items-center">
                        <label class="w-32 font-medium">Alamat Jemput</label>
                        <input type="text" id="alamat"
                            class="flex-1 border border-gray-300 rounded px-3 py-2 bg-gray-100">
                    </div>
                </div>

                <!-- Tujuan -->
                <div class="mt-6">
                    <label class="block font-medium mb-2">Alamat Tujuan</label>

                    <!-- Tujuan Lain -->
                    <div class="border rounded p-4 mt-5">
                        <input type="text" id="tujuan" placeholder="Isi Tujuan Anda disini..."
                            class="w-full rounded px-3 py-2 mb-2 focus:outline-none">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-600">
                                <span class="text-blue-500">Kesulitan?</span><br>
                                Costumer service: 085738562009
                            </p>
                            <button type="submit"
                                class="bg-sky-500 hover:bg-sky-600 text-white py-2 px-4 rounded-md flex items-center justify-center space-x-2">
                                <img class="h-5 w-5" src="/icon/wa.png" alt="WA Icon" />
                                <span>Pesan Sekarang</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-25 justify-items-center">
            @foreach ($galeris->take(4) as $galeri)
                <img src="{{ asset('galeri/' . $galeri->gambar) }}" alt="{{ $galeri->nama }}"
                    class="w-50 h-50 object-cover rounded-lg" />
            @endforeach
        </div>
    </section>


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

    <script>
        function kirimWhatsApp() {
            const hari = document.getElementById('hari').value.trim();
            const tanggal = document.getElementById('tanggal').value.trim();
            const nama = document.getElementById('nama').value.trim();
            const nohp = document.getElementById('nohp').value.trim();
            const jumlah = document.getElementById('jumlah').value.trim();
            const alamat = document.getElementById('alamat').value.trim();
            const tujuan = document.getElementById('tujuan').value.trim();

            if (!hari || !tanggal || !nama || !nohp || !jumlah || !alamat || !tujuan) {
                alert("Semua field harus diisi sebelum memesan.");
                return false; // Gagal submit
            }

            const pesan = encodeURIComponent(
                `Halo *BALIOH TRANS*\n\n` +
                `Saya ingin memesan antar jemput di Bali dengan keterangan berikut:\n\n` +
                `Atas nama : ${nama}\n` +
                `Tanggal pemesanan : ${tanggal} di hari ${hari}\n` +
                `Nomor Hp : ${nohp}\n` +
                `Jumlah Orang: ${jumlah}\n` +
                `Tempat Penjemputan : ${alamat}\n` +
                `Tempat Tujuan : ${tujuan}\n\n` +
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