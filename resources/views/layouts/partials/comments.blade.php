<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Commentaires</h1>

            @if(Auth::check())
                <button type="button" onclick="window.location='{{ url("/createComment/".$id) }}'">Ajouter un commentaire</button>
            @else
                <h5>Connectez-vous pour poster un commentaire</h5>
            @endif
        </div>
        @forelse($allComments as $allComment)
            <div class="comments-list">
                <div class="media">
                    <p class="pull-right"><small>{{date('d-m-Y', strtotime($allComment->created_at))}}</small></p>
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