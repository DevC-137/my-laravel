<h1>Crear Producto</h1>
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    NOMBRE:
        <input type="text" name="nombre"><br>
    DESCRIPCION:
        <input type="text" name="descripcion"><br>
    PRECIO:
        <input type="number" name="precio"><br>
    STOCK:
        <input type="number" name="stock"><br>
    CATEGORIA:
        <input type="number" name="categoria_id"><br>
    {{-- CATEGORIA:
        <select name="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select> --}}
    <button type="submit">Crear Producto</button>
</form>