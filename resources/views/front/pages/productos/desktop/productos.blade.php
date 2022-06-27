<div class="desktop-two-columns-aside mobile-one-column">
    <div class="column-aside column">
        <div class="categories desktop-only">
            <div class="categories-element">
                <h2>Categorias</h2>
            </div>

            <div class="categories-elements">
                {{-- esto viene del ViewComposer --}}
                @if(isset($product_categories))
                    @foreach($product_categories as $category_element)
                    <div class="categories-element">
                        <div class="select-category {{isset($category) && $category->id == $category_element->id ? 'active' : ''}}" data-url="{{route('front_products_category', ['category' => $category_element->id])}}">
                            <h4>{{$category_element->name}}</h4>
                        </div>
                    </div>
                    @endforeach
                 @endif
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
                
                <div class="filter-products">
                    <select id="filter" class="select-filter">
                        <option {{isset($filter) ? '': 'selected'}} value="">All Products</option>
                        <option value="{{route('front_products_filter', ['filter'=>'desc'])}}" {{isset($filter) && $filter == 'desc' ? 'selected' : '' }}>De mayor a menor</option>
                        <option value="{{route('front_products_filter', ['filter'=>'asc'])}}"  {{isset($filter) && $filter == 'asc' ? 'selected' : '' }}>De menor a mayor</option>                          
                    </select>                      
                </div>
            </div>
        </div>

        <div class="Products">
            @if(isset($products))
                @foreach($products as $product)
                    {{-- lo de routees en orden, el alias que le hemos puesto en las rutas a la url que queremos que habra, product es el parametro indicado en routes (productos\product), $category->id indica el id de la tabla --}}
                    <div class="product-element product-details" data-url="{{route('front_product', ['product' => $product->id])}}">
                        <div class="product-image">
                            <a><img src="{{Storage::url('product-17.jpg')}}"></a>
                        </div>

                        <div class="product-title red-text" value="{{$product->id}}">
                            <h3>{{$product->name}}</h3>
                        </div>

                        <div class="product-price" >
                            @if(isset($product->price->first()->base_price))
                                <h2>{{$product->price->first()->base_price}}</h2> 
                            @else
                                <h2>{{$product->base_price}}</h2> 
                            @endif
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
