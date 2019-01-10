<section id="vacant" class="hero is-medium is-light is-bold">
    <div class="hero-body">
        <div class="container-full">
                <div class="columns">
                    <div class="column">
                        <div class="rits-simbol invert">
                            <div class="title">
                                <div>
                                    <h1>{{$job->name}}</h1>
                                    <h2>{{$job->company->city}} - {{$job->company->state}} , {{$job->company->country}}</h2>
                                    <a class="button is-large is-success" href="#form">Candidatar-se</a>
                                </div>
                                
                            </div>
                        </div>
                        

                    </div>
                    <div class="column">
                        <div class="about-box">
                            <div class="vacant-info-list">
                                @component('client.components.vacant-item',[
                                    'things_list' => $assignments['will_do']
                                ])
                                    Na função de <span>Desenvolvedor Frontend</span> aqui na Rits, você vai:
                                @endcomponent

                                @component('client.components.vacant-item',[
                                    'things_list' => $assignments['need_be']
                                ])
                                    Procuramos <span>alguém</span> que:
                                @endcomponent

                                @component('client.components.vacant-item',[
                                    'things_list' => $assignments['work_with']
                                ])
                                    No <span>dia a dia</span> na Rits, você trabalhará também com: 
                                @endcomponent
                               
                            </div>
                        </div>
                            
                    </div>
                    
                </div>
            
        </div>
    </div>
</section>