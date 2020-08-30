<!DOCTYPE html>
<html lang="fr">

  <head>
    @include('layouts.head')
  </head>

  <body>
    <div id="wrapper">
      @include('layouts.sidebar')
      <div id="page-wrapper" class="gray-bg">
        @include('layouts.topbar')

        <div class="wrapper wrapper-content">
          @yield('content')
        </div>

        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

      </div>
      @include('layouts.right-sidebar')
      @include('layouts.scripts')
    </div>
  </body>
</html>
