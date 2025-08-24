<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket Tour</title>
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
                        <a href="{{ route('admin.mobil.index') }}" 
                        class="inline-flex items-center pl-4 py-3 pr-5 mt-5">
                            <img src="{{ asset('icon/mobil.png') }}" alt="Sewa Mobil" class="w-5 h-5 mr-3">
                            Sewa Mobil
                        </a>
                    <li>
                        <a href="{{ route('admin.motor.index') }}" 
                        class="inline-flex items-center pl-4 pb-1 pr-5 ">
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
                        class="inline-flex items-center pl-4 py-3 pr-5 bg-[#006895] rounded-lg text-white hover:bg-[#00577a]">
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
                        class="inline-flex items-center pl-4 pt-3 pb-1 pr-5 text-white">
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
                     <img src="{{ asset('icon/panahkiri.png') }}" alt="panah" class="w-8 h-8 mr-2">{{ $tour->nama }}</h1>
                    <p class="text-sm pt-3 text-gray-500">
                        Admin / Paket Tour / 
                        <span class="text-black">{{ $tour->nama }}</span>
                    </p>
                </div>
            </div>

            {{-- Form Edit Tour --}}
            <form action="{{ route('admin.tour.update', $tour->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700">Nama Paket Tour</label>
                    <input type="text" name="nama" value="{{ old('nama', $tour->nama) }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Detail Paket</label>
                    <input type="text" name="tempat" value="{{ old('tempat', $tour->tempat) }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Harga / Hari</label>
                    <input type="number" name="harga" value="{{ old('harga', $tour->harga) }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Deskripsi Paket</label>
                    <input type="text" name="deskripsi" value="{{ old('deskripsi', $tour->deskripsi) }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Destinasi</label>
                    <input type="text" name="destinasi" value="{{ old('destinasi', $tour->destinasi) }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Include</label>
                    <input type="text" name="insclude" value="{{ old('include', $tour->include) }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Upload Gambar</label>
                    @if($tour->gambar)
                        <img src="{{ asset('tour/' . $tour->gambar) }}" alt="{{ $tour->nama }}"
                                class="mx-auto h-40 object-contain" />
                    @endif
                    <input type="file" name="gambar"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring">
                    <p class="text-gray-500 text-sm">Biarkan kosong jika tidak ingin mengganti gambar</p>
                </div>

                {{-- Buttons --}}
                <div class="flex gap-4">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Update
                    </button>

                    <a href="{{ route('admin.tour.index') }}"
                        class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
