<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($data as $data1)
            <div class="item">
             
                <div class="card-doctor">
                    <div class="header">
                        <img style="height:300px" src="/storeimg/{{$data1->image}}" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{$data1->name}}</p>
                        <span class="text-sm text-grey">{{$data1->spetiality}}</span>
                    </div>
                </div>
               
            </div>
            @endforeach

        </div>

    </div>

</div>