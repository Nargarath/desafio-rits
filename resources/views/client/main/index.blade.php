@extends('client.master')

@section('body')
    @component('client.main.hero')
    @endcomponent
    @component('client.main.about')
    @endcomponent
    @component('client.main.virtues')
    @endcomponent
    @component('client.main.vagas',['jobs'=>$jobs])
    @endcomponent
    @component('client.main.footer')
    @endcomponent
@stop