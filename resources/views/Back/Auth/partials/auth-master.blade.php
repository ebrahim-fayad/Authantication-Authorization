<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('font-asset') }}/"
  data-template="vertical-menu-template-free"
>
@include('Back.Auth.partials.authHead')

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              @include('Back.Auth.partials.auth-logo')
              <!-- /Logo -->


              <div>
               @yield('content')

              </div><!-- end content -->
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->
    @include('Back.Auth.partials.auth-scripts')
  </body>
</html>
