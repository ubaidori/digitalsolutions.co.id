<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = 
    [
        'guest',
        'bride',
        'groom'
    ];
    public function getTitleAttribute(){ return $this->bride . ' & ' . $this->groom; }
}
