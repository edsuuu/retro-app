<div class="w-full h-full flex flex-col justify-center items-center gap-6 p-4 md:p-6">
    <x-auth-header :title="__('Forgot password')"
                   :description="__('Enter your email to receive a password reset link')"/>

    <x-auth-session-status class="text-center" :status="session('status')"/>

    <form method="POST" wire:submit="sendPasswordResetLink" class="w-full max-w-md flex-1 flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email Address')"
            type="email"
            required
            autofocus
            placeholder="email@example.com"
        />

        <flux:button variant="primary" type="submit" class="w-full cursor-pointer">{{ __('Email password reset link') }}</flux:button>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-400  cursor-pointer">
            <span>{{ __('Or, return to') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('log in') }}</flux:link>
        </div>
    </form>
</div>
