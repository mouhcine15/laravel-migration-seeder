@extends('templates.base')

@section('pageTitle', 'Movies')

@section('pageMain')
    <main>
        <ul>
            @foreach ($train as $trains)
            <li>
                <div>
                    <strong>numero treno: </strong> 
                    {{$trains->id}}
                </div>
                <div>
                    <strong> azienda: </strong> 
                    {{$trains->azienda}}
                </div>
                <div>
                    <strong>stazone di partenza: </strong>
                    {{$trains->stazione_di_partenza}}
                </div>
                <div>
                    <strong>stazione di arrivo: </strong> 
                    {{$trains->stazione_di_arrivo}}
                </div>
                <div>
                    <strong>orario di partenza: </strong>
                    {{$trains->orario_di_partenza}}
                </div>
                <div>
                    <strong>orario di arrivo: </strong> 
                    {{$trains->orario_di_arrivo}}
                </div>
                <div>
                    <strong>numero di carrozze: </strong> 
                    {{$trains->numero_carrozze}}
                </div>
                <div>
                    <strong>treno in orario: </strong> 
                    {{$trains->in_orario}}
                </div>
                <div>
                    <strong>treno cancellato: </strong>
                    {{$trains->cancellato}}
                </div>

            </li>
            @endforeach
        </ul>
    </main>
@endsection
