<div>
    <flux:heading size="xl" level="1">👋</flux:heading>
    <flux:text class="mt-2 mb-6 text-base">{{ auth()->user()?->name ?? trans('app.guest') }}!</flux:text>

    <flux:separator variant="subtle"/>
</div>
