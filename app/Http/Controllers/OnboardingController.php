<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller as Controller;

class OnboardingController extends Controller {

    function __construct() {
        
    }

    /*public function searchResults(Request $request) {
         $name= $request->input('query');
         $page= $request->input('page');
       $results = app('App\Http\Controllers\ApiController')->getSearchData($name, $page);

      $last_page=$results->original['totalCount']/10;

       return view('search.result',['query' => $name, 'current_page'=>$page,'last_page'=>(int)$last_page,'results'=>$results->original['value'],'related'=>$results->original['relatedSearch']]);
    }*/

    public function loadDashabord() {
      $stageList = DB::table('stage')
      ->leftJoin('tenant', 'stage.tenant_id' , '=', 'tenant.id')
      ->select('stage.id', 'stage.short_name','tenant.name as tname', 'stage.name','stage.stage_order','stage.active')
      ->where('stage.stage_order', 1)
      ->get();

    return view('onboard.dashboard', ['stageList' => $stageList]);
  }

  public function loadStageByTenant($tenant,$stage_name) {
    $stageList = DB::table('stage')
    ->leftJoin('tenant', 'stage.tenant_id' , '=', 'tenant.id')
    ->select('stage.id', 'stage.short_name','tenant.name as tname', 'stage.name','stage.stage_order','stage.active')
    ->where('tenant.name', $tenant)
    ->get();

    $stageName = DB::table('stage')
    ->leftJoin('tenant', 'stage.tenant_id' , '=', 'tenant.id')
    ->select('stage.id', 'tenant.title as tname', 'stage.name','stage.stage_order','stage.active')
    ->where('tenant.name', $tenant)
    ->where('stage.short_name', $stage_name)
    ->get();

    $cardList = DB::table('card')
    ->leftJoin('tenant', 'card.tenant_id' , '=', 'tenant.id')
    ->leftJoin('stage', 'card.stage_id' , '=', 'stage.id')
    ->select('card.id', 'card.name', 'tenant.id as tid', 'stage.id as sid', 'card.active')
    ->where('tenant.name', $tenant)
    ->where('stage.short_name', $stage_name)
    ->get();

    $fieldsList = DB::table('fields')
    ->leftJoin('card', 'card.id' , '=', 'fields.card_id')
    ->leftJoin('stage', 'stage.id' , '=', 'fields.stage_id')
    ->leftJoin('tenant', 'tenant.id' , '=', 'fields.tenant_id')
    ->select('fields.id', 'fields.name', 'fields.title','fields.type', 'fields.param','fields.min_length','fields.max_length','card.id as cid', 'fields.active')
    ->where('tenant.name', $tenant)
    ->where('stage.short_name', $stage_name)
    ->get();

    return view('onboard.stage', ['stageList' => $stageList,'cardList'=>$cardList, 'fieldsList'=>$fieldsList, 'stageName'=>$stageName]);
}

public function loadOnBoardingCompleted($tenant) {
  $tenantList = DB::table('stage')
  ->leftJoin('tenant', 'stage.tenant_id' , '=', 'tenant.id')
  ->select('stage.id', 'tenant.title', 'stage.name','stage.stage_order','stage.active')
  ->where('stage.tenant_id', $id)
  ->get();
  return view('onboard.stage', ['tenantList' => $tenantList]);
}

public function validateCardByTenant(Request $request){
  print($request);

  return view('onboard.validation');
}


}
