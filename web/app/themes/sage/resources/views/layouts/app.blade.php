<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('bg-light') @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div role="document">
      <main class="main">
        @yield('content')
      </main>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
