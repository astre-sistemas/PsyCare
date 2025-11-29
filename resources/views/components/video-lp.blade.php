<section id="video-section" class="relative min-h-screen flex items-center justify-center px-6 py-20 overflow-hidden">

    <!-- Vídeo de fundo -->
    <video autoplay muted loop playsinline
        class="absolute top-0 left-0 w-full h-full object-cover filter blur-sm brightness-75">
        <source src="{{ asset('videos/lp-video.mp4') }}" type="video/mp4">
        Seu navegador não suporta vídeo de fundo.
    </video>

    <!-- Overlay degradê opcional -->
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-[#DBC0DA]/70 to-[#F5E1F0]/70"></div>

    <!-- Container central com flex para vídeo + texto -->
    <div class="w-full max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10 relative z-10">

        <!-- Vídeo principal (iframe) -->
        <div class="flex-1 w-full md:w-1/2 rounded-2xl overflow-hidden shadow-lg">
            <div class="relative w-full pb-[56.25%] rounded-xl overflow-hidden">
                <video class="absolute top-0 left-0 w-full h-full object-cover" controls>
                    <source src="{{ asset('videos/lp-video.mp4') }}" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video>
            </div>
        </div>

        <!-- Texto glassy -->
        <div class="flex-1 w-full md:w-1/2 glassy p-8 rounded-2xl text-center md:text-left shadow-lg">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Muito Obrigado!</h2>
            <p class="text-lg md:text-xl text-gray-800">
                Agradecemos por assistir ao nosso vídeo. Esperamos que tenha gostado do conteúdo
                e que continue acompanhando nossas novidades. Estamos sempre disponíveis para
                compartilhar mais conhecimento e insights com você.
            </p>
            <a href="#section2"
                class="mt-6 inline-block px-6 py-3 text-white bg-purple-600 hover:bg-purple-700 rounded-xl font-semibold transition">
                Ver Mais →
            </a>
        </div>

    </div>
</section>