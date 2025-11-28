<style>
    .shine-badge {
        position: relative;
        overflow: hidden;
    }

    .shine-badge::after {
        content: "";
        position: absolute;
        top: 0;
        left: -150%;
        width: 120%;
        height: 100%;
        background: linear-gradient(120deg,
                transparent 0%,
                rgba(255, 255, 255, 0.55) 50%,
                transparent 100%);
        transform: skewX(-20deg);
        opacity: 0;
        animation: shine 4s ease-in-out infinite;
    }

    @keyframes shine {

        0%,
        72% {
            opacity: 0;
            left: -150%;
        }

        /* começa a aparecer (suave) */
        78% {
            opacity: 0.6;
            left: -20%;
        }

        /* pico do brilho cruzando o badge */
        82% {
            opacity: 0.95;
            left: 40%;
            transform: skewX(-18deg) scaleX(1.03);
        }

        /* desvanecer rapidamente após o pico */
        86% {
            opacity: 0;
            left: 160%;
        }

        100% {
            opacity: 0;
            left: 160%;
        }
    }

    /* acessibilidade: usuários que preferem menos movimento não recebem animação */
    @media (prefers-reduced-motion: reduce) {
        .shine-badge::after {
            animation: none;
            opacity: 0;
        }
    }
</style>
<section id="hero"
    class="relative min-h-screen flex flex-col items-center justify-center text-center px-6 overflow-hidden">

    <!-- Fundo Vanta -->
    <div id="vanta-bg" class="absolute inset-0 -z-10 opacity-0 transition-opacity duration-[1200ms]"></div>

    <!-- Badge Glassy -->
    <div class="glassy- shine-badge px-6 py-2 rounded-full mb-8 text-yellow-800 text-sm shadow-lg flex items-center gap-2 relative overflow-hidden backdrop-blur-xl opacity-0 transition-opacity duration-[900ms]"
        style="background: linear-gradient(90deg, #d4af37cc, #f1c94acc, #d4af37cc);">
        <span class="material-icons-round text-yellow-800 text-base">verified</span>
        Qualidade
        <a href="https://astresistemas.com.br/" class="hover:text-[#004aad] font-semibold">Astre</a>
    </div>

    <!-- Título -->
    <h1 class="text-5xl md:text-6xl font-bold text-white drop-shadow-lg opacity-0 transition-opacity duration-[900ms]">
        PsyCare Nedir?
    </h1>

    <!-- Texto -->
    <p class="mt-6 text-lg md:text-xl max-w-2xl text-white/90 leading-relaxed opacity-0 transition-opacity duration-[900ms]">
        PsyCare, psikolojik destek almanız gereken anlarda yanınızda olan,
        lisanslı ve deneyimli psikologları size ulaştıran modern bir platformdur.
    </p>

    <!-- BOTÕES -->
    <div id="hero-ctas" class="flex flex-col sm:flex-row items-center gap-4 mt-10 opacity-0 transition-opacity duration-[900ms]">

        <!-- Botão primário (cor base) -->
        <a href="./app/login" class="px-8 py-4 text-lg rounded-xl font-semibold text-white shadow-xl transition"
            style="background: var(--primary-dark)">
            Entrar
        </a>

        <!-- Botão secundário (glassy branco) -->
        <a href="#video-section" class="px-8 py-4 text-lg rounded-xl font-semibold border glassy-white text-white/90 shadow-xl 
           transition flex items-center gap-2 hover:bg-white/20 backdrop-blur-md">
            Ver Mais
            <span class="text-2xl leading-none">↓</span>
        </a>
    </div>
</section>


<!-- ORDEM CORRETA -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.fog.min.js"></script>

<script>
    (function () {
        const styles = getComputedStyle(document.documentElement);
        const base = styles.getPropertyValue('--primary').trim() || '#2563eb';
        const light = styles.getPropertyValue('--primary-light').trim() || base;
        const dark = styles.getPropertyValue('--primary-dark').trim() || base;

        const hexToInt = (hex) => {
            const clean = hex.replace('#', '').slice(0, 6);
            return parseInt(`0x${clean}`);
        };

        const vanta = VANTA.FOG({
            el: "#vanta-bg",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            highlightColor: hexToInt(light),
            midtoneColor: hexToInt(base),
            lowlightColor: hexToInt(dark),
            baseColor: 0xffffff,
        });

        // Sequência de animações: BG -> Texto -> Header
        const bg = document.getElementById('vanta-bg');
        const badge = document.querySelector('#hero .shine-badge');
        const title = document.querySelector('#hero h1');
        const paragraph = document.querySelector('#hero p');
        const ctas = document.getElementById('hero-ctas');
        const header = document.getElementById('main-header');

        // Garantir que Vanta terminou de montar antes de mostrar
        // Vanta não expõe um callback, então usamos pequeno delay
        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const bgDelay = prefersReduced ? 0 : 400;
        const betweenDelay = prefersReduced ? 0 : 800;
        const stepDelay = prefersReduced ? 0 : 300;
        const headerDelay = prefersReduced ? 0 : 1500;

        setTimeout(() => {
            bg.classList.remove('opacity-0');
            bg.classList.add('opacity-100');

            // Depois que o BG aparecer, revelar conteúdo do herói com mais suavidade
            setTimeout(() => {
                [badge, title, paragraph, ctas].forEach((el, idx) => {
                    if (!el) return;
                    setTimeout(() => {
                        el.classList.remove('opacity-0');
                        el.classList.add('opacity-100');
                    }, idx * stepDelay);
                });

                // Por último, revelar o header mais suave
                setTimeout(() => {
                    if (header) {
                        header.classList.remove('opacity-0');
                        header.classList.add('opacity-100');
                    }
                }, headerDelay);
            }, betweenDelay);
        }, bgDelay);
    })();
    
</script>