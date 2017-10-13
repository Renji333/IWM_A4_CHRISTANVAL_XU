@extends('layouts.app')

@section('content')
    @if(count($errors) > '0')
        <ul>
            @foreach($errors->all() as $error)
                <li>
                 {{$error}}
                </li>
                @endforeach
        </ul>
    @endif

    <div class="col-lg-9 MainContent">
        <form action="{{route('cc_store', 4)}}" method="post">
            {{csrf_field()}}
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Envoyer">
        </form>
    </div>
@endsection

