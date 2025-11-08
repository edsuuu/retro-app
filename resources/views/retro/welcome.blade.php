<x-app-guest>
    <div class="h-screen p-2 flex flex-col">
        <div class="h-full rounded-4xl ring-1 ring-black/5 ring-inset bg-linear-115 from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] sm:bg-linear-145">

            <x-navbar/>

            <div class="w-full flex items-center justify-around mt-10">
                <div
                    class=" items-center">
                    <div class="text-center lg:text-left space-y-8">
                        <div
                            class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-purple-100 to-pink-100 border border-purple-200/50 backdrop-blur-sm">
                            <span
                                class="text-sm font-medium bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                                ✨ Novo para 2025
                            </span>
                        </div>

                        <h1 class="font-display text-4xl sm:text-6xl lg:text-7xl xl:text-8xl font-bold tracking-tight text-balance">
                            <span class="block text-gray-950">Faça sua</span>
                            <span
                                class="block bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 bg-clip-text text-transparent animate-gradient-x">
                                    retrospectiva
                            </span>
                        </h1>


                        <div class="space-y-6">
                            <p class="text-lg sm:text-xl lg:text-2xl leading-relaxed text-gray-700 max-w-2xl mx-auto lg:mx-0">
                                Celebre o <strong class="text-purple-600">Natal</strong> e o <strong
                                    class="text-pink-600">Ano Novo</strong> relembrando tudo o que te fez sorrir em
                                2025.
                            </p>
                            <p class="text-base sm:text-lg text-gray-600 max-w-xl mx-auto lg:mx-0">
                                Monte uma retrospectiva personalizada com fotos e mensagens que marcaram o ano da
                                família e amigos,
                                <span class="font-semibold text-gray-900">tudo em um só lugar.</span>
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                            <!-- Primary Button -->
                            <div class="relative group">
                                <div
                                    class="absolute -inset-1 bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 rounded-2xl blur-sm opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <a href="{{ route('retrospective') }}" wire:navigate
                                   class="relative inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 text-white font-bold text-lg shadow-2xl hover:shadow-purple-500/50 transform hover:scale-105 transition-all duration-300 min-w-[240px]">
                                    <span class="mr-3">🚀 Criar Retrospectiva</span>
                                    <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor"
                                         viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </a>
                            </div>

                            <!-- Secondary Button -->
                            <a href="#precos"
                               class="group inline-flex items-center justify-center px-8 py-4 rounded-2xl bg-white/80 backdrop-blur-sm border border-white/20 shadow-xl hover:shadow-2xl hover:bg-white/90 text-gray-900 font-semibold text-lg transform hover:scale-105 transition-all duration-300 min-w-[200px]">
                                <span class="mr-2">Ver Preços</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>

                        <div
                            class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6 pt-8 text-sm text-gray-600">
                            <div class="flex items-center gap-2">
                                <div class="flex -space-x-2">
                                    <div
                                        class="w-8 h-8 rounded-full bg-gradient-to-r from-purple-400 to-pink-400 border-2 border-white"></div>
                                    <div
                                        class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-400 to-indigo-400 border-2 border-white"></div>
                                    <div
                                        class="w-8 h-8 rounded-full bg-gradient-to-r from-green-400 to-teal-400 border-2 border-white"></div>
                                </div>
                                <span class="font-medium">+1000 famílias felizes</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="text-yellow-400">★★★★★</span>
                                <span class="font-medium">4.9/5 avaliações</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div>
                    <div class="relative mx-auto max-w-lg">
                        <div
                            class="relative bg-gradient-to-br from-white/90 to-white/70 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-white/20">
                            <div class="space-y-4">
                                <div class="text-center">
                                    <div
                                        class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mb-4">
                                        <span class="text-2xl">📸</span>
                                    </div>
                                    <h3 class="font-bold text-xl text-gray-900">Nossa Jornada 2025</h3>
                                    <p class="text-gray-600 text-sm">Momentos especiais em família</p>
                                </div>

                                <!-- Mock photo grid -->
                                <div class="grid grid-cols-2 gap-2">
                                    <div
                                        class="aspect-square bg-gradient-to-br from-purple-200 to-pink-200 rounded-lg flex items-center justify-center">
                                        <span class="text-2xl">🎄</span>
                                    </div>
                                    <div
                                        class="aspect-square bg-gradient-to-br from-blue-200 to-indigo-200 rounded-lg flex items-center justify-center">
                                        <span class="text-2xl">👨‍👩‍👧‍👦</span>
                                    </div>
                                    <div
                                        class="aspect-square bg-gradient-to-br from-green-200 to-teal-200 rounded-lg flex items-center justify-center">
                                        <span class="text-2xl">🎉</span>
                                    </div>
                                    <div
                                        class="aspect-square bg-gradient-to-br from-yellow-200 to-orange-200 rounded-lg flex items-center justify-center">
                                        <span class="text-2xl">❤️</span>
                                    </div>
                                </div>

                                <!-- Mock message -->
                                <div class="bg-gray-50 rounded-lg p-3 text-center">
                                    <p class="text-gray-700 text-sm italic">"Um ano repleto de amor, risos e
                                        memórias inesquecíveis..."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="h-screen p-2 flex flex-col">
        <div
            class="h-full flex flex-col justify-center items-center px-8 py-20 bg-gradient-to-br rounded-4xl relative overflow-hidden"
            id="como-fazer">

            <div class="max-w-7xl w-full relative z-10">
                <div class="text-center mb-20">
                    <h2 class="font-display text-5xl md:text-7xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 mb-6">
                        Como Funciona
                    </h2>
                    <p class="text-center text-gray-700 text-lg md:text-2xl max-w-3xl mx-auto leading-relaxed font-medium">
                        Crie sua retrospectiva de <span class="text-purple-600 font-bold">2025</span> e relembre
                        todos os momentos especiais vividos com
                        <span class="text-pink-600 font-bold">família e amigos</span>
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <!-- Passo 1: Colete Memórias -->
                    <div class="flex flex-col items-center text-center group cursor-pointer">
                        <div class="relative mb-8 transform group-hover:scale-110 transition-all duration-500">
                            <!-- Glow effect -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-blue-400 via-purple-500 to-indigo-600 rounded-3xl blur-2xl opacity-40 group-hover:opacity-70 transition-all duration-500 scale-110"></div>

                            <!-- Card container -->
                            <div
                                class="relative w-32 h-32 bg-white rounded-3xl shadow-2xl border border-indigo-100 flex items-center justify-center group-hover:shadow-purple-500/25 transition-all duration-500">
                                <!-- Icon -->
                                <div
                                    class="text-indigo-600 group-hover:text-purple-600 transition-colors duration-300">
                                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                </div>

                                <!-- Number badge -->
                                <div
                                    class="absolute -top-3 -right-3 w-8 h-8 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
                                    1
                                </div>
                            </div>
                        </div>

                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 group-hover:text-indigo-600 transition-colors duration-300">
                            Colete suas Memórias
                        </h3>
                        <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-sm">
                            Reúna as fotos mais marcantes do ano com sua <strong>família</strong>, momentos
                            especiais com <strong>amigos</strong>
                            e todas as conquistas que te fizeram sorrir em 2025.
                        </p>
                    </div>

                    <!-- Passo 2: Monte sua História -->
                    <div class="flex flex-col items-center text-center group cursor-pointer">
                        <div class="relative mb-8 transform group-hover:scale-110 transition-all duration-500">
                            <!-- Glow effect -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-pink-400 via-rose-500 to-orange-500 rounded-3xl blur-2xl opacity-40 group-hover:opacity-70 transition-all duration-500 scale-110"></div>

                            <!-- Card container -->
                            <div
                                class="relative w-32 h-32 bg-white rounded-3xl shadow-2xl border border-pink-100 flex items-center justify-center group-hover:shadow-pink-500/25 transition-all duration-500">
                                <!-- Icon -->
                                <div class="text-pink-600 group-hover:text-rose-600 transition-colors duration-300">
                                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                    </svg>
                                </div>

                                <!-- Number badge -->
                                <div
                                    class="absolute -top-3 -right-3 w-8 h-8 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
                                    2
                                </div>
                            </div>
                        </div>

                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 group-hover:text-pink-600 transition-colors duration-300">
                            Monte sua História
                        </h3>
                        <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-sm">
                            Organize cronologicamente os melhores momentos, adicione <strong>mensagens
                                carinhosas</strong>
                            e crie um álbum digital emocionante da sua jornada familiar.
                        </p>
                    </div>

                    <!-- Passo 3: Compartilhe a Alegria -->
                    <div class="flex flex-col items-center text-center group cursor-pointer">
                        <div class="relative mb-8 transform group-hover:scale-110 transition-all duration-500">
                            <!-- Glow effect -->
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-emerald-400 via-teal-500 to-cyan-500 rounded-3xl blur-2xl opacity-40 group-hover:opacity-70 transition-all duration-500 scale-110"></div>

                            <!-- Card container -->
                            <div
                                class="relative w-32 h-32 bg-white rounded-3xl shadow-2xl border border-emerald-100 flex items-center justify-center group-hover:shadow-emerald-500/25 transition-all duration-500">
                                <!-- Icon -->
                                <div
                                    class="text-emerald-600 group-hover:text-teal-600 transition-colors duration-300">
                                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.50-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"/>
                                    </svg>
                                </div>

                                <!-- Number badge -->
                                <div
                                    class="absolute -top-3 -right-3 w-8 h-8 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-sm shadow-lg">
                                    3
                                </div>
                            </div>
                        </div>

                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 group-hover:text-emerald-600 transition-colors duration-300">
                            Compartilhe a Alegria
                        </h3>
                        <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-sm">
                            Envie para toda família via <strong>WhatsApp</strong>, mostre aos amigos nas
                            <strong>redes sociais</strong> e espalhe a nostalgia gostosa de 2025 para todos!
                        </p>
                    </div>
                </div>

                <!-- CTA Enhanced -->
                <div class="mt-20 flex flex-col items-center">
                    <div class="relative group">
                        <!-- Button glow effect -->
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 rounded-full blur-sm opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>

                        <a href="{{ route('retrospective') }}" wire:navigate
                           class="relative inline-flex items-center justify-center px-12 py-5 rounded-full bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 text-white font-bold text-xl shadow-2xl hover:shadow-purple-500/50 transform hover:scale-105 transition-all duration-300">
                            <span class="mr-3">✨ Criar Minha Retrospectiva</span>
                            <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor"
                                 viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>

                    <p class="mt-4 text-gray-500 text-sm">
                        🎁 Presente perfeito para as festas de fim de ano
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="h-screen p-2 flex flex-col">
        <div class="h-full p-8 bg-[#101828] rounded-4xl flex justify-center items-center" id="precos">
            <div class="flex flex-col lg:flex-row justify-center gap-10">
                <!-- Plano Família -->
                <div
                    class="flex flex-col w-full lg:w-[420px] h-auto rounded-xl border-2 border-amber-700 overflow-hidden">
                    <div class="flex justify-between items-center h-40 border-b-2 border-amber-700 bg-[#05142E] px-10">
                        <div class="flex flex-col">
                            <span class="text-xl text-slate-400">Família</span>
                            <span class="text-5xl font-bold text-white">R$39</span>
                        </div>
                        <div class="text-6xl">👨‍👩‍👧‍👦</div>
                    </div>

                    <div class="h-full bg-[#071A3C] px-10 py-7 flex flex-col">
                        <div class="flex flex-col gap-4 mb-6">
                            <div class="flex gap-3 items-center font-bold text-lg text-white">
                                <svg class="w-7 h-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="#F59E0B" stroke-width="2" opacity="0.5"/>
                                    <path d="M8 12L11 15L16 9" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span>Até 10 fotos</span>
                            </div>

                            <div class="flex gap-3 items-center font-bold text-lg text-white">
                                <svg class="w-7 h-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="#F59E0B" stroke-width="2" opacity="0.5"/>
                                    <path d="M8 12L11 15L16 9" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span>Sites de até 1 ano</span>
                            </div>

                            <div class="flex gap-3 items-center font-bold text-lg text-white">
                                <svg class="w-7 h-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="#F59E0B" stroke-width="2" opacity="0.5"/>
                                    <path d="M8 12L11 15L16 9" stroke="#F59E0B" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <span>Música de fundo</span>
                            </div>

                            <div class="flex gap-3 items-center font-bold text-lg text-white">
                                <svg class="w-7 h-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="#F59E0B" stroke-width="2" opacity="0.5"/>
                                    <path d="M8 8L16 16M16 8L8 16" stroke="#F59E0B" stroke-width="2"
                                          stroke-linecap="round"/>
                                </svg>
                                <span>Sem mensagens</span>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <div class="relative">
                                <button
                                    class="w-full h-14 bg-[#F59E0B] hover:bg-[#D97706] text-white rounded-lg border border-amber-400 font-bold text-xl transition-all duration-300 relative z-10">
                                    Criar retrospectiva
                                </button>
                                <div class="absolute inset-0 bg-[#FCD34D] rounded-lg blur-md -z-10"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Plano Amigos -->
                <div class="relative">
                    <div
                        class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-[#7C3AED] rounded-full px-5 py-1 flex items-center gap-2 z-10">
                        <svg class="w-4 h-4" fill="#C4B5FD" viewBox="0 0 24 24">
                            <path
                                d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                        </svg>
                        <span class="text-white font-bold text-sm uppercase">Mais popular</span>
                    </div>

                    <div
                        class="flex flex-col w-full lg:w-[420px] h-auto rounded-xl border-2 border-[#7C3AED] overflow-hidden">
                        <div
                            class="flex justify-between items-center h-40 border-b-2 border-[#7C3AED] bg-[#05142E] px-10">
                            <div class="flex flex-col">
                                <span class="text-xl text-slate-400">Amigos</span>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-5xl font-bold text-white">R$59</span>
                                    <span class="text-2xl font-bold line-through text-slate-500">R$79</span>
                                </div>
                            </div>
                            <div class="text-6xl">🎉</div>
                        </div>

                        <div class="h-full bg-[#071A3C] px-10 py-7 flex flex-col">
                            <div class="flex flex-col gap-4 mb-6">
                                <div class="flex gap-3 items-center font-bold text-lg text-white">
                                    <svg class="w-7 h-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" opacity="0.5"/>
                                        <path d="M8 12L11 15L16 9" stroke="#7C3AED" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Fotos ilimitadas</span>
                                </div>

                                <div class="flex gap-3 items-center font-bold text-lg text-white">
                                    <svg class="w-7 h-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" opacity="0.5"/>
                                        <path d="M8 12L11 15L16 9" stroke="#7C3AED" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Vídeos de até 1min</span>
                                </div>

                                <div class="flex gap-3 items-center font-bold text-lg text-white">
                                    <svg class="w-7 h-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" opacity="0.5"/>
                                        <path d="M8 12L11 15L16 9" stroke="#7C3AED" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Múltiplas músicas</span>
                                </div>

                                <div class="flex gap-3 items-center font-bold text-lg text-white">
                                    <svg class="w-7 h-7 flex-shrink-0" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="10" stroke="#7C3AED" stroke-width="2" opacity="0.5"/>
                                        <path d="M8 12L11 15L16 9" stroke="#7C3AED" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <span>Mensagens personalizadas</span>
                                </div>
                            </div>

                            <div class="mt-auto">
                                <div class="relative">
                                    <button
                                        class="w-full h-14 bg-[#7C3AED] hover:bg-[#6D28D9] text-white rounded-lg border border-purple-400 font-bold text-xl transition-all duration-300 relative z-10">
                                        Criar retrospectiva
                                    </button>
                                    <div class="absolute inset-0 bg-[#A78BFA] rounded-lg blur-md -z-10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-guest>
