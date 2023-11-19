<{{ isset($href) ? "a" : "div" }} {{ $attributes->merge(['class' => 'bg-white min-h-[512px] rounded-3xl p-12']) }}>
    {{ $slot }}
</{{ isset($href) ? "a" : "div" }}>