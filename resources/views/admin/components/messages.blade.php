@php
$messages = session('messages');

@endphp
@if(!empty($messages))
<div class="alert {{$messages['success']?'alert-success':'alert-danger'}} alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        @if($messages['success'])
            Operação realizada com sucesso!
        @else
            @foreach($messages['messages'] as $msg)
            <span class="glyphicon glyphicon-{{$messages['success']?'ok':'remove'}}"></span>
                {{ $msg[0] }}

                <br>
            @endforeach
        @endif
    </div>
@endif