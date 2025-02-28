@extends('layout.general')
@section('pageTitle', 'Contact Us')
@section('pageDescription', 'contacting worlds biggest  stock market screener kavmy.com.')
@section('pageKeywords', 'About kavmy, Contact market news, stock market live feeds, NYSE, NASDAQ , TSX , TSXV ,LSE ,Canada Markets,USA markets,Contact Kavmy News, Business News')
@section('content')
<div class="text-center" >
    <h1>Card</h1>
</div>
<div  class="container">
    <div class="row">
        <div class="col-sm-8">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Card Name</th>
        <th>stage name</th>
        <th>tenant name</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($tenantList as $tenant)
    <tr>
        <td>{{$tenant->id}}</td>
        <td>{{$tenant->cname}}</td>
        <td>{{$tenant->sname}}</td>
        <td>{{$tenant->title}}</td>
        <td>{{$tenant->active}}</td>
      </tr>
@endforeach 
      
    </tbody>
  </table>
          

</div>

    </div>
</div>
@endsection