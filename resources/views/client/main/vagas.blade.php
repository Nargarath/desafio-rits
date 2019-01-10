<section id="vagas">
        <div class="section-intro container">
            <div>
                <h3>Vagas em aberto</h3>
                <span>Conheça as oportunidades que temos em aberto.</span>
            </div>
            
        </div> 
        <div class="vaga-list">
            @if(!empty($jobs))
                @foreach ($jobs as $job )
                    @component('client.components.vaga-card',['job'=>$job])
                    @endcomponent
                @endforeach
            @else
                Sem vagas no momento
            @endif
            

            
        </div>
</section>