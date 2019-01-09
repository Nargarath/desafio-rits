<div class="vacant-info-item">
    <h3>{{ $slot }}</h3>
    <ul>
        @foreach ($things_list as $thing)
        <li>{{$thing}}</li>
        @endforeach
    </ul>
</div>