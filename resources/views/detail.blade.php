@extends('layouts.app')

@section('content')
<!-- Product Details Area Start -->
<div class="single-product-area section-padding-100 clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="single_product_thumb">
                    <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#product_details_slider" data-slide-to="0"
                                style="background-image: url({{ asset('/img/product-img/pro-big-1.jpg') }});">
                            </li>
                            <li data-target="#product_details_slider" data-slide-to="1"
                                style="background-image: url({{ asset('/img/product-img/pro-big-2.jpg') }});">
                            </li>
                            <li data-target="#product_details_slider" data-slide-to="2"
                                style="background-image: url({{ asset('/img/product-img/pro-big-3.jpg') }});">
                            </li>
                            <li data-target="#product_details_slider" data-slide-to="3"
                                style="background-image: url({{ asset('/img/product-img/pro-big-4.jpg') }});">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a class="gallery_img" href="{{ asset('img/product-img/pro-big-1.jpg') }}">
                                    <img class="d-block w-100" src="{{ asset('img/product-img/pro-big-1.jpg') }}" alt="First slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ asset('img/product-img/pro-big-2.jpg') }}">
                                    <img class="d-block w-100" src="{{ asset('img/product-img/pro-big-2.jpg') }}" alt="Second slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ asset('img/product-img/pro-big-3.jpg') }}">
                                    <img class="d-block w-100" src="{{ asset('img/product-img/pro-big-3.jpg') }}" alt="Third slide">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a class="gallery_img" href="{{ asset('img/product-img/pro-big-4.jpg') }}">
                                    <img class="d-block w-100" src="{{ asset('img/product-img/pro-big-4.jpg') }}" alt="Fourth slide">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="single_product_desc mt-4">
                    <div class="product-meta-data">
                        <a href="#">
                            <h6>{{ $servicio->nombre }}</h6>
                        </a>
                    </div>
                    <div class="short_overview">
                        <p>
                            {{ $servicio->descripcion }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="315"
                        src="https://www.youtube.com/embed/{{ $servicio->video }}" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="single_product_desc">
                    <!-- Product Meta Data -->
                    <div class="product-meta-data">
                        <div class="line"></div>
                        <p class="product-price">S/. {{ $servicio->precio }}</p>
                        <!-- Ratings & Review -->
                        <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                            <div class="ratings">
                                @for ($i =1; $i <= $servicio->rank; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @endfor
                            </div>
                            <div class="review ratings">
                                <i class="fa fa-clock-o"
                                   style="font-size: 16px;"
                                   data-toggle="tooltip" data-placement="bottom" title="Duracion"></i> {{ $servicio->duracion }} hrs.
                            </div>
                            <div class="review ratings">
                                <i class="fa fa-users" style="font-size: 16px;"
                                   data-toggle="tooltip" data-placement="bottom" title="Cupos"></i> @php echo rand(2, 20) @endphp
                            </div>
                        </div>
                        <!-- Avaiable -->
                        <p class="avaibility"><i class="fa fa-circle"></i> Disponible</p>
                    </div>

                    <!-- Add to Cart Form -->
                    <form class="cart clearfix" method="post">
                        <div class="cart-btn d-flex mb-50">
                            <p>Cupos</p>
                            <div class="quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <button type="submit"
                                name="addtocart"
                                class="btn amado-btn btn-block"
                            style="width: 100%;">COMPRAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details Area End -->
<div id="disqus_thread"></div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

@endsection
@push('js')
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://wandertrip.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endpush