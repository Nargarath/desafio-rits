<div class="vaga-card hvr-forward">
    <div class="columns is-vcentered">
        <div class="column">
            <h3><a href="{{route('client.vacant',['id'=>$job->id])}}">{{$job->name}}</a></h3>
            <span><i class="fa fa-map-marker"></i>{{$job->company->city}} - {{$job->company->state}}, {{$job->company->country}}</span>
        </div>
        <div class="column button-column">
            <a class="button is-medium is-success" href="{{route('client.vacant',['id'=>$job->id])}}">Candidatar-se</a>
        </div>
    </div>
    
</div>