<?php
$version="1.0";
?>
<meta name="description" content="@yield('pageDescription')">
<meta name="keywords" content="@yield('pageKeywords')">
<meta name="author" content="www.kavmy.com">
<!-- Schema.org for Google -->
<meta itemprop="name" content="@yield('pageTitle') - www.kavmy.com">
<meta itemprop="description" content="@yield('pageDescription')">
<!-- Twitter -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="@yield('pageTitle') - www.kavmy.com">
<meta name="twitter:description" content="@yield('pageDescription')">
<meta name="twitter:site" content="@kavmy">
<meta name="twitter:creator" content="@kavmy">
<meta name="twitter:image" content="<?php echo url('/'); ?>/images/favicon/apple-touch-icon.png">
<!-- Open Graph general (Facebook, Pinterest & Google+) -->
<meta property="og:title" content="@yield('pageTitle') - www.kavmy.com">
<meta property="og:description" content="@yield('pageDescription')">
<meta property="og:url" content="{{ url()->full() }}"/>
<meta property="og:image" content="<?php echo url('/'); ?>/images/favicon/apple-touch-icon.png">
<meta property="og:site_name" content="www.kavmy.com"/>
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<link rel="canonical" href="{{ url()->full() }}">
<!-- Favicons -->
<link rel="icon" href="<?php echo url('/'); ?>/images/favicon/favicon.png" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo url('/'); ?>/images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo url('/'); ?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo url('/'); ?>/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo url('/'); ?>/images/favicon/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
<meta name="theme-color" content="#ffffff">
<meta name="msvalidate.01" content="346AF8019363CBD4D1921C9834820FE0" />
<meta name="yandex-verification" content="75a7375ce90e9c8c" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

<link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css?v={{$version}}"/>
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat'/>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' ></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

