<?php

namespace App\Models;

class Issues extends BaseModel
{
  protected $validation = [ //parameters for validation
    'descr'=>'required',
    'done'=>'required',
    'todo'=>'required',
    'doing'=>'required',
  ];

  protected $available = [ //parameters to be updated
    'todo',
    'doing',
    'done'
  ];
  protected $fillable = [ //The attributes that are mass assignable.
    'done',
    'descr',
    'todo',
    'doing'
  ];
  public function people(){
    return $this->belongsToMany(People::class,'issueshaspeople');
  }
}
