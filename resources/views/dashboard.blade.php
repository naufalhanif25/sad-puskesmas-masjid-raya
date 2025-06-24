<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Dashboard-Admin</title>
</head>

<body class="min-h-screen flex flex-col">
@include('components.navbar')

<div class="flex-grow flex justify-center items-center">
    <div class="flex gap-5">

        <!-- Card Tambah Pasien -->
        <a href="{{ route('addpasien') }}" class="bg-white rounded-2xl shadow-lg w-96 h-96 flex flex-col items-center justify-center border border-blue-200 hover:shadow-xl hover:bg-blue-50 transition">
            <img src="{{ asset('image/tambahpasien.png') }}" class="w-28 h-28 mb-5">
            <span class="text-[#5FB1E7] font-medium text-2xl">Tambah Pasien</span>
        </a>

        <!-- Card Daftar Antrean -->
        <a href="{{ route('daftarpasien') }}" class="bg-white rounded-2xl shadow-lg w-96 h-96 flex flex-col items-center justify-center border border-blue-200 hover:shadow-xl hover:bg-blue-50 transition">
            <img src="{{ asset('image/list.png') }}" class="w-28 h-28 mb-5">
            <span class="text-[#5FB1E7] font-medium text-2xl">Daftar Antrean</span>
        </a>

    </div>
</div>
</body>

</html>
