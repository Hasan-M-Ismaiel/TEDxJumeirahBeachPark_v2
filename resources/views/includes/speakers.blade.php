<section id="speakers" class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Speakers</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Meet Our Speakers</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Our TEDxJumeirahbeachpark speakers are visionary thinkers, innovators, and storytellers who bring fresh perspectives and powerful ideas to the stage. Coming from diverse backgrounds and industries, they are united by a passion for sparking meaningful conversations and inspiring change.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="all-speakers">
                    <div class="row align-items-center justify-content-center">

                        <!--Alaa Dalghan-->
                        @foreach ($speakers as $speaker)
                        <div class="col-lg-4 col-md-4 col-12 wow fadeInUp" data-wow-delay=".4s">
                            <div class="single-speaker">
                                <div class="top-content">
                                    <div class="image">
                                        <img src="{{asset($speaker->image)}}" loading="lazy" alt="#">
                                    </div>
                                    <ul class="social">
                                        <li class="linkedin"><a href="{{ $speaker->linkedin }}" target="_blank"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                                <div class="name">
                                    <h3><a href="{{ route('speaker', [$speaker->id]) }}">{{$speaker->name}}</a></h3>
                                    <span><strong>{{$speaker->title}}</strong></span>
                                    <span style="color: black;"><strong>{{$speaker->topic}}</strong></span><br> 
                                    @if($speaker->name != 'Maher Al Kaabi' and $speaker->name != 'Corrie Block')
                                    🎙️ <a href="{{ $speaker->talk }}" style="TEXT-DECORATION: underline; color:red" target="_blank" >  Watch on TEDx YouTube Channel </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>