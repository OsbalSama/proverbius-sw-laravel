</form>
<p>
<div class="card">
    <div class="card-header">
        {{ $Playlist->title }}
    </div>
    <div class="card-body ">
        @if ($Playlist->getPlaylistsItems->isEmpty())
            <p>
                *Lista de Reproducción Vacía
            </p>
        @else
            <div class="row d-flex justify-content-start">
                @foreach ($Playlist->getPlaylistsItems as $item)
                    @include('components.p-item')
                @endforeach
            </div>
        @endif
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-end">
            <a class="btn btn-success mr-2" href="">Editar</a>
            <form class="droPlaylist" method="POST"
                action="{{ route('product.playlist.destroy', ['playlist' => $Playlist]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
</p>
