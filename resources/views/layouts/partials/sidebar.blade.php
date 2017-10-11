<div class="col-lg-3 Sidebar">
    @foreach ($mangas as $manga)

        <div>
            <a href="/manga/{{ $manga }}">{{ $manga }}</a>
        </div>

    @endforeach
</div>