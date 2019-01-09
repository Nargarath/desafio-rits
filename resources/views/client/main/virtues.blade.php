<section id="virtudes">
    <div class="section-intro container">
        <div class="employee-img image ">
            <img src="{{asset('imgs/employees.jpg')}}">
        </div>
    </div> 
    <div class="virtues-container container">
        <div class="phrases-list">
                <div class="title">
                    <h3>Nossos Valores</h3>
                </div>
                @component('client.components.phrases',[
                    'resume' => 'NUNCA DEIXE A EQUIPE NA MÃO',
                    'phrase' => 'All for one and one for all, united we stand divided we fall.',
                    'author' => 'Alexandre Dumas, The Three Musketeers'
                ])
                @endcomponent
                @component('client.components.phrases',[
                    'resume' => 'OLHOS NA TAREFA E CABEÇA NA SOLUÇÃO',
                    'phrase' => 'Sword Of Omens, give me sight beyond sight.',
                    'author' => 'Buzz Lightyear, Toy Story'
                ])
            
                @endcomponent
                @component('client.components.phrases',[
                    'resume' => 'FAÇA ACONTECER',
                    'phrase' => 'Do. Or do not. There is no try.',
                    'author' => 'Master Yoda, The Empire Strikes Back'
                ])
                @endcomponent
                @component('client.components.phrases',[
                    'resume' => 'FALHE RÁPIDO, MELHORE MAIS
                    RÁPIDO AINDA',
                    'phrase' => 'To infinity… and beyond!',
                    'author' => 'Buzz Lightyear, Toy Story'
                ])
                @endcomponent
                @component('client.components.phrases',[
                    'resume' => 'SAIBA OU APRENDA',
                    'phrase' => 'Be water, my friend.',
                    'author' => 'Bruce Lee'
                ])
                @endcomponent
        </div>
       
    </div>
   
</section>