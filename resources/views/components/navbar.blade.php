<div class="bg-[#40A2E3] flex items-center justify-between px-6 py-4 text-white">
    <div class="flex items-center gap-3">
        <img src="{{ asset('image/puskesmas.png') }}" alt="Logo" class="w-10 h-10">
        <span class="text-lg font-semibold">Puskesmas Masjid Raya</span>
    </div>
    <div class="flex items-center gap-2">
        <span class="text-base">{{ Auth::user()->username ?? 'admin_staff' }}</span>
        <div class="w-8 h-8 rounded-full bg-white/30 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('image/profile.png') }}" alt="User" class="w-7 h-7 object-cover">
        </div>
    </div>
</div>

