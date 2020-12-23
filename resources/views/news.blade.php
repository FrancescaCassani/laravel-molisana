@extends('layouts.main')

@section('content')


<section class="type-section container t-c">
    <h2>Le ultime novità</h2>

    <div class="cards">
        @foreach ($news as $new)
            <div class="card news">
                <img src="{{ $new['src'] }}" alt="">
                <div class="wrapper">
                    <h5> {{ $new['when'] }} </h5>
                    <h4> {{ $new['title'] }} </h4>
                    
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection