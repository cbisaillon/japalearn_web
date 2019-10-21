@extends('defaultLayout')
@section("content")
    <h1>Search for <b>{{$query}}</b></h1>
    @if(mb_strlen($suggestion) > 0)
        <p>Did you mean: <a href="{{route('search', ['query' => $suggestion])}}">{{$suggestion}}</a></p>
    @endif

    @foreach($entries as $entry)
        <div>
            @if(isset($entry->japanese_representations[0]))<h1>{{$entry->japanese_representations[0]->representation}}</h1>
            @elseif(isset($entry->kana_representations[0]))<h1>{{$entry->kana_representations[0]->representation}}</h1>@endif
            @if(isset($entry->kana_representations[0]))<p>({{$entry->kana_representations[0]->representation}})</p>@endif
            <h3>Meanings</h3>
            <ol>
                @foreach($entry->meanings as $meaning)
                    <li>{{$meaning->meaning}}</li>
                @endforeach
            </ol>
        </div>
    @endforeach
@endsection