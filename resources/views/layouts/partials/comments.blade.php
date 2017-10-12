<div class="row">
    <div class="col-lg-12">
        <button type="button" onclick="window.location='{{ url("mangas") }}'">Ajouter un commentaire</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Commentaires</h1>
        </div>

        @forelse($allComments as $allComment)
            <div class="comments-list">
                <div class="media">
                    <p class="pull-right"><small>5 days ago</small></p>
                    <div class="media-body">
                        <h4 class="media-heading">
                            {{$allComment->user->name}}
                        </h4>
                        {{$allComment->comment}}
                    </div>
                </div>
            </div>
        @empty
            Aucun commentaire
        @endforelse
    </div>
</div>