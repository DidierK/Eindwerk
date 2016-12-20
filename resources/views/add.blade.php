@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Voeg materiaal toe</h3>
        <div class="row">
            {{ Form::open(array('method'=>'POST', 'files'=>true)) }}
            <div class="col-md-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Naam</label>
                        <input type="text" class="form-control" name="InputNaam" id="InputNaam" placeholder="Tent, strandstoel, skibotten, ...">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Voor welke reizen is dit materiaal geschikt ?</label>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="checkbox1" value="Zon">
                                Zon
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="checkbox2" value="Sneeuw">
                                Sneeuw
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="checkbox3" value="Avontuur">
                                Avontuur
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="checkbox4" value="">
                                Citytrip
                            </label>
                        </div>


                    </div>

                    <br>
                    <label for="">Wanneer mag dit materiaal worden uitgeleend ?</label>

                    <div class="form-group">
                        <label for="example-date-input">Van</label>
                        <input class="form-control" type="date" name="date-input-1" value="2016-10-19" id="date-input-1">
                    </div>

                    <div class="form-group">
                        <label for="example-date-input">Tot</label>
                        <input class="form-control" type="date" name="date-input-2" value="2016-10-25" id="date-input-2">
                    </div>



            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputAmount">Waarborg</label>
                    <div class="input-group">
                        <div class="input-group-addon">€</div>
                        <input type="text" class="form-control" name="InputAmount1" id="InputAmount1" placeholder="30">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputAmount">Prijs per dag</label>
                    <div class="input-group">
                        <div class="input-group-addon">€</div>
                        <input type="text" class="form-control" name="InputAmount2" id="InputAmount2" placeholder="5">
                    </div>

                </div>

                <br>

                Voeg 3 foto's toe waarbij de staat van het materiaal goed zichtbaar is.

                <div class="form-group">
                    <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                    {!!Form::label('image', 'Afbeelding 1 (400x400)')!!}
                    <div class="control-group">
                        <div class="controls">
                            {!! Form::file('image1') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                    {!!Form::label('image', 'Afbeelding 2 (400x400)')!!}
                    <div class="control-group">
                        <div class="controls">
                            {!! Form::file('image2') !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                    {!!Form::label('image', 'Afbeelding 3 (400x400)')!!}
                    <div class="control-group">
                        <div class="controls">
                            {!! Form::file('image3') !!}
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-default">Materiaal toevoegen</button>
            </div>
            {!! Form::close() !!}
        </div>


    </div>

@endsection