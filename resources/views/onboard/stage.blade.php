@extends('layout.general')
@section('pageTitle', 'Onboarding stages')
@section('pageDescription', 'contacting worlds biggest  stock market screener kavmy.com.')
@section('pageKeywords', 'About kavmy, Contact market news, stock market live feeds, NYSE, NASDAQ , TSX , TSXV ,LSE ,Canada Markets,USA markets,Contact Kavmy News, Business News')
@section('content')
<div  class="container">
<div class="row" >
    <h1>Welcome to onboarding</h1>
</div>
</div>
<div  class="container">
<div class="row" >
    <div class="col-md-3">
    @foreach ($stageList as $stage)
        <h3><a href="<?php echo url('/onboard'); ?>/<?php echo $stage->tname ?>/<?php echo $stage->short_name ?>/">{{$stage->name}}</a></h3>
@endforeach 

</div>
    <div class="col-md-9"> 
    @foreach ($cardList as $card)
        <h2>{{$card->name}}</h2>
        <div class="row">
        @foreach ($fieldsList as $field)
        @if($card->id === $field->cid)
        <div class="col-md-4">
        @if($field->type==='text')
        <div class="form-group">
        <label for="{{$field->name}}">{{$field->title}}</label>
        <input type="text" class="form-control" name="{{$field->name}}" maxlength="{{$field->max_length}}}" id="{{$field->name}}">
        </div>
        @endif
        @if($field->type==='phone')
        <div class="form-group">
        <label for="{{$field->name}}">{{$field->title}}</label>
        <input type="number" class="form-control" name="{{$field->name}}" maxlength="{{$field->max_length}}}" id="{{$field->name}}">
        </div>
        @endif
        @if($field->type==='email')
        <div class="form-group">
        <label for="{{$field->name}}">{{$field->title}}</label>
        <input type="email" class="form-control" name="{{$field->name}}" maxlength="{{$field->max_length}}}" id="{{$field->name}}">
        </div>
        @endif
        @if($field->type==='select')
        <div class="form-group">
        <label for="usr">{{$field->title}}</label>
        <select class="form-control" id="sel1" name="{{$field->name}}">
        @foreach (json_decode($field->param) as $option)
        <option>{{$option}}</option>
        @endforeach 
        </select>
        </div>
        @endif
        </div>
        @endif
        @endforeach
</div>
    @endforeach
    </div>

    <div class="col-md-6"> 
   
    </div>
</div>
</div>

    </div>
</div>
@endsection