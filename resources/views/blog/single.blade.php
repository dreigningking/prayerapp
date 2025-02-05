@extends('layout.app')

@section('content')
<!-- SINGLE POST
			============================================= -->
<section id="single-post" class="pb-90 inner-page-hero blog-page-section">
    <div class="container">
        <div class="row justify-content-center">


            <!-- SINGLE POST CONTENT -->
            <div class="col-xl-10">
                <div class="post-content">


                    <!--  SINGLE POST TITLE -->
                    <div class="single-post-title text-center">

                        <!-- Post Tag -->
                        <span class="post-tag color--green-400">{{ $post->category->name }}</span>

                        <!-- Title -->
                        <h2 class="s-46 w-700">{{ $post->title }}</h2>

                        <!-- Post Meta -->
                        <div class="blog-post-meta mt-35">
                            <ul class="post-meta-list ico-10">
                                <li>
                                    <p class="p-md w-500">By {{ $post->user->name }}</p>
                                </li>
                                <li class="meta-list-divider">
                                    <p><span class="flaticon-minus"></span></p>
                                </li>
                                <li>
                                    <p class="p-md">{{ $post->created_at->format('F d, Y') }}</p>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- END SINGLE POST TITLE -->


                    <!-- SINGLE POST IMAGE -->
                    <div class="blog-post-img py-50">
                        <img class="img-fluid r-16" src="{{ $post->image}}" alt="blog-post-image">
                    </div>


                    <!-- SINGLE POST TEXT -->
                    <div class="single-post-txt">

                        {!! $post->body !!}


                    </div> <!-- END SINGLE POST TEXT -->


                    <!-- SINGLE POST SHARE LINKS -->
                    <div class="row">
                        <div class="col post-share-list">
                            <ul class="share-social-icons ico-20 text-center clearfix">
                                <li><a href="#" class="share-ico"><span class="flaticon-twitter"></span></a></li>
                                <li><a href="#" class="share-ico"><span class="flaticon-facebook"></span></a></li>
                                <li><a href="#" class="share-ico"><span class="flaticon-bookmark"></span></a></li>
                            </ul>
                        </div>
                    </div> <!-- END SINGLE POST SHARE -->


                    
                    <!-- POST COMMENTS -->
                    <div class="post-comments">
                        <div class="comments-wrapper">

                            <!-- Title -->
                            <h5 class="s-24 w-700">{{ $post->comments_count }} Comments</h5>

                            <!-- COMMENT #1 -->
                            <div class="comment d-flex">

                                <!-- Comment-1 Avatar -->
                                <img src="{{asset('images/comment-author-1.jpg')}}" alt="comment-avatar">

                                <!-- Comment-Body -->
                                <div class="comment-body">

                                    <!-- Comment-1 Meta -->
                                    <div class="comment-meta">
                                        <h6 class="s-17 w-700">Jack H.</h6>
                                        <span class="comment-date">2 days ago&#8194;- </span>
                                        <span class="btn-reply ico-20">
                                            <a href="#leave-comment"><span class="flaticon-reply-arrow"></span> Reply</a>
                                        </span>
                                    </div>

                                    <!-- Comment-1 Text -->
                                    <p class="mb-40">Ratione mollis undo risus aenean arcu lectus rutrum porta
                                        primis and puruss augue luctus neque purus and ipsum neque dolor primis
                                        libero tempus eget tempor ligula posuere varius impedit enim tempor vitae
                                        pulvinar at congue egestas vitae augue
                                    </p>

                                    <hr>

                                    <!-- Nested Comment -->
                                    <div class="comment d-flex">

                                        <!-- Nested Avatar -->
                                        <a href="#" class="pr-3">
                                            <img src="{{asset('images/comment-author-2.jpg')}}" alt="comment-avatar">
                                        </a>

                                        <div class="comment-body">

                                            <!-- Comment-2 Meta -->
                                            <div class="comment-meta">
                                                <h6 class="s-17 w-700">S. Parker</h6>
                                                <span class="comment-date">4 days ago&#8194;- </span>
                                                <span class="btn-reply ico-20">
                                                    <a href="#leave-comment"><span class="flaticon-reply-arrow"></span> Reply</a>
                                                </span>
                                            </div>

                                            <!-- Comment-2 Text -->
                                            <p>Etiam sapien magna at vitae pulvinar congue egestas and undo pretium
                                                neque viverra porta suscipit ratione, mollis risus a lectus aliquet
                                            </p>

                                        </div>

                                    </div> <!-- End Nested Comment -->


                                </div>


                            </div> <!-- END COMMENT #1 -->


                            <hr>


                            <!-- COMMENT #3 -->
                            <div class="comment d-flex">

                                <!-- Comment Avatar -->
                                <img src="{{asset('images/comment-author-3.jpg')}}" alt="comment-avatar">

                                <!-- Comment Body -->
                                <div class="comment-body">

                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <h6 class="s-17 w-700">Sarah Griffi</h6>
                                        <span class="comment-date">16 days ago&#8194;- </span>
                                        <span class="btn-reply ico-20">
                                            <a href="#leave-comment"><span class="flaticon-reply-arrow"></span> Reply</a>
                                        </span>
                                    </div>

                                    <!-- Comment Text -->
                                    <p>Porta ratione mollis risus aenean arcu lectus rutrum porta primis and
                                        puruss augue luctus neque purus and ipsum neque dolor primis libero tempus
                                        eget tempor ligula posuere varius impedit enim tempor vitae pulvinar at
                                        congue an augue egestas vitae
                                    </p>

                                </div> <!-- End Comment Body -->

                            </div> <!-- END COMMENT #3 -->


                            <hr>


                            <!-- COMMENT #4 -->
                            <div class="comment d-flex">

                                <!-- Comment Avatar -->
                                <img src="{{asset('images/comment-author-4.jpg')}}" alt="comment-avatar">

                                <!-- Comment Body -->
                                <div class="comment-body">

                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <h6 class="s-17 w-700">Joshua A.</h6>
                                        <span class="comment-date">30 days ago&#8194;- </span>
                                        <span class="btn-reply ico-20">
                                            <a href="#leave-comment"><span class="flaticon-reply-arrow"></span> Reply</a>
                                        </span>
                                    </div>

                                    <!-- Comment Text -->
                                    <p>Congue augue egestas integer velna purus undo purus magna nec suscipit
                                        egestas magna and neque egestas a porta ratione mollis risus lectus porta
                                        quisque lacus
                                    </p>

                                </div> <!-- End Comment Body -->

                            </div> <!-- END COMMENT #4 -->


                            <hr>


                            <!-- COMMENT FORM -->
                            <div id="leave-comment">

                                <!-- Title -->
                                <h5 class="s-24 w-700">Leave a Comment</h5>

                                <!-- Text -->
                                <p>Your email address will not be published. Required fields are marked *</p>

                                <form name="commentform" class="row comment-form">

                                    <div class="col-md-12 input-message">
                                        <p class="black--color">Add Comment <span>*</span></p>
                                        <textarea class="form-control message" name="message" rows="6" placeholder="Enter Your Comment Here* ..." required>{{ $post->content }}</textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="black--color">Name <span>*</span></p>
                                        <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="black--color">Email <span>*</span></p>
                                        <input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" required>
                                    </div>

                                    <!-- Contact Form Button -->
                                    <div class="col-lg-12 form-btn">
                                        <button type="submit" class="btn btn--theme hover--theme submit">
                                            Post Comment
                                        </button>
                                    </div>

                                    <!-- Contact Form Message -->
                                    <div class="col-md-12 comment-form-msg text-center">
                                        <div class="sending-msg"><span class="loading"></span></div>
                                    </div>

                                </form>

                            </div> <!-- END COMMENT FORM -->


                        </div>
                    </div> <!-- END POST COMMENTS -->


                </div>
            </div> <!-- END  SINGLE POST CONTENT -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END SINGLE POST -->



{{-- 
<!-- BLOG-1
			============================================= -->
<section id="blog-1" class="bg--white-300 py-100 blog-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-title mb-70">

                    <!-- Title -->
                    <h2 class="s-50 w-700">Keep Reading...</h2>

                    <!-- Text -->
                    <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p>

                </div>
            </div>
        </div>


        <div class="row">


            <!-- BLOG POST #1 -->
            <div class="col-md-6 col-lg-4">
                <div id="bp-1-1" class="blog-post wow fadeInUp">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img mb-35">
                        <img class="img-fluid r-16" src="{{asset('images/blog/post-8-img.jpg')}}" alt="blog-post-image">
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Tag -->
                        <span class="post-tag color--pink-400">Product News</span>

                        <!-- Post Link -->
                        <h6 class="s-20 w-700">
                            <a href="single-post.html">Aliqum mullam porta blandit: tempor sapien and gravida</a>
                        </h6>

                        <!-- Text -->
                        <p>Egestas luctus vitae augue and ipsum ultrice quisque in cursus lacus feugiat congue
                            diam ultrice laoreet sagittis
                        </p>

                        <!-- Post Meta -->
                        <div class="blog-post-meta mt-20">
                            <ul class="post-meta-list ico-10">
                                <li>
                                    <p class="p-sm w-500">By Helen J.</p>
                                </li>
                                <li class="meta-list-divider">
                                    <p><span class="flaticon-minus"></span></p>
                                </li>
                                <li>
                                    <p class="p-sm">Apr 28, 2023</p>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- END BLOG POST TEXT -->

                </div>
            </div> <!-- END BLOG POST #1 -->


            <!-- BLOG POST #2 -->
            <div class="col-md-6 col-lg-4">
                <div id="bp-1-2" class="blog-post wow fadeInUp">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img mb-35">
                        <img class="img-fluid r-16" src="{{asset('images/blog/post-2-img.jpg')}}" alt="blog-post-image">
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Tag -->
                        <span class="post-tag color--green-400">Community</span>

                        <!-- Post Link -->
                        <h6 class="s-20 w-700">
                            <a href="single-post.html">Porttitor cursus fusce egestas CEO cursus at magna sapien
                                suscipit and egestas ipsum
                            </a>
                        </h6>

                        <!-- Text -->
                        <p>Aliqum mullam ipsum vitae and blandit vitae tempor sapien and donec lipsum</p>

                        <!-- Post Meta -->
                        <div class="blog-post-meta mt-20">
                            <ul class="post-meta-list ico-10">
                                <li>
                                    <p class="p-sm w-500">By Martex Team</p>
                                </li>
                                <li class="meta-list-divider">
                                    <p><span class="flaticon-minus"></span></p>
                                </li>
                                <li>
                                    <p class="p-sm">Apr 14, 2023</p>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- END BLOG POST TEXT -->

                </div>
            </div> <!-- END BLOG POST #2 -->


            <!-- BLOG POST #3 -->
            <div class="col-md-12 col-lg-4">
                <div id="bp-1-3" class="blog-post wow fadeInUp">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img mb-35">
                        <img class="img-fluid r-16" src="{{asset('images/blog/post-5-img.jpg')}}" alt="blog-post-image">
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Tag -->
                        <span class="post-tag color--purple-400">Freelancer Tips</span>

                        <!-- Post Link -->
                        <h6 class="s-20 w-700">
                            <a href="single-post.html">Cubilia laoreet augue egestas and Martex magna impedit</a>
                        </h6>

                        <!-- Text -->
                        <p>Luctus vitae egestas augue and ipsum ultrice quisque in cursus lacus feugiat egets
                            congue ultrice sagittis laoreet
                        </p>

                        <!-- Post Meta -->
                        <div class="blog-post-meta mt-20">
                            <ul class="post-meta-list ico-10">
                                <li>
                                    <p class="p-sm w-500">By Miranda Green</p>
                                </li>
                                <li class="meta-list-divider">
                                    <p><span class="flaticon-minus"></span></p>
                                </li>
                                <li>
                                    <p class="p-sm">Mar 27, 2023</p>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- END BLOG POST TEXT -->

                </div>
            </div> <!-- END BLOG POST #3 -->


        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- END BLOG-1 -->
--}}



<!-- MODAL WINDOW (NEWSLETTER FORM)
			============================================= -->
<!-- MODAL WINDOW (NEWSLETTER FORM)
			============================================= -->
<!-- <div id="modal-2" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"> -->


            <!-- CLOSE BUTTON -->
            <!-- <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
                <span class="flaticon-cancel"></span>
            </button> -->


            <!-- MODAL CONTENT -->
            <!-- <div class="modal-body text-center"> -->


                <!-- IMAGE -->
                <!-- <div class="modal-body-img">
                    <img class="img-fluid" src="{{asset('images/modal-newsletter-blue.jpg')}}" alt="content-image">
                </div> -->


                <!-- NEWSLETTER FORM -->
                <!-- <div class="modal-body-content"> -->

                    <!-- Title -->
                    <!-- <h5 class="s-24 w-700">Stay up to date with our news, ideas and updates</h5> -->

                    <!-- Form -->
                    <!-- <form class="newsletter-form">

                        <div class="input-group">
                            <input type="email" autocomplete="off" class="form-control" placeholder="Your email address" required id="s-email">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn--theme hover--theme">Subscribe Now</button>
                            </span>
                        </div> -->

                        <!-- Newsletter Form Notification -->
                        <!-- <label for="s-email" class="form-notification"></label> -->

                    <!-- </form> -->

                <!-- </div> -->
                 <!-- END NEWSLETTER FORM -->


            <!-- </div>  -->
            <!-- END MODAL CONTENT -->


        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
 <!-- END MODAL WINDOW (NEWSLETTER FORM) -->
 <!-- END MODAL WINDOW (NEWSLETTER FORM) -->

@endsection