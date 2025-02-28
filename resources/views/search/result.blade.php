@extends('layout.general')
@section('pageTitle', $query.'- Anyek Search Results')
@section('pageDescription', $query.'- Anyek Search Results')
@section('pageKeywords', $query.'- Anyek Search Results')
@section('content')
<div  class="container">
    <div class="row mtop15">
        <div class="col-md-12">
        @foreach ($results as $result)
        <a href='{{ $result["url"] }}' target="_blank">{{$result['url']}}</a>
        <h2><a href='{{ $result["url"] }}' target="_blank">{{$result['title']}}</a></h2>
        <p>{{ $result["description"] }}</p>
        <span>{{ $result["datePublished"] }}</span>
        <hr/>
        @endforeach
        <?php
        ?>

        </div>
    </div>
    <div class="row">
    <div class="col-md-12" style="text-align: center;">
    <a href="#" onclick="searchInit(1)">First</a> | <a href="#" onclick="searchInit({{$current_page-1}})">Prev</a> |
    <select id="page-number" onchange="changeInit()">
    <?php
    for ($x = 1; $x <= $last_page; $x++) {
        $selected='';
        if($x==$current_page){
            $selected='selected';  
        }

        echo "<option value='".$x."' ".$selected." >".$x."</option>";
      }
    ?>
    </select> |
    <a href="#" onclick="searchInit({{$current_page+1}})">Next</a> | <a href="#" onclick="searchInit({{$last_page}})">Last</a> 
    </div>
    </div>
</div>

<script>

function searchInit(val){
    if(val===0){
        $('#page-id').val(1);
    }
$('#page-id').val(val);
$("#search-form").submit();
}
function changeInit(){
    searchInit($('#page-number').val());
}
</script>

@endsection