@extends('layouts.app')

@section('content')
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">

            @foreach ($departamentos as $d)
                @php $index = $loop->index + 1 @endphp
                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="{{ route('list', $d) }}">
                        <img src="{{ asset("img/bg-img/$index.jpg") }}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <h4>{{ $d->nombre }}</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection