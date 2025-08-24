{{-- resources/views/admin/tour/create.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Paket Tour</title>
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

        <main class="flex-1 p-8">
            {{-- Header --}}
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-4xl font-medium text-black">Paket Tour</h1>
                    <p class="text-sm pt-3 text-gray-500">Admin / Paket Tour / <span class="text-black">Tambah Paket Tour</span></p>
                </div>
            </div>


            <div class="max-w-4xl mt-10 pl-6 pr-6 pt-6 rounded-lg bg-white min-h-screen">
                {{-- Form Tambah Tour --}}
                <form action="{{ route('admin.tour.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700">Nama Paket</label>
                        <input type="text" name="nama" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Detail Paket</label>
                        <input type="text" name="tempat" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Harga / Hari</label>
                        <input type="number" name="harga" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Deskripsi</label>
                        <input type="text" name="deskripsi" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Destinasi</label>
                        <input type="text" name="destinasi" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Include</label>
                        <input type="text" name="include" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Upload Gambar</label>
                        <input type="file" name="gambar" id="gambar" accept="image/*" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring">
                        <!-- Preview Gambar -->
                        <img id="preview" src="" alt="Preview Gambar" class="mt-2 max-w-xs rounded-lg shadow-md" style="display: none;">
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-end gap-4 mt-90">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Save
                        </button>

                        <a href="{{ route('admin.tour.index') }}"
                            class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Cancel</a>
                    </div>
                </form>
            </div>
        </main>

    </div>  
    
    
    <script>
        const gambarInput = document.getElementById('gambar');
        const preview = document.getElementById('preview');

        gambarInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block'; // tampilkan preview
                }
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        });
    </script>
</body>

</html>
