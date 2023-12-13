@extends('layouts.app')

@section('content')

<section>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                @foreach ($trains as $train)
                  <div class="col">
                    <p>{{ $trains->azienda }}</p>
                    <p>{{ $trains->stazione }}</p>
                  </div>
                @endforeach
            </div>
        </div>
    </main>

</section>

</html>