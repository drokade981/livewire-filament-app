<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class ContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
    ];

    public function submit()
    {
        $this->validate();
        $maildata = [
            'subject' => 'You have received a contact email',
            'name' => $this->name,
            'email' => $email,
            'message' => $message,
        ];
        Mail::to('admin@example.com')->send(new ContactEmail($maildata));
        session()->flash('success', 'thanks for contating us.');
    }
    public function render()
    {
        return view('livewire.contact-page');
    }
}
