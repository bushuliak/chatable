<flux:sidebar stashable sticky
              class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>

    <flux:brand href="{{ route('home') }}" name="{{ config('app.name') }}" class="px-2" wire:navigate/>

    <flux:navlist variant="outline">
        <flux:navbar.item icon="home" href="{{ route('home') }}" :current="request()->routeIs('home')" wire:navigate>
            {{ trans('app.pages.home') }}
        </flux:navbar.item>
    </flux:navlist>
</flux:sidebar>
