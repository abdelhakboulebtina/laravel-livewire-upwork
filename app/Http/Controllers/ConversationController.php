<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;
class ConversationController extends Controller
{
    //
public function index(){
$conversations=auth()->user()->conversations()->latest()->get();
return view('conversations.index',compact('conversations'));
}
public function show(Conversation $conversation){
return view('conversations.show',compact('conversation'));
}
}
