<div class="card h-100" style="width: 18rem;">
    <div class="d-flex justify-content-center">
        <img class="w-75" src="{{ asset('images/assets/noProductLogo.png') }}" alt="Card image cap">
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $Product->title }}</h5>
        @if ($Product->type == 'product')
            Licencia de Software
        @else
            Licencia Tipo Servicio
        @endif

    </div>
    <div class="card-footer">
        @if ($Product->amount == null)
            <a href="{{ route('public.product.view', ['Product' => $Product]) }} "
                class="btn btn-success w-100 stretched-link">DESCARGA GRATIS</a>
        @else
            <a href="{{ route('public.product.view', ['Product' => $Product]) }} "
                class="btn btn-primary w-100 stretched-link">${{ $Product->amount }}</a>
        @endif
    </div>
</div>
