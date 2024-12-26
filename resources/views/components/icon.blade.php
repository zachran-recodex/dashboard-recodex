@props(['name', 'class' => ''])

@php
    $icons = [
        'dashboard' => 'solar:home-smile-angle-outline',
        'bars-3' => 'heroicons:bars-3-solid',
        'arrow-right' => 'iconoir:arrow-right',
        'search' => 'ion:search-outline',
        'sun' => 'ri:sun-line',
        'moon' => 'ri:moon-line',
        'email' => 'mage:email',
        'user' => 'solar:user-linear',
        'inbox' => 'tabler:message-check',
        'cog' => 'icon-park-outline:setting-two',
        'logout' => 'lucide:power',
        'bell' => 'iconoir:bell',
        'check' => 'bitcoin-icons:verify-outline',
        'cross' => 'radix-icons:cross-1',
        'chat' => 'bi:chat-dots',
        'calendar' => 'solar:calendar-outline',
        'kanban' => 'material-symbols:map-outline',
        'invoice' => 'hugeicons:invoice-03',
        'ai' => 'hugeicons:ai-brain-03',
        'crypto' => 'hugeicons:bitcoin-circle',
        'document' => 'solar:document-text-outline',
        'file' => 'heroicons:document',
        'storage' => 'mingcute:storage-line',
        'chart' => 'solar:pie-chart-outline',
        'vector' => 'fe:vector',
        'user-group' => 'flowbite:users-group-outline',
        'gallery' => 'solar:gallery-wide-linear',
        'money' => 'hugeicons:money-send-square',
        'faqs' => 'mage:message-question-mark-round',
        'straight-face' => 'streamline:straight-face',
        'info' => 'octicon:info-24',
        'setting' => 'icon-park-outline:setting-two',
        'simple-vector' => 'simple-line-icons:vector',
        'cross' => 'radix-icons:cross-2'
    ];
@endphp

<iconify-icon
    icon="{{ $icons[$name] ?? $name }}"
    class="{{ $class }}"
    {{ $attributes }}
></iconify-icon>
