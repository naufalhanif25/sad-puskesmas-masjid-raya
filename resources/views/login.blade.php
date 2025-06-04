<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | {{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="sea-blue-bg w-screen h-screen overflow-hidden flex flex-col gap-[36px] items-center justify-center">
    <div class="flex flex-col items-center justify-center gap-[16px] leading-none">
        <img src="image/puskesmas.png" alt="Puskesmas" class="h-[86px]">
        <span class="flex flex-col items-center justify-center gap-[4px]">
            <h2 class="poppins-semibold m-0 text-[16pt]">Sistem Antrean Digital</h2>
            <h2 class="poppins-semibold m-0 text-[20pt]">Puskesmas Masjid Raya</h2>
        </span>
    </div>

    <main class="login-container w-[420px] h-fit bg-white rounded-[16px] flex flex-col items-center justify-center gap-[32px] px-[24px] py-[32px]">
        <h1 class="poppins-semibold text-[20pt]">Login</h1>
        <form method="POST" action="/login" class="flex flex-col items-center justify-center gap-[16px] w-full h-fit">
            @csrf
            <select name="role" id="role" class="login-role-selector w-full p-[12px] rounded-[8px] poppins-normal text-[12pt] cursor-pointer">
                <option value="" disabled selected>Login sebagai</option>
                <option value="admin">Admin</option>
                <option value="staf">Staf</option>
            </select>
            <input type="text" class="login-input w-full p-[12px] rounded-[8px] poppins-normal text-[12pt]" name="nip" placeholder="NIP">
            <input type="password" class="login-input w-full p-[12px] rounded-[8px] poppins-normal text-[12pt]" name="password" placeholder="Password">
            @if ($errors->any())
                <div class="border-[2px] border-red-300 w-full py-[12px] rounded-[8px] bg-red-100 text-center poppins-normal text-[10pt] text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="login-button py-[8px] px-[32px] rounded-[8px] poppins-semibold text-[12pt] text-white mt-[24px] cursor-pointer">Login</button>
        </form>
    </main>

    <p class="poppins-normal text-[8pt] opacity-[0.5]">Copyright 2025 Puskesmas Masjid Raya. All Rights Reserved</p>
</body>
</html>