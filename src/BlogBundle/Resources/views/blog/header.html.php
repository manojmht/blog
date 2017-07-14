<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <title><?php echo $title; ?></title>
        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- stylesheets -->
        <?php foreach ($view['assetic']->stylesheets(array('bundles/blog/css/*'), array('cssrewrite')) as $url): ?>
        <link rel="stylesheet" href="<?php echo $view->escape($url) ?>" />
        <?php endforeach ?>
        <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=59689afb80bb1d0011ab6a4a&product=inline-share-buttons' async='async'></script>
    </head>
    <body>
        <div id="multiple-blog-page">
            <!-- site-navigation start -->  
            <nav id="mainNavigation" class="navbar navbar-dafault main-navigation" role="navigation">
                <div class="container">       
                    <ul class="nav navbar-nav navbar-right text-uppercase">
                            <li>
                                <a href="/"><span>Home</span></a>                        
                            </li>
                            <li>
                                <a href="/about"><span>About</span></a>                        
                            </li>
                        </ul>
                </div><!-- /.container -->
            </nav>
            <!-- site-navigation end -->