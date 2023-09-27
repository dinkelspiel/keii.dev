<x-app>
    <div class="flex flex-col gap-3 lg:mb-10">
        @foreach(scandir('./pages/posts') as $post)
            @if($post != '.' && $post != '..')
                <div class="card">
                    {!! Str::markdown(file_get_contents('./pages/posts/' . $post)) !!}
                </div>
            @endif
        @endforeach
    </div>
</x-app>
