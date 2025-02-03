@extends('app')

@section('content')
<!-- BLOG POSTS LISTING
			============================================= -->
<section id="blog-page" class="pb-60 inner-page-hero blog-page-section">
    <div class="container">

        {{-- 
        <!-- WIDE BLOG POST -->
        <div class="blog-post wide-post wow fadeInUp">
            <div class="row d-flex align-items-center">


                <!-- BLOG POST IMAGE -->
                <div class="col-md-6">
                    <div class="blog-post-img">
                        <img class="img-fluid r-16" src="{{asset('images/blog/post-11-img.jpg')}}" alt="blog-post-image">
                    </div>
                </div>


                <!-- BLOG POST TEXT -->
                <div class="col-md-6">
                    <div class="blog-post-txt">

                        <!-- Post Tag -->
                        <span class="post-tag color--blue-400">Social Media Marketing</span>

                        <!-- Post Link -->
                        <h3 class="s-38 w-700">
                            <a href="single-post.html">Congue magna tempor and ipsum Martex sapien turpis
                                laoreet augue
                            </a>
                        </h3>

                        <!-- Text -->
                        <p>Aliqum mullam blandit vitae and tempor sapien and donec lipsum gravida porta undo
                            velna dolor libero a risus aliquet tempus posuere a tempor velna tempus posuere dolor
                        </p>

                        <!-- Post Meta -->
                        <div class="blog-post-meta mt-30">
                            <ul class="post-meta-list ico-10">
                                <li>
                                    <p class="w-500">By Martex Team</p>
                                </li>
                                <li class="meta-list-divider">
                                    <p><span class="flaticon-minus"></span></p>
                                </li>
                                <li>
                                    <p>Apr 28, 2023</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div> <!-- END BLOG POST TEXT -->


            </div> <!-- End row -->
        </div> <!-- END WIDE BLOG POST -->


        <!-- POSTS WRAPPER -->
        <div class="posts-wrapper">
            <div class="row">


                <!-- BLOG POST #1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post mb-40 wow fadeInUp clearfix">


                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-35">
                            <img class="img-fluid r-16" src="{{asset('images/blog/post-1-img.jpg')}}" alt="blog-post-image">
                        </div>


                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Tag -->
                            <span class="post-tag color--red-400">{{ $post->category->name }}</span>

                            <!-- Post Link -->
                            <h6 class="s-20 w-700">
                                <a href="single-post.html">Aliqum mullam porta blandit: lacus and sapien
                                    gravida
                                </a>
                            </h6>

                            <!-- Text -->
                            <p>Egestas luctus vitae augue and ipsum ultrice quisque in cursus lacus feugiat
                                congue diam ultrice laoreet sagittis
                            </p>

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
                                        <p class="p-sm">Apr 23, 2023</p>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- END BLOG POST TEXT -->


                    </div>
                </div> <!-- END BLOG POST #1 -->


                <!-- BLOG POST #2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post mb-40 wow fadeInUp clearfix">


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
                                <a href="single-post.html">Porttitor cursus fusce neque CEO egestas cursus
                                    magna sapien and suscipit ipsum
                                </a>
                            </h6>

                            <!-- Text -->
                            <p>Aliqum mullam ipsum vitae and blandit vitae tempor sapien and donec lipsum</p>

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
                                        <p class="p-sm">Apr 09, 2023</p>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- END BLOG POST TEXT -->


                    </div>
                </div> <!-- END BLOG POST #2 -->


                <!-- BLOG POST #3 -->
                <div class="col-md-12 col-lg-4">
                    <div class="blog-post mb-40 wow fadeInUp clearfix">


                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-35">
                            <img class="img-fluid r-16" src="{{asset('images/blog/post-3-img.jpg')}}" alt="blog-post-image">
                        </div>


                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Tag -->
                            <span class="post-tag color--violet-400">Freelancer Tips</span>

                            <!-- Post Link -->
                            <h6 class="s-20 w-700">
                                <a href="single-post.html">Cubilia laoreet ipsum augue eget egestas Martex magna</a>
                            </h6>

                            <!-- Text -->
                            <p>Luctus vitae egestas augue and ipsum ultrice quisque in cursus lacus feugiat
                                egets congue ultrice sagittis laoreet
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
                                        <p class="p-sm">Apr 01, 2023</p>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- END BLOG POST TEXT -->


                    </div>
                </div> <!-- END BLOG POST #3 -->


            </div>
        </div> <!-- END POSTS WRAPPER -->


        <!-- BLOG POSTS CATEGORY -->
        <div class="row">
            <div class="col">
                <div class="posts-category ico-20 wow fadeInUp">
                    <h4 class="s-34 w-700">Latest News <span class="flaticon-next"></span></h4>
                </div>
            </div>
        </div>


        <!-- POSTS WRAPPER -->
        <div class="posts-wrapper">
            <div class="row">


                <!-- BLOG POST #4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post mb-40 wow fadeInUp clearfix">


                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-35">
                            <img class="img-fluid r-16" src="{{asset('images/blog/post-4-img.jpg')}}" alt="blog-post-image">
                        </div>


                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Tag -->
                            <span class="post-tag color--pink-400">Tutorials</span>

                            <!-- Post Link -->
                            <h6 class="s-20 w-700">
                                <a href="single-post.html">Phasellus blandit justo undo aliquam vitae molestie
                                    nunc sapien augue justo aliquet
                                </a>
                            </h6>

                            <!-- Text -->
                            <p>Aliqum mullam ipsum vitae and blandit vitae tempor sapien and donec lipsum</p>

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
                                        <p class="p-sm">Mar 20, 2023</p>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- END BLOG POST TEXT -->


                    </div>
                </div> <!-- END BLOG POST #4 -->


                <!-- BLOG POST #5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post mb-40 wow fadeInUp clearfix">


                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-35">
                            <img class="img-fluid r-16" src="{{asset('images/blog/post-5-img.jpg')}}" alt="blog-post-image">
                        </div>


                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Tag -->
                            <span class="post-tag color--violet-400">Freelancer Tips</span>

                            <!-- Post Link -->
                            <h6 class="s-20 w-700">
                                <a href="single-post.html">Blandit justo phasellus undo aliquam diam molestie
                                    vitae
                                </a>
                            </h6>

                            <!-- Text -->
                            <p>Luctus vitae egestas augue and ipsum ultrice quisque in cursus lacus feugiat
                                egets congue ultrice sagittis laoreet
                            </p>

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
                                        <p class="p-sm">Mar 13, 2023</p>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- END BLOG POST TEXT -->


                    </div>
                </div> <!-- END BLOG POST #5 -->


                <!-- BLOG POST #6 -->
                <div class="col-md-12 col-lg-4">
                    <div class="blog-post mb-40 wow fadeInUp clearfix">


                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-35">
                            <img class="img-fluid r-16" src="{{asset('images/blog/post-6-img.jpg')}}" alt="blog-post-image">
                        </div>


                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Tag -->
                            <span class="post-tag color--blue-400">Extensions</span>

                            <!-- Post Link -->
                            <h6 class="s-20 w-700">
                                <a href="single-post.html">Cursus porttitor fusce neque CEO egestas cursus magna
                                    sapien and ipsum suscipit
                                </a>
                            </h6>

                            <!-- Text -->
                            <p>Mullam ipsum aliqum vitae and blandit vitae tempor sapien and lipsum donec</p>

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
                                        <p class="p-sm">Feb 23, 2023</p>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- END BLOG POST TEXT -->


                    </div>
                </div> <!-- END BLOG POST #6 -->


            </div> <!-- End row -->
        </div> <!-- END POSTS WRAPPER -->


        <!-- SQUARE BLOG POST -->
        <div class="blog-post square-post">
            <div class="row">
                <div class="col">


                    <!-- SQUARE BLOG POST WRAPPER -->
                    <div class="square-post-wrapper bg--black-400 block-shadow r-16 wow fadeInUp">
                        <div class="row d-flex align-items-center">


                            <!-- BLOG POST TEXT -->
                            <div class="col-md-6 order-last order-md-2">
                                <div class="blog-post-txt color--white">

                                    <!-- Post Tag -->
                                    <span class="post-tag color--pink-400">Video Tutorials</span>

                                    <!-- Post Link -->
                                    <h4 class="s-34 w-700 mb-20">
                                        <a href="single-post.html">Lipsum sodales sapien Martex aliquet blandit
                                            augue gravida posuere
                                        </a>
                                    </h4>

                                    <!-- Text -->
                                    <p>Aliqum mullam blandit vitae and tempor sapien and donec lipsum gravida porta
                                        undo velna dolor libero risus aliquet tempus posuere vitae tempor
                                    </p>

                                    <!-- Post Meta -->
                                    <div class="blog-post-meta mt-30">
                                        <ul class="post-meta-list ico-10">
                                            <li>
                                                <p class="w-500">By Martex Team</p>
                                            </li>
                                            <li class="meta-list-divider">
                                                <p><span class="flaticon-minus"></span></p>
                                            </li>
                                            <li>
                                                <p>Feb 12, 2023</p>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>


                            <!-- BLOG POST IMAGE -->
                            <div class="col-md-6 order-first order-md-2">
                                <div class="blog-post-img video-preview">

                                    <!-- Play Icon -->
                                    <a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">
                                        <div class="video-btn video-btn-xl bg--pink-400 ico-90">
                                            <div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>
                                        </div>
                                    </a>

                                    <!-- Preview Image -->
                                    <img class="img-fluid" src="{{asset('images/blog/post-10-img.jpg')}}" alt="video-preview">

                                </div>
                            </div>


                        </div> <!-- End row -->
                    </div> <!-- END SQUARE BLOG POST WRAPPER -->


                </div>
            </div> <!-- End row -->
        </div> <!-- END SQUARE BLOG POST -->
        --}}

        <!-- BLOG POSTS CATEGORY -->
        <div class="row">
            <div class="col">
                <div class="posts-category ico-20 wow fadeInUp">
                    <h4 class="s-34 w-700">All Stories <span class="flaticon-next"></span></h4>
                </div>
            </div>
        </div>


        <!-- POSTS WRAPPER -->
        <div class="posts-wrapper">
            <div class="row">


                @forelse ($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post mb-40 wow fadeInUp clearfix">


                        <!-- BLOG POST IMAGE -->
                        <div class="blog-post-img mb-35">
                            <img class="img-fluid r-16" src="{{asset('images/blog/post-7-img.jpg')}}" alt="blog-post-image">
                        </div>


                        <!-- BLOG POST TEXT -->
                        <div class="blog-post-txt">

                            <!-- Post Tag -->
                            <span class="post-tag color--red-400">{{ $post->category->name }}</span>

                            <!-- Post Link -->
                            <h6 class="s-20 w-700">
                                <a href="{{route('blog.single', $post->slug)}}">{{ $post->title }}</a>
                            </h6>

                            <!-- Text -->
                            <p>{{ $post->summary }}</p>

                            <!-- Post Meta -->
                            <div class="blog-post-meta mt-20">
                                <ul class="post-meta-list ico-10">
                                    <li>
                                        <p class="p-sm w-500">By {{ $post->user->name }}</p>
                                    </li>
                                    <li class="meta-list-divider">
                                        <p><span class="flaticon-minus"></span></p>
                                    </li>
                                    <li>
                                        <p class="p-sm">{{ $post->created_at->format('M d, Y') }}</p>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- END BLOG POST TEXT -->


                    </div>
                </div> 
                @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        No posts found
                    </div>
                </div>
                @endforelse
            </div> <!-- End row -->
        </div> <!-- END POSTS WRAPPER -->


    </div> <!-- End container -->
</section> <!-- END BLOG POSTS LISTING -->




@include('pagination', ['data' => $posts])


<!-- DIVIDER LINE -->
<hr class="divider">




<!-- NEWSLETTER-1
			============================================= -->
<section id="newsletter-1" class="newsletter-section">
    <div class="newsletter-overlay">
        <div class="container">
            <div class="row d-flex align-items-center row-cols-1 row-cols-lg-2">


                <!-- NEWSLETTER TEXT -->
                <div class="col">
                    <div class="newsletter-txt">
                        <h4 class="s-34 w-700">Stay up to date with our news, ideas and updates</h4>
                    </div>
                </div>


                <!-- NEWSLETTER FORM -->
                <div class="col">
                    <form class="newsletter-form">

                        <div class="input-group">
                            <input type="email" autocomplete="off" class="form-control" placeholder="Your email address" required id="s-email">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn--theme hover--theme">Subscribe Now</button>
                            </span>
                        </div>

                        <!-- Newsletter Form Notification -->
                        <label for="s-email" class="form-notification"></label>

                    </form>
                </div> <!-- END NEWSLETTER FORM -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- End newsletter-overlay -->
</section> <!-- END NEWSLETTER-1 -->




<!-- DIVIDER LINE -->
<hr class="divider">

@endsection