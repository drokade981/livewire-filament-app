<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;

class ShowTeam extends Component
{
    public function render()
    {        
        $members = Member::orderBy('name', 'asc')->get();
        return view('livewire.show-team', compact('members'));
    }
}
