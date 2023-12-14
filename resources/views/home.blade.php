@extends('layouts.app')

@section('content')


    <section>
        <h2>Il nostro viaggio</h2>
        <div class="container mt-3">
            <div class="row mb-3">
                @forelse ($trains as $train)

                        <div class="col-4">
                            <p>{{ $train->azienda }}</p>
                            <p>{{ $train->stazione_di_partenza }} - {{ $train->stazione_di_arrivo }}</p>
                            <p>{{ $train->orario_di_partenza }} - {{ $train->orario_di_arrivo }}</p>
                        </div> 
                @empty
                        <div>
                            Nessun treno disponibile
                        </div>        
                   
                @endforelse
            </div>
        </div>
    </section>