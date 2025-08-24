<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mobil</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
         {{-- Sidebar --}}
        <aside class="w-64 bg-[#008ECC] text-white flex flex-col p-4">
            <a class="-m-1.5 p-1.5">
                <img class="h-18 pl-3 w-auto" src="/image/logo1.png" alt="" />
            </a>
            <nav class="flex-1">
                <ul class="space-y-3">
                    <li>
                        <a href="#"
                        class="inline-flex items-center pl-4 py-3 pb-1 pr-5 mt-5 text-white">
                            <img src="{{ asset('icon/mobil.png') }}" alt="Sewa Mobil" class="w-5 h-5 mr-3">
                            Sewa Mobil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.motor.index') }}" 
                        class="inline-flex items-center pl-4 pb-1 pr-5">
                            <img src="{{ asset('icon/motor.png') }}" alt="Sewa Motor" class="w-5 h-5 mr-3">
                            Sewa Motor
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                        class="inline-flex items-center pl-4 pb-1 pr-5">
                           <img src="{{ asset('icon/travel.png') }}" alt="Paket Travel" class="w-5 h-5 mr-3">
                            Paket Travel
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                        class="inline-flex items-center pl-4 pb-1 pr-5">
                           <img src="{{ asset('icon/tour.png') }}" alt="Paket Tour" class="w-5 h-5 mr-3">
                            Paket Tour
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                        class="inline-flex items-center pl-4 pb-1 pr-5">
                           <img src="{{ asset('icon/antar.png') }}" alt="Antar Jemput" class="w-5 h-5 mr-3">
                            Antar Jemput
                        </a>
                    </li>
                </ul>

                <h3 class="mt-8 text-sm uppercase tracking-wide">Page Setting</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#"
                        class="inline-flex items-center pl-4 py-3 pr-5 bg-[#006895] rounded-lg text-white hover:bg-[#00577a]">
                            <img src="{{ asset('icon/sk.png') }}" alt="S&K" class="w-5 h-5 mr-3">
                            S&K
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                        class="inline-flex items-center pt-1 pl-4 pb-1 pr-5">
                           <img src="{{ asset('icon/galeri.png') }}" alt="Galeri" class="w-5 h-5 mr-3">
                            Galeri
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>


        {{-- Main Content --}}
        <div class="flex-1 p-8">
            <div class="flex justify-between items-center mb-6"> 
                <div>
                    <h1 class="text-4xl font-medium text-black flex items-center">
                    <p class="text-sm pt-3 text-gray-500">
                        Admin / 
                        <span class="text-black"> Syarat & Ketentuan</span>
                    </p>
                </div>
            </div>

            {{-- Form Edit sk --}}
            <form action="{{ route('admin.sk.update', $sk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700">Ketentuan</label>
                    <input type="text" name="ketentuan" value="{{ old('ketentuan', $sk->ketentuan) }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Reservasi</label>
                    <input type="text" name="reservasi" value="{{ old('reservasi', $sk->reservasi) }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                </div>

                {{-- Buttons --}}
                <div class="flex gap-4">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Update
                    </button>

                    <a href="{{ route('admin.sk.index') }}"
                        class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
