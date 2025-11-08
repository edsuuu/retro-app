<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
<flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>

    <a href="{{ route('home') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
        <x-app-logo/>
    </a>

    <flux:navlist variant="outline">
        <flux:navlist.group :heading="__('Platform')" class="grid">
            <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>Dashboard</flux:navlist.item>

            <flux:sidebar.group  icon="wallet" expandable expanded="false" heading="Carteira" class="grid">
                <flux:sidebar.item icon="briefcase" :href="route('wallet')" :current="request()->routeIs('wallet')" wire:navigate>Minha carteira</flux:sidebar.item>
                <flux:sidebar.item icon="currency-dollar" :href="route('wallet.dividends')" :current="request()->routeIs('wallet.dividends')" wire:navigate>Proventos</flux:sidebar.item>
                <flux:sidebar.item icon="chart-bar" :href="route('wallet.profitability')" :current="request()->routeIs('wallet.profitability')" wire:navigate>Rentabilidade</flux:sidebar.item>
                <flux:sidebar.item icon="building-library" :href="route('wallet.assets')" :current="request()->routeIs('wallet.assets')" wire:navigate>Patrimônio</flux:sidebar.item>
                <flux:sidebar.item icon="flag" :href="route('wallet.goals')" :current="request()->routeIs('wallet.goals')" wire:navigate>Metas</flux:sidebar.item>
                <flux:sidebar.item icon="chart-pie" :href="route('wallet.analysis')" :current="request()->routeIs('wallet.analysis')" wire:navigate>Análise</flux:sidebar.item>
                <flux:sidebar.item icon="arrows-right-left" :href="route('wallet.transactions')" :current="request()->routeIs('wallet.transactions')" wire:navigate>Lançamentos</flux:sidebar.item>
                <flux:sidebar.item icon="star" :href="route('wallet.pro')" :current="request()->routeIs('wallet.pro')" wire:navigate>Pro</flux:sidebar.item>
                <flux:sidebar.item icon="document-text" :href="route('wallet.tax-report')" :current="request()->routeIs('wallet.tax-report')" wire:navigate>IRPF</flux:sidebar.item>
            </flux:sidebar.group>


            <flux:navlist.item icon="trophy" :href="route('achievements')" :current="request()->routeIs('achievements')" wire:navigate>Conquistas</flux:navlist.item>
            <flux:navlist.item icon="heart" :href="route('followed-assets')" :current="request()->routeIs('followed-assets')" wire:navigate>Ativos que sigo</flux:navlist.item>
            <flux:navlist.item icon="question-mark-circle" :href="route('support')" :current="request()->routeIs('support')" wire:navigate>Suporte</flux:navlist.item>


        </flux:navlist.group>
    </flux:navlist>

    <flux:spacer/>

    <flux:navlist variant="outline">
        <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
            {{ __('Repository') }}
        </flux:navlist.item>

        <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits#livewire" target="_blank">
            {{ __('Documentation') }}
        </flux:navlist.item>
    </flux:navlist>

    <!-- Desktop User Menu -->
    <flux:dropdown class="hidden lg:block" position="bottom" align="start" :scroll-lock="false">
        <flux:profile
            :name="Auth::user()?->name"
            circle
            :initials="auth()->user()->initials()"
            icon:trailing="chevrons-up-down"
            class="w-12 h-12 cursor-pointer text-2xl"
        />

        <flux:menu class="w-[220px]">
            <flux:menu.radio.group>
                <div class="p-0 text-sm font-normal">
                    <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                        <div class="grid flex-1 text-start text-sm leading-tight">
                            <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                            <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                </div>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <flux:menu.radio.group>
                <flux:menu.item :href="route('support')" icon="question-mark-circle"
                                wire:navigate>Suporte</flux:menu.item>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <flux:menu.radio.group>
                <flux:menu.item :href="route('settings.profile')" icon="cog"
                                wire:navigate>{{ __('Settings') }}</flux:menu.item>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                    {{ __('Log Out') }}
                </flux:menu.item>
            </form>
        </flux:menu>
    </flux:dropdown>
</flux:sidebar>

<!-- Mobile User Menu -->
<flux:header class="lg:hidden">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>

    <flux:spacer/>

    <flux:dropdown position="top" align="end">
        <flux:profile
            :initials="auth()->user()->initials()"
            icon-trailing="chevron-down"
        />

        <flux:menu>
            <flux:menu.radio.group>
                <div class="p-0 text-sm font-normal">
                    <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                        <div class="grid flex-1 text-start text-sm leading-tight">
                            <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                            <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                </div>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <flux:menu.radio.group>
                <flux:menu.item :href="route('settings.profile')" icon="cog"
                                wire:navigate>{{ __('Settings') }}</flux:menu.item>
            </flux:menu.radio.group>

            <flux:menu.separator/>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                    {{ __('Log Out') }}
                </flux:menu.item>
            </form>
        </flux:menu>
    </flux:dropdown>
</flux:header>

{{ $slot }}

@fluxScripts
</body>
</html>
