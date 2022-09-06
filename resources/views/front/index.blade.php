@extends('front.master')

@section('content')

<div class="ttm-rev_slider-wide">
    <!-- START homemainclassicslider REVOLUTION SLIDER 6.1.8 -->
    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">

        <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.8">

            <div class="ttm-quickdetails-area">
                <ul class="top-contact">
                    <li><i class="fa fa-map-marker ttm-textcolor-skincolor"></i>Kampala,Uganda</li>
                    <li><i class="fa fa-phone ttm-textcolor-skincolor"></i>+255 435 654 789</li>
                    <li><i class="fa fa-envelope-o ttm-textcolor-skincolor"></i>Email: <a href="mailto:info@ribye.co.ug">info@ribye.co.ug</a></li>
                </ul>
            </div>

            <rs-slides>

                <rs-slide data-key="rs-1" data-title="Slide" data-thumb="{{asset('theme/images/slides/slider-mainbg-001.jpg')}}" data-anim="ei:d;eo:d;s:d;r:0;t:grayscalecross;sl:d;">

                    <img src="{{asset('theme/images/slides/slider-mainbg-001.jpg')}}" title="slider-bg001" width="1741" height="700" class="rev-slidebg" data-no-retina>

                    <rs-layer
                        id="slider-1-slide-1-layer-0"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:45px,45px,1px,0;yo:331px,331px,84px,71px;"
                        data-text="w:normal;s:17,17,16,15;l:25,25,18,18;fw:500;"
                        data-frame_0="x:50,50,31,19;"
                        data-frame_1="st:200;sp:500;sR:200;"
                        data-frame_999="o:0;st:w;sR:8300;"
                        style="z-index:9;font-family:Cerebri Sans;text-transform:uppercase;"
                    >Welcome to Home Interior
                    </rs-layer>

                    <a
                        id="slider-1-slide-1-layer-1"
                        class="rs-layer tm-slider-btn"
                        href="about-us-1.html" target="_self"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:243px,243px,0,0;y:m;yo:151px,151px,120px,228px;"
                        data-text="w:normal;s:14;l:14,14,8,6;fw:700;a:center;"
                        data-padding="t:15,15,15,9;r:38,38,24,15;b:15,15,15,9;l:38,38,24,15;"
                        data-border="bos:solid;boc:#32415C;bow:1px,1px,1px,1px;bor:50px,50px,50px,50px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:800;sp:500;sR:800;"
                        data-frame_999="o:0;st:w;sR:7700;"
                        data-frame_hover="c:#32415C;bgc:#fff;boc:#fff;bor:50px,50px,50px,50px;bos:solid;bow:1px,1px,1px,1px;"
                        style="z-index:10;background-color:#32415C;font-family:Cerebri Sans;text-transform:uppercase;"
                    >Our Portfolio <i class="fa fa-long-arrow-right left-icon-spacing"></i>
                    </a>

                    <rs-layer
                        id="slider-1-slide-1-layer-2"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="xo:0,0,-160px,-98px;yo:269px,269px,167px,103px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:5px,5px,3px,1px;h:407px,407px,263px,162px;"
                        data-frame_999="o:0;st:w;"
                        style="z-index:20;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-1-layer-3"
                        class="tm-skincolor-strong"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:44px,44px,0,0;y:m;yo:61px,61px,-10px,10px;"
                        data-text="w:normal;s:68,68,60,40;l:84,84,70,43;fw:700;"
                        data-frame_0="x:-50,-50,-31,-19;"
                        data-frame_1="st:440;sp:900;sR:440;"
                        data-frame_999="o:0;st:w;sR:7660;"
                        style="z-index:11;font-family:Cerebri Sans;"
                    >More Beautiful
                    </rs-layer>

                    <a
                        id="slider-1-slide-1-layer-4"
                        class="rs-layer tm-slider-btn"
                        href="about-us-1.html" target="_self"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:44px,44px,0,0;y:m;yo:153px,153px,60px,73px;"
                        data-text="w:normal;s:14;l:14,14,8,6;fw:700;a:center;"
                        data-padding="t:15;r:38,38,24,20;b:15;l:38,38,24,20;"
                        data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:50px,50px,50px,50px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:850;sp:500;sR:800;"
                        data-frame_999="o:0;st:w;sR:7700;"
                        data-frame_hover="bgc:#32415C;boc:#32415C;bor:50px,50px,50px,50px;bos:solid;bow:1px,1px,1px,1px;"
                        style="z-index:12;font-family:Cerebri Sans;text-transform:uppercase;"
                    >View More <i class="fa fa-long-arrow-right left-icon-spacing"></i>
                    </a>

                    <rs-layer
                        id="slider-1-slide-1-layer-5"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:189px,189px,-108px,-225px;y:b;yo:51px,51px,37px,239px;"
                        data-text="w:normal;s:14,14,8,4;l:22,22,13,8;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="e:power2.inOut;st:890;sp:500;sR:890;"
                        data-frame_999="o:0;st:w;sR:7610;"
                        style="z-index:15;font-family:Cerebri Sans;"
                    >Click Here To
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-1-layer-6"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:146px,146px,-136px,-145px;y:b;yo:22px,22px,18px,216px;"
                        data-text="w:normal;s:20,20,12,7;l:22,22,13,8;fw:700;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="y:-1px,-1px,0px,0px;e:power2.inOut;st:930;sp:400;sR:930;"
                        data-frame_999="o:0;st:w;sR:7670;"
                        style="z-index:16;font-family:Cerebri Sans;"
                    >Project Done
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-1-layer-7"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:0,0,-230px,-281px;y:b;yo:0,0,0,196px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:300px,300px,194px,119px;h:100px,100px,64px,39px;"
                        data-vbility="t,t,f,f"
                        data-border="bor:6px,6px,0px,0px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:830;sp:500;sR:830;"
                        data-frame_999="o:0;st:w;sR:7670;"
                        style="z-index:14;background-color:rgba(0,0,0,0.5);"
                    >
                    </rs-layer>

                    <a
                        id="slider-1-slide-1-layer-8"
                        class="rs-layer ttm_prettyphoto"
                        href="https://youtu.be/1cv5SwSXYAw" target="_self"
                        data-type="text"
                        data-color="#32415C"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:28px,28px,-213px,-151px;y:b;yo:28px,28px,17px,186px;"
                        data-text="w:normal;s:20,20,18,11;l:42,42,26,16;a:center;"
                        data-dim="w:44px,44px,28px,17px;h:44px,44px,28px,17px;"
                        data-vbility="t,t,f,f"
                        data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:50px,50px,50px,50px;"
                        data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="e:power2.inOut;st:980;sp:500;sR:980;"
                        data-frame_999="o:0;st:w;sR:7520;"
                        style="z-index:19;background-color:#ffffff;font-family:Roboto;"
                    ><i class="fa fa-play"></i>
                    </a>

                    <rs-layer
                        id="slider-1-slide-1-layer-9"
                        class="ttm-skincolor-strong"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:45px,45px,0,0;y:t,t,t,m;yo:364px,364px,113px,-40px;"
                        data-text="w:normal;s:68,68,60,40;l:84,84,70,43;fw:700;"
                        data-frame_0="x:50,50,31,19;"
                        data-frame_1="st:250;sp:900;sR:250;"
                        data-frame_999="o:0;st:w;sR:7850;"
                        style="z-index:10;font-family:Cerebri Sans;"
                    >Making Your Home
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-1-layer-10"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="xo:0,0,-160px,-98px;yo:264px,264px,164px,101px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:175px,175px,113px,69px;h:5px,5px,3px,1px;"
                        data-frame_999="o:0;st:w;"
                        style="z-index:22;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-1-layer-11"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="xo:0,0,-210px,-129px;yo:671px,671px,430px,265px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:175px,175px,113px,69px;h:5px,5px,3px,1px;"
                        data-frame_999="o:0;st:w;"
                        style="z-index:21;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-1-layer-12"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:20px,20px,-218px,-134px;y:b;yo:20px,20px,12px,7px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:60px,60px,38px,23px;h:60px,60px,38px,23px;"
                        data-border="bos:solid;boc:rgba(255, 255, 255, 0);bow:1px,1px,1px,1px;bor:50px,50px,50px,50px;"
                        data-frame_0="sX:0.8;sY:0.8;"
                        data-frame_1="e:power4.out;st:1020;sp:500;"
                        data-frame_999="o:0;st:w;"
                        style="z-index:18;background-color:rgba(255,255,255,0.5);"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-1-layer-13"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:0,0,-230px,-141px;y:b;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:100px,100px,64px,39px;h:100px,100px,64px,39px;"
                        data-border="bor:0px,6px,0,0;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:830;sp:500;"
                        data-frame_999="o:0;st:w;"
                        style="z-index:17;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-1-layer-14"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="xo:-330px,-330px,0,0;yo:50px,50px,0,0;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:300px,300px,100%,100%;h:180px,180px,100%,100%;"
                        data-vbility="f,t,t,t"
                        data-frame_999="o:0;st:w;"
                        style="z-index:8;background-color:rgba(0,0,0,0.3);"
                    >
                    </rs-layer>

                </rs-slide>

                <rs-slide data-key="rs-4" data-title="Slide" data-thumb="{{asset('theme/images/slides/slider-mainbg-002.jpg')}}" data-anim="ei:d;eo:d;s:d;r:0;t:grayscalecross;sl:d;">

                    <img src="{{asset('theme/images/slides/slider-mainbg-002.jpg')}}" title="slider-bg002" width="1920" height="830" class="rev-slidebg" data-no-retina>


                    <a
                        id="slider-1-slide-4-layer-1"
                        class="rs-layer tm-slider-btn"
                        href="#" target="_self"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r,r,c,c;xo:273px,273px,0,0;y:m;yo:155px,155px,120px,228px;"
                        data-text="w:normal;s:14;l:14,14,8,6;fw:700;a:center;"
                        data-padding="t:15,15,15,9;r:38,38,24,15;b:15,15,15,9;l:38,38,24,15;"
                        data-border="bos:solid;boc:#32415C;bow:1px,1px,1px,1px;bor:50px,50px,50px,50px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:970;sp:500;sR:970;"
                        data-frame_999="o:0;st:w;sR:7530;"
                        data-frame_hover="c:#32415C;bgc:#fff;boc:#fff;bor:50px,50px,50px,50px;bos:solid;bow:1px,1px,1px,1px;"
                        style="z-index:12;background-color:#32415C;font-family:Cerebri Sans;text-transform:uppercase;"
                    >Read More <i class="fa fa-long-arrow-right left-icon-spacing"></i>
                    </a>

                    <rs-layer
                        id="slider-1-slide-4-layer-2"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:0,0,-160px,-98px;yo:269px,269px,167px,103px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:5px,5px,3px,1px;h:407px,407px,263px,162px;"
                        data-frame_999="o:0;st:w;sR:8700;"
                        style="z-index:17;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-3"
                        class="tm-skincolor-strong"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r,r,c,c;xo:45px,45px,0,0;y:m;yo:11px,11px,-10px,10px;"
                        data-text="w:normal;s:68,68,60,40;l:84,84,70,43;fw:700;"
                        data-frame_0="x:-50,-50,-31,-19;"
                        data-frame_1="st:440;sp:900;sR:440;"
                        data-frame_999="o:0;st:w;sR:7660;"
                        style="z-index:10;font-family:Cerebri Sans;"
                    >Your Home Interiors
                    </rs-layer>

                    <a
                        id="slider-1-slide-4-layer-4"
                        class="rs-layer tm-slider-btn"
                        href="#" target="_self"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r,r,c,c;xo:45px,45px,0,0;y:m;yo:155px,155px,60px,73px;"
                        data-text="w:normal;s:14;l:14,14,8,6;fw:700;a:center;"
                        data-padding="t:15;r:38,38,24,20;b:15;l:38,38,24,20;"
                        data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:50px,50px,50px,50px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:980;sp:500;sR:980;"
                        data-frame_999="o:0;st:w;sR:7520;"
                        data-frame_hover="bgc:#32415C;boc:#32415C;bor:50px,50px,50px,50px;bos:solid;bow:1px,1px,1px,1px;"
                        style="z-index:11;font-family:Cerebri Sans;text-transform:uppercase;"
                    >Our Portfolio <i class="fa fa-long-arrow-right left-icon-spacing"></i>
                    </a>

                    <rs-layer
                        id="slider-1-slide-4-layer-5"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="xo:129px,129px,-108px,-225px;y:b;yo:46px,46px,37px,239px;"
                        data-text="w:normal;s:30,30,18,11;l:30,30,18,11;fw:700;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="e:power2.inOut;st:890;sp:500;sR:890;"
                        data-frame_999="o:0;st:w;sR:7610;"
                        style="z-index:14;font-family:Cerebri Sans;"
                    >670+
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-6"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="xo:129px,129px,-136px,-145px;y:b;yo:17px,17px,18px,216px;"
                        data-text="w:normal;s:14,14,8,4;l:22,22,13,8;"
                        data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="y:-1px,-1px,0px,0px;e:power2.inOut;st:930;sp:400;sR:930;"
                        data-frame_999="o:0;st:w;sR:7670;"
                        style="z-index:15;font-family:Cerebri Sans;"
                    >Project Done
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-7"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="xo:0,0,-230px,-281px;y:b;yo:0,0,0,196px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:300px,300px,194px,119px;h:100px,100px,64px,39px;"
                        data-vbility="t,t,f,f"
                        data-border="bor:6px,6px,0px,0px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:830;sp:500;sR:830;"
                        data-frame_999="o:0;st:w;sR:7670;"
                        style="z-index:13;background-color:rgba(0,0,0,0.5);"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-8"
                        class="tm-skincolor-strong"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r,r,c,c;xo:45px,45px,0,0;y:t,t,t,m;yo:320px,320px,113px,-40px;"
                        data-text="w:normal;s:68,68,60,40;l:84,84,70,43;fw:700;"
                        data-frame_0="x:50,50,31,19;"
                        data-frame_1="st:250;sp:900;sR:250;"
                        data-frame_999="o:0;st:w;sR:7850;"
                        style="z-index:9;font-family:Cerebri Sans;"
                    >Best Ideas For
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-9"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:0,0,-160px,-98px;yo:264px,264px,164px,101px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:175px,175px,113px,69px;h:5px,5px,3px,1px;"
                        data-frame_999="o:0;st:w;sR:8700;"
                        style="z-index:19;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-10"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:0,0,-210px,-129px;yo:675px,675px,430px,265px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:175px,175px,113px,69px;h:5px,5px,3px,1px;"
                        data-frame_999="o:0;st:w;sR:8700;"
                        style="z-index:18;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-11"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="xo:0,0,-230px,-141px;y:b;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:100px,100px,64px,39px;h:100px,100px,64px,39px;"
                        data-border="bor:6px,0px,0,0;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:830;sp:500;sR:830;"
                        data-frame_999="o:0;st:w;sR:7670;"
                        style="z-index:16;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-12"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="xo:-330px,-330px,0,0;yo:50px,50px,0,0;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:300px,300px,100%,100%;h:180px,180px,100%,100%;"
                        data-vbility="f,t,t,t"
                        data-frame_999="o:0;st:w;sR:8700;"
                        style="z-index:8;background-color:rgba(0,0,0,0.45);"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-13"
                        data-type="image"
                        data-rsp_ch="on"
                        data-xy="xo:25px,25px,-159px,-98px;y:b;yo:25px,25px,33px,20px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:50px,50px,31px,19px;h:48px,48px,30px,18px;"
                        data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="st:910;sp:500;sR:910;"
                        data-frame_999="o:0;st:w;sR:7590;"
                        style="z-index:20;"
                    ><img src="{{asset('theme/images/slides/single_img1.png')}}" class="tp-rs-img" width="50" height="48" alt="img" data-no-retina>
                    </rs-layer>
                    <rs-layer
                        id="slider-1-slide-4-layer-14"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:50px,50px,-319px,-196px;y:m;yo:78px,78px,44px,27px;"
                        data-text="w:normal;s:18,18,11,6;l:28,28,17,10;fw:500;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:690;sp:500;sR:690;"
                        data-frame_999="o:0;st:w;sR:7810;"
                        style="z-index:23;font-family:Cerebri Sans;"
                    >10 Years Warranty
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-15"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:323px,323px,-146px,-90px;y:m;yo:80px,80px,44px,27px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:2px,2px,1px,1px;h:18px,18px,11px,6px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:690;sp:500;sR:690;"
                        data-frame_999="o:0;st:w;sR:7810;"
                        style="z-index:25;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-16"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:232px,232px,-215px,-132px;y:m;yo:78px,78px,44px,27px;"
                        data-text="w:normal;s:18,18,11,6;l:28,28,17,10;fw:500;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:690;sp:500;sR:690;"
                        data-frame_999="o:0;st:w;sR:7810;"
                        style="z-index:22;font-family:Cerebri Sans;"
                    >Easy EMI
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-17"
                        data-type="shape"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:215px,215px,-225px,-138px;y:m;yo:77px,77px,44px,27px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:2px,2px,1px,1px;h:18px,18px,11px,6px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:690;sp:500;sR:690;"
                        data-frame_999="o:0;st:w;sR:7810;"
                        style="z-index:24;background-color:#32415C;"
                    >
                    </rs-layer>

                    <rs-layer
                        id="slider-1-slide-4-layer-18"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:r;xo:341px,341px,-136px,-83px;y:m;yo:78px,78px,44px,27px;"
                        data-text="w:normal;s:18,18,11,6;l:28,28,17,10;fw:500;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:690;sp:500;sR:690;"
                        data-frame_999="o:0;st:w;sR:7810;"
                        style="z-index:21;font-family:Cerebri Sans;"
                    >10 Years Warranty
                    </rs-layer>

                </rs-slide>


            </rs-slides>

            <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
        </rs-module>

   </rs-module-wrap>
    <!-- END REVOLUTION SLIDER -->

</div>

<!--site-main start-->
<div class="site-main">

    <!--welcome-section-->
    <section class="ttm-row welcome-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <!-- ttm_single_image-wrapper -->
                    <div class="ttm_single_image-wrapper res-991-mb-40">
                        <img width="554" height="603" class="img-fluid" src="{{asset('theme/images/single-img-01.jpg')}}" alt="single_01">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-heade">
                                <h3>About Ribye Designers</h3>
                                <h2 class="title">We Create The Art Of Stylish  Living Stylishly</h2>
                            </div>
                        </div><!-- section title end -->
                        <p>Ribye Designers design consultancy firm that brings sensitivity to the design top restaurants, hotels, offices & homes around the world. We stand for quality, safety and credibility, so you could be sure about our work. </p>
                        <div class="pt-0 res-991-pt-0 pb-30 res-991-pb-0">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon flaticon-stairs"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Residential Interior</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We do all types of the interior designing, decoration work.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pr-0">
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                                <i class="flaticon flaticon-decorating"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Modern Living Intrior</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We are master of renovation & innovation of any kind of rooms.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ttm-progress-bar -->
                        <div class="pt-15 res-991-pt-40">
                            <div class="ttm-progress-bar" data-percent="85%">
                                <div class="progressbar-title">Riding Trainer</div>
                                <div class="progress-bar-inner">
                                    <div class="progress-bar progress-bar-color-bar_skincolor">
                                        <div class="progress-bar-percent" data-percentage="85">85%</div>
                                    </div>
                                </div>
                            </div><!-- ttm-progress-bar end -->
                            <!-- ttm-progress-bar -->
                            <div class="ttm-progress-bar" data-percent="65%">
                                <div class="progressbar-title">Exterior Designer</div>
                                <div class="progress-bar-inner">
                                    <div class="progress-bar progress-bar-color-bar_skincolor">
                                        <div class="progress-bar-percent" data-percentage="65">65%</div>
                                    </div>
                                </div>
                            </div><!-- ttm-progress-bar end -->
                            <!-- ttm-progress-bar -->
                            <div class="ttm-progress-bar" data-percent="90%">
                                <div class="progressbar-title">Happy Clients</div>
                                <div class="progress-bar-inner">
                                    <div class="progress-bar progress-bar-color-bar_skincolor">
                                        <div class="progress-bar-percent" data-percentage="90">90%</div>
                                    </div>
                                </div>
                            </div><!-- ttm-progress-bar end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--welcome-section end-->


    <!--services-section end-->
    <section class="ttm-row services-section ttm-bgcolor-darkgrey bg-img2 clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pt-10 text-left">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>Best Services</h3>
                                <h2 class="title">Services We’re Providing</h2>
                            </div>
                            <div class="title-desc">
                                <p>We are working primarily in and around London and the Home Counties, on schemes that range from small intimate spaces to large projects.</p>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-icon-box -->
                    <div class="featured-icon-box icon-align-top-content style2">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="flaticon flaticon-apartment"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Residential Interior</h3>
                            </div>
                            <div class="featured-desc">
                                <p>We do all types of the interior designing,  decoration & furnishing.</p>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-white" href="architecture.html">Read More</a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-icon-box -->
                    <div class="featured-icon-box icon-align-top-content style2">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="flaticon flaticon-interior-design-1"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Custom Solutionse</h3>
                            </div>
                            <div class="featured-desc">
                                <p>Our creative 3D artists are always ready to translate your designs</p>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-white" href="retail-designs.html">Read More</a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-icon-box -->
                    <div class="featured-icon-box icon-align-top-content style2">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="flaticon flaticon-bed-1"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Renovate Rooms</h3>
                            </div>
                            <div class="featured-desc">
                                <p>We are master of renovation & innovation of existing any kind of rooms</p>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-white" href="layout.html">Read More</a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-icon-box -->
                    <div class="featured-icon-box icon-align-top-content style2">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="flaticon flaticon-decorating"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>3D Design Layouts</h3>
                            </div>
                            <div class="featured-desc">
                                <p>We Do All Types Of 2D And 3D design  Computerized Designs.</p>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-white" href="layout.html">Read More</a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-icon-box -->
                    <div class="featured-icon-box icon-align-top-content style2">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="flaticon flaticon-door"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Outsourced Service InHouse</h3>
                            </div>
                            <div class="featured-desc">
                                <p>Enforces & strengthens your brand identity by integrating rich experience</p>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-white" href="decoration-art.html">Read More</a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--services-section end-->







    <!--bottom_zero_padding-section-->
    <section class="ttm-row bottom_zero_padding-section clearfix">
        <div class="container">
            <!--row-->
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 m-auto">
                    <!--section-title-->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>Working Style</h3>
                            <h2 class="title">Our Innovative Ideas, The Most Stylish Working Style</h2>
                        </div>
                    </div><!--section-title end-->
                </div>
            </div><!--row end-->
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pt-100">
                        <div class="ttm-bgcolor-white box-shadow position-relative z-index-1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt_70 featuredbox-number">
                                        <div class="row no-gutters">
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-12">
                                                <!-- featured-icon-box -->
                                                <div class="featured-imagebox featured-imagebox-services style1">
                                                    <div class="featured-thumbnail">
                                                        <img src="{{asset('theme/images/services/service-01-260x260.png')}}" class="img-fluid" alt="services-1">
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h3>Innovative Wall Decorotion & Designs</h3>
                                                        </div>
                                                        <div class="featured-desc">
                                                            <p>There are various ways to decorate home    but the walls are the heart of it. </p>
                                                        </div>
                                                        <a class="ttm-btn ttm-btn-size-md btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="about-us-1.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                                                        <i class="ttm-num ti-info"></i>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-12">
                                                <!-- featured-icon-box -->
                                                <div class="featured-imagebox featured-imagebox-services style1">
                                                    <div class="featured-thumbnail">
                                                        <img src="{{asset('theme/images/services/service-02-260x260.jpg')}}" class="img-fluid" alt="services-1">
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h3>Quality In Interior Decoration</h3>
                                                        </div>
                                                        <div class="featured-desc">
                                                            <p>As per preferences includes  selecting color schemes, artwork & accessories</p>
                                                        </div>
                                                        <a class="ttm-btn ttm-btn-size-md btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="about-us-1.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                                                        <i class="ttm-num ti-info"></i>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                            <div class="ttm-box-col-wrapper col-lg-4 col-md-12">
                                                <!-- featured-icon-box -->
                                                <div class="featured-imagebox featured-imagebox-services style1">
                                                    <div class="featured-thumbnail">
                                                        <img src="{{asset('theme/images/services/service-03-260x260.jpg')}}" class="img-fluid" alt="services-1">
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h3>A High Interior  Architecture</h3>
                                                        </div>
                                                        <div class="featured-desc">
                                                            <p>We delivering a diverse scale of projects including restorations project</p>
                                                        </div>
                                                        <a class="ttm-btn ttm-btn-size-md btn-inline ttm-icon-btn-right ttm-btn-color-skincolor" href="about-us-1.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                                                        <i class="ttm-num ti-info"></i>
                                                    </div>
                                                </div><!-- featured-icon-box end-->
                                            </div>
                                        </div><!-- row end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--bottom_zero_padding-section end-->

    <!--testimonials-section-->
    <section class="ttm-row testimonials-section ttm-bgcolor-darkgrey mt_80 res-991-mt_60 ttm-bg ttm-bgimage-yes bg-img1 clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="pt-20 text-left res-575-mb-15 res-991-mb-40">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>TESTIMONIALS</h3>
                                <h2 class="title">What They’re Talking About  Company Work</h2>
                            </div>
                        </div><!-- section title end -->
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-white mt-20 res-991-mt-0" href="#" tabindex="0">VIEW MORE<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class=" mr_380 res-991-mr-0">
                        <!--row-->
                        <div class="row slick_slider" data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":992,"settings":{"slidesToShow": 2}}, {"breakpoint":750,"settings":{"slidesToShow": 1}}]}'>
                            <div class="col-lg-6">
                                <!--testimonials-->
                                <div class="testimonials style1">
                                    <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                            <img width="150" height="150" class="img-center" src="{{asset('theme/images/testimonial/01.jpg')}}" alt="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <i class="ti-quote-left"></i>
                                        <blockquote>“ I couldn't believe my eyes when I saw the final layout of the room! they understood perfectly what I wanted in my room and brought my vision.”</blockquote>
                                        <div class="testimonial-caption">
                                            <h3>Sofia Dylan</h3>
                                            <label>Co-manager associated</label>
                                        </div>
                                    </div>
                                </div><!--testimonials end-->
                            </div>
                            <div class="col-lg-6">
                                <!--testimonials-->
                                <div class="testimonials style1">
                                    <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                            <img width="150" height="150" class="img-center" src="{{asset('theme/images/testimonial/02.jpg')}}" alt="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <i class="ti-quote-left"></i>
                                        <blockquote>I love everything that put together for my living room! I just bought this house and only had a few items I wanted to keep. I’am able to help me visualize the room”</blockquote>
                                        <div class="testimonial-caption">
                                            <h3>Natalie Kameron</h3>
                                            <label>Ceo /Manger</label>
                                        </div>
                                    </div>
                                </div><!--testimonials end-->
                            </div>
                            <div class="col-lg-6">
                                <!--testimonials-->
                                <div class="testimonials style1">
                                    <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                            <img width="150" height="150" class="img-center" src="{{asset('theme/images/testimonial/03.jpg')}}" alt="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <i class="ti-quote-left"></i>
                                        <blockquote>“I hired Ribye Designers for my living room, and did such an amazing job, I then hired for my entry. It is going to be beautiful and amazing..! ”</blockquote>
                                        <div class="testimonial-caption">
                                            <h3>Joel Elliott</h3>
                                            <label>Co-manager associated</label>
                                        </div>
                                    </div>
                                </div><!--testimonials end-->
                            </div>
                            <div class="col-lg-6">
                                <!--testimonials-->
                                <div class="testimonials style1">
                                    <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                            <img width="150" height="150" class="img-center" src="{{asset('theme/images/testimonial/04.jpg')}}" alt="testimonial-img">
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <i class="ti-quote-left"></i>
                                        <blockquote>“ I couldn't believe my eyes when I saw the final layout of the room! they understood perfectly what I wanted in my room and brought my vision.”</blockquote>
                                        <div class="testimonial-caption">
                                            <h3>Sofia Dylan</h3>
                                            <label>Co-manager associated</label>
                                        </div>
                                    </div>
                                </div><!--testimonials end-->
                            </div>
                        </div><!--row end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonials-section end-->


    <!--broken-section-->
    <section class="ttm-row broken-section bg-layer-equal-height clearfix">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <!-- col-img-img-two -->
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-skincolor ttm-left-span spacing-3">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top style3">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-style-round ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-blueprint"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>We Are Professional</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>We develop a full cycle of conry to Loream project documentation</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top style3">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-style-round ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-clock-1"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Honest And Dependable</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Our experience and commitment to our customers assure will meet your objectives.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top style3">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-style-round ttm-icon_element-size-lg">
                                                <i class="flaticon flaticon-destination"></i>
                                            </div>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h3>Energy Saving Methods</h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Part of experts team to manage commercial and institutional projects.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-img-bg-img-two end-->
                </div>
                <div class="col-lg-7">
                    <div class="spacing-2">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h3>WHY Ribye Designers</h3>
                                <h2 class="title">Interior Designs From The Future Living Style's</h2>
                            </div>
                            <div class="title-desc">
                                <p>There are certain attributes of a profession and one has to catch hold of them in order to work efficiently and grow in that business. I share my experience as an interior designer, a profession of great esthetic value and charm.</p>
                            </div>
                        </div><!-- section title end -->
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper pt-20 res-991-pt-0">
                            <img width="603" height="270" class="img-fluid" src="{{asset('theme/images/single-img-02.jpg')}}" alt="single_02">
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--broken-section end-->


    <!--bottom_zero_padding-section-->
    <section id="portfolio" class="ttm-row bottom_zero_padding-section clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-10 m-auto">
                    <!--section-title-->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>Our Best Projects</h3>
                            <h2 class="title">Let's Have A Look At What Creativity Best Projects</h2>
                        </div>
                    </div><!--section-title end-->
                </div>
            </div><!-- row end -->
            <!-- row -->
            <div class="row slick_slider mr_450 res-991-mr-0 mt-20 res-991-mt-0" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":1199,"settings": {"slidesToShow": 3}}, {"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":620,"settings":{"slidesToShow": 1}}]}'>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style3">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img width="610" height="750" class="img-fluid" src="{{asset('theme/images/portfolio/portfolio-01-610x750.jpg')}}" alt="image">
                        </div>
                        <!-- featured-thumbnail end-->
                        <div class="featured-content-inner">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="project-single.html">Modern Kitchen</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>The style of the interior was defined as modern in light colors. Main materials used in project are wallpaper etc.</p>
                                </div>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="project-single.html">Read More<i class="ti ti-plus"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style3">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img width="610" height="750" class="img-fluid" src="{{asset('theme/images/portfolio/portfolio-02-610x750.jpg')}}" alt="image">
                        </div>
                        <!-- featured-thumbnail end-->
                        <div class="featured-content-inner">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="project-single.html">Interior Work</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>The entire interior is the beginning of the history of the house, such as colors, lighting, and materials.</p>
                                </div>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="project-single.html">Read More<i class="ti ti-plus"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style3">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img width="610" height="750" class="img-fluid" src="{{asset('theme/images/portfolio/portfolio-03-610x750.jpg')}}" alt="image">
                        </div>
                        <!-- featured-thumbnail end-->
                        <div class="featured-content-inner">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="project-single.html">Prestige Villa</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Prestige villa exterior design thought and decided that in such a case it would be wise to use porcelain stoneware.</p>
                                </div>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="project-single.html">Read More<i class="ti ti-plus"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style3">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img width="610" height="750" class="img-fluid" src="{{asset('theme/images/portfolio/portfolio-04-610x750.jpg')}}" alt="image">
                        </div>
                        <!-- featured-thumbnail end-->
                        <div class="featured-content-inner">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="project-single.html">IBM Head Office</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>They greatly expanded the space, helped straighten the geometry and added light to the interior in Upscale sales office.</p>
                                </div>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="project-single.html">Read More<i class="ti ti-plus"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!-- featured-imagebox-portfolio -->
                    <div class="featured-imagebox featured-imagebox-portfolio style3">
                        <!-- featured-thumbnail -->
                        <div class="featured-thumbnail">
                            <img width="610" height="750" class="img-fluid" src="{{asset('theme/images/portfolio/portfolio-05-610x750.jpg')}}" alt="image">
                        </div>
                        <!-- featured-thumbnail end-->
                        <div class="featured-content-inner">
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="project-single.html">Hall Theater Building</a></h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Theater and concert hall design is both artistically and functionally complex. As in all architectural design.</p>
                                </div>
                            </div>
                            <div class="ttm-footer">
                                <a class="ttm-btn btn-inline ttm-btn-size-md ttm-icon-btn-right ttm-btn-color-dark" href="project-single.html">Read More<i class="ti ti-plus"></i></a>
                            </div>
                        </div>
                    </div><!-- featured-imagebox-portfolio end-->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--bottom_zero_padding-section end-->


    <!--client-section-->
    <div class="ttm-row client-section mt_115 res-991-mt-45 ttm-bgcolor-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row text-center">
                <div class="col-md-12">
                    <!-- slick_slider -->
                    <div class="row slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}]}'>
                        <div class="col-lg-12">
                            <div class="client-box">
                                <div class="client-thumbnail">
                                    <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-01.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box">
                                <div class="client-thumbnail">
                                    <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-02.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box">
                                <div class="client-thumbnail">
                                    <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-03.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box">
                                <div class="client-thumbnail">
                                    <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-04.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box">
                                <div class="client-thumbnail">
                                    <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-05.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box">
                                <div class="client-thumbnail">
                                    <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-01.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div><!-- ttm-client end -->
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!--client-section-->


    <!--broken-section-->
    <section id="contact-us" class="ttm-row broken-section ttm-bgcolor-grey bg-layer-equal-height clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-bg-img-two ttm-bg ttm-col-bgimage-yes ttm-left-span z-index-2 spacing-4">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content ttm-bgcolor-white">
                            <div class="col-bg-img-four ttm-bg ttm-col-bgimage-yes text-center border spacing-6">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <h2 class="font-size-34 mb-10">Emergency Interiors Services</h2>
                                <p>Please do not hesitate to send us a message. We are looking forward to hearing from you.</p>
                                <div class="d-flex flex-row align-items-center justify-content-center mb-10 mt-10">
                                    <div class="widget_icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md mb-0 pt-5">
                                           <i class="flaticon flaticon-call"></i>
                                        </div>
                                    </div>
                                    <div class="widget_content">
                                        <h3 class="widget_number mb-0">Waiting Call Us +123 456 7890</h3>
                                    </div>
                                </div>
                                <ul class="social-icons square">
                                    <li>
                                        <a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="tooltip-bottom" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="tooltip-bottom" target="_blank" href="#" data-tooltip="Pinterest"><i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- col-img-img-three -->
                    <div class="col-bg-img-three ttm-bg ttm-col-bgimage-yes ttm-right-span ttm-bgcolor-darkgrey h-auto spacing-5">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h2 class="title">Send Your Message To Us</h2>
                                </div>
                            </div><!-- section title end -->
                            <div class="padding_top30">
                                <form id="contact_form" class="contact_form wrap-form clearfix" method="post" novalidate="novalidate" action="#">
                                    <div class="row ttm-boxes-spacing-20px">
                                        <div class="ttm-box-col-wrapper col-md-6">
                                            <label>
                                                <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="ttm-box-col-wrapper col-md-6">
                                            <label>
                                                <span class="text-input"><input name="address" type="text" value="" placeholder="Your Email*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="ttm-box-col-wrapper col-md-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Your Phone*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="ttm-box-col-wrapper col-md-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Your Subject*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="ttm-box-col-wrapper col-md-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Address*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="ttm-box-col-wrapper col-md-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Zip Code*" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="ttm-box-col-wrapper col-md-12">
                                            <label>
                                                <span class="text-input"><textarea name="message" cols="20" rows="4" placeholder="Message*" required="required"></textarea></span>
                                            </label>
                                        </div>
                                        <div class="ttm-box-col-wrapper col-lg-12">
                                            <p class="cookies">
                                                <input id="cookies-consent" name="cookies-consent" type="checkbox" value="yes">
                                                <label for="cookies-consent"> It would be great to hear from you! If you got any questions.</label>
                                            </p>
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-round ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor mt-15 w-100 text-center" href="#" tabindex="0">Send Message <i class="ti ti-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- col-img-bg-img-two end-->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--broken-section end-->


    <!--blog-section-->
    <section id="blog" class="ttm-row bolg-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-8 col-md-10 col-sm-11 m-auto">
                        <!--section-title-->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h3>RECENT ARTICLES</h3>
                                <h2 class="title">Read Our Latest Articles</h2>
                            </div>
                        </div><!--section-title end-->
                    </div>
                </div><!--row end-->
                <!--row-->
                <div class="row slick_slider mt-5 res-991-mt-0" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":992,"settings":{"slidesToShow": 2}}, {"breakpoint":750,"settings":{"slidesToShow": 1}}]}'>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!--featured-imagebox-blog-->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" width="650" height="510" src="{{asset('theme/images/blog/blog-01-650x510.jpg')}}" alt="image">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">Mar 20 2021</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="blog-single.html">Things to Know When Choosing the Perfect Sofa</a>
                                    </h3>
                                </div>
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="ti ti-user ttm-textcolor-skincolor"></i>John Doe</span>
                                    <span class="ttm-meta-line"><i class="ti ti-comment ttm-textcolor-skincolor"></i>0 Comments</span>
                                </div>
                                <div class="ttm-postbox-desc-footer">
                                    <a class="ttm-btn ttm-btn-size-md btn-inline ttm-icon-btn-right ttm-btn-color-darkgrey" href="renewable-resource.html">Read More<i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!--featured-imagebox-blog-->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" width="650" height="510" src="{{asset('theme/images/blog/blog-02-650x510.jpg')}}" alt="image">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">Mar 20 2021</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="blog-single.html">Colour Schemes to Introduce Spring in Your Home</a></h3>
                                </div>
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="ti ti-user ttm-textcolor-skincolor"></i>John Doe</span>
                                    <span class="ttm-meta-line"><i class="ti ti-comment ttm-textcolor-skincolor"></i>0 Comments</span>
                                </div>
                                <div class="ttm-postbox-desc-footer">
                                    <a class="ttm-btn ttm-btn-size-md btn-inline ttm-icon-btn-right ttm-btn-color-darkgrey" href="renewable-resource.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!--featured-imagebox-blog-->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" width="650" height="510" src="{{asset('theme/images/blog/blog-03-650x510.jpg')}}" alt="image">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">Mar 20 2021</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="blog-single.html">4 Ways to Create Extra Space in Small Homes</a></h3>
                                </div>
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="ti ti-user ttm-textcolor-skincolor"></i>John Doe</span>
                                    <span class="ttm-meta-line"><i class="ti ti-comment ttm-textcolor-skincolor"></i>0 Comments</span>
                                </div>
                                <div class="ttm-postbox-desc-footer">
                                    <a class="ttm-btn ttm-btn-size-md btn-inline ttm-icon-btn-right ttm-btn-color-darkgrey" href="renewable-resource.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-post end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!--featured-imagebox-blog-->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" width="650" height="510" src="{{asset('theme/images/blog/blog-04-650x510.jpg')}}" alt="image">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">Mar 20 2021</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="blog-single.html">Will My Project be Unveiled to Me?</a></h3>
                                </div>
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="ti ti-user ttm-textcolor-skincolor"></i>John Doe</span>
                                    <span class="ttm-meta-line"><i class="ti ti-comment ttm-textcolor-skincolor"></i>0 Comments</span>
                                </div>
                                <div class="ttm-postbox-desc-footer">
                                    <a class="ttm-btn ttm-btn-size-md btn-inline ttm-icon-btn-right ttm-btn-color-darkgrey" href="renewable-resource.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-blog end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!--featured-imagebox-blog-->
                        <div class="featured-imagebox featured-imagebox-post style1">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" width="650" height="510" src="{{asset('theme/images/blog/blog-05-650x510.jpg')}}" alt="image">
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">Mar 20 2021</span>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3><a href="blog-single.html">What is the Process For Purchasing Furniture?</a></h3>
                                </div>
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="ti ti-user ttm-textcolor-skincolor"></i>John Doe</span>
                                    <span class="ttm-meta-line"><i class="ti ti-comment ttm-textcolor-skincolor"></i>0 Comments</span>
                                </div>
                                <div class="ttm-postbox-desc-footer">
                                    <a class="ttm-btn ttm-btn-size-md btn-inline ttm-icon-btn-right ttm-btn-color-darkgrey" href="renewable-resource.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-blog end-->
                    </div>
                </div><!--row end-->
            </div>
    </section>
    <!--blog-section end-->


</div><!--site-main end-->

@endsection
