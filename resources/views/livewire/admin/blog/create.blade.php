<div class="bg-[#f7eff0] p-12 flex flex-col gap-3" style="min-height: 100dvh">
    <div class="text-lg font-semibold">
        Create a blog post
    </div>

    <div class="flex flex-col gap-1.5">
        <div>
            Name
        </div>
        <input wire:model.live="title" class="gitlab-repo group w-full h-14 rounded-xl bg-[#FFFBFE] hover:bg-white active:ring-2 active:ring-offset-2 active:ring-blue border-2 border-gray-200 flex flex-row gap-3 items-center px-3 py-3 cursor-pointer">
    </div>

    <div class="flex flex-col gap-1.5">
        <div>
            Body
        </div>
        <textarea wire:model.live="content" class="gitlab-repo group w-full h-64 rounded-xl bg-[#FFFBFE] hover:bg-white active:ring-2 active:ring-offset-2 active:ring-blue border-2 border-gray-200 flex flex-row gap-3 items-center px-3 py-3 cursor-pointer"></textarea>
    </div>

    <div class="flex flex-col gap-1.5">
        <div>
            Tags
        </div>
        {{ json_encode($tags) }}
        @foreach ($tags as $tagId)
            <button wire:click="deleteTag({{ $tagId }})">
                {{ \App\Models\Tag::where('id', $tagId)->first()->name }}
            </button>
        @endforeach
        <div class="relative">
            @if($tagSearch != "")
                <div class="absolute w-full top-6 bg-white rounded-lg p-3 border-2 border-gray-200 shadow">
                    @foreach (\App\Models\Tag::where('name', $tagSearch)->get() as $tag)
                        <div wire:click="createTag({{ $tag->id }})" class="cursor-pointer">
                            {{ $tag->name }}
                        </div>
                    @endforeach
                    @if(!\App\Models\Tag::where('name', $tagSearch)->exists())
                        <div wire:click="createNewTag" class="cursor-pointer">
                            Create Tag
                        </div>
                    @endif
                </div>
            @endif
            <input wire:model.live="tagSearch">
        </div>
    </div>

    <button wire:click="createPost" class="group w-full h-14 rounded-xl bg-green hover:bg-white active:ring-2 active:ring-offset-2 active:ring-blue border-2 border-gray-200 flex flex-row gap-3 items-center px-3 py-3 cursor-pointer">
        Create
    </button>

    <div class="flex flex-col gap-1.5">
        <div>
            Preview
        </div>
        <div class="markdown">
            {!! Str::markdown($content) !!}
        </div>
    </div>
</div>
