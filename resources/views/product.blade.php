{{-- 
    PRODOTTI: contenuto della pagina di dettaglio
--}}

@extends('layouts.main')

@section('content')

<section class="product">
    <div class="container">

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