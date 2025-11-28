<section id="plans" class="relative py-28 px-6 overflow-hidden">

    <!-- Fundo Vanta -->
    <div id="vanta-plans" class="absolute inset-0 -z-10 opacity-0 transition-opacity duration-[1200ms]"></div>

    <div class="max-w-6xl mx-auto text-center mb-16 opacity-0 transition-opacity duration-[900ms]" id="plans-header">
        <h2 class="text-4xl md:text-5xl font-bold text-white drop-shadow-lg">Planos</h2>
        <p class="text-white/80 mt-4 text-lg max-w-2xl mx-auto">
            Escolha o plano ideal para si. Rápido, seguro e transparente.
        </p>
    </div>

    <!-- Cards -->
    <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto opacity-0 transition-opacity duration-[900ms]" id="plans-cards">

        <!-- Basic -->
        <div class="glassy-white rounded-2xl p-10 shadow-2xl backdrop-blur-xl border border-white/20 relative overflow-hidden">
            <h3 class="text-2xl font-semibold text-white">Basic</h3>
            <p class="text-4xl font-bold text-white mt-4">$19<span class="text-xl">.99</span></p>

            <ul class="mt-6 space-y-3 text-white/90">
                <li>✔ Ferramentas de colaboração</li>
                <li>✔ Segurança robusta</li>
                <li>✔ Interface amigável</li>
                <li>✔ Acesso mobile completo</li>
            </ul>

            <button class="mt-10 px-8 py-4 rounded-xl w-full font-semibold
                bg-white/20 text-white shadow-lg transition hover:bg-white/30 backdrop-blur-xl">
                Plano Atual
            </button>
        </div>

        <!-- Premium -->
        <div class="rounded-2xl p-10 shadow-2xl backdrop-blur-xl border border-white/20 relative overflow-hidden"
            style="background: linear-gradient(160deg, var(--primary-dark)cc, var(--primary)aa);">

            <h3 class="text-2xl font-semibold text-white shine-badge">Premium</h3>
            <p class="text-4xl font-bold text-white mt-4">$49<span class="text-xl">.99</span></p>

            <ul class="mt-6 space-y-3 text-white/90">
                <li>✔ Comunidade e suporte</li>
                <li>✔ Descontos exclusivos</li>
                <li>✔ Acesso antecipado a betas</li>
                <li>✔ Feedback para influenciar updates</li>
            </ul>

            <button class="mt-10 px-8 py-4 rounded-xl w-full font-semibold
                bg-white text-[var(--primary-dark)] shadow-xl transition hover:bg-gray-200">
                Upgrade
            </button>
        </div>

    </div>
</section>
<script>
    (function () {
        const styles = getComputedStyle(document.documentElement);
        const base = styles.getPropertyValue('--primary').trim();
        const light = styles.getPropertyValue('--primary-light').trim();
        const dark = styles.getPropertyValue('--primary-dark').trim();

        const hexToInt = hex => parseInt(`0x${hex.replace('#', '').slice(0, 6)}`);

        const vantaPlans = VANTA.FOG({
            el: "#vanta-plans",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            highlightColor: hexToInt(light),
            midtoneColor: hexToInt(base),
            lowlightColor: hexToInt(dark),
            baseColor: 0xffffff,
        });

        const bg = document.getElementById('vanta-plans');
        const header = document.getElementById('plans-header');
        const cards = document.getElementById('plans-cards');

        setTimeout(() => {
            bg.classList.remove('opacity-0');

            setTimeout(() => {
                header.classList.remove('opacity-0');
                header.classList.add('opacity-100');

                setTimeout(() => {
                    cards.classList.remove('opacity-0');
                    cards.classList.add('opacity-100');
                }, 300);
            }, 600);

        }, 400);
    })();
</script>
