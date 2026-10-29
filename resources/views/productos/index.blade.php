<h1>Productos</h1>

@foreach ($productos as $producto)
<p> {{ $producto->nombre }}</p>
<p> {{ $producto->descripcion }}</p>
<p> {{ $producto->precio }}</p>
<p> {{ $producto->stock }}</p>
@endforeach