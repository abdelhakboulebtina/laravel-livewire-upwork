<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    protected $fillable=['proposal_id','content'];
    use HasFactory;
    public function proposal(){
        return $this->belongsTo('App\Models\Proposal'); 
    }
}
