<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Tambah Pasien | {{ config('app.name', 'Laravel') }}</title>
</head>

<body class="bg-white min-h-screen flex flex-col">

@include('components.navbar')

<div class="flex flex-1 items-center justify-center py-10">
    <div class="bg-white border border-blue-200 rounded-xl shadow-md p-8 w-full max-w-md">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('image/tambahpasien.png') }}" class="w-14 h-14">
        </div>
        <h2 class="text-center text-lg font-semibold mb-6">Data Pasien</h2>

        {{-- Pesan Sukses --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Form Tambah Pasien --}}
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf

            <!-- No Antrian -->
            <div class="mb-4">
                <input type="text" name="queue_number" placeholder="No. pasien"
                       class="w-full border border-black/30 rounded px-4 py-2 text-black/50 placeholder-black/50 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <!-- Nama & Jenis Kelamin -->
            <div class="mb-4 flex gap-2">
                <input type="text" name="name" placeholder="Nama pasien"
                       class="w-2/3 border border-black/30 rounded px-4 py-2 text-black/50 placeholder-black/50 focus:outline-none focus:ring-2 focus:ring-blue-400" required>

                <select name="gender"
                        class="w-1/3 border border-black/30 rounded px-2 py-2 bg-white text-black/50 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                    <option value="" disabled selected>J. kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <!-- Alamat -->
            <div class="mb-4">
                <input type="text" name="address" placeholder="Alamat"
                       class="w-full border border-black/30 rounded px-4 py-2 text-black/50 placeholder-black/50 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <!-- Kode Ruangan -->
            <div class="mb-6">
                <input type="text" name="room" placeholder="Kode ruangan"
                       class="w-full border border-black/30 rounded px-4 py-2 text-black/50 placeholder-black/50 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <a href="{{ route('dashboard') }}"
                   class="w-1/2 text-center bg-[#0D9276] text-white px-4 py-3 rounded font-semibold hover:bg-[#0b7f66] transition duration-200">
                    Cancel
                </a>

                <button type="submit"
                        class="w-1/2 bg-[#40A2E3] text-white px-4 py-3 rounded font-semibold hover:bg-[#3490dc] transition duration-200">
                    Tambah Pasien
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
