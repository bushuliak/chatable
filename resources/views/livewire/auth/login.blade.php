<div class="flex min-h-screen">
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
                {{ trans('app.welcome', compact('app')) }}
            </flux:heading>

            <div class="space-y-4">
                <flux:button class="w-full" wire:click="google">
                    <x-slot name="icon">
                        <x-icons.google/>
                    </x-slot>

                    {{ trans('app.forms.login.with', ['provider' => 'Google']) }}
                </flux:button>
            </div>

            <flux:separator text="{{ trans('app.separators.or') }}"/>

            <div class="flex flex-col gap-6">
                <flux:input type="email" wire:model="form.email" label="{{ trans('app.inputs.email.label') }}"
                            placeholder="{{ trans('app.inputs.email.placeholder') }}"/>

                <flux:field>
                    <div class="mb-3 flex justify-between">
                        <flux:label>
                            {{ trans('app.inputs.password.label') }}
                        </flux:label>

                        <flux:link href="#" variant="subtle" class="text-sm">
                            {{ trans('app.forms.forgot_password.question') }}
                        </flux:link>
                    </div>

                    <flux:input type="password" wire:model="form.password"
                                placeholder="{{ trans('app.inputs.password.placeholder') }}"/>
                </flux:field>

                <flux:checkbox wire:model="form.remember" label="{{ trans('app.checkboxes.remember') }}"/>

                <flux:button variant="primary" class="w-full" wire:click="login">
                    {{ trans('app.forms.login.action') }}
                </flux:button>
            </div>

            <flux:subheading class="text-center">
                {{ trans('app.forms.register.question') }}

                <flux:link href="{{ route('register') }}" wire:navigate>
                    {{ trans('app.forms.register.action') }}
                </flux:link>
            </flux:subheading>
        </div>
    </div>
</div>
