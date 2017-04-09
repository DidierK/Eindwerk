            <header class="main-header">
                <div class="container">     
                    <a class="branding" href="{{ url('/') }}">
                        TravelShare
                    </a>   
                    <div class="search-container">
                      <div class="inner-search-container">
                        {!! Form::open(['url' => 'foo/bar']) !!}
                        {!! Form::text('search-box', null, array('placeholder'=>'Zoeken op TravelShare')) !!}
                        {{Form::button('Q', array('type' => 'submit', 'class' => ''))}}
                        {!! Form::close() !!} 
                    </div>
                </div>
                <div class="primary-nav">
                    <ul class="list-inline">
                        <li><a href="{{ url('/register') }}">Categorie</a></li>
                        @if (Auth::check())
                        <li v-on:click.prevent="openPopoverUserActions" class="avatar"><a href="#"><img class="pp" src="{{ Auth::user()->avatar }}" /></a></li>
                        @else
                        <li><a href="{{ url('/login') }}">Aanmelden</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            @if (Auth::check())
            <div v-show="showUserActionPopover" class="po popover--userActions">
                <div class="popover-inner">
                    <ul>
                        <li><a href="{{ url('/user/' . Auth::id() . '/items') }}">Profiel</a></li>
                        <li><a href="{{ url('/user/' . Auth::id() . '/requests') }}">Verzoeken</a></li>
                        <li><a href="{{ url('/user/' . Auth::id() . '/transactions') }}">Transacties</a></li>
                        <li><a href="{{ url('/user/' . Auth::id() . '/settings') }}">Instellingen</a></li>
                        <li><a href="{{ url('/logout') }}">Afmelden</a></li>
                    </ul>       
                </div>
            </div>
            @endif
        </header>