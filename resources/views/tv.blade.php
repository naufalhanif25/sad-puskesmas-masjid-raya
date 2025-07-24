<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TV | {{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/tv.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="overflow-hidden w-screen h-screen flex flex-col items-center justify-center">
    <header class="blue-bg w-screen h-fit py-[18px] px-[32px] rounded-b-[16px] flex flex-row items-center justify-center">
        <span class="flex items-center justify-center size-[48px]">
            <img src="image/puskesmas.png" alt="Puskesmas" class="h-full">
        </span>
        <span class="h-fit grow flex flex-col items-center justify-center gap-[4px]">
            <h1 class="montserrat-bold m-0 text-[20pt] leading-[24pt] text-white">Puskesmas Masjid Raya</h1>
            <h1 class="montserrat-medium m-0 text-[12pt] leading-[16pt] text-white">Gp. Beurandeh, Kec. Masjid Raya, Kab. Aceh Besar, Aceh</h1>
        </span>
        <span class="flex items-center justify-center size-[48px]">
            <img src="image/aceh_besar.png" alt="Aceh Besar" class="h-full">
        </span>
    </header>

    <main class="w-screen grow flex flex-col p-[16px] gap-[16px] items-center justify-center">
        <section class="fade-green-bg w-full p-[16px] grow gap-[16px] flex flex-row items-center justify-center rounded-[16px]">
            <div class="grow h-full rounded-[12px] bg-white flex items-center justify-center">
                <p>Slot</p>
            </div>
            <div class="w-[48%] h-full rounded-[12px] overflow-hidden bg-white flex flex-col items-start justify-center">
                <span class="light-blue-bg w-full py-[16px] flex items-center justify-center">
                    <h1 class="poppins-semibold text-[16pt] text-white">No. Antrean</h1>
                </span>
                <!-- TODO: Backend nomor antrean -->
                <span id="tv-queue-number" class="light-green-bg w-full grow flex items-center justify-center">
                    <h1 class="poppins-medium text-[128pt] text-white">25</h1>
                </span>
                <!-- TODO: Backend ruang -->
                <span id="tv-queue-room" class="light-blue-bg w-full py-[16px] flex items-center justify-center">
                    <h1 class="poppins-semibold text-[16pt] text-white">Ruang: B2</h1>
                </span>
            </div>
        </section>
        <section class="fade-blue-bg w-full h-[240px] p-[16px] gap-[16px] grid grid-cols-4 rounded-[16px]">
            <div class="light-blue-bg grow h-full rounded-[12px] leading-none gap-[12px] flex flex-col items-center justify-center">
                <p class="poppins-medium m-0 text-[14pt] text-wrap text-center text-white">Pelayanan <br> Gigi dan Mulut</p>
                <h1 class="poppins-bold m-0 text-[64pt] text-center text-white">R1</h1>
            </div>
            <div class="light-blue-bg grow h-full rounded-[12px] leading-none gap-[12px] flex flex-col items-center justify-center">
                <p class="poppins-medium m-0 text-[14pt] text-wrap text-center text-white">Pelayanan <br> Usia Dewasa dan Lanjut Usia</p>
                <h1 class="poppins-bold m-0 text-[64pt] text-center text-white">R2</h1>
            </div>
            <div class="light-blue-bg grow h-full rounded-[12px] leading-none gap-[12px] flex flex-col items-center justify-center">
                <p class="poppins-medium m-0 text-[14pt] text-wrap text-center text-white">Pelayanan <br> Anak dan Remaja</p>
                <h1 class="poppins-bold m-0 text-[64pt] text-center text-white">R3</h1>
            </div>
            <div class="light-blue-bg grow h-full rounded-[12px] leading-none gap-[12px] flex flex-col items-center justify-center">
                <p class="poppins-medium m-0 text-[14pt] text-wrap text-center text-white">Pelayanan <br> Keluarga Berencana</p>
                <h1 class="poppins-bold m-0 text-[64pt] text-center text-white">R4</h1>
            </div>
        </section>
    </main>

    <footer class="light-blue-bg w-screen relative h-[48px]">
        <div class="light-green-bg absolute left-0 h-full w-[128px] z-100 flex items-center justify-center">
            <h1 id="tv-clock-text" class="montserrat-semibold text-[16pt] text-white">00:00</h1>
        </div>
        <div id="tv-running-text-container" class="w-full h-full relative overflow-hidden flex flex-row items-center justify-start">
            <p class="tv-running-text montserrat-semibold inline-block relative text-nowrap m-0 text-[14pt] text-white w-fit px-[64px]">
                Seluruh pelayanan di Puskesmas Masjid Raya ditangani oleh Dokter, Perawat, dan Staf yang profesional serta ramah dalam melayani pasien.
            </p>
            <p class="tv-running-text montserrat-semibold inline-block relative text-nowrap m-0 text-[14pt] text-white w-fit px-[64px]">
                Jam operasional Puskesmas: Senin - Jumat, 08.00 - 16.00 WIB.
            </p>
            <p class="tv-running-text montserrat-semibold inline-block relative text-nowrap m-0 text-[14pt] text-white w-fit px-[64px]">
                Dapatkan layanan imunisasi dan konsultasi kesehatan gratis setiap hari Rabu!
            </p>
        </div>
    </footer>

    <script src="js/clock.js"></script>
    <script src="js/running_text.js"></script>
</body>
</html>