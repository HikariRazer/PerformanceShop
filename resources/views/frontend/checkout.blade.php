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
                {{-- cart --}}
                @include('layouts.components.frontend.cart')
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
