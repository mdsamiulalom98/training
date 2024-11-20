<section class="our-clients section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title text-center">
                    <h2 class="text-effect mb-4">আমাদের কিছু ক্লাইন্ট</h2>
                </div>
            </div>
        </div>
        @php
            $clients = \App\Models\Client::where('status', 1)->get();
        @endphp
        <div class="row">
            <div class="col-sm-12">
                <div class="client-slider owl-carousel">
                    @foreach ($clients as $key => $value)
                    <div class="client-list">
                        <img src="{{asset($value->image)}}" alt="{{ $value->title }}">
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>

@push('script')
<script src="{{asset('public/frontEnd/js/grt-youtube-popup.js')}}"></script>
<script>
    $(document).ready(function() {

        $(".client-slider").owlCarousel({
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            nav: true,
            autoplayHoverPause: false,
            margin: 15,
            mouseDrag: true,
            responsiveClass: true,
            responsive: {
                300: {
                    items: 2,
                    nav: false,
                },
                480: {
                    items: 2,
                    nav: false,
                },
                768: {
                    items: 3,
                    nav: false,
                },
                1170: {
                    items: 6,
                     nav: false,
                },
            }

        });
    });
</script>
@endpush
