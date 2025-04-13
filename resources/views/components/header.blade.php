<flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>

    <flux:brand href="{{ route('home') }}" name="{{ config('app.name') }}" class="max-lg:hidden" wire:navigate/>

    <flux:navbar class="-mb-px max-lg:hidden">
        <flux:navbar.item icon="home" href="{{ route('home') }}" :current="request()->routeIs('home')" wire:navigate>
            {{ trans('app.pages.home') }}
        </flux:navbar.item>
    </flux:navbar>

    <flux:spacer/>

    @auth
        <flux:dropdown position="top" align="start">
            <flux:profile name="{{ auth()->user()->name }}"/>

            <flux:menu>
                <flux:menu.item icon="arrow-right-start-on-rectangle" href="{{ route('logout') }}" wire:navigate>
                    {{ trans('app.actions.logout') }}
                </flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    @endauth

    @guest
        <flux:dropdown position="top" align="start">
            <flux:profile iconTrailing="user" name="{{ trans('app.guest') }}"/>

            <flux:menu>
                <flux:menu.item icon="arrow-right-end-on-rectangle" href="{{ route('login') }}" wire:navigate>
                    {{ trans('app.actions.login') }}
                </flux:menu.item>
                <flux:menu.item icon="identification" href="{{ route('register') }}" wire:navigate>
                    {{ trans('app.actions.register') }}
                </flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    @endguest
</flux:header>
