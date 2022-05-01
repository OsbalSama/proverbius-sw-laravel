<div class="card w-auto m-0 p-0">
    <div class="card-header m-1 p-1">
        <div class="row">
            <div class="col-auto">
                <div class="d-flex justify-content-center">
                    <img style="width: 3rem" class="m-0 p-0"
                        src="{{ asset('images/assets/noProfilePhoto.png') }}" alt="Card image cap">
                </div>
            </div>
            <div class="col-sm">
                <b>{{ $User->name }}</b>
                <br>{{ $User->role }}
            </div>
        </div>
    </div>
    <a href="{{ route('public.accounts.profile', [$User]) }}" class="stretched-link"></a>
</div>
