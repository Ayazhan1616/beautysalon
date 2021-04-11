<html>
<body>
<div id="app">
<div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('us')
                                English
                                @break
                                @case('ru')
                                Russian
                                @break
                                @default
                                English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color:  #6a3332;">
                            <a class="dropdown-item" href="lang/en" style="color:white">English</a>
                            <a class="dropdown-item" href="lang/ru" style="color:white">Russian</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <style>
    .dropdown-item {
    background-color:  #6a3332;
    }
    a.dropdown-item:hover, a.dropdown-item:active {color: white; background-color:#542929;}
    </style>
    <main class="py-4">
        @yield('content')
    </main>
</div>  
</body>
</html>