<?php

namespace App\Livewire\Admin\Blog;

use App\Models\BlogPost;
use Livewire\Component;
use App\Models\Tag;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    public string $content = "", $title = "";
    public string $tagSearch = "";
    public Collection $tags;

    public function mount()
    {
        $this->tags = collect();
    }

    public function createPost()
    {
        $post = new BlogPost;
        $post->created_at = now();
        $post->title = $this->title;
        $post->contents = $this->content;
        $post->user_id = auth()->user()->id;
        $post->save();
    }

    public function createNewTag()
    {
        $tag = new Tag;
        $tag->name = $this->tagSearch;
        $tag->save();

        $this->tagSearch = "";

        $this->tags->push($tag->id);
    }

    public function createTag(int $tagId)
    {
        if(!Tag::where('id', $tagId)->exists())
        {
            return;
        }

        $this->tagSearch = "";
        $this->tags->push($tagId);
    }

    public function deleteTag(int $tagId)
    {
        $this->tags->forget($tagId);
    }

    public function render()
    {
        return view('livewire.admin.blog.create');
    }
}
