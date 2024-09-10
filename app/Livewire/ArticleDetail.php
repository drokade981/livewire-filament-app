<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleDetail extends Component
{
    public $blogId = null;
    public function mount($id)
    {
        $this->blogId = $id;
    }
    public function render()
    {
        $article = Article::with('category')->findOrFail($this->blogId);
        return view('livewire.article-detail', compact('article'));
    }
}
