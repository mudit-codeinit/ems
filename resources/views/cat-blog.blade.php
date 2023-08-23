@extends('layouts.headerblog')

@section('content')

    <div class="container">
        <div class="row blog-section-row">
            <div class="col-md-4">
                <div class="blog-search-box">
                    <form method="post" action="{{ url('/search') }}">
                        {{ csrf_field() }}
                        <input type="search" name="q" placeholder="Enter for search.....">
                        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
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
                                <a href="{{ url("blog/$blo->slug") }}"><img src="@if($blo->image) {{ $blo->image }}  @else {{ asset('front2/images/bugatti-min.png') }} @endif"></a>
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
            
            
            <div class="col-md-8">
                <div id="BlogCarousel" class="carousel slide blog-carousel" data-ride="carousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            @php $i=1; @endphp
                             @foreach($get_blog as $blogs)
                            <div class="carousel-item @if($i == 1) active @endif ">
                                        <div class="blog-slider-box" style="background-image:url(@if($blogs->image) {{ $blogs->image }}  @else {{ asset('front2/images/bugatti-min.png') }} @endif)">
                                            <div class="blog-slider-content">
                                                <h4><a href="{{ url("blog/$blogs->slug") }}">{{ $blogs->title }}</a></h4>
                                                <p>{{ $blogs->short_description }}</p>
                                            </div>
                            </div>
                            <!--.item-->
                            </div>
                            @php $i++; @endphp
                            @endforeach
                        </div>
                        <!--.carousel-inner-->
                        <!-- Controls -->
                        
                    <div class="carousel-control-div">
                         <ol class="carousel-indicators">
                            <li data-target="#BlogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#BlogCarousel" data-slide-to="1"></li>
                        </ol>
                      </div>
                    </div>
                    <!--.Carousel-->
                    
                    <section class="blog-section">
                            <div class="row blog-row">
                                @foreach($get_blog as $blogs)
                                <div class="col-md-6 blog-box">
                                   <div class="blog-box-inner">
                                    @php
                                    $categ = json_decode($blogs->cat)?json_decode($blogs->cat):[];
                                    
                                    @endphp
                                    @php
                                    $categories = App\Blogscat::where('id',$categ[0])->first();									
                                    @endphp
                                       <div class="image" style="background-image:url( @if($blogs->image) {{ $blogs->image }}  @else {{ asset('front2/images/bugatti-min.png') }} @endif )">
                                            <div class="blog-category"><a href="{{ url("category/$categories->slug") }}">{{ $categories->title }}</a>
                                            </div>
                                            <a href="{{ url("blog/$blogs->slug") }}" class="blog-thumb-link"></a>
                                        </div>
                                        <div class="bottom-blog">
                                            <div class="blog-meta">
                                                <ul>
                                                    <li class="blog-date">{{ date("F  d, Y", strtotime($blogs->created_at)) }}</li>
                                                    <li class="blog-author">by expatcarbuyers.com Team</li>
                                                </ul>
                                            </div>
                                            <div class="title"><h3><a href="{{ url("blog/$blogs->slug") }}" title="9 distractions to avoid when driving in the UAE"> {{ $blogs->title }} </a></h3>
                                            </div>
                                            <div class="base-text">
                                                {{ $blogs->short_description }}
                                            </div>
                                            <div class="blog-read-more"><a href="{{ url("blog/$blogs->slug") }}">Read More <span class="read-more-icon">&rarr;</span></a></div>
                                        </div>
                                   </div>
                                </div>
                                @endforeach
                                
                            </div>
                            
                            @if(count($get_blog) > 6)
                            <div class="blog-pegination">
                                {{ $get_blog->links() }}
                            </div>
                            @endif
                </section>
            </div>
        </div>
    </div>
    
@endsection