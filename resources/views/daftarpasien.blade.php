<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Daftar Pasien</title>
</head>

<body class="bg-white min-h-screen flex flex-col">

@include('components.navbar')

<div class="flex flex-1 items-center justify-center py-10">
    <div class="bg-white border-2 border-blue-200 rounded-2xl shadow-md p-10 w-full max-w-5xl">

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
                <tr>
                    <td class="px-4 py-2 border">1</td>
                    <td class="px-4 py-2 border">Oliver Sykes</td>
                    <td class="px-4 py-2 border">28</td>
                    <td class="px-4 py-2 border">D</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">2</td>
                    <td class="px-4 py-2 border">Synyster Gates</td>
                    <td class="px-4 py-2 border">29</td>
                    <td class="px-4 py-2 border">E</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">3</td>
                    <td class="px-4 py-2 border">Matt Shadows</td>
                    <td class="px-4 py-2 border">30</td>
                    <td class="px-4 py-2 border">A</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">4</td>
                    <td class="px-4 py-2 border">M. Iqbal</td>
                    <td class="px-4 py-2 border">31</td>
                    <td class="px-4 py-2 border">B</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">5</td>
                    <td class="px-4 py-2 border">Sarah Nur</td>
                    <td class="px-4 py-2 border">32</td>
                    <td class="px-4 py-2 border">C</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">6</td>
                    <td class="px-4 py-2 border">Ahmad Rizky</td>
                    <td class="px-4 py-2 border">33</td>
                    <td class="px-4 py-2 border">D</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">7</td>
                    <td class="px-4 py-2 border">Dewi Lestari</td>
                    <td class="px-4 py-2 border">34</td>
                    <td class="px-4 py-2 border">A</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">8</td>
                    <td class="px-4 py-2 border">Rangga Saputra</td>
                    <td class="px-4 py-2 border">35</td>
                    <td class="px-4 py-2 border">C</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">9</td>
                    <td class="px-4 py-2 border">Nadia Zahra</td>
                    <td class="px-4 py-2 border">36</td>
                    <td class="px-4 py-2 border">B</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 border">10</td>
                    <td class="px-4 py-2 border">Fauzan Aulia</td>
                    <td class="px-4 py-2 border">37</td>
                    <td class="px-4 py-2 border">E</td>
                </tr>
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
