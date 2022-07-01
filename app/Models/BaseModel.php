<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class BaseModel extends Model {

  // use HasFactory;
  //dtabelas do bd (mass-assignment)
  protected $validation = [];
  protected $available = [];
  protected $fillable = ['id']; //columns (mass-assignment)

  protected $hidden = []; //hidden for serialization.

  protected function validate(Request $req) { //Validation
    $validator = Validator::make($req->all(), $this->validation);
    return !$validator->fails();//Fails()=> [true - fails  / false: validate]
  }

  protected function available(Request $req) { //check if parameters can be updated
    return $req->has($this->available);
  }

  protected function updateParameter(Request $req, $id){ //Update specific parameters
    foreach($this->available as $key){
      $id->$key = $req->$key;
    }
    return $id->save();
  }
}