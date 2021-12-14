<div class="well well-small">
    <h3>New Products </h3>
    <hr class="soften" />

    <div class="row-fluid">
        <ul class="thumbnails">
            @forelse ($newProducts as $product)
                <li class="span4">
                    <div class="thumbnail">
                        <a class="zoomTool" href="product_details.html" title="add to cart"><span
                                class="icon-search"></span> VIEW</a>
                        <a href="product_details.html"><img src="{{ url('storage/' . $product->file_path) }}"
                                alt=""></a>
                        <div class="caption cntr">
                            <p>{{ $product->product_name }}</p>
                            <p><strong> Rp. {{ $product->harga }}</strong></p>
                            <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                            <br class="clr">
                        </div>
                    </div>
                </li>
            @empty
                <span>Data Kosong</span>
            @endforelse

        </ul>
    </div>
</div>
