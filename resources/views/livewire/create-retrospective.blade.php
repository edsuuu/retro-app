<div class="w-full flex items-center justify-around ">
    <div class="text-center lg:text-left">
        <div class="w-full space-y-2">
            <h1 class="text-3xl font-bold bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 bg-clip-text text-transparent">
                Quase lá! ✨
            </h1>
            <p class="text-gray-600 mt-2 text-base font-medium">
                Preencha os dados abaixo para criar sua retrospectiva personalizada.
            </p>
        </div>

        @if ($successMessage)
            <div class="mt-4 p-3 bg-green-100 text-green-700 rounded-lg border border-green-300">
                {{ $successMessage }}
            </div>
        @endif

        <div class="flex flex-wrap gap-2 border border-purple-300 rounded-xl p-2 mt-4 backdrop-blur-sm shadow-md text-sm font-medium">
            <button type="button"
                    wire:click="$set('planType','basic')"
                    class="flex-1 px-4 py-3 rounded-lg shadow-md {{ $planType === 'basic' ? 'bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 text-white' : 'bg-gray-100 border border-purple-200 text-gray-800' }}">
                Básico — R$29
            </button>

            <button type="button"
                    wire:click="$set('planType','premium')"
                    class="flex-1 px-4 py-3 rounded-lg shadow-md {{ $planType === 'premium' ? 'bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 text-white' : 'bg-gray-100 border border-purple-200 text-gray-800' }}">
                Premium — R$49
            </button>
        </div>

        <div class="mt-2">
            <label class="block text-gray-700 text-sm font-medium mb-1">E-mail para receber o link</label>
            <input type="email" wire:model.live="email"
                   class="w-full h-12 rounded-lg border {{ $errors->has('email') ? 'border-red-500' : 'border-purple-300' }} p-3 shadow-md focus:ring-2 focus:ring-purple-400"
                   placeholder="Ex: meuemail@email.com"/>
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mt-2">
            <label class="block text-gray-700 text-sm font-medium mb-1">Nome da família ou grupo (Será o link)</label>
            <input type="text" wire:model.live="nameFamily"
                   class="w-full h-12 rounded-lg border {{ $errors->has('nameFamily') ? 'border-red-500' : 'border-purple-300' }} p-3 shadow-md focus:ring-2 focus:ring-purple-400"
                   placeholder="Ex: Família teste"/>
            @error('nameFamily') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>


        <div class="mt-2">
            <label class="block text-gray-700 text-sm font-medium mb-1">Mensagem personalizada</label>
            <textarea rows="5" wire:model.live="description"
                      maxlength="2000"
                      class="w-full resize-none rounded-lg border {{ $errors->has('description') ? 'border-red-500' : 'border-purple-300' }} p-3 shadow-md focus:ring-2 focus:ring-purple-400"
                      placeholder="Escreva algo especial..."></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col lg:flex-row justify-between mt-2 gap-4">
            <div class="flex-1">
                <label class="block text-gray-700 text-sm font-medium mb-2">Fotos (máximo 3)</label>
                <button type="button"
                        onclick="document.getElementById('photoUpload').click()"
                        class="flex items-center gap-2 px-5 py-3 border border-purple-400 rounded-lg shadow-md hover:bg-purple-50 transition">
                    📸 Escolher fotos
                </button>
                <input id="photoUpload" type="file" class="hidden" accept="image/*" multiple/>
            </div>

            <div class="flex items-center gap-3 mt-2">
                <input id="create-video" type="checkbox" wire:model.live="createVideo"
                       class="w-5 h-5 text-purple-600 border-purple-300 rounded focus:ring-2 focus:ring-purple-400 transition-all">
                <label for="create-video" class="text-gray-700 text-sm lg:text-base font-medium select-none">
                    Criar vídeo de 20 segundos
                </label>
            </div>
        </div>

        <div class="mt-4">
            <label class="block text-gray-700 text-sm font-medium mb-1">Música do YouTube (opcional)</label>
            <input type="url" wire:model.live="urlYoutube"
                   class="w-full h-12 rounded-lg border {{ $errors->has('urlYoutube') ? 'border-red-500' : 'border-purple-300' }} p-3 shadow-md focus:ring-2 focus:ring-purple-400"
                   placeholder="https://www.youtube.com/watch?v=xxxxxx"/>
            @error('urlYoutube') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>


        <div class="pt-6">
            <button wire:click="save"
                    class="w-full cursor-pointer h-16 rounded-xl bg-gradient-to-r from-purple-600 via-pink-600 to-indigo-600 text-white text-xl font-bold flex items-center justify-center gap-2 shadow-lg hover:scale-[1.02] transition disabled:opacity-60"
                    wire:loading.attr="disabled">
{{--                <span wire:loading.remove>Criar minha retrospectiva</span>--}}
                <span >Criar minha retrospectiva</span>
{{--                <span wire:loading>⏳ Criando...</span>--}}
            </button>
        </div>
    </div>

    <div
        class="relative bg-gradient-to-br from-white/90 to-white/70 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-white/20">

        <div class="absolute top-3 left-3 flex gap-2">
            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
            <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
        </div>


        <div class="space-y-4">

            <div class="bg-gray-50 rounded-lg p-3 text-center mt-2">
                @php
                    $nameFamilyReplace = strtolower(str_replace(' ', '-', $nameFamily));

                    $url = str_replace(['http://', 'https://'], '', route('home')) . '/'.$nameFamilyReplace;
                @endphp

                <p class="text-gray-700 text-sm italic">{{ $url }}</p>
            </div>


            <div class="text-center">
                <h3 class="font-bold text-xl text-gray-900">Nossa Jornada 2025</h3>
{{--                <p class="text-gray-600 text-sm">Momentos especiais em família</p>--}}
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

            <div class="bg-gray-50 rounded-lg p-3 text-center">
                <p class="text-gray-700 text-sm italic w-[400px] max-h-24 overflow-y-auto">"{{ $description }}..."</p>
            </div>
        </div>
    </div>
</div>
