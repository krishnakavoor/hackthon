<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller as Controller;

class AdminController extends Controller {

    function __construct() {
        
    }

    /*public function searchResults(Request $request) {
         $name= $request->input('query');
         $page= $request->input('page');
       $results = app('App\Http\Controllers\ApiController')->getSearchData($name, $page);

      $last_page=$results->original['totalCount']/10;

       return view('search.result',['query' => $name, 'current_page'=>$page,'last_page'=>(int)$last_page,'results'=>$results->original['value'],'related'=>$results->original['relatedSearch']]);
    }*/

    public function loadTenant() {
      $tenantList = DB::table('tenant')->get();
      return view('admin.tenant', ['tenantList' => $tenantList]);
  }

  public function loadStage() {
    $tenantList = DB::table('stage')
    ->leftJoin('tenant', 'stage.tenant_id' , '=', 'tenant.id')
    ->select('stage.id', 'tenant.title', 'stage.name','stage.stage_order','stage.active')
    ->get();
    return view('admin.stage', ['tenantList' => $tenantList]);
}

public function loadStageByTenent($id) {
  $tenantList = DB::table('stage')
  ->leftJoin('tenant', 'stage.tenant_id' , '=', 'tenant.id')
  ->select('stage.id', 'tenant.title', 'stage.name','stage.stage_order','stage.active')
  ->where('stage.tenant_id', $id)
  ->get();
  return view('admin.stage', ['tenantList' => $tenantList]);
}

public function loadCard() {
  $tenantList = DB::table('card')
  ->leftJoin('tenant', 'card.tenant_id' , '=', 'tenant.id')
  ->leftJoin('stage', 'card.stage_id' , '=', 'stage.id')
  ->select('card.id', 'card.name as cname', 'stage.name as sname','tenant.title','card.active')
  ->get();
  return view('admin.card', ['tenantList' => $tenantList]);
}

public function loadCardByTenant($tenantId) {
  $tenantList = DB::table('card')
  ->leftJoin('tenant', 'card.tenant_id' , '=', 'tenant.id')
  ->leftJoin('stage', 'card.stage_id' , '=', 'stage.id')
  ->select('card.id', 'card.name as cname', 'stage.name as sname','tenant.title','card.active')
  ->where('card.tenant_id', $tenantId)
  ->get();
  return view('admin.card', ['tenantList' => $tenantList]);
}

public function loadFieldType() {
  $tenantList = DB::table('fieldtype')->get();
  return view('admin.fieldtype', ['tenantList' => $tenantList]);
}

}
