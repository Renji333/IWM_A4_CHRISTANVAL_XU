@extends('layouts.app')

@section('content')
        <div class="col-lg-9 MainContent">
            <div class="row">
                @foreach ($mangasC as $manga)
                    <div class="col-lg-4" style="text-align: center">
                        <div class="thumbnail">
                            <a href="mangas/{{$manga->id}}">
                                <img src="{{asset('mangas/cover/'.$manga->shortTitle.'.png')}}" alt="">
                                <div class="caption">
                                    <h3>{{$manga->title}}</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection

