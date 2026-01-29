<aside class="w-72 h-full flex flex-col bg-white dark:bg-[#1f0d0f] border-r p-6 justify-between">
    <!-- LOGO -->
    <div class="flex flex-col gap-8">
        <div class="flex gap-3 items-center">
            <div class="bg-primary rounded-full size-10 flex items-center justify-center text-white">
                <span class="material-symbols-outlined">link</span>
            </div>
            <div>
                <h1 class="font-extrabold">LINKUP</h1>
                <p class="text-primary text-xs uppercase">Connect</p>
            </div>
        </div>

        <!-- NAV -->
        <nav class="flex flex-col gap-2">
            <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
            <a href="{{ route('messages') }}" class="nav-link">Messages</a>
            <a href="{{ route('notifications') }}" class="nav-link">Notifications</a>
            <a href="{{ route('settings') }}" class="nav-link-active">Settings</a>
        </nav>
    </div>

    <!-- PRO -->
    <div class="bg-primary/5 p-5 rounded-2xl">
        <p class="font-bold text-sm">Upgrade to Pro</p>
        <button class="mt-3 w-full bg-primary text-white py-2 rounded-full">
            Get LINKUP Pro
        </button>
    </div>
</aside>
