<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded=[];
public function groups(){
    return $this->belongsTo(Group::class);
}
public static function boot()
{
    parent::boot();
    static ::saving(function ($team){
        $team->pts=$team->win +$team->draw;
    });
}
}
