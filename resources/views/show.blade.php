@extends('layouts.app')

@section('content')
    <div class="col-lg-9 MainContent">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{asset('mangas/'.$manga->shortTitle.'/'.$manga->tomeCurrent->chapter.'/'.$manga->pageCurrentDisplayed.'.jpg')}}"/>
            </div>
        </div>
        @include('layouts.partials.comments')
    </div>
@endsection

