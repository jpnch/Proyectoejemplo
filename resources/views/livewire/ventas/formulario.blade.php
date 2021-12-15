<div class="mb-3">
    <label class="form-label">Usuario que adquiere el arma</label>
    <select wire:model="venta.id_usuario" class="form-control">
        <option selected value="0">Seleccionar Usuario</option>
        @foreach ($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->nombre_usuario }}</option>
        @endforeach

    </select>
    @error('venta.id_usuario') <h2>{{ $message }}</h2> @enderror
</div>
<div class="mb-3">
    <label class="form-label">Arma</label>
    <select wire:model="venta.id_arma" class="form-control">
        <option selected value="0">Seleccionar Armas</option>
        @foreach ($armas as $arma)
            <option value="{{ $arma->id }}">{{ $arma->nombre }} - ${{ $arma->precio }}</option>
        @endforeach
    </select>
    @error('venta.id_arma') <h2>{{ $message }}</h2> @enderror
</div>
<body style="background-color:darkorange">

</body>
