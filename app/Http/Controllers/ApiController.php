<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller as Controller;

class ApiController extends Controller {

    function __construct() {
        $this->client = new \GuzzleHttp\Client(['headers' => [
            'x-rapidapi-key' => '0fa5152770msh472b40a57983606p19bb73jsnc34892a3d8ee',
            'x-rapidapi-host' => 'contextualwebsearch-websearch-v1.p.rapidapi.com'
        ]]);
    }

    public function getSearchData($query,$page) {
        $url = "https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/Search/WebSearchAPI?q=".$query."&pageNumber=".$page."&pageSize=10&autoCorrect=true";
        $response = $this->client->get($url);
        $results = $response->getBody();
        $results = json_decode($results, true); //usage of stdclass
        return response()->json($results);
    }

}
