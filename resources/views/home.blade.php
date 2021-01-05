@extends('layouts.main')

@section('content')


{{-- Qui importo i dati con la logica presente nel file cards.blade.php e decido l'ordine di vista sul sito--}}
<div>
    @include('partials.cards', ['cards' => $corte, 'title' => 'LE CORTE'])
    @include('partials.cards', ['cards' => $lunghe, 'title' => 'LE LUNGHE'])
    @include('partials.cards', ['cards' => $cortissime, 'title' => 'LE CORTISSIME'])
</div>


@endsection
