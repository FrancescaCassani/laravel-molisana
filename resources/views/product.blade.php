{{-- 
    PRODOTTI: contenuto della pagina di dettaglio
--}}

@extends('layouts.main')

@section('content')

<section class="product">
    <div class="container">

        <div class="slider">
            @if ($id > 0) 
                <a href=" {{ route('product', $id - 1) }}">&lt; PREV</a>
            @endif

            @if ($id < $length) 
                <a href=" {{ route('product', $id + 1) }}">NEXT &gt;</a>
            @endif
        </div>

        <div class="hero t-c">
            <h1> {{ $product['titolo'] }} </h1>
            <p> Tempo di cottura: {{ $product['cottura'] }}</p>
            <div class="content">
                <p> {!! $product['descrizione'] !!}</p>
            </div> 
            <img src="{{ $product['src-h'] }} " alt="{{ $product['titolo'] }}">
            <img src="{{ $product['src-p'] }} " alt="{{ $product['titolo'] }}">
        </div>

        
    </div>
</section>
    
@endsection