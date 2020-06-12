<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toDoList extends Model
{
    protected $fillable = ['title','date','priority'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
