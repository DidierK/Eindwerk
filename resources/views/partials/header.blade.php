<!-- Main header -->
<v-header class="MainHeader @if(Route::getCurrentRoute()->uri() == '/'){{'Header--bg-transparent'}}@else {{ 'u--posFixed' }} @endif u--flex u--flexAlignItemsCenter u--flexJustifyContentSpaceBetween u--sizeFull" v-cloak>

    <!-- Logo -->
    @if(Route::getCurrentRoute()->uri() == '/')
    <a href="/">
        <img src="/images/logo-white.png" />
    </a>
    @else
    <a href="/" class="u--mr-8">
        <img src="/images/logo-default.png" />
    </a>
    @endif

    <!-- Header search -->
    @if (Route::getCurrentRoute()->uri() != '/')
    <v-search class="MainHeaderSearch Search--header u--notMobile u--marginRightAuto u--posRelative">
        <v-form action="{{ url('items/search') }}" autocomplete="off">
            <v-autocomplete-header></v-autocomplete-header>
            <v-button class="MainHeaderSearch__button">
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
        @if(Route::getCurrentRoute()->uri() == '/')
        <v-button class="HamburgerIcon u--bgTransparent u--borderless u--bgTransparent" v-on:click="toggleMobileNav">
            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 459 459">
                <path d="M0,382.5h459v-51H0V382.5z M0,255h459v-51H0V255z M0,76.5v51h459v-51H0z" fill="#FFF">
                </path>
            </svg>
        </v-button>
        @else
        <v-button class="HamburgerIcon u--bgTransparent u--borderless u--bgTransparent" v-on:click="toggleMobileNav">
            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 459 459">
                <path d="M0,382.5h459v-51H0V382.5z M0,255h459v-51H0V255z M0,76.5v51h459v-51H0z" fill="#404849">
                </path>
            </svg>
        </v-button>
        @endif
    </div>

    <!-- Desktop nav --> 
    <div class="u--notMobile">
        <v-nav class="GlobalNav" v-cloak>
            <v-ul class="u--flex u--pn">
                <v-li class="GlobalNav__item u--flex u--flexAlignItemsCenter">
                    <v-button class="Button Button--borderless Button--transparent" link="{{ url('categories')}}" v-popover:popover--categories v-on:click="getCategories">Categorieën</v-button>
                </v-li>
                @if (Auth::check())
                <v-li class="GlobalNav__item u--flex u--flexAlignItemsCenter u--posRelative">
                    <v-button class="Button Button--borderless Button--no-padding Button--transparent" v-popover:popover--user-actions>
                        <v-avatar class="Avatar Avatar--default" src="{{ Auth::user()->avatar }}&width=32&height=32"></v-avatar>
                    </v-button>
                </v-li>
                @else
                <v-li class="GlobalNav__item u--flex u--flexAlignItemsCenter"><v-link class="Link u--linkClean" link="{{ url('/login') }}">Aanmelden</v-link></v-li>
                @endif
            </v-ul>

            @if (Auth::check())
            <v-popover class="UserActionsPopover" ref="popover--user-actions" v-cloak>
                <v-ul class="UserActionsList">
                    <v-li class="UserActionsList__item">
                        <v-link class="UserActionsPopover__action u--linkClean u--block" link="{{ url('profile/my-items') }}">Dashboard</v-link>
                    </v-li>
                    <v-li class="UserActionsList__item">
                        <v-link class="UserActionsPopover__action u--linkClean u--block" link="{{ url('user/' . Auth::id()) }}">Profiel</v-link>
                    </v-li>
                    <v-li class="UserActionsList__item">
                        <v-link class="UserActionsPopover__action u--linkClean u--block" link="{{ url('/logout') }}">Afmelden</v-link>
                    </v-li>
                </v-ul>
            </v-popover>
            @endif
            <!-- Either in Vue instance or in own component we should load in the mounted method all categories and populate this dropdown -->
            <v-popover class="Popover Popover--categories" placement="bottom" ref="popover--categories" v-cloak>
                <v-ul class="List List--user-actions">
                    <v-li v-if="showLoading">Loading...</v-li>
                    <v-li v-for="category in categories">
                        <a class="u--linkClean u--block" :href="'/category/' + category.url + ''" >@{{ category.name }}</a>
                    </v-li>
                </v-ul>
            </v-popover>
        </v-nav>
    </div>
</v-header>
<div class="MobileNavMenu u--mobileOnly" v-if="showMobileNav">
    <div class="MobileNavMenu__header u--flex u--flexJustifyContentSpaceBetween u--flexAlignItemsCenter">
        <a href="/">
            <img src="/images/logo-white.png" />
        </a>
        <v-button class="HamburgerIcon u--borderless u--bgTransparent" v-on:click="toggleMobileNav">
            <svg version="1.1" x="0px" y="0px" width="18px" height="18px" viewBox="0 0 459 459">
                <path d="M0,382.5h459v-51H0V382.5z M0,255h459v-51H0V255z M0,76.5v51h459v-51H0z" fill="#FFFFFF">
                </path>
            </svg>
        </v-button>
    </div>
    <v-container class="Container">
        <v-search class="Search MobileNavMenu__search u--sizeFull">
            <v-form action="{{ url('items/search') }}" autocomplete="off">
                <v-autocomplete-header></v-autocomplete-header>
                <v-button class="Search__button Search__button--header">
                    <svg height="18px" version="1.1" viewBox="0 0 18 18" width="18px" x="0px" y="0px" class="Icon Icon--search">
                        <path clip-rule="evenodd" d="M16.707,15.293l-1.414,1.414l-4.825-4.825C9.487,12.58,8.295,13,7,13c-3.313,0-6-2.687-6-6s2.687-6,6-6s6,2.687,6,6c0,1.295-0.42,2.487-1.118,3.468L16.707,15.293z M7,3C4.791,3,3,4.791,3,7s1.791,4,4,4s4-1.791,4-4S9.209,3,7,3z" fill-rule="evenodd">        
                        </path>
                    </svg>
                </v-button>
            </v-form>
        </v-search>
    </v-container>
    @if (Auth::check())
    <ul class="u--pn">
        <li>
         <a href="{{ url('/profile/my-items') }}">Dashboard</a> 
     </li>
     <li>
         <a href="{{ url('/user/' . Auth::id()) }}">Profiel</a> 
     </li>
     <li>
         <a href="{{ url('/logout') }}">Afmelden</a> 
     </li>
 </ul>
 @else
 <ul class="u--pn">
    <li>
        <a href="{{ url('/login') }}">Aanmelden</a> 
    </li>
</ul>
@endif
</div>