<!-- PRODUCTOS -->
<section id="productos">
    <div class="container">
        <div class="section-title">
            <h2>Nuestros Productos</h2>
        </div>
        <div class="products-grid">
            @foreach($products as $product)
            <div class="product-card">
                <div class="product-img">
                    @if($producto->imagen)
                        <img src="{{ asset('storage/' . $product->imagen) }}" alt="{{ $product->nombre }}">
                    @else
                        Imagen del Producto
                    @endif
                </div>
                <div class="product-info">
                    <h3>{{ $product->description }}</h3>
                    <p>{{ $product->description }}</p>
                    <div class="product-price">S/{{ number_format($product->precio, 2) }}</div>
                    <a href="{{ route('producto.detalle', $product->id) }}" class="btn">Ver Detalles</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /PRODUCTOS -->