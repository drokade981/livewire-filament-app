<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Faq;

class FaqPage extends Component
{
    public function render()
    {
        $faqs = Faq::where('status', 'active')->orderBy('question', 'asc')->get();
        return view('livewire.faq-page', compact('faqs'));
    }
}
