@extends('layout.general')
@section('pageTitle', 'Contact Us')
@section('pageDescription', 'contacting worlds biggest  stock market screener kavmy.com.')
@section('pageKeywords', 'About kavmy, Contact market news, stock market live feeds, NYSE, NASDAQ , TSX , TSXV ,LSE ,Canada Markets,USA markets,Contact Kavmy News, Business News')
@section('content')
<div class="text-center" >
    <h1>Field Types</h1>
</div>
<div  class="container">
    <div class="row">
        <div class="col-sm-8">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Feild Name</th>
        <th>Feild Type</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($tenantList as $tenant)
    <tr>
        <td>{{ $tenant->id }}</td>
        <td>{{$tenant->name}}</td>
        <td>{{$tenant->type}}</td>
        <td>{{$tenant->active}}</td>
      </tr>
@endforeach 
      
    </tbody>
  </table>
          

</div>

    </div>
</div>
@endsection