@extends('layout.general')
@section('pageTitle', 'Contact Us')
@section('pageDescription', 'contacting worlds biggest  stock market screener kavmy.com.')
@section('pageKeywords', 'About kavmy, Contact market news, stock market live feeds, NYSE, NASDAQ , TSX , TSXV ,LSE ,Canada Markets,USA markets,Contact Kavmy News, Business News')
@section('content')
<div class="jumbotron text-center other-banner" >
    <h1>Contact Us</h1>
</div>
<div  class="container">
    <div class="row">
        <div class="col-sm-8">
            <form action="contact/request" method="post">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" maxlength="50" placeholder="Name" type="text" required>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" maxlength="50" placeholder="Email" type="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="phone" name="phone" maxlength="50" placeholder="Phone" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">


                        <select id="country" class="form-control" name="country">
                           <?php /* @foreach ($countryList as $country)
                            <option value="{{ $country->id }}">{{$country->name}}</option>
                            @endforeach */?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group text-center">
                        <button class="btn btn-danger " type="submit">Send</button>
                    </div>
                </div>
            </form>   
        </div>
        <div class="col-sm-4 text-center">
            <br/><br/>
            <span class="glyphicon glyphicon-map-marker logo"></span>
            Email:<a href="mailto:kavoorlab@gmail.com">kavoorlab@gmail.com</a>
        </div>

    </div>
</div>
@endsection