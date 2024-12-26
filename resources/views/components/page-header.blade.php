@props([
    'title',
    'breadcrumbs' => [],
])

<div class="flex flex-wrap items-center justify-between gap-2 mb-6">
    <h6 class="font-semibold mb-0 dark:text-white">{{ $title }}</h6>
    <ul class="flex items-center gap-[6px]">
        @if (!empty($breadcrumbs))
            @foreach ($breadcrumbs as $breadcrumb)
                <li class="font-medium">
                    @if (!empty($breadcrumb['route']))
                        <a href="{{ $breadcrumb['route'] }}" class="flex items-center gap-2 hover:text-primary-600 dark:text-white">
                            <x-icon name="dashboard" class="icon text-lg" />
                            {{ $breadcrumb['label'] }}
                        </a>
                    @else
                        <span class="flex items-center gap-2 dark:text-white">
                            {{ $breadcrumb['label'] }}
                        </span>
                    @endif
                </li>
                @if (!$loop->last)
                    <li class="dark:text-white">-</li>
                @endif
            @endforeach
        @endif
    </ul>
</div>
