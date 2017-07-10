 <?php include_once('header.html.php');?>
 <section class="blog-content">
                <div class="container">
                    <div class="row">
                        <main class="col-md-9 col-md-push-3" style="display: block;">
                            <?php  foreach($home as $key => $value){ ?>
                                        <article class="blog-item">
                                                <div class="">
                                                    <h3 class=""><a href="/blog/<?php echo str_replace(' ', '-', $value['title']); ?>"><?php echo $value['title']; ?></a></h3>
                                                    <span class="date"><?php echo $value['time']; ?></span>
                                                </div>
                                                <p><?php echo $value['content'] ?></p>
                                                <a href="/blog/<?php echo str_replace(' ', '-', $value['title']); ?>" class="text-capitalize ">
                                                    read more
                                                <span><i class="fa fa-angle-double-right"></i> </span>
                                                </a>
                                        </article> <!-- /.blog-item -->    
                             <?php  } ?>
                        </main>

                        <!-- begin sidebar -->
                         <?php include('sidebar.html.php'); ?>
                        <!-- end sidebar -->
                    </div>
                </div>
            </section>
            <?php include('footer.html.php');?>