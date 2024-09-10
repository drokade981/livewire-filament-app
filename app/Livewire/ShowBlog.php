<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Url;

class ShowBlog extends Component
{

    #[Url]
    public $categorySlug = null;

    public function render()
    {
        $categories = Category::all();
        $articles = Article::when($this->categorySlug, function ($q) {
            $category = Category::where('slug', $this->categorySlug)->first();
            if(empty($category)) {
                abort(404);
            }
            $q->where('category_id', $category->id);
        })->where('status', 'active')->orderBy('created_at', 'desc')->paginate(1);
        $latestArticles = Article::where('status', 'active')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('livewire.show-blog', compact('articles', 'categories', 'latestArticles'));
    }
}
