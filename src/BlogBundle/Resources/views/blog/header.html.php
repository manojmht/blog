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
    </head>
    <body>
        <div id="multiple-blog-page">
            <!-- site-navigation start -->  
            <nav id="mainNavigation" class="navbar navbar-dafault main-navigation" role="navigation">
                <div class="container">       
                    <div class="navbar-header">                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- navbar logo -->
                    
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-uppercase">
                            <li>
                                <a href="/"><span>Home</span></a>                        
                            </li>
                            <li>
                                <a href="/about"><span>About</span></a>                        
                            </li>
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
                <hr>
            </nav>
            <!-- site-navigation end -->


            <!-- header begin -->
            <!--header class="page-head">
                <div class="header-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <ol class="breadcrumb">
                                    <li><a href="#">blog</a></li>
                                    <li class="active">multiple blog</li>
                                </ol> <!-- end of /.breadcrumb -->

                            <!--/div>
                        </div>
                    </div> <!-- /.container -->
                <!--/div> <!-- /.header-wrapper -->
            <!--/header> <!-- /.page-head (header end) -->