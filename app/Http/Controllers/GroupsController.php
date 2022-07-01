<?php

namespace App\Http\Controllers;

class GroupsController extends BaseController
{
  protected $model = 'App\Models\Groups';

  // protected function listPeopleGroups(){
  //   $groups = Groups::with('peoples')->get();
  //   return $groups;

  // }

  // protected function listPeopleGroupId($id){
  //   return Groups::find($id)->peoples;
  // }
  
//   protected function list(Request $req) {
//     return Groups::where('id','>','2')->orderBy('id')->get();
//   }

//   protected function listId($id){
//     return Groups::findOrFail($id); 
//   }

//   protected function save(Request $request){
//     return Groups::create($request->all());    
//   }

//   protected function update(Request $req, $id){
//     $group = Groups::find($id);
//     $group-> descr = $req->descr;
//     $group-> todo = $req->todo;
//     return $group->save();
//   }

//  protected function delete($id){
//     $group = Groups::find($id);
//     return $group -> delete();
//  }
}
