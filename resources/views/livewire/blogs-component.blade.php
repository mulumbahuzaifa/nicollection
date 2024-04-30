<div class="main-content main-content-blog list left-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-trail breadcrumbs">
                    <ul class="trail-items breadcrumb">
                        <li class="trail-item trail-begin">
                            <a href="/">Home</a>
                        </li>
                        <li class="trail-item trail-end active">
                            Our blog
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content-area content-blog col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="site-main">
                    <h3 class="custom_blog_title">
                        Our Blog
                    </h3>
                    <div class="blog-list list-style">
                        @foreach ($blogs as $blog)
                        <div class="blog-item">
                            <div class="post-format">
                                <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">
                                    <img src="{{ asset('image/blogs') }}/{{ $blog->image }}" alt="{{ $blog->title }}">
                                </a>
                            </div>
                            <div class="post-info">
                                <div class="category-blog">
                                    <a href="#">{{ $blog->category }} - <span>{{ $blog->created_at }}</span></a>
                                </div>
                                <h3 class="post-title">
                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ $blog->title }}<span>[...]</span></a>
                                </h3>
                                <div class="main-info-post">
                                    <p class="des">
                                        {{ str_limit(strip_tags($blog->description),200,'...')  }}
                                    </p>
                                </div>
                                <div class="author-view">
                                    <div class="author">
                                        <div class="avt">
                                            <img src="{{ asset('assets/images/avt-blog1.png') }}" alt="img">
                                        </div>
                                        <h3 class="name">
                                            Nicole
                                        </h3>
                                    </div>
                                    <div class="review">
                                        <div class="view">
                                            <span class="icon-view">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </span>
                                            <span class="count">
                                                631
                                            </span>
                                        </div>
                                        <div class="s-comments">
                                            <span class="icon-cmt">
                                                <i class="fa fa-commenting" aria-hidden="true"></i>
                                            </span>
                                            <span class="count">
                                                82
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination clearfix style2">
                        <div class="nav-link">
                            {{ $blogs->links('pagination::bootstrap-4') }}

                            {{-- <a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers current">3</a>
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar sidebar-blog col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="wrapper-sidebar">
                    <div class="widget widget-socials">
                        <h3 class="widgettitle">
                            Follow us
                        </h3>
                        <div class="content-socials">
                            <div class="social-list">
                                {{-- <a href="#" target="_blank" class="social-item">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                </a> --}}
                                <a href="www.twitter.com/@Nicollection16" target="_blank" class="social-item">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.instagram.com/_nicollection_16?igsh=MWpzOGpkY25qamM3Yw%3D%3D&utm_source=qr " target="_blank" class="social-item">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-post">
                        <h3 class="widgettitle">Popular Articles</h3>
                        <ul class="stelina-posts">
                            @foreach ($l_blogs as $blog)

                            <li class="widget-post-item">
                                <div class="thumb-blog">
                                    <img src="{{ asset('image/blogs') }}/{{ $blog->image }}" alt="{{ $blog->title }}">
                                </div>
                                <div class="post-content">
                                    <div class="cat">
                                        <a href="#">{{ $blog->category }}</a>
                                    </div>
                                    <h5 class="post-title"><a href="{{ route('blog.details', ['slug' => $blog->slug]) }}">{{ $blog->title }} <span>[...]</span></a></h5>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="widget widget-categories">
                        <h3 class="widgettitle">Categories</h3>
                        <ul class="list-categories">
                            <li>
                                <input type="checkbox" id="cb1">
                                <label for="cb1" class="label-text">
                                    For Her
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="cb2">
                                <label for="cb2" class="label-text">
                                    For Him
                                </label>
                            </li>
                            {{-- <li>
                                <input type="checkbox" id="cb3">
                                <label for="cb3" class="label-text">
                                    Deodrants
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="cb4">
                                <label for="cb4" class="label-text">
                                    Shower gels
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="cb5">
                                <label for="cb5" class="label-text">
                                    kids Section
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" id="cb6">
                                <label for="cb6" class="label-text">
                                    Tables
                                </label>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="widget widget-tags">
                        <h3 class="widgettitle">
                            Popular Tags
                        </h3>
                        <ul class="tagcloud">
                            <li class="tag-cloud-link">
                                <a href="#">Office</a>
                            </li>
                            <li class="tag-cloud-link">
                                <a href="#">Accents</a>
                            </li>
                            <li class="tag-cloud-link">
                                <a href="#">Flowering</a>
                            </li>
                            <li class="tag-cloud-link active">
                                <a href="#">Accessories</a>
                            </li>
                            <li class="tag-cloud-link">
                                <a href="#">Hot</a>
                            </li>
                            <li class="tag-cloud-link">
                                <a href="#">Tables</a>
                            </li>
                            <li class="tag-cloud-link">
                                <a href="#">Dining</a>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="widget newsletter-widget">
                        <div class="newsletter-form-wrap ">
                            <h3 class="title">Subscribe to Our Newsletter</h3>
                            <div class="subtitle">
                                More special Deals, Events & Promotions
                            </div>
                            <input type="email" class="email" placeholder="Your email letter">
                            <button type="submit" class="button submit-newsletter">Subscribe</button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
