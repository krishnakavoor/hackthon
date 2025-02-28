<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="<?php echo url('/'); ?>">Infosys Helix</a>
            </div>
            <div class="nav navbar-nav" id="search-bar">
               <?php /* @if(!Request::is('/'))
                <form class="form-inline" id="search-form" action="{{ url('/search')}}" >
                    <div class="input-group">
                    <input id="search" type="text" class="form-control" name="query" value="{{$query}}"   />
                    <span class="input-group-addon" id="stock-search" onclick="$('#search-form').submit()"><i class="glyphicon glyphicon-search"></i></span>
                    </div>
                    <input id="page-id" type="hidden" class="form-control" name="page" value="1"   />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class='result'>
                    </div>
                </form>
                @endif */
                ?>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            <li >
            <a  href="{{ url('/onboard/dashboard')}}">Dashbord</a>
</li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/tenant')}}">Tenant</a></li>
                            <li><a href="{{ url('/stage')}}"> Stage</a></li>
                            <li><a href="{{ url('/fieldtype')}}"> Field Type</a></li>
                            <li><a href="{{ url('/cards')}}">Cards</a></li>
                        </ul>
                    </li>
             </ul>

            <?php /*   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Images
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/usa')}}"><img src="<?php echo url('/') . "/images/flag/us.png"; ?>" height="16" alt="usa"/> USA</a></li>
                            <li><a href="{{ url('/usa/list')}}"><img src="<?php echo url('/') . "/images/flag/us.png"; ?>" height="16" alt="usa"/> All American stocks Listings</a></li>
                            <li><a href="{{ url('/usa/nyse')}}"><img src="<?php echo url('/') . "/images/flag/us.png"; ?>" height="16" alt="usa"/> NYSE</a></li>
                            <li><a href="{{ url('/usa/nyse/list')}}"><img src="<?php echo url('/') . "/images/flag/us.png"; ?>" height="16" alt="usa"/> All NYSE Listings</a></li>
                            <li><a href="{{ url('/usa/nasdaq')}}"><img src="<?php echo url('/') . "/images/flag/us.png"; ?>" height="16" alt="usa"/> NASDAQ</a></li>
                            <li><a href="{{ url('/usa/nasdaq/list')}}"><img src="<?php echo url('/') . "/images/flag/us.png"; ?>" height="16" alt="usa"/>All NASDAQ Listings</a></li>
                            <li><a href="{{ url('/usa/amex')}}"><img src="<?php echo url('/') . "/images/flag/us.png"; ?>" height="16" alt="usa"/> AMEX</a></li>
                            <li><a href="{{ url('/usa/amex/list')}}"><img src="<?php echo url('/') . "/images/flag/us.png"; ?>" height="16" alt="usa"/>All AMEX Listings</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Life style
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/uk')}}"><img src="<?php echo url('/') . "/images/flag/gb.png"; ?>" height="16" alt="uk"/> UK</a></li>
                            <li><a href="{{ url('/uk/list')}}"><img src="<?php echo url('/') . "/images/flag/gb.png"; ?>" height="16" alt="uk"/> All UK stocks List</a></li>
                            <li><a href="{{ url('/uk/lse')}}"><img src="<?php echo url('/') . "/images/flag/gb.png"; ?>" height="16" alt="uk"/> LSE</a></li> 
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Politics
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/uk')}}"><img src="<?php echo url('/') . "/images/flag/gb.png"; ?>" height="16" alt="uk"/> UK</a></li>
                            <li><a href="{{ url('/uk/list')}}"><img src="<?php echo url('/') . "/images/flag/gb.png"; ?>" height="16" alt="uk"/> All UK stocks List</a></li>
                            <li><a href="{{ url('/uk/lse')}}"><img src="<?php echo url('/') . "/images/flag/gb.png"; ?>" height="16" alt="uk"/> LSE</a></li> 
                        </ul>
                    </li>
                </ul> */ ?>
            </div>
        </div>
    </nav>
</div>
