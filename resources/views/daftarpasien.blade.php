<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Daftar Pasien | {{ config('app.name', 'Laravel') }}</title>
</head>

<body class="bg-white min-h-screen flex flex-col">

@include('components.navbar')

<div class="flex flex-1 items-center justify-center py-10 px-8 md:px-24">
    <div class="bg-white border-2 border-blue-200 rounded-2xl shadow-md p-10 w-full max-w-7xl">

        <div class="flex justify-center mb-4">
            <img src="{{ asset('image/list.png') }}" class="w-14 h-14">
        </div>

        <h2 class="text-center text-lg font-semibold mb-6">Daftar Pasien</h2>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left border border-gray-300 rounded">
                <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="px-4 py-2 border">No.</th>
                    <th class="px-4 py-2 border">Nama</th>
                    <th class="px-4 py-2 border">No. Antrean</th>
                    <th class="px-4 py-2 border">Ruang</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($patients as $patient)
                        <tr>
                            <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 border">{{ $patient->name }}</td>
                            <td class="px-4 py-2 border">{{ $patient->queue_number }}</td>
                            <td class="px-4 py-2 border">{{ $patient->room }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 border text-center text-gray-500">Tidak ada data pasien</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-center">
            <a href="{{ route('dashboard') }}"
               class="bg-[#40A2E3] text-white px-6 py-2 rounded font-semibold hover:bg-[#3490dc] transition duration-200">
                Kembali
            </a>
        </div>
    </div>
</div>

</body>
</html>
