<div>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card text-center">
                <div class="card-tittle">
                    <h2>Informacion del arma</h2>
                </div>
                <div class="card-header">
                    <img style="width:100px; height:125px" src="{{ Storage::disk('public')->url($arma->foto) }}"
                        alt="">
                </div>
                <div class="card-body">
                    <h1>{{ $arma->nombre }}</h1>
                    {{ $arma->categoria }} , {{ $arma->año }}
                    <h2 class="mt-5">${{ $arma->precio }}</h2>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('editarmas', $arma) }}" type="submit" class="btn btn-success">Editar</a>
                    <a href="{{ route('indexarmas') }}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
