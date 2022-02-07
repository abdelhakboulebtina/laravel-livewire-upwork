<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Conversation extends Component
{
    use AuthorizesRequests;
    public $conversation;
    public $message='';
    protected $listeners=['sent'=>'$refresh'];
    public function sendMessage(){
        Message::Create([
            'user_id'=>auth()->user,
            'conversation'=>$this->conversation->id,
            'content'=>$this->message
        ]);
        $this->message='';
        $this->emit('sent');
    }
    public function mount($conversation){
        $this->conversation=$conversation;
        $this->authorize('view',$conversation);
    }
    public function render()
    {
        return view('livewire.conversation');
    }
}
