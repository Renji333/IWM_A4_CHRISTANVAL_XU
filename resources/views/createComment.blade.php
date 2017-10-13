@extends('layouts.app')

@section('content')
    <div class="col-lg-9 MainContent">
        <form action="{{route('cc_store', 4)}}" method="post">
            {{csrf_field()}}
            <textarea name="comment" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Envoyer">
        </form>
    </div>
@endsection

