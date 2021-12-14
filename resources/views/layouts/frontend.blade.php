<!DOCTYPE html>
<html lang="en">

{{-- styling --}}
@include('layouts.components.frontend.style')

<body>
    {{-- upper header --}}
    @include('layouts.components.frontend.upper_header')
    <div class="container">
        {{-- lower header --}}
        @include('layouts.components.frontend.lower_header')
        {{-- navbar --}}
        {{-- @include('layouts.components.frontend.navbar') --}}
        {{-- body section --}}
        <div class="row">
            {{-- sidebar --}}
            @include('layouts.components.frontend.sidebar')
            <div class="span9">
                {{-- carousel --}}
                @include('layouts.components.frontend.carousel')
                {{-- new product --}}
                @include('layouts.components.frontend.new_product')
                {{-- Featured product --}}
                @include('layouts.components.frontend.featured_product')
            </div>
        </div>
        {{-- clients --}}
        @include('layouts.components.frontend.clients')
        {{-- footer --}}
        @include('layouts.components.frontend.footer')
    </div><!-- /container -->
    {{-- copyright --}}
    {{-- @include('layouts.components.frontend.copyright') --}}
    {{-- script --}}
    @include('layouts.components.frontend.script')
</body>

</html>
