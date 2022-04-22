<p>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-auto">
                <img style="width: 4rem" class="" src="{{ asset('images/assets/noProductLogo.png') }}"
                    alt="Card image cap">
            </div>
            <div class="col-lg">
                <h4>{{ $product->title }}</h4>
                <p>{{ $product->description }} </p>
                <p> Type: {{ $product->type }} </p>
                @if ($product->amount != null)
                    <p>${{ $product->amount }}-MXN </p>
                @else
                    <p>Amount: FREE </p>
                @endif
            </div>
        </div>
        <a href="{{ route('public.product.view', ['product' => $product]) }} " class="stretched-link"></a>
    </div>
</div>
</p>
