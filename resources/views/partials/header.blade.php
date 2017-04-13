<v-header>
    <v-logo>   
    </v-logo>
    <v-nav class="nav--header">
        <v-ul>
        <v-li class="list__item--nav">
                <v-link class="link--white">Categorie</v-link>
            </v-li>
            @if (Auth::check())
            <v-li class="list__item--nav">
                <v-button class="button--borderless button--no-padding button--transparent" :action="toggleUserActions">
                <v-avatar src="{{ Auth::user()->avatar }}">           
                </v-avatar>
                </v-button>
            </v-li>
            @else
            <v-li class="list__item--nav">
                <v-link>Aanmelden</v-link>
            </v-li>
            @endif
        </v-ul>
    </v-nav>
    @if (Auth::check())
    <v-popover v-show="showUserActions">
        <v-ul>
            <v-li>
                <v-link>Profiel</v-link>
            </v-li>
            <v-li>
                <v-link>Verzoeken</v-link>
            </v-li>
            <v-li>
                <v-link>Afmelden</v-link>
            </v-li>
        </v-ul>
    </v-popover>
    @endif
</v-header>
