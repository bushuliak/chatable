<div class="flex-1 flex justify-center items-center">
    <div class="w-80 max-w-80 space-y-6">
        <div class="flex justify-center opacity-50">
            <a href="{{ route('home') }}" class="group flex items-center gap-3" wire:navigate>
                <div>
                    <flux:icon.rocket-launch/>
                </div>

                <span class="text-xl font-semibold text-zinc-800 dark:text-white">
                    {{ $app = config('app.name') }}
                </span>
            </a>
        </div>

        <flux:heading class="text-center" size="xl">
            {{ trans('app.welcome_back', compact('app')) }}
        </flux:heading>

        <div class="space-y-4">
            <flux:button class="w-full" wire:click="google">
                <x-slot name="icon">
                    <x-icons.google/>
                </x-slot>

                {{ trans('app.forms.register.with', ['provider' => 'Google']) }}
            </flux:button>
        </div>

        <flux:separator text="{{ trans('app.separators.or') }}"/>

        <div class="flex flex-col gap-6">
            <flux:input wire:model="form.name" label="{{ trans('app.inputs.name.label') }}"
                        placeholder="{{ trans('app.inputs.name.placeholder') }}"/>

            <flux:input type="email" wire:model="form.email" label="{{ trans('app.inputs.email.label') }}"
                        placeholder="{{ trans('app.inputs.email.placeholder') }}"/>

            <flux:input type="password" wire:model="form.password" label="{{ trans('app.inputs.password.label') }}"
                        placeholder="{{ trans('app.inputs.password.placeholder') }}"/>

            <flux:input type="password" wire:model="form.password_confirmation"
                        label="{{ trans('app.inputs.password_confirmation.label') }}"
                        placeholder="{{ trans('app.inputs.password_confirmation.placeholder') }}"/>

            <flux:button variant="primary" class="w-full" wire:click="register">
                {{ trans('app.forms.register.action') }}
            </flux:button>
        </div>

        <flux:subheading class="text-center">
            {{ trans('app.forms.login.question') }}

            <flux:link href="{{ route('login') }}" wire:navigate>
                {{ trans('app.forms.login.action') }}
            </flux:link>
        </flux:subheading>
    </div>
</div>
