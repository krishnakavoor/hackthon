@extends('layout.general')
@section('pageTitle', 'Top IT Domains')
@section('content')
<div class="jumbotron text-center other-banner" >
    <h1>Cookies Policy</h1>

</div>
<div  class="container">
    <div class="row">
        <?php
        foreach ($domains as $domain) {
            echo '<div class="col-md-3">';
            echo $domain->name . "<br/>";
            echo '</div>';
        }
        ?>
        <?php echo $domains->links(); ?>
        
        <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    </div>
</div>

@endsection

 