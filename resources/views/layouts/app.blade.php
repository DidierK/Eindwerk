<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <script type="text/javascript">
            if (window.location.hash && window.location.hash == '#_=_') {
                if (window.history && history.pushState) {
                    window.history.pushState("", document.title, window.location.pathname);
                } else {
                    var scroll = {
                        top: document.body.scrollTop,
                        left: document.body.scrollLeft
                    };
                    window.location.hash = '';
                    document.body.scrollTop = scroll.top;
                    document.body.scrollLeft = scroll.left;
                }
            }
        </script>
    </head>
    <body>
        <div id="app" v-cloak>
            <!-- Ook nog 1 voor login scherm maken -->
            @if (Route::getCurrentRoute()->uri() == '/')
            @include('layouts.page--front')
            @else
            @include('layouts.page')
            @endif

            <!-- Modals-->
            <v-add-item-modal ref="add-item-modal">
                <!-- Position the spinner with a v-spinner-modal or just with the parent modal? -->
                <v-spinner class="Spinner--add-item-modal" v-if="showLoading"></v-spinner>
                <v-add-item-form action="{{ url('user-item') }}" method="post" :data="items" v-else>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" slot="csrf">
                </v-add-item-form>
            </v-add-item-modal>
            
        </div>
        <!-- Scripts -->
        <script src="/js/app.js"></script>
    </body>
    </html>
