<flux:header class="flex w-full {{ request()->routeIs('home') ? 'mt-5' : '' }} flex-row justify-around">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>


    <flux:navbar class="max-lg:hidden flex flex-row items-center justify-between">
        <flux:navbar.item href="#como-fazer">
            <span class="text-base font-medium text-black">Como fazer</span>
        </flux:navbar.item>

        <flux:navbar.item href="#precos">
            <span class="text-base font-medium text-black">Planos</span>
        </flux:navbar.item>
    </flux:navbar>


</flux:header>
