<div class="col-lg-3 Sidebar">
    @foreach ($mangas as $manga)

        <div class="row marginBottom">
            <a href="/manga/{{ $manga }}">
                <div class="col-lg-3">
                    <img src="{{asset('mangas/'.$manga.'/thumb_cover.jpg')}}" alt="{{ $manga }}" class="img-thumbnail"/>
                </div>
                <div class="col-lg-9">
                    <h4>{{ $manga }}</h4>
                </div>
            </a>
        </div>

    @endforeach
</div>