<?php

namespace App\Models;

class IssuesHasPeople extends BaseModel{
  
  protected $table = 'issueshaspeople';
  public $timestamps = false;
  protected $fillable = [
    'id',
    'people_id',
    'issues_id'
  ];
}