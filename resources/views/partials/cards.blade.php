
{{-- Ragionamento per acquisizione dati con il ciclo foreach --}}

@if (!empty($cards))
<section class="type-section container t-c">
<h2> {{ $title }} </h2>

    <div class="cards">
        @foreach ($cards as $card)
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