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
                                <a href="{{$manga->tomeCurrent->chapter}}/@if($i < 10){{ '0'.$i }}@else{{ $i }}@endif">{{ $i }}</a>
                            </li>
                        @endfor
                    </ul>
                </nav>
            </div>
        </div>
        @include('layouts.partials.comments')
    </div>
@endsection

