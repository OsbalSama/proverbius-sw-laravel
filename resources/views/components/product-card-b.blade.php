<div class="card h-100" style="width: 18rem;">
    <div class="d-flex justify-content-center">
        <img class="w-75" src="{{ asset('images/assets/noProductLogo.png') }}" alt="Card image cap">
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $product->title }}</h5>
        <p class="card-text">{{ $product->description }}</p>

    </div>
    <div class="card-footer">
        @if ($product->amount == null)
            <a href="{{ route('public.product.view', ['product' => $product]) }} "
                class="btn btn-success w-100 stretched-link">DESCARGA GRATIS</a>
        @else
            <a href="{{ route('public.product.view', ['product' => $product]) }} "
                class="btn btn-primary w-100 stretched-link">${{ $product->amount }}</a>
        @endif
    </div>
</div>
