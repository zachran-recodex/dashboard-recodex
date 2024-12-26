@props([
    'route' => 'javascript:void(0)',
    'icon' => 'dashboard',
    'label' => 'Menu Item',
])

<a href="{{ $route }}">
    <x-icon :name="$icon" class="menu-icon" />
    <span>{{ $label }}</span>
</a>
