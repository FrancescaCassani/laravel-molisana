@extends('layouts.main')


@section('content')

<section class="type-section container t-c">
    <h2>LE RICETTE PIU' FAMOSE</h2>

    <div class="cards">
        @foreach ($ricette as $ricetta)
            <div class="card">
                <img src="{{ $ricetta['src'] }}" alt="">
            </div>
        @endforeach
    </div>
</section>

@endsection


@section('scripts')
    
@endsection