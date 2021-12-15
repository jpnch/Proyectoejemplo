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
            <a href="{{ route('createventas') }}" class="btn btn-success float-right">Nueva Venta
                <i class="fas fa-plus-square">
                    </i class=>
            </a>
        </div>
    </div>
    @if (count($ventas) > 0)

        <table class="table ">
            <thead class="">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Usuario</th>
                    <th scope="col">Arma Adquirido</th>
                    <th scope="col">Fecha de Compra</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)


                    <tr>
                        <th scope="row">{{ $venta->id }}</th>
                        <td>{{ $venta->nombre_usuario }}</td>
                        <td>{{ $venta->nombre }}</td>
                        <td>{{ $venta->created_at }}</td>
                         <td>
                            <a title="No" style="font-size: 1.3rem" class="text-warning mr-1" href="#"><i
                                    class="fas fa-edit"></i></a>
                            <a title="Eliminar arma" style="font-size: 1.3rem" class="text-danger mr-1" href="{{route('deleteventas',$venta)}}"><i
                                    class="fas fa-trash"></i></a>
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
