@extends('layouts.app')

@section('content')
    <div class="col-lg-9 MainContent">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{asset('mangas/'.$manga->shortTitle.'/'.$manga->tomeCurrent->chapter.'/'.$manga->pageCurrentDisplayed.'.jpg')}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        @for($i = 0; $i < $manga->tomeCurrent->nbPages; $i++ )
                            <li>
                                <a href="{!! route('SwP', ['id'=> $id, 'pages'=> $i, 'chapter'=> $manga->tomeCurrent->chapter])  !!}">{{ $i }}</a>
                            </li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
        @include('layouts.partials.comments')
    </div>
@endsection

