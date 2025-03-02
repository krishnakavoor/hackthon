@extends('layout.home')
@section('pageTitle', 'Stock screener and research tool for NASDAQ,NYSE,LSE and TSXS')
@section('pageDescription', 'Search and retrieve worldwide stock market articles and information from kavmy.com,its also stock screener and research tool for USA(NYSE,NASDAQ,AMEX),UK(LSE) and Canadian stocks.')
@section('pageKeywords', 'stock market, stock market news, stock market live feeds, NYSE, NASDAQ , TSX , TSXV ,LSE ,Canada Markets,USA markets,Market News, Business News')
@section('content')
<?php


function validate($value,$field){
    switch ($field->type) {
        case "text":
            if($field->is_mandatory===1){
                if($value === null){
                    return "This field is mandatory";
                }else{
                    return (preg_match("/^[a-zA-Z-' ]*$/",$value ))?"valid":"Invalid"; 
                }
            }else{
                return "valid";
            }
          break;
        case "email":
            if($field->is_mandatory===1){
                if($value === null){
                    return "This field is mandatory";
                }else{
                    return (filter_var($value, FILTER_VALIDATE_EMAIL))?"valid":"Invalid"; 
                }
            }else{
                return "valid";
            }
          break;
        case "phone":
            if($field->is_mandatory===1){
                if($value === null){
                    return "This field is mandatory";
                }else{
                    return "valid"; 
                }
            }else{
                return "valid";
            }
          break;
        default:
          echo "Valid";
      }
   
    
};
?>
<br/>
<br/>

<div  class="container">
    <div class="row mtop15">
        <div class="col-md-12">

       <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Field Name</th>
        <th>Field Type</th>
        <th>Value Recived</th>
        <th>Validate</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($fieldsList as $field)
<td>{{$field->id}}</td>
<td>{{$field->name}}</td>
<td>{{$field->type}}</td>
<td><?php echo $request->input($field->name)?></td>
<td><?php echo validate($request->input($field->name),$field)?></td>
</tr>
        @endforeach
</tbody>
</table>
        </div>
    </div>
</div>


@endsection