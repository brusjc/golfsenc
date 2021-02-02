<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @section('htmlheader')
        @include('comunes.headHtml')
    @show

    <body class="hold-transition sidebar-mini layout-fixed">

        <div class="wrapper">

            @include('comunes.bodyCabeza')

            @include('comunes.bodySidebar')

            <div class="content-wrapper">

                @include('comunes.contentheader')

                 <section class="content">
                    <!-- Your Page Content Here -->
                    <div class="container-fluid">
                        @yield('main_content')
                    </div>
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            @include('comunes.controlsidebar')

            @include('comunes.footer')

        </div><!-- ./wrapper -->

        @section('scripts')
            @include('comunes.scripts')
        @show

    </body>
</html>

