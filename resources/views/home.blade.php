@extends('layouts.app')

@section('content')

    <h1>La mia app</h1>

    <section>
        <h2>Il nostro viaggio</h2>
        <div class="container mt-3">
            <div class="row">
                @foreach ($trains as $train)
      
                    <div class="col">
                        <p>{{ $train->azienda }}</p>
                        <p>{{ $train->stazione_di_partenza }}</p>
                        <p>{{ $train->stazione_di_arrivo }}</p>
                        <p>{{ $train->orario_di_partenza }}</p>
                        <p>{{ $train->orario_di_arrivo }}</p>
                        <p>{{ $train->created_at }}</p>
                        <p>{{ $train->updated_at }}</p>
                    </div>  
                  
                @endforeach
            </div>
        </div>
    </section>