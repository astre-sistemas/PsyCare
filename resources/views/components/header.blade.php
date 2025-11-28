<header id="main-header"
    class="glassy fixed top-0 left-0 w-full z-50 opacity-0 transition-opacity duration-700">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">

            {{-- LOGO --}}
            <div class="flex items-center pl-2">
                <img src="{{ env('LOGO_URL') }}" class="h-10 w-auto" alt="Logo">
            </div>

            {{-- MENU CENTRALIZADO --}}
            <nav class="hidden md:flex flex-1 justify-center">
                <ul class="flex items-center gap-10 text-[15px] font-medium">
                    <li><a class="menu-link" href="#">Ana Sayfa</a></li>
                    <li><a class="menu-link" href="#">Psikologlar</a></li>
                    <li><a class="menu-link" href="#">Hakkımızda</a></li>
                    <li><a class="menu-link" href="#">Blog</a></li>
                </ul>
            </nav>

            {{-- AÇÕES (LOGIN E CADASTRO) --}}
            <div class="hidden md:flex items-center gap-4 pr-2">
                <a href="#" class="px-5 py-2 rounded-md font-medium menu-link">
                    Entrar
                </a>

                <a href="#" class="px-5 py-2 rounded-md font-semibold btn-primary">
                    Cadastrar de Graça
                </a>
            </div>

        </div>
    </div>
</header>