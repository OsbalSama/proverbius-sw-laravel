<div class="card m-1 p-0" style="width: 10rem;">
    <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">    
    <div class="card-footer h-100">
        {{ $item->title }}
    </div>
    <a href="{{ $item->resource_link }}" target="_blank" class="stretched-link"></a>
</div>