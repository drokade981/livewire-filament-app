<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class ShowPage extends Component
{
    #[Url]
    public $pageId = null;

    public function mount($id)
    {
        $this->pageId = $id;
    }

    public function render()
    {
        $page = Page::findOrFail($this->pageId);
        if (!$page) {
            abort(404);
        }
        return view('livewire.show-page', compact('page'));
    }
}
