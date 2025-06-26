<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Data Pasien | {{ config('app.name', 'Laravel') }}</title>
</head>

<body class="bg-white min-h-screen flex flex-col">

@include('components.navbar')

<div class="flex flex-1 items-center justify-center py-10 px-10 md:px-40">
    <div class="bg-white shadow-md rounded-xl p-8 w-full max-w-2xl border border-blue-100">

        <h2 class="text-center text-lg font-bold mb-8">Data Pasien</h2>

        <!-- Data Pasien -->
        <div class="space-y-5">
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
            <div class="flex items-stretch justify-between gap-4 pt-6">
                <!-- Status Box -->
                <div class="flex justify-between items-center border border-gray-300 rounded-md px-4 py-2 bg-white w-full max-w-[260px]">
                    <span class="font-semibold text-gray-800">Status</span>
                    <span class="text-green-600 font-semibold">Ada pasien</span>
                </div>

                <!-- Tombol Selesai -->
                <form action="#" method="POST" class="w-full">
                    @csrf
                    <button type="submit"
                            class="bg-gradient-to-r from-[#40A2E3] to-[#60B8F0] text-white font-bold px-4 py-2 w-full rounded-md shadow text-center hover:opacity-90 transition">
                        Selesai
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
