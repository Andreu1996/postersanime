<div class="desktop-two-columns-aside mobile-one-column">
    <div class="column-aside column">
        <div class="categories desktop-only">
            <div class="categories-element">
                <h2>Categorias</h2>
            </div>

            <div class="categories-element">
                <button></button>
                <div class="button-text red-text">
                    <h4>Shonen Jump</h4>
                </div>
            </div>

            <div class="categories-element">
                <button></button>
                <div class="button-text red-text">
                    <h4>Milky Way Ediciones</h4>
                </div>
            </div>

            <div class="categories-element">
                <button></button>
                <div class="button-text red-text">
                    <h4>Kioto Animation</h4>
                </div>
            </div>

            <div class="categories-element">
                <button></button>
                <div class="button-text red-text">
                    <h4>Uffo Table</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="column-main column">
        <div class="desktop-two-columns-aside mobile-one-column-inline">
            <div class="column-main column">
                <div class="products-title">
                    <h2>Mostrando 15 productos de 100</h2>
                </div>
            </div>

            <div class="column-aside column">
                <div class="category-options">
                    <select>
                        <label value="">Categoría</label>
                        @if(isset($product_categories))
                            @foreach($product_categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        
        <div class="select-option mobile-only">
            
            <select>
                <label value="">Todas las Categorias</label>  
                @if(isset($product_categories))
                    @foreach($product_categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                @endif    
            </select>
        </div>

        <div class="Products">
            @if(isset($products))
                @foreach($products as $product)
                    <div class="product-element product-details" data-url="{{route('front_product', ['product' => $product->id])}}">
                        <div class="product-image">
                            <a><img src="{{Storage::url('product-17.jpg')}}" alt=""></a>
                        </div>

                        <div class="product-title red-text">
                            <h3>{{$product->name}}</h3>
                        </div>

                        <div class="product-price" >
                            <p>{{$product->price}}€</p>
                        </div>

                        <div class="product-details">
                            <button>Detalles</button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
