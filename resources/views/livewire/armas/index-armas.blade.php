<div wire:init="cargando">

    <div class="row mb-3">
        <div class="col-3">
            <div class="input-group">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-labaria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-9 ">
            <a href="{{ route('createarmas') }}" class="btn btn-success float-right">Nuevo
                <i class="fas fa-plus-square">
                    </i class=></a>
        </div>
    </div>
    @if (count($armas) > 0)

        <table class="table">
            <thead >
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Año</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($armas as $arma)


                    <tr>
                        <th scope="row">{{ $arma->id }}</th>
                        <td><img style=" border-radius: 20px; width: 60px; height:110px"
                                src="{{ Storage::disk('public')->url($arma->foto != null ? $arma->foto : 'images/armas/default.png') }}"
                                alt=""></td>
                        <td>{{ $arma->nombre }}</td>
                        <td>{{ $arma->categoria }}</td>
                        <td>{{ $arma->año }}</td>
                        <td>${{ $arma->precio }}</td>
                        <td>
                            <a title="Ver arma" style="font-size: 1.3rem" class="text-info mr-1"
                                href="{{ route('showarmas', $arma) }}"><i class="fas fa-eye"></i></a>
                            <a title="Editar arma" style="font-size: 1.3rem" class="text-warning mr-1"
                                href="{{ route('editarmas', $arma) }}"><i class="fas fa-edit"></i></a>
                            <a title="Eliminar arma" style="font-size: 1.3rem" class="text-danger mr-1"
                                href="{{ route('deletearmas', $arma) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <img class="d-block mx-auto" src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">

        <h2 class="text-center">Cargando...</h2>
    @endif
</div>
<body style="background-color:darkorange">

</body>
