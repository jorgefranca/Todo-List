<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$arr = [
  '/issues' => 'App\Http\Controllers\IssuesController',
  '/people' => 'App\Http\Controllers\PeopleController',
  '/groups' => 'App\Http\Controllers\GroupsController',
  // '/issueshaspeoples' => 'App\Http\Controllers\IssuesHasPeopleController'
];

foreach ($arr as $slug => $class) {
  Route::get($slug, [$class, 'list']); // list all
  Route::get($slug.'/{id}', [$class, 'listId']); // list one
  Route::post($slug, [$class, 'save']); //create or update
  Route::put($slug.'/{id}',[$class, 'update']);
  Route::delete($slug.'/{id}', [$class, 'delete']); //delete
  Route::post('/issueshaspeople', ['App\Http\Controllers\IssuesHasPeopleController', 'save']); //salvar relacionamento
}
//corrigir rotas e métodos -- não faz parte do CRUD
  // Route::get($slug.'/people', [$class, 'listIssuePeople']);
  // Route::get($slug.'/people/{id}', [$class, 'listIssuesPeopleId']);
  // Route::get('people/groups', ['App\Http\Controllers\GroupsController', 'listPeopleGroups']);
  // Route::get('people/groups/{id}', ['App\Http\Controllers\GroupsController', 'listPeopleGroupId']);