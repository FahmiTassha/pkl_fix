{{-- resources/views/admin/sewamotor.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Galeri</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <style>
        /* Border umum untuk tabel agar garis antar kolom tetap terlihat */
        #motorTable th,
        #motorTable td {
            border: 1px solid #ccc; 
            border-collapse: collapse;
        }

        /* Hilangkan border atas untuk semua sel */
        #motorTable th,
        #motorTable td {
            border-top: transparent !important;
        }

        /* Hilangkan border kiri dan kanan untuk kolom pertama (#) */
        #motorTable th:first-child,
        #motorTable td:first-child {
            border-left: transparent !important;
            border-right: transparent !important;
        }

        /* Hilangkan border kiri dan kanan untuk header jika ingin sama dengan desain */
        #motorTable thead th {
            border-left: transparent !important;
            border-right: transparent !important;
        }

        /* Pastikan border antar kolom tetap terlihat (kecuali kolom pertama) */
        #motorTable th:not(:first-child),
        #motorTable td:not(:first-child) {
            border-left: 1px solid #ccc !important;
            border-right: 1px solid #ccc !important;
        }
        /* Kolom terakhir (Aksi) → border kanan transparan */
        #motorTable th:last-child,
        #motorTable td:last-child {
            border-right: transparent !important;
        }
    </style>
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
                        class="inline-flex items-center pt-1 pl-4 pb-1 pr-5"> 
                            <img src="{{ asset('icon/sk.png') }}" alt="S&K" class="w-5 h-5 mr-3">
                            S&K
                        </a>
                    </li>
                    <li>
                        <a href="#" 
                        class="inline-flex items-center pl-4 py-3 pr-5 bg-[#006895] rounded-lg text-white hover:bg-[#00577a]">
                           <img src="{{ asset('icon/galeri.png') }}" alt="Galeri" class="w-5 h-5 mr-3">
                            Galeri
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 p-8">
            {{-- Header --}}
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-4xl font-medium text-black">GALERI</h1>
                    <p class="text-sm pt-3 text-gray-500">Admin / <span class="text-black">Galeri</span></p>
                </div>
            </div>

            {{-- Form Tambah Gambar --}}
            <div class="bg-white p-4 rounded shadow mb-6">
                <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-center space-x-4">
                        <input type="file" name="gambar" class="border rounded px-3 py-2 w-full" required>
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Tambah Gambar
                        </button>
                    </div>
                    @error('gambar')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </form>
            </div>

            {{-- Daftar Galeri --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @forelse($galeris as $galeri)
                    <div class="relative bg-gray-100 p-2 rounded shadow">
                        <img src="{{ asset('galeri/' . $galeri->gambar) }}" alt="Gambar" class="w-full h-40 object-cover rounded">
                        <form action="{{ route('admin.galeri.destroy', $galeri->id) }}" method="POST" class="absolute top-2 right-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus gambar ini?')" 
                                class="bg-red-600 text-white px-2 py-1 text-xs rounded hover:bg-red-700">
                                Hapus
                            </button>
                        </form>
                    </div>
                @empty
                    <p class="col-span-4 text-gray-500">Belum ada gambar di galeri.</p>
                @endforelse
            </div>
                {{-- Pagination di bawah tabel --}}
                <div class="mt-4 flex items-center justify-between">
                    <div class="flex space-x-1">
                        <button id="prevPage" class="px-3 py-1 border rounded-md hover:bg-gray-100">&lt;</button>
                        <div id="pageNumbers" class="flex space-x-1"></div>
                        <button id="nextPage" class="px-3 py-1 border rounded-md hover:bg-gray-100">&gt;</button>
                       
                        <select id="rowsPerPage" class="border rounded-md px-2 py-1 w-30 ml-4">
                            <option value="5">5</option>
                            <option value="6" selected>6</option>
                            <option value="10">10</option>
                        </select>
                        <label class="mt-1" for="rowsPerPage">/Page</label>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const rows = Array.from(document.querySelectorAll('#motorTableBody tr'));
        const pageNumbersContainer = document.getElementById('pageNumbers');
        const prevButton = document.getElementById('prevPage');
        const nextButton = document.getElementById('nextPage');
        const rowsPerPageSelect = document.getElementById('rowsPerPage');

        let currentPage = 1;
        let rowsPerPage = parseInt(rowsPerPageSelect.value);
        let totalPages = Math.ceil(rows.length / rowsPerPage);

        function renderPageNumbers() {
            pageNumbersContainer.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.textContent = i;
                btn.className = `px-3 py-1 border rounded-md hover:bg-gray-100 ${i === currentPage ? 'border-blue-500' : ''}`;
                btn.addEventListener('click', () => {
                    currentPage = i;
                    showPage(currentPage);
                });
                pageNumbersContainer.appendChild(btn);
            }
        }

        function showPage(page) {
            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            rows.forEach((row, index) => {
                row.style.display = (index >= start && index < end) ? '' : 'none';
            });
            renderPageNumbers();
        }

        prevButton.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                showPage(currentPage);
            }
        });

        rowsPerPageSelect.addEventListener('change', () => {
            rowsPerPage = parseInt(rowsPerPageSelect.value);
            totalPages = Math.ceil(rows.length / rowsPerPage);
            currentPage = 1;
            showPage(currentPage);
        });

        showPage(currentPage);
    });
    </script>


</body>
</html>
