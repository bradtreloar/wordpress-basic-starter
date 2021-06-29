<div class="navbar-wrapper">
  {{--
    Navbar Top: Displays the logo, contact menu and navbar toggler.
  --}}
  <div class="navbar-top d-flex align-items-center bg-brand-primary text-light">
    <div class="container px-0">
      <div class="navbar py-0 justify-between flex-nowrap">
        <a class="d-flex flex-shrink-1 flex-nowrap align-items-center" href="{{ home_url('/') }}">
          <img class="d-block flex-shrink-1 mw-100 pr-3" src="/app/themes/sage/resources/assets/images/logo.svg" alt="{{ bloginfo( 'name' ) }}" height="18">
        </a>
        <div class="d-flex flex-none">
          @if (has_nav_menu('contact_menu'))
            {!! wp_nav_menu([
              'theme_location' => 'contact_menu',
              'menu_class' => 'navbar-nav ml-auto'
            ]) !!}
          @endif
          @if (has_nav_menu('main_menu'))
            <button class="navbar-toggler d-block d-lg-none text-light" type="button" data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
              <svg class="icon" width="24" height="24"><use xlink:href="#nav" /></svg>
            </button>
          @endif
        </div>
      </div>
    </div>
  </div>
  {{--
    Navbar Bottom: Displays the main menu.
    Below 'lg' breakpoint: Appears as a vertical nav in an off-canvas.
    'lg' breapoint and up: Appears as a horizontal nav spanning the width of the container.
  --}}
  @if (has_nav_menu('main_menu'))
    <div class="navbar-bottom bg-white">
      <div class="container px-0">
        <div class="navbar navbar-light navbar-expand-lg flex-nowrap mh-none">
          <div class="mr-auto collapse navbar-collapse justify-content-start bg-white" id="navbar-nav">
            <div class="offcanvas-header d-flex d-lg-none align-items-center justify-content-end">
              <button class="btn" data-toggle="collapse" data-target="#navbar-nav">
                <svg class="icon" width="24" height="24">
                  <use xlink:href="#close" />
                </svg>
              </button>
            </div>
            <div>
                {!! wp_nav_menu([
                  'theme_location' => 'main_menu',
                  'menu_class' => 'navbar-nav px-3 px-lg-0'
                ]) !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
</div>
