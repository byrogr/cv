@extends('layouts.app')

@section('content')
    <div class="shop_sidebar_area">
        <form action="" id="frm-filtrar">
            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Localidad</h6>

                <!--  Catagories  -->
                <div class="widget-desc">
                    <div class="form-text">
                        <input class="form-text form-control" type="text" name="nombre">
                    </div>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Fecha</h6>

                <!--  Catagories  -->
                <div class="widget-desc">
                    <div class="form-text">
                        <input class="form-control" type="date" name="nombre">
                    </div>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget brands mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Calificaci&oacute;n</h6>

                <div class="widget-desc">
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="amado">
                        <label class="form-check-label" for="amado">5 Estrellas</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ikea">
                        <label class="form-check-label" for="ikea">4 Estrellas</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="furniture">
                        <label class="form-check-label" for="furniture">3 Estrellas</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="factory">
                        <label class="form-check-label" for="factory">2 Estrellas</label>
                    </div>
                    <!-- Single Form Check -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="artdeco">
                        <label class="form-check-label" for="artdeco">1 Estrella</label>
                    </div>
                </div>
            </div>

            <!-- ##### Single Widget ##### -->
            <div class="widget price mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Precio</h6>

                <div class="widget-desc">
                    <div class="slider-range">
                        <div data-min="10"
                             data-max="1000"
                             data-unit="S/. "
                             class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                             data-value-min="10"
                             data-value-max="1000" data-label-result="">
                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                        </div>
                        <div class="range-price">S/. 10 - S/. 1000</div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn amado-btn">
                <i class="fa fa-search"></i> Buscar
            </button>
        </form>
    </div>

    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="cart-title mb-4">Vive las experiencias de </h1>
                    <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                        <!-- Total Products -->
                        <div class="total-products">
                            <p>Mostrando 1-3 De 3</p>
                        </div>
                        <!-- Sorting -->
                        <div class="product-sorting d-flex">
                            <div class="sort-by-date d-flex align-items-center mr-15">
                                <p>Ordenar por</p>
                                <form id="frm-order"
                                      action="{{ route('list', $departamento) }} "
                                      method="get">
                                    <select name="order" id="sortBy">
                                        <option value="nombre">A-Z</option>
                                        <option value="precio">Precio</option>
                                        <option value="rank">Mas valorados</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach ($tours as $t)
                @foreach ($t->servicios as $s)
                    <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <a href="{{ route('detail', [$departamento, $s]) }}">
                                        <img src="{{ asset('/img/product-img/product2.jpg') }}" alt="">
                                        <!-- Hover Thumb -->
                                        <img class="hover-img" src="{{ asset('/img/product-img/product2.jpg') }}" alt="">
                                    </a>
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">S/. {{ $s->precio }}</p>
                                        <a href="{{ route('detail', [$departamento, $s]) }}">
                                            <h6>{{ $s->nombre }}</h6>
                                        </a>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            @php $rank = $s->rank @endphp
                                            @for ($i = 1; $i <= $s->rank; $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endfor
                                        </div>
                                        <div class="cart">
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Agregar">
                                                <img src="{{ asset('img/core-img/cart.png') }}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination justify-content-end mt-50">
                            <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                            <li class="page-item"><a class="page-link" href="#">02.</a></li>
                            <li class="page-item"><a class="page-link" href="#">03.</a></li>
                            <li class="page-item"><a class="page-link" href="#">04.</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(function () {
            $('#sortBy').on('change', function () {
                console.log('xxxx');
            })
        })
    </script>
@endpush