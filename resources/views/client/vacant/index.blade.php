<style>
    nav{
        padding-bottom: 4rem !important;
        border-bottom-style: solid;
        border-bottom-width: 1px;
        border-bottom-color: #F1F1F1;
    }
    footer{
        border-top-style: solid;
        border-top-width: 1px;
        border-top-color: #F1F1F1;
        border-bottom-style: solid;
        border-bottom-width: 1px;
        border-bottom-color: #F1F1F1;
    }
</style>
@extends('client.master')

@section('body')

    @component('client.vacant.nav')
        
    @endcomponent

    @component('client.vacant.hero',['job'=>$job,'assignments'=>$assignments])
        
    @endcomponent

    @component('client.vacant.form',['job_id'=>$job->id])
        
    @endcomponent

    @component('client.main.footer')

    @endcomponent
@stop