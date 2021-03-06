<?php include_once('header.html.php'); ?>
    <body>
        <div id="error-page">
            <!-- fix the height of the whole content -->
            <div id="height-fix" class="text-center">

                <!--   header section begin   -->
                <section class="header bg-light-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">

                                    <div class="logo">
                                        <img class="img-responsive center-block" src="assets/img/logo.png">
                                    </div> <!-- /.logo -->

                                    <div class="page-title">
                                        <p>oops! page not found</p>
                                    </div> <!-- /.error-description -->
                                    
                                </div>
                            </div> <!-- /.col-md-6 col-md-offset-3 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </section> <!--   header section end   -->
                

                <!--   main-content section begin   -->
                <section class="main-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h1 class="error-nmbr">404</h1>  <!-- showing error number -->
                            </div>
                        </div> <!-- .row -->
                    </div> <!-- /.container -->
                </section> <!--   header section end   -->
                

                <!--   footer section begin   -->
                <section class="footer bg-light-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">
                                    <div class="error-page-btn">
                                        <div class="col-md-6">
                                            <a href="/" class="btn btn-black">
                                                go back
                                            </a> <!-- /go-back button -->
                                        </div> <!-- /.col-md-6 -->
                                    </div><!-- /.error-page-btn -->
                                </div>
                            </div> <!-- .col-md-6 col-md-offset-3 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </section> <!--   footer section end   -->


            </div> <!-- /#height fix -->
        </div> <!-- /#error-page  -->

        <script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>


        <!-- wow initialization -->
        <script>
            new WOW().init();
        </script>
    
    </body>
</html>
