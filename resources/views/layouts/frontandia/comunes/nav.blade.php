 <nav class="navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="h1">
                <a href="/{{ session('lang') }}/">Golfsencillo.com</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::guest())
                    @if(Auth::user()->roll_id>=50)
                        <li>
                            <a href="/es/master"><i class="fa fa-key fa-2x misvg"></i><br>{{ucfirst(trans('message.estadisticas')) }}</a>
                        </li>
                    @endif
                @endif
                <li>
                    <a href="/{{ session('lang') }}/estadisticas-de-golf"><i class="fa fa-bar-chart fa-2x misvg"></i><br>{{ucfirst(trans('message.estadisticas')) }}</a>
                </li>
                <li>
                    <a href="/{{ session('lang') }}/videos-de-golf"><i class="fa fa-play-circle  fa-2x"></i><br>{{ucfirst(trans('message.videos')) }}</a>
                </li>
                <li>
                    <a href="/{{ session('lang') }}/clases-de-golf"><i class="fa fa-graduation-cap fa-2x misvg"></i><br>{{ucfirst(trans('message.clases')) }}</a>
                </li>
                <li>
                    <a href="/{{ session('lang') }}/entrenamiento-de-golf"><i class="fa fa-male fa-2x"></i><br>{{ucfirst(trans('message.entrenamiento')) }}</a>
                </li>
                <li>
                    <a href="/{{ session('lang') }}/campos-de-golf"><i class="fa fa-map-marker fa-2x"></i><br>{{ucfirst(trans('message.campos')) }}</a>
                </li>
                <li>
                    <a href="/{{ session('lang') }}/reglas-de-golf"><i class="fa fa-university fa-2x misvg"></i><br>{{ucfirst(trans('message.reglas')) }}</a>
                </li>
                @if(Auth::guest())
                    <li><a href="/login" rel="nofollow"><i class="fa fa-user fa-2x"></i><br>{{ trans('message.usuario') }}</a></li>
                @else
                    <li>
                      <a href="{{ url('/logout') }}" id="logout"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-user-times fa-2x"></i><br>{{ ucfirst(trans('message.logout')) }}</a>
                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                          <input type="submit" value="logout" style="display: none;">
                      </form>
                    </li>
                @endif
                @if(Session::get('lang')=='es')
                  <li><a href="{{ route('change_lang', ['lang' => 'va']) }}"><i class="fa fa-flag fa-2x"></i><br>Va</a></li>
                @else            
                  <li><a href="{{ route('change_lang', ['lang' => 'es']) }}"><i class="fa fa-flag fa-2x"></i><br>Es</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
