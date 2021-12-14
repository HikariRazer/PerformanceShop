<div class="well well-small">
    <h3>
        {{-- <a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span
                class="icon-plus"></span></a> --}}
        Featured Products
    </h3>
    <hr class="soften" />
    <div class="row-fluid">
        <ul class="thumbnails">
            @forelse ($featuredProducts as $product)
                <li class="span4">
                    <div class="thumbnail">
                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                class="icon-search"></span> VIEW</a>
                        <a href="product_details.html"><img src="{{ url('storage/' . $product->file_path) }}"
                                alt=""></a>
                        <div class="caption">
                            <h5>{{ $product->product_name }}</h5>
                            <h4>
                                <a class="shopBtn" href="#" title="add to cart"><span
                                        class="icon-plus"></span></a>
                                <span class="pull-right">Rp. {{ $product->harga }}</span>
                            </h4>
                        </div>
                    </div>
                </li>
            @empty
                <span>Data Kosong</span>
            @endforelse

        </ul>
    </div>
</div>
