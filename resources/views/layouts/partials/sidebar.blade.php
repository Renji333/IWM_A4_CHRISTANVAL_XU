<div class="col-lg-3 Sidebar">
    @foreach ($mangas as $manga)

        <div class="row marginBottom">
            <a href="/mangas/{{ $manga->id }}">
                <div class="col-lg-3">
                    <img src="{{asset('mangas/'.$manga->shortTitle.'/thumb_cover.jpg')}}" alt="{{ $manga->title }}" class="img-thumbnail"/>
                </div>
                <div class="col-lg-9">
                    <h4>{{ $manga->title }}</h4>
                </div>
            </a>
        </div>

    @endforeach
</div>