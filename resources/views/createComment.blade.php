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
            <textarea name="comment" id="" cols="100" rows="5"></textarea>
            <br>
            <input type="submit" value="Envoyer" class="btn btn-default"> &nbsp;&nbsp;
            <a class="btn btn-default btn-close" href="{{ route('home') }}">Cancel</a>
        </form>
    </div>
@endsection

