<!DOCTYPE html>
<html lang="en">

{{-- Styling --}}
@include('layouts.components.backend.style')

<body>
  <div id="app">
    <div class="main-wrapper">

    {{-- Narvigation Bar --}}
    @include('layouts.components.backend.navbar')

    {{-- Sidebar --}}
    @include('layouts.components.backend.sidebar')


      <!-- Main Content -->
      <div class="main-content">

        {{-- Content --}}
        @yield('content')

      </div>

      {{-- Footer --}}
      @include('layouts.components.backend.footer')

    </div>
  </div>

  {{-- Script --}}
  @include('layouts.components.backend.script')

</body>
</html>
