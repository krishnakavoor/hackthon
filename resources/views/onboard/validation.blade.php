@extends('layout.home')
@section('pageTitle', 'Stock screener and research tool for NASDAQ,NYSE,LSE and TSXS')
@section('pageDescription', 'Search and retrieve worldwide stock market articles and information from kavmy.com,its also stock screener and research tool for USA(NYSE,NASDAQ,AMEX),UK(LSE) and Canadian stocks.')
@section('pageKeywords', 'stock market, stock market news, stock market live feeds, NYSE, NASDAQ , TSX , TSXV ,LSE ,Canada Markets,USA markets,Market News, Business News')
@section('content')
<br/>
<br/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center" id="home-search">
           <?php /* <form class="form-inline" action="{{ url('/search')}}">
                <div class="input-group input-group-lg">
                    <input id="search" type="text" class="form-control" name="query" placeholder="" onkeyup="getAllStocklist()"  />
                    <span class="input-group-addon" id="stock-search" ><i class="glyphicon glyphicon-search"></i></span>
                </div>
                <input id="page-id" type="hidden" class="form-control" name="page" value="1"   />
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class='result'>
                </div>
            </form>  */
            ?>
        </div>
    </div>
</div>
<div  class="container">
    <div class="row mtop15">
        <div class="col-md-12">
           <h1> Welcome to Demo on routing and Dynamic form builder</h1>
         
        </div>
    </div>
</div>

<div class="container-fluid bottom-container">
    <div  class="container" >
        <div class="row mtop15">
          <?php /*  <div class="col-sm-12 text-center">
                <a href="https://www.facebook.com/kavmy/" class="white" target="_blank">Facebook</a> &nbsp;&nbsp;|
                <a href="https://www.linkedin.com/company/kavmy/" class="white" target="_blank">Linkedin</a>&nbsp;&nbsp;|
                <a href="https://plus.google.com/u/0/101472990314855648965"  class="white" target="_blank">Google+</a>&nbsp;&nbsp;|
                <a href="https://twitter.com/kavmy" class="white" target="_blank">Twitter</a><br/>
                <br><a href="{{ url('/contact-us')}}"><button type="button" class="btn btn-hollow btn-lg">Contact Us</button></a>
                <br/>
                <br/>
                <h4>Newsletter Sign Up</h4>
                <form action="{{ url('/newsletter/submit')}}" class="form-inline text-center" method="POST" id="news-letter-form" class="">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="newsletter-email" class="form-control" name="email">
                    </div><button type="button" class="btn btn-default" onclick="validationNewsletter()">Submit</button>
                    <input type="hidden" id="google-response"/>
                    <br/><br/>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="g-recaptcha" id="gcaptcha" data-sitekey="6LfK2XQUAAAAAPt9W8hPj-SdAWRrCxAVf7oaKLX5" data-error-callback="" data-callback="correctCaptcha" data-expired-callback="wrongCaptcha"></div>
                    </div>
                </form>
            </div> */ ?>
        </div>
        <br/>
        <br/>
    </div>
</div>

@endsection