<div class="ttm-row client-section_1 ttm-bgcolor-darkgrey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row text-center">
            <div class="col-md-12">
                <!-- slick_slider -->
                <div class="row slick_slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}]}'>
                    <?php $Client = DB::table('clients')->get(); ?>
                    @foreach ($Client as $client)
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img width="178" height="70" class="img-fluid" src="{{url('/')}}/uploads/clients/{{$client->image}}" alt="{{$client->name}}">
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-2.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-3.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-4.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-5.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="client-box style1">
                            <div class="client-thumbnail">
                                <img width="178" height="70" class="img-fluid" src="{{asset('theme/images/client/client-1.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-client end -->
            </div>
        </div><!-- row end -->
    </div>
</div>
