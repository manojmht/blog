        <?php include_once('header.html.php'); ?>  
        <section class="blog-content">
                <div class="container">
                    <div class="row">
                       <?php include_once('sidebar.html.php'); ?>
                        <main class="col-md-9" style="display: block; margin-top: 25px !important;">
                            <article class="blog-item">
                                <img class="img-responsive" src="<?php echo $data[0]['image'];?>" alt="blog-featured-image">
                                <div class="blog-heading">
                                    <h3 class=""><?php echo $data[0]['title']; ?></h3>
                                    <span class="date"><?php echo $data[0]['time']; ?></span>
                                </div>
                                <?php echo $data[0]['content']; ?>
                                <!--div class="comments">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3>2 Comments</h3>
                                            <div class="cmnt-clipboard"><span class="btn-clipboard">Reply</span></div>
                                            <div class="well">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="assets/img/commenter1.jpg" class="img-responsive center-block" alt="first-comment">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p class="comment-info">
                                                            <strong>Reena Scot</strong> <span>22 april 2015</span>
                                                        </p>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cmnt-clipboard"><span class="btn-clipboard">Reply</span></div>
                                            <div class="well">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="assets/img/commenter2.jpg" class="img-responsive center-block" alt="second-comment">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p class="comment-info">
                                                            <strong>David Martin</strong> <span>22 april 2015</span>
                                                        </p>
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div-->

                                <!--div class="comment-post">
                                    <h3>Post A Comment</h3>
                                    <form method="post" >
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input name="email" type="email" class="form-control" id="email" required="required" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input name="website" type="url" class="form-control" id="subject" required="required" placeholder="Your Website">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <textarea name="message" type="text" class="form-control" id="message" rows="8" required="required" placeholder="Type here message"></textarea>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" id="submit" name="submit" class="btn btn-black">post comment</button>
                                    </form>
                                </div-->
                            </article>
                        </main>


                        <!-- begin sidebar -->
                         
                        <!-- end sidebar -->
                    </div>
                </div>
            </section>
            <?php //include('footer.html.php');?>