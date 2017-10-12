@extends('layouts.app')

@section('content')
    <div class="col-lg-9 MainContent">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{asset('mangas/'.$manga->shortTitle.'/'.$manga->tomeCurrent.'/'.$manga->pageCurrentDisplayed.'.jpg')}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
        @include('layouts.comments)
    </div>
@endsection

