@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row row-cols-5 g-4">
        @foreach ($trains as $train)
        <div class="col">
            <a href="/">
            <div class="card h-100">
                <div class="card-body">
                    <p class="card-text">Azienda: {{$train->Azienda}}</p> 
                    <p class="card-text">Stazione_di_partenza: {{$train->Stazione_di_partenza}}</p> 
                    <p class="card-text">Stazione_di_arrivo: {{$train->Stazione_di_arrivo}}</p> 
                    <p class="card-text">Orario_di_partenza: {{$train->Orario_di_partenza}}</p> 
                    <p class="card-text">orario_di_arrivo: {{$train->Orario_di_arrivo}}</p> 
                    <p class="card-text">Codice_Treno: {{$train->Codice_Treno}}</p> 
                    <p class="card-text">numero_Carrozze: {{$train->Numero_Carrozze}}</p> 
                    <p class="card-text">In_orario: {{$train->In_orario}}</p> 
                    <p class="card-text">Cancellato: {{$train->Cancellato}}</p> 
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>

</div>
@endsection