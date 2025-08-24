{{-- resources/views/admin/sewamotor.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Sewa Motor</title>
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
                        class="inline-flex items-center pl-4 py-3 pr-5 bg-[#006895] rounded-lg text-white hover:bg-[#00577a]">
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
        <main class="flex-1 p-8">
            {{-- Header --}}
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h1 class="text-4xl font-medium text-black">Sewa Motor</h1>
                    <p class="text-sm pt-3 text-gray-500">Admin / <span class="text-black">Sewa Motor</span></p>
                </div>
            </div>

            {{-- Tambah Motor --}}
            <div class="mb-4 mt-8">
                <a href="{{ route('admin.motor.create') }}"
                    class="px-4 py-2 border border-blue-500 text-blue-600 rounded-lg hover:bg-blue-50">
                    + TAMBAH MOTOR
                </a>
            </div>

            {{-- Tabel Motor --}}
            <div id="motorTable" class="bg-white mt-8 px-5 py-4 rounded-md">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-100 text-[#6C757D]">
                        <tr>
                            <th class="px-4 py-2 border text-center font-normal w-18">#</th>
                            <th class="px-4 py-2 border font-normal w-48">Nama</th>
                            <th class="px-4 py-2 border font-normal w-35">Gambar</th>
                            <th class="px-4 py-2 border font-normal w-48">Tempat Duduk</th>
                            <th class="px-4 py-2 border font-normal">Harga / Hari</th>
                            <th class="px-4 py-2 border text-center font-normal w-48">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="motorTableBody">
                        @foreach ($motors as $i => $motor)
                            <tr>
                                <td class="px-4 py-2 border text-center">{{ $i + 1 }}</td>
                                <td class="px-4 py-2 border">{{ $motor->nama }}</td>
                                <td class="px-4 py-2 border">
                                    @if ($motor->gambar)
                                        <span class="text-green-600 flex items-center gap-1">
                                            <span class="w-3 h-3 rounded-full bg-green-600 inline-block"></span>
                                            Ada
                                        </span>
                                    @else
                                        <span class="text-red-600 flex items-center gap-1">
                                            <span class="w-3 h-3 rounded-full bg-red-600 inline-block"></span>
                                            Tidak ada
                                        </span>
                                    @endif
                                </td>
                                <td class="px-4 py-2 border">{{ $motor->tempat }}</td>
                                <td class="px-4 py-2 border">Rp {{ number_format($motor->harga, 0, ',', '.') }}</td>
                                <td class="px-4 py-2 border text-center space-x-2">
                                    <a href="{{ route('admin.motor.show', $motor->id) }}"
                                        class="px-2 py-1 border rounded hover:bg-gray-100">
                                        <i class="ri-external-link-fill"></i>
                                    </a>
                                    <a href="{{ route('admin.motor.edit', $motor->id) }}"
                                        class="px-2 py-1 border rounded hover:bg-gray-100">
                                        <i class="ri-pencil-fill"></i>
                                    </a>
                                    <form action="{{ route('admin.motor.destroy', $motor->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-2 py-1 border rounded hover:bg-red-100 text-red-600"
                                            onclick="return confirm('Yakin hapus motor ini?')">
                                            <i class="ri-delete-bin-fill"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
