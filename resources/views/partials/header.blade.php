<!-- Main header -->
<v-header class="Header Header--main @if(Route::getCurrentRoute()->uri() == '/'){{'Header--bg-transparent'}}@endif u--flex u--flexAlignItemsCenter u--flexJustifyContentSpaceBetween" v-cloak>

    <!-- Logo -->
    <v-logo class="Logo Logo--header-main u--block"></v-logo>

    <!-- Header search -->
    @if (Route::getCurrentRoute()->uri() != '/')
    <v-search class="Search Search--header u--notMobile u--marginRightAuto u--posRelative">
        <v-form v-cloak>
            <v-input class="Search__field Search__field--header u--sizeFull" type="text" placeholder="Zoeken op Travelshare"></v-input>
            <v-button class="Search__button Search__button--header">
                <svg height="18px" version="1.1" viewBox="0 0 18 18" width="18px" x="0px" y="0px" class="Icon Icon--search">
                    <path clip-rule="evenodd" d="M16.707,15.293l-1.414,1.414l-4.825-4.825C9.487,12.58,8.295,13,7,13c-3.313,0-6-2.687-6-6s2.687-6,6-6s6,2.687,6,6c0,1.295-0.42,2.487-1.118,3.468L16.707,15.293z M7,3C4.791,3,3,4.791,3,7s1.791,4,4,4s4-1.791,4-4S9.209,3,7,3z" fill-rule="evenodd">        
                    </path>
                </svg>
            </v-button>
        </v-form>
    </v-search>
    @endif

    <!-- Mobile nav --> 
    <div class="u--mobileOnly">
        <v-button class="Button Button--icon-small u--borderless u--bgTransparent">
            <svg height="18px" version="1.1" viewBox="0 0 18 18" width="18px" x="0px" y="0px" class="Icon Icon--white">
                <path clip-rule="evenodd" d="M16.707,15.293l-1.414,1.414l-4.825-4.825C9.487,12.58,8.295,13,7,13c-3.313,0-6-2.687-6-6s2.687-6,6-6s6,2.687,6,6c0,1.295-0.42,2.487-1.118,3.468L16.707,15.293z M7,3C4.791,3,3,4.791,3,7s1.791,4,4,4s4-1.791,4-4S9.209,3,7,3z" fill-rule="evenodd">        
                </path>
            </svg>
        </v-button>
        <v-button class="Button Button--icon-small u--borderless u--bgTransparent">
            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 459 459">
                <path d="M0,382.5h459v-51H0V382.5z M0,255h459v-51H0V255z M0,76.5v51h459v-51H0z" fill="#FFFFFF">
                </path>
            </svg>
        </v-button>
    </div>

    <!-- Desktop nav --> 
    <div class="u--notMobile">
        <v-nav class="Nav Nav--main">
            <v-ul class="List u--flex">
                <v-li class="List__item u--flex u--flexAlignItemsCenter u--paddingRight16px u--paddingLeft16px">
                    <v-link link="{{ url('categories')}}" class="Link u--linkClean">Categorieën</v-link>
                </v-li>
                @if (Auth::check())
                <v-li class="List__item u--flex u--flexAlignItemsCenter u--paddingLeft16px">
                    <v-button class="Button Button--borderless Button--transparent Button--notification">
                        <svg x="0px" y="0px" viewBox="0 0 229.238 229.238" width="21px" height="21px">
                            <path d="M220.228,172.242c-20.606-17.82-39.675-42.962-39.675-105.734c0-36.353-29.576-65.928-65.93-65.928  c-36.359,0-65.939,29.575-65.939,65.928c0,62.829-19.062,87.946-39.686,105.751C3.28,177.239,0,184.411,0,191.937  c0,4.142,3.358,7.5,7.5,7.5h71.175c3.472,16.663,18.268,29.222,35.944,29.222s32.473-12.558,35.944-29.222h71.175  c4.142,0,7.5-3.358,7.5-7.5C229.238,184.35,225.95,177.167,220.228,172.242z M114.619,213.659c-9.34,0-17.321-5.929-20.381-14.222  H135C131.94,207.73,123.959,213.659,114.619,213.659z M17.954,184.437c0.273-0.296,0.564-0.578,0.871-0.845  c31.443-27.146,44.858-62.162,44.858-117.084c0-28.082,22.852-50.928,50.939-50.928c28.083,0,50.93,22.846,50.93,50.928  c0,54.872,13.417,89.887,44.876,117.091c0.307,0.265,0.598,0.544,0.872,0.838H17.954z" fill="#FFFFFF"></path>
                        </svg>
                    </v-button>
                </v-li>
                <v-li class="List__item List__item--user u--flex u--flexAlignItemsCenter u--paddingRight16px u--paddingLeft16px u--posRelative">
                    <v-button class="Button Button--borderless Button--no-padding Button--transparent" v-popover:popover>
                        <v-avatar class="Avatar Avatar--default" src="{{ Auth::user()->avatar }}"></v-avatar>
                    </v-button>
                </v-li>
                @else
                <v-li class="List__item u--flex u--flexAlignItemsCenter u--paddingRight16px u--paddingLeft16px"><v-link class="Link u--linkClean" link="{{ url('/login') }}">Aanmelden</v-link></v-li>
                @endif
            </v-ul>
        </div>
    </v-nav>
</v-header>
