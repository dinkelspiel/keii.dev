<{{ isset($href) ? "a" : "div" }} {{ $attributes->merge(['class' => 'bg-white min-h-[512px] border-gray-150 rounded-3xl p-12 border-2']) }}>
    {{ $slot }}
</{{ isset($href) ? "a" : "div" }}>
