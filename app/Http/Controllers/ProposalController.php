<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Proposal;
use App\Models\CoverLetter;
class ProposalController extends Controller
{
    public function store(Request $request,Job $job){
        $proposal=Proposal::create([
            'job_id' => $job->id,
            'validated' => false
        ]);
        CoverLetter::create([
            'proposal_id'=>$proposal->id,
            'content'=>$request->input('content')
        ]);
        return Redirect()->route('jobs.index');
    }
    public function confirm(){

        $propasal=Proposal::findOrFail($request->proposal);
        if($proposal->job->user->id !== auth()->user->id){

        }
        $proposal->fill(['validated'=>true]);
        if($propasal->isDirty){
            $proposal->save();
            $conversation=Conversation::create([
                'from'=>auth()->user()->id,
                'to'=>$proposal->user->id,
                'job_id'=>$proposal->job_id,
            ]);
            $message=Message::create([
                'user_id'=>auth()->user()->id,
                'conversation_id'=>$conversation->id,
                'content'=>'bonjour j\'ai validé votre offre'
            ]);
        }
        return redirect()->route('jobs.index');
    }
}
