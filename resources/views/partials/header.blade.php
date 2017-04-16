<v-header class="header--main" v-cloak>
    <v-nav class="nav--header-left nav--float-left">
        <v-logo class="nav__item--header logo--header">   
        </v-logo>
    </v-nav>
    <v-nav class="nav--header-right nav--float-right">
        <v-ul class="list--flex">
            <v-li><v-link link="#" class="nav__item--header link--white text--small">Categorie</v-link></v-li>
            @if (Auth::check())
            <v-li>
                <v-button class="nav__item--header button--borderless button--no-padding button--transparent" v-on:click="toggleUserActions">
                    <v-avatar class="avatar--header" src="{{ Auth::user()->avatar }}">           
                    </v-avatar>
                </v-button>
            </v-li>
            @else
            <v-li class="nav__item--header"><v-link class="link--white text--small" link="{{ url('/login') }}">Aanmelden</v-link></v-li>
            @endif
        </v-ul>
    </v-nav>
    <v-search-box class="search-box search-box--white search-box--float-left search-box--full-width search-box--header search-box--rounded">

    </v-search-box>
    @if (Auth::check())
    <v-popover :show="showUserActions">
        <v-ul>
            <v-li>
                <v-link class="link--UserActions" link="{{ url('me/profile') }}">Profiel</v-link>
            </v-li>
            <v-li>
                <v-link class="link--UserActions" link="{{ url('me/requests') }}">Verzoeken</v-link>
            </v-li>
            <v-li>
                <v-link class="link--UserActions" link="{{ url('me/transactions') }}">Transacties</v-link>
            </v-li>
            <v-li>
                <v-link class="link--UserActions" link="{{ url('/logout') }}">Afmelden</v-link>
            </v-li>
        </v-ul>
    </v-popover>
    @endif
</v-header>
