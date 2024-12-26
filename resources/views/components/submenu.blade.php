@props([ 'items' => [] ])

<ul class="sidebar-submenu">
    @foreach ($items as $item)
        <li>
            <a href="{{ $item['route'] }}">
                <i class="ri-circle-fill circle-icon {{ $item['color'] }} w-auto"></i>
                {{ $item['label'] }}
            </a>
        </li>
    @endforeach
</ul>
