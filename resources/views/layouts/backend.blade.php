<!DOCTYPE html>
<html lang="en">

{{-- Styling --}}
@include('layouts.components.style')

<body>
  <div id="app">
    <div class="main-wrapper">

    {{-- Narvigation Bar --}}
    @include('layouts.components.navbar')

    {{-- Sidebar --}}
    @include('layouts.components.sidebar')


      <!-- Main Content -->
      <div class="main-content">

        {{-- Content --}}
        @yield('content')

      </div>

      {{-- Footer --}}
      @include('layouts.components.footer')

    </div>
  </div>

  {{-- Script --}}
  @include('layouts.components.script')

</body>
</html>
