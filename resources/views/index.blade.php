<x-app>
    <div class="card">
        {!! Str::markdown(file_get_contents('./pages/index.md')) !!}
    </div>
</x-app>
