@extends('layouts.main')

@section('content')


<section class="type-section container t-c">
    <h2>Le ultime novità nel campo culinario</h2>

    <div class="cards">
        @foreach ($news as $new)
            <div class="card">
                <img src="{{ $new['src'] }}" alt="">
                <div class="wrapper">
                    <h4> {{ $new['title'] }} </h4>
                    <div class="when">
                        <h5> {{ $new['when'] }} </h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection