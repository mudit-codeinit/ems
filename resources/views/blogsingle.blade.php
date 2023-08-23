@extends('layouts.headerblog')

@section('content')
    
    <section class="blog-section blog-section-single">
        <div class="container">
            <div class="row blog-row">
                 <div class="col-md-4">
                <div class="blog-newsletter-box">
                     <h3 class="font-weight-light mb-3">Subscribe our Newsletter?</h3>
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                    <form action="https://expatcarbuyers.us20.list-manage.com/subscribe/post?u=bb130dc27c4d426571a7d2056&amp;id=6a921b8a53" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                        	<input type="email" value="" name="EMAIL" class="required email form-control mb-3 border-0 h-auto py-3" placeholder="Email address" id="mce-EMAIL" required>
                        </div>
                    	<div id="mce-responses" class="clear">
                    		<div class="response" id="mce-error-response" style="display:none"></div>
                    		<div class="response" id="mce-success-response" style="display:none"></div>
                    	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bb130dc27c4d426571a7d2056_6a921b8a53" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-dark signButton text-uppercase"></div>
                        </div>
                    </form>
                    </div>
                    
                    <!--End mc_embed_signup-->
                </div>
                <div class="sidebar-fb-block pt-5">
                    <div class="fb-page" data-href="https://www.facebook.com/ExpatCarBuyers" data-width="380" data-hide-cover="false" data-show-facepile="false"></div>
                </div>
                <div class="blog-categories pb-4 pt-5">
                    <h3 class="font-weight-light mb-4">Blog Categories</h3>
                    <ul>
                        @foreach($cat as $ca)
                        <li><a href="{{ url("category/$ca->slug") }}">{{ $ca->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="sidebar-recent-blog-box pb-5">
                    <h3 class="font-weight-light mb-4">Recent Posts</h3>
                    <div class="sidebar-posts-div">
                       @foreach($recentblogs as $blo)
                        <div class="post-column-thumb">
                            <div class="thumb">
                                <a href="{{ url("blog/$blo->slug") }}"><img src="{{ $blo->image ? $blo->image : asset('front2/images/bugatti-min.png') }}"></a>
                            </div>
                            <div class="post-text">
                                <h4><a href="{{ url("blog/$blo->slug") }}">{{ $blo->title }}</a></h4>
                                <div class="blog-meta"><ul><li class="blog-date">{{ date("F  d, Y", strtotime($blo->created_at)) }}</li> <li class="blog-author">by expatcarbuyers.com Team</li></ul></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
                <div class="col-md-8 blog-box blog-box-single">
                   <div class="blog-box-single-inner">
                       <div class="single-img"><img src="{{ $blog->image ? $blog->image : asset('front2/images/bugatti-min.png') }}"></div>
                        <div class="title"><h3><a href="#" title="9 distractions to avoid when driving in the UAE"> {{ $blog->title }} </a></h3>
                        </div>
                        <div class="blog-meta">
                            <ul>
                                <li class="blog-date">{{ date("F  d, Y", strtotime($blog->created_at)) }}</li>
                                <li class="blog-author">by expatcarbuyers.com Team</li>
                            </ul>
                        </div>
                        <div class="single-content-row">
                           {!! $blog->discription !!} 
                        </div>
                        </div>
                   </div>
                   
                </div>
            </div>
    </section>
@endsection