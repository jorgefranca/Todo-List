<?php

namespace App\Models;

class Groups extends BaseModel{

  protected $validation = [ //parameters for validation
    'name'=>'required',
    // 'id'=>'required',
  ];

  protected $available = [ //parameters to be updated
    'name'
  ];

  protected $fillable = [ //The attributes that are mass assignable.
    'name',
    'id'
  ];
  
  public function people(){
    return $this->hasMany(People::class);
  }
}
