<h1>Editar Producto</h1>
<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    NOMBRE:
        <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>
    DESCRIPCION:
        <input type="text" name="descripcion" value="{{ $producto->descripcion }}"><br>
    PRECIO:
        <input type="number" name="precio" value="{{ $producto->precio }}"><br>
    STOCK:
        <input type="number" name="stock" value="{{ $producto->stock }}"><br>
    CATEGORIA:
        <input type="number" name="categoria_id" value="{{ $producto->categoria_id }}"><br>
    {{-- CATEGORIA:
        <select name="categoria_id">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
            @endforeach
        </select> --}}
    <button type="submit">Actualizar Producto</button>
</form>