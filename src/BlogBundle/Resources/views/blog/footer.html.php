            <!-- footer-navigation start -->  
            <nav class="hidden-xs hidden-sm navbar footer-nav" role="navigation">
                <div class="container">
                    
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- navbar logo -->
                        <div class="navbar-brand">
                            <span class="sr-only">&copy;manojmahato.com</span>
                            <a href="manojmahato.com">
                                &copy;manojmahato.com
                            </a>
                        </div>
                        <!-- navbar logo -->

                    </div><!-- /.navbar-header -->

                    <!-- nav links -->
                    <div class="collapse navbar-collapse" id="main-nav-collapse">
                        <ul class="nav navbar-nav navbar-right text-capitalize">
                            <li><a href="#home">
                                <span>home</span>
                            </a></li>
                            <li><a href="#about">
                                <span>shop</span>
                            </a></li>

                            <li><a href="#contact">
                                <span>contact</span>
                            </a></li>
                        </ul>
                    </div><!-- nav links -->
                    
                </div><!-- /.container -->
            </nav>
            <!-- footer-navigation end -->
        </div> 
        <!-- end of /#multiple-blog-page -->


        <?php foreach ($view['assetic']->javascripts(
                        array('@BlogBundle/Resources/public/js/*')
                        ) as $url): ?>
            <script src="<?php echo $view->escape($url) ?>"></script>
        <?php endforeach ?>
        
        <!-- script for FAQ using jquery -->
        
        <script>
            $(".faq-q").click( function () {
              var container = $(this).parents(".faq-c");
              var answer = container.find(".faq-a");
              var trigger = container.find(".faq-t");
              
              answer.slideToggle(200);
              
              if (trigger.hasClass("faq-o")) {
                trigger.removeClass("faq-o");
              }
              else {
                trigger.addClass("faq-o");
              }
            });
        </script>
    </body>
</html>