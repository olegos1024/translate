<header class="main-header">
    <!-- Logo -->
    <div class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>YA</b>D</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>YAD</b>.docs</span>
    </div>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="color: white">
        <div class="_relative">
            {{--1 div--}}
            <div class="_relative">
                <div>
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                </div>
                <div>
                    {{ __('welcome') }}
                </div>
            </div>
            {{--2 div--}}
            <?php
            $ar = config('app.applocales');
            $curlang = App::getLocale();
            $lang = array_key_exists($curlang, $ar) ? $ar[$curlang]: null;
            ?>
            <div class="navbar-custom-menu">
                <div style="width: 300px;margin-right:10px;display: flex;flex-direction: row;justify-content: space-between;align-items:center">
                    <div id = "lang">
                        {{__("сurentlang")}}: {{ $curlang }}
                    </div>
                    <div id="_lang">
                    </div>
                    <div style="font-size:3rem;">
                        <div id = "cl" title="Click to select the language">
                            @if($lang)
                                {!!  $lang !!}
                            @endif
                        </div>
                        <ul id = "ul" style="display: none;">
                            @foreach($ar as $key=>$emo)
                                @if($key != $curlang)
                                    <li style="position: relative">
                                        <a href='lang/{{ $key }}' style="line-height: 35px">{!! $emo !!}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <i class="fa fa-bell color-gold"></i>
                        <span class="label label-primary pull-right event-count"> 0 </span>
                        <span class="hidden-xs">{{__("events")}}</span>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</header>
