<!-- Main header -->
<v-header class="Header Header--main" v-cloak>

    <!-- Nav left -->
    <v-nav class="Nav Nav--header-main u--floatLeft">
        <v-logo class="Logo"></v-logo>
    </v-nav>

    <!-- Nav right -->
    <v-nav class="Nav Nav--header-main u--floatRight">
        <v-ul class="List u--flex">
            <v-li class="List__item">
                <v-link link="{{ url('categories')}}" class="Link Link--white u--textSmall">Categorieën</v-link>
            </v-li>
            @if (Auth::check())
            <v-li>
                <v-button class="Button Button--borderless Button--no-padding Button--transparent" v-on:click="toggleUserActions">
                    <v-avatar class="Avatar Avatar--default" src="{{ Auth::user()->avatar }}"></v-avatar>
                </v-button>
            </v-li>
            @else
            <v-li class="List__item"><v-link class="Link Link--white u--textSmall" link="{{ url('/login') }}">Aanmelden</v-link></v-li>
            @endif
        </v-ul>
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
