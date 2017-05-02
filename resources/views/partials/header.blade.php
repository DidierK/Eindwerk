<!-- Main header -->
<v-header class="Header Header--main u--flex u--flexAlignItemsCenter u--flexJustifyContentSpaceBetween" v-cloak>

    <!-- Logo -->
    <v-logo class="Logo Logo--header-main u--block"></v-logo>
    
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
        <v-nav class="Nav">
            <v-ul class="List u--flex">
                <v-li class="List__item u--flex u--flexAlignItemsCenter u--paddingRight16px u--paddingLeft16px">
                    <v-link link="{{ url('categories')}}" class="Link Link--white u--textSmall">Categorieën</v-link>
                </v-li>
                @if (Auth::check())
                <v-li class="List__item u--flex u--flexAlignItemsCenter u--paddingRight16px u--paddingLeft16px">
                    <v-button class="Button Button--borderless Button--no-padding Button--transparent" v-on:click="toggleUserActions">
                        <v-avatar class="Avatar Avatar--default" src="{{ Auth::user()->avatar }}"></v-avatar>
                    </v-button>
                </v-li>
                @else
                <v-li class="List__item u--flex u--flexAlignItemsCenter u--paddingRight16px u--paddingLeft16px"><v-link class="Link Link--white u--textSmall" link="{{ url('/login') }}">Aanmelden</v-link></v-li>
                @endif
            </v-ul>
        </div>
    </v-nav>

    <!-- Popover user-actions -->
    @if (Auth::check())
    <v-popover class="Popover" :show="showUserActions">
        <v-ul class="List">
            <v-li class="List__item">
                <v-link class="Link Link--UserActions" link="{{ url('me/profile') }}">Profiel</v-link>
            </v-li>
            <v-li class="List__item">
                <v-link class="Link Link--UserActions" link="{{ url('me/requests') }}">Verzoeken</v-link>
            </v-li>
            <v-li class="List__item">
                <v-link class="Link Link--UserActions" link="{{ url('me/transactions') }}">Transacties</v-link>
            </v-li>
            <v-li class="List__item">
                <v-link class="Link Link--UserActions" link="{{ url('/logout') }}">Afmelden</v-link>
            </v-li>
        </v-ul>
    </v-popover>
    @endif

</v-header>
