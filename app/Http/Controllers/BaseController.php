<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BaseController extends Controller {

  protected function getModel($str=null) {//get the model from controller
    $str = $str === null ? $this->model : $str;
    return new $str();
  }

  protected function list(){ //list all issues/people or grups
    $model = $this->getModel();
    return $model::all();
  }

  protected function listId($id){ //list just issues, people or group id
    $model = $this->getModel();
    return $model::findOrFail($id); 
  }

  protected function save(Request $req){
    $model = $this->getModel();
    if($model::validate($req)){
      $id = $model::find($req->id);
      if($id == null) return $model::create($req->all());
      else {
        $id->name = $req->name;
        return $id->save();
      }
    } else return response('Falha de validação',400);
  }

  protected function update(Request $req, $id){//updating using PUT
    $model = $this->getModel();
    $id = $model::find($id);
    if($model::available($req)) return $model::updateParameter($req, $id);
    else return response('Falha de validação', 400);
  }

  protected function delete($id){
    $model = $this->getModel();
    $deleteId = $model::find($id);
    return $deleteId -> delete();
  }
}