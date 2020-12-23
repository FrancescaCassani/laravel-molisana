@extends('layouts.main')

@section('content')


@if (!empty($corte))
<section class="type-section container t-c">
    <h2>LE CORTE</h2>

    <div class="cards">
        @foreach ($corte as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3> {{ $card['titolo'] }} </h3>
                <h5> Tempo di cottura: {{ $card['cottura'] }}</h5>
                <a href="{{ route('product', $card['id']) }}">Info prodotto</a>
            </div>
        @endforeach
    </div>
</section>
@endif


@if (!empty($lunghe))
<section class="type-section container t-c">
    <h2>LE LUNGHE</h2>

    <div class="cards">
        @foreach ($lunghe as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3> {{ $card['titolo'] }} </h3>
                <h5> Tempo di cottura: {{ $card['cottura'] }}</h5>
                {{-- <a href="{{ route('product', $card['id']) }}">Info prodotto</a> --}}
            </div>
        @endforeach
    </div>
</section>
@endif


@if (!empty($cortissime))
<section class="type-section container t-c">
    <h2>LE CORTISSIME</h2>

    <div class="cards">
        @foreach ($cortissime as $card)
            <div class="card">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                <h3> {{ $card['titolo'] }} </h3>
                <h5> Tempo di cottura: {{ $card['cottura'] }}</h5>
                {{-- <a href="{{ route('product', $card['id']) }}">Info prodotto</a> --}}
            </div>
        @endforeach
    </div>
</section>
@endif


@endsection
