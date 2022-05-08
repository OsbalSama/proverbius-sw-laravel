<div class="card m-1 p-0" style="width: 10rem;">
    <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
    <div class="card-body h-100">
        {{ $item->title }}
    </div>
    <div class="card-footer">
        <p>
            Tipo: {{ $item->resource_type }}
        </p>

        <form method="POST" action="{{ route('playlist.resource.destroy', ['playlistResource' => $item]) }}"
            class="dropResource">
            @csrf
            @method('DELETE')
            <div class="row">
                <div class="col-sm">
                    <a href="{{ $item->resource_link }}" class="btn btn-success btn-sm w-auto" target="_blank">Ver</a>
                    <input type="submit" class="btn btn-danger btn-sm w-auto" value="Eliminar">
                </div>
            </div>
        </form>
    </div>
</div>
