<?php
namespace App\Models;

class People extends BaseModel
{
  protected $validation = [ //parameters for validation
    'name'=>'required|max:50',
    'email'=>'required|email:rfc',
    'cpf'=>'required|max:12',
    'groups_id'=>'required'
  ];

  protected $available = [ //parameters to be updated
    'name',
    'email',
    'groups_id'
  ];

  protected $fillable = [ //The attributes that are mass assignable.
    'name',
    'email',
    'cpf',
    "groups_id"
  ];

  protected $hidden = [// The attributes that should be hidden for serialization.
    'cpf'
  ];

  public function groups(){
    return $this->belongsTo(Groups::class);
  }
  public function issues(){
    return $this->belongsToMany(Issues::class,'issueshaspeople','people_id','issues_id');
  }

  protected $with = [ //vai trazer as relações sempre que eu chamar o people
    'Groups',
    'Issues'
  ];
}
