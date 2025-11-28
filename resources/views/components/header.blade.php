<header id="main-header" class="glassy transition-all duration-300 fixed top-0 left-0 w-full bg-whiteshadow-md"
        style="border-color: var(--primary-light)">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">

            {{-- LOGO --}}
            <div class="flex items-center gap-3">
                <img src="{{ env('LOGO_URL') }}" class="h-8 w-auto" alt="Logo">
            </div>

            {{-- MENU --}}
            <nav class="hidden md:block">
                <ul class="flex items-center gap-10 text-[15px] font-medium">
                    <li><a class="menu-link" href="#">Ana Sayfa</a></li>
                    <li><a class="menu-link" href="#">Psikologlar</a></li>
                    <li><a class="menu-link" href="#">Hakkımızda</a></li>
                    <li><a class="menu-link" href="#">Blog</a></li>
                </ul>
            </nav>

        </div>
    </div>
</header>

