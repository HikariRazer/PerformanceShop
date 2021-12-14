<div id="sidebar" class="span3">
    <div class="well well-small">
        <ul class="nav nav-list">
            @forelse ($categories as $category)
                <li>
                    <a href="#"><span class="icon-chevron-right"></span>
                        {{ $category->category_name }}
                    </a>
                </li>
            @empty
                <li>Kategori kosong</li>
            @endforelse
        </ul>
    </div>
    <div class="well well-small">
        <a href="#">
            <img src="{{ asset('frontend/assets/img/paypal.jpg') }}" alt="payment method paypal">
        </a>
    </div>
    <ul class="nav nav-list promowrapper">
        @forelse ($featuredProducts as $product)
            <li>
                <div class="thumbnail">
                    <a class="zoomTool" href="product_details.html" title="add to cart"><span
                            class="icon-search"></span> VIEW</a>
                    <img src="{{ url('storage/' . $product->file_path) }}" alt="bootstrap ecommerce templates">
                    <div class="caption">
                        <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span
                                class="pull-right">Rp. {{ $product->harga }}</span></h4>
                    </div>
                </div>
            </li>
        @empty
            <span>Data Kosong</span>
        @endforelse

    </ul>
</div>
