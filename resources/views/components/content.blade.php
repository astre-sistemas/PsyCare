<section id="hero" class="relative min-h-screen flex flex-col items-center justify-center text-center overflow-hidden">

    <!-- Fundo animado -->
    <div id="vanta-bg" class="absolute inset-0 -z-10"></div>

    <!-- Conteúdo -->
    <h2 class="text-4xl font-bold">Bem-vindo à nossa Landing Page</h2>

    <p class="mt-4 text-gray-700 max-w-md">
        Aqui vai um texto sobre a sua empresa ou produto.
    </p>

    <a href="#contato" class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg">
        Quero Saber Mais
    </a>
</section>

<!-- ORDEM CORRETA -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>

<script>
    VANTA.FOG({
        el: "#vanta-bg",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        highlightColor: 0xff00ff,
        midtoneColor: 0x00ffff,
        lowlightColor: 0x0000ff,
        baseColor: 0xffffff,
        blurFactor: 0.5
    })
</script>
