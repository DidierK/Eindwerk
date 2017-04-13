<app-header>
    <app-logo>   
    </app-logo>
    <app-nav class="nav--header">
        <nav-item>
            Categorie
        </nav-item>
        @if (Auth::check())
        <nav-item>
            <avatar src="{{ Auth::user()->avatar }}"></avatar>
        </nav-item>
        @else
        <nav-item>
            Aanmelden
        </nav-item>
        @endif
    </app-nav>
    @if (Auth::check())
    <popover>
        <app-ul>
            <app-li>
                <link>Profiel</link>
            </app-li>
            <app-li>
                <link>Verzoeken</link>
            </app-li>
            <app-li>
                <link>Afmelden</link>
            </app-li>
        </app-ul>
    </popover>
    @endif
</app-header>
