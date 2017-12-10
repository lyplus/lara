<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    protected $fillable=[
      'title','description','body',
    ];
    public function nav(){
      return $this->belongsTo(Nav::class);
    }
    public function user(){
      return $this->belongsTo(User::class);
    }
}
