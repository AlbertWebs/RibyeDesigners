@extends('front.master')

@section('content')


<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-title-heading">
                        <h2 class="title">Our Work Single</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <div class="container">
                            <div class="breadcrumb-wrapper-inner">
                                <span>
                                    <a title="Go to Delmont." href="{{url('/')}}" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span>Our Work</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--site-main start-->
<div class="site-main">

    <!-- sidebar -->
    <div class="ttm-row sidebar ttm-sidebar-left ttm-bgcolor-white clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 widget-area sidebar-left">
                    <aside class="widget widget-nav-menu">
                        <h3 class="widget-title">More Services</h3>
                        <ul class="widget-menu">
                            <li class="active"><a href="architecture.html">Architecture</a></li>
                            <li><a href="interior-work.html">Interior Work</a></li>
                            <li><a href="retail-designs.html">Retail Designs</a></li>
                            <li><a href="layout.html">2D/3D Layouts</a></li>
                            <li><a href="inter-design.html">Inter Design</a></li>
                            <li><a href="decoration-art.html">Decoration art</a></li>
                        </ul>
                    </aside>
                    <aside class="widget contact-widget with-title">
                        <h3 class="widget-title">Contact</h3>
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                    <i class="flaticon flaticon-call-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Phone Number</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>+123 456 7890</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                    <i class="flaticon flaticon-email"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Email Address</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>info@abcmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style1">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xs">
                                    <i class="flaticon flaticon-navigation"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Location</h3>
                                </div>
                                <div class="featured-desc">
                                    <p>14/A, Miranda City, NYC</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget-archive">
                        <h3 class="widget-title">Gallery</h3>
                        <div id="gallery-2" class="gallery-wrapper">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href="{{asset('theme/images/portfolio/project-1-1200x800.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                    <img width="150" height="150" class="img-fluid" src="{{asset('theme/images/portfolio/project-1-150x150.jpg')}}" alt="gellary_img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href="{{asset('theme/images/portfolio/project-2-1200x800.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto">
                                    <img width="150" height="150" class="img-fluid" src="{{asset('theme/images/portfolio/project-2-150x150.jpg')}}" alt="gellary_img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href="{{asset('theme/images/portfolio/project-3-1200x800.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto"><img width="150" height="150" class="img-fluid" src="{{asset('theme/images/portfolio/project-3-150x150.jpg')}}" alt="gellary_img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href="{{asset('theme/images/portfolio/project-4-1200x800.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto"><img width="150" height="150" class="img-fluid" src="{{asset('theme/images/portfolio/project-4-150x150.jpg')}}" alt="gellary_img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href="{{asset('theme/images/portfolio/project-5-1200x800.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto"><img width="150" height="150" class="img-fluid" src="{{asset('theme/images/portfolio/project-5-150x150.jpg')}}" alt="gellary_img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href="{{asset('theme/images/portfolio/project-6-1200x800.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto"><img width="150" height="150" class="img-fluid" src="{{asset('theme/images/portfolio/project-6-150x150.jpg')}}" alt="gellary_img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href="{{asset('theme/images/portfolio/project-7-1200x800.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto"><img width="150" height="150" class="img-fluid" src="{{asset('theme/images/portfolio/project-7-150x150.jpg')}}" alt="gellary_img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href="{{asset('theme/images/portfolio/project-8-1200x800.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto"><img width="150" height="150" class="img-fluid" src="{{asset('theme/images/portfolio/project-8-150x150.jpg')}}" alt="gellary_img"></a>
                                </div>
                            </figure>
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <a class="ttm_prettyphoto" href="{{asset('theme/images/portfolio/project-9-1200x800.jpg')}}" rel="prettyPhoto[coregallery]" data-rel="prettyPhoto"><img width="150" height="150" class="img-fluid" src="{{asset('theme/images/portfolio/project-9-150x150.jpg')}}" alt="gellary_img"></a>
                                </div>
                            </figure>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8 content-area">
                    <article class="ttm-service-single-content-area">
                        <h2>Creative Solutions By Inoterior Professional Designers</h2>
                        <!-- service-featured-wrapper -->
                        <div class="ttm-service-featured-wrapper ttm-featured-wrapper">
                            <div class="ttm_single_image-wrapper pt-20 mb-20 res-991-mb-30">
                                <img width="799" height="350" class="img-fluid" src="{{asset('theme/images/single-img-09.png')}}" alt="project-9">
                            </div>
                        </div><!-- service-featured-wrapper end -->
                        <!-- ttm-service-classic-content -->
                        <div class="ttm-service-classic-content">
                            <p><span class="ttm-textcolor-skincolors">Since 1999,</span> we have been providing great flooring solutions and customer service for homeowners and commercial clients. among flooring materials, none is more elegant and luxurious than natural stone. Give your consent, we design a <strong>perfect bend choose</strong> the style, we complete with our file.</p>
                            <p>A wonderful <u><a class="ttm-textcolor-skincolor" href="#">serenity has taken</a></u> &nbsp;possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart and its very blessed.</p>
                            <p><span class="ttm-textcolor-skincolors">Since 1999,</span> we have been providing great flooring solutions and customer service for homeowners and commercial clients. among flooring materials, none is more elegant and luxurious than natural stone. Give your consent, we design a <strong>perfect bend choose</strong> the style, we complete with our file.</p>
                            <p>A wonderful <u><a class="ttm-textcolor-skincolor" href="#">serenity has taken</a></u> &nbsp;possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart and its very blessed.</p>

                            <p><span class="ttm-textcolor-skincolors">Since 1999,</span> we have been providing great flooring solutions and customer service for homeowners and commercial clients. among flooring materials, none is more elegant and luxurious than natural stone. Give your consent, we design a <strong>perfect bend choose</strong> the style, we complete with our file.</p>
                            <p>A wonderful <u><a class="ttm-textcolor-skincolor" href="#">serenity has taken</a></u> &nbsp;possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart and its very blessed.</p>

                            <p><span class="ttm-textcolor-skincolors">Since 1999,</span> we have been providing great flooring solutions and customer service for homeowners and commercial clients. among flooring materials, none is more elegant and luxurious than natural stone. Give your consent, we design a <strong>perfect bend choose</strong> the style, we complete with our file.</p>
                            <p>A wonderful <u><a class="ttm-textcolor-skincolor" href="#">serenity has taken</a></u> &nbsp;possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart and its very blessed.</p>

                            <p><span class="ttm-textcolor-skincolors">Since 1999,</span> we have been providing great flooring solutions and customer service for homeowners and commercial clients. among flooring materials, none is more elegant and luxurious than natural stone. Give your consent, we design a <strong>perfect bend choose</strong> the style, we complete with our file.</p>
                            <p>A wonderful <u><a class="ttm-textcolor-skincolor" href="#">serenity has taken</a></u> &nbsp;possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart and its very blessed.</p>

                            <p><span class="ttm-textcolor-skincolors">Since 1999,</span> we have been providing great flooring solutions and customer service for homeowners and commercial clients. among flooring materials, none is more elegant and luxurious than natural stone. Give your consent, we design a <strong>perfect bend choose</strong> the style, we complete with our file.</p>
                            <p>A wonderful <u><a class="ttm-textcolor-skincolor" href="#">serenity has taken</a></u> &nbsp;possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart and its very blessed.</p>


                        </div><!-- ttm-service-classic-content end -->
                    </article>
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- sidebar end -->
    @include('front.blogs')

</div><!--site-main end-->




@endsection
