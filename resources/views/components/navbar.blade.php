<div class="bg-[#40A2E3] flex items-center justify-between px-6 py-4 text-white">
    <div class="flex items-center gap-3">
        <img src="{{ asset('image/puskesmas.png') }}" alt="Logo" class="w-10 h-10">
        <span class="text-lg font-semibold">Puskesmas Masjid Raya</span>
    </div>
    <div class="flex items-center gap-6">
        <form action="{{ route('logout') }}" method="POST" class="flex flex-row items-center justify-center gap-2">
            @csrf
            <button type="submit">Logout</button>

            <svg width="16px" height="16px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.5 14.5L8.5 6.5M2.5 12.5L4.5 14.5M4.5 10.5L6.5 12.5M11 7.5C9.067 7.5 7.5 5.933 7.5 4C7.5 2.067 9.067 0.5 11 0.5C12.933 0.5 14.5 2.067 14.5 4C14.5 5.933 12.933 7.5 11 7.5Z" stroke="#ffffff"/>
            </svg>
        </form>

        <div class="flex items-center gap-2">
            <span class="text-base">{{ Auth::user()->name ?? 'admin_staff' }}</span>
            <div class="w-8 h-8 rounded-full bg-white/30 flex items-center justify-center overflow-hidden">
                <img src="{{ asset('image/profile.png') }}" alt="User" class="w-7 h-7 object-cover">
            </div>
        </div>
    </div>
</div>

