@props(['on'])

<div
    {{ $attributes->merge(['class' => 'text-sm text-green-600']) }}
    x-data="{ shown: false, timeout: null }"
    x-init="Livewire.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => shown = false, 2000); });"
    x-show.transition.out.opacity.duration.1500ms="shown"
    style="display: none;"
>
    {{ $slot }}
</div>
