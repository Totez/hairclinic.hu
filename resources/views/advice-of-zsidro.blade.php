@extends('layouts.app')
@section('content')


    <h1>Zsidró tanácsai</h1>

    <div>
        {!! $page_contents["advice"]["description"]["content"] !!}
    </div>

    @foreach($page_contents["advice"]["advice"] as $key => $advice)
        @isset($page_images["advice"]["advice"][$key])
            <img src="{{ asset($page_images["advice"]["advice"][$key]["path"]) }}" alt="{{ $page_images["advice"]["advice"][$key]["name"] }}">
        @endif
        <p>{!! $advice["content"] !!}</p>
    @endforeach

    <div>
        {!! $page_contents["advice"]["video"]["content"] !!}
    </div>
@endsection
