<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Data Pasien | {{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="css/global.css">
</head>

<body class="bg-white min-h-screen flex flex-col">

@include('components.navbar')

<div class="flex flex-1 items-center justify-center py-10 px-10 md:px-40">
    <div class="bg-white shadow-md rounded-xl p-8 w-full max-w-3xl border border-blue-100">

        <h2 class="text-center text-lg font-bold mb-8">Data Pasien</h2>

        <!-- Data Pasien -->
        <div class="space-y-5">
            {{-- TODO: Logika data pasien --}}
            <!-- No Antrean -->
            <div>
                <label class="block font-semibold mb-1">No. Antrean</label>
                <p class="border border-gray-300 rounded-md px-4 py-2 bg-gray-50">27</p>
            </div>

            <!-- Nama -->
            <div>
                <label class="block font-semibold mb-1">Nama</label>
                <p class="border border-gray-300 rounded-md px-4 py-2 bg-gray-50">John Lennon</p>
            </div>

            <!-- Jenis Kelamin -->
            <div>
                <label class="block font-semibold mb-1">Jenis Kelamin</label>
                <p class="border border-gray-300 rounded-md px-4 py-2 bg-gray-50">Laki-laki</p>
            </div>

            <!-- Alamat -->
            <div>
                <label class="block font-semibold mb-1">Alamat</label>
                <p class="border border-gray-300 rounded-md px-4 py-2 bg-gray-50">Kajhu, Kec. Baitussalam, Kab. Aceh Besar</p>
            </div>

            <!-- Status dan Tombol -->
            <div class="w-full grid grid-cols-3 gap-4 pt-6">
                {{-- TODO: Logika status --}}
                <!-- Status Box -->
                <div class="flex gap-[12px] justify-between items-center border border-gray-300 rounded-md px-4 py-2 bg-white w-full max-w-[260px]">
                    <span class="font-semibold text-gray-800">Status</span>
                    <span class="text-green-600 text-left text-nowrap overflow-hidden font-medium">Sedang proses</span>
                </div>

                {{-- TODO: Logika selesai dan selanjutnya --}}
                <!-- Tombol Selesai -->
                <form action="#" method="POST" class="w-full">
                    @csrf
                    <button type="submit"
                            class="bg-[#0D9276] text-white font-bold px-4 py-2 w-full rounded-md shadow text-center hover:opacity-90 transition">
                        Selesai
                    </button>
                </form>
                <form action="#" method="POST" class="w-full">
                    @csrf
                    <button type="submit"
                            class="bg-[#40A2E3] text-white font-bold px-4 py-2 w-full rounded-md shadow text-center hover:opacity-90 transition">
                        Selanjutnya
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
