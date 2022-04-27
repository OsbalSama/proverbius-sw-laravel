<p>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-auto">
                <img style="width: 4rem" class="" src="{{ asset('images/assets/noProductLogo.png') }}"
                    alt="Card image cap">
            </div>
            <div class="col-lg">
                <p>
                <div class="row">
                    <div class="col-lg">
                        <h4>{{ $Product->title }}</h4>
                        @if ($Product->type == 'product')
                            Licencia de Software
                        @else
                            Licencia Tipo Servicio
                        @endif
                    </div>
                    <div class="col-auto ">
                        <div class="h-100">
                            @if ($Product->amount != null)
                                <b>Coste: ${{ $Product->amount }}-MXN</b>
                            @else
                                <b>GRATUITO</b>
                            @endif
                        </div>

                    </div>
                </div>
                </p>
            </div>
        </div>
        <a href="{{ route('public.product.view', ['Product' => $Product]) }} " class="stretched-link"></a>
    </div>
</div>
</p>
