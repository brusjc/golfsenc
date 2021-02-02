<div class="page-title-container mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn">
                <h1>
                    @yield("contentheader_h1")
                </h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 wow fadeIn">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">@yield('breadcrumb0') </li>
                        @if(trim($__env->yieldContent('breadcrumb1')))
                            <li class="breadcrumb-item">@yield('breadcrumb1')</li>
                        @endif
                        @if(trim($__env->yieldContent('breadcrumb2')))
                            <li class="breadcrumb-item">@yield('breadcrumb2')</li>
                        @endif
                        @if(trim($__env->yieldContent('breadcrumb3')))
                            <li class="breadcrumb-item">@yield('breadcrumb3')</li>
                        @endif
                        @if(trim($__env->yieldContent('breadcrumb4')))
                        <li class="breadcrumb-item">@yield('breadcrumb4')</li>
                        @endif
                        @if(trim($__env->yieldContent('breadcrumb5')))
                            <li class="breadcrumb-item">@yield('breadcrumb5')</li>
                        @endif
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 wow fadeIn">
                @yield("contentheader_frase")
            </div>
        </div>
    </div>
</div>
