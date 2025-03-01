@extends('layout.general')
@section('pageTitle', 'Contact Us')
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
@foreach ($stageList as $stage)
        <h2><a href="<?php echo url('/onboard'); ?>/<?php echo $stage->tname ?>/<?php echo $stage->short_name ?>/">Start {{$stage->tname}} onboarding</a></h2>
@endforeach
</div>
</div>
    </div>
</div>
@endsection