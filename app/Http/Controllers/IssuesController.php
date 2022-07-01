<?php

namespace App\Http\Controllers;

use App\Models\Issues;

class IssuesController extends BaseController
{
  protected $model = 'App\Models\Issues';
  
  //   $peoples = Issues::with('peoples')->get();
  //   return $peoples;//->peoples->get();
  //   // foreach ($issues as $issue){
  //   //   return $issue->peoples->descr;
  //   // }
  //   // peoples::find($id)->Issues;
  //   // return peoples::find($id)->Issues->orderBy('id','desc')->get();
  //   // define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST']);
  //   // return BASE_URL.'/';
  // }

  // protected function listIssuesPeopleId($issues_id){
  //   $issues = Peoples::with('issues')->get();
  //   return $issues->where('id','=',$issues_id);//->peoples->get();
  //   // return Issues::find($issues_id)->peoples;
  // }
}