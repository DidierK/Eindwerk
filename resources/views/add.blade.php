@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Voeg materiaal toe</h3>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Naam</label>
                        <input type="email" class="form-control" id="InputNaam" placeholder="Tent, strandstoel, skibotten, ...">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Voor welke reizen is dit materiaal geschikt ?</label>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Zon
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Sneeuw
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Avontuur
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Citytrip
                            </label>
                        </div>


                    </div>

                    <br>
                    <label for="">Wanneer mag dit materiaal worden uitgeleend ?</label>

                    <div class="form-group">
                        <label for="example-date-input">Van</label>
                        <input class="form-control" type="date" value="2016-10-19" id="date-input-1">
                    </div>

                    <div class="form-group">
                        <label for="example-date-input">Tot</label>
                        <input class="form-control" type="date" value="2016-10-25" id="date-input-2">
                    </div>


                </form>
            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="exampleInputAmount">Waarborg</label>
                    <div class="input-group">
                        <div class="input-group-addon">€</div>
                        <input type="text" class="form-control" id="InputAmount1" placeholder="30">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleInputAmount">Prijs per dag</label>
                    <div class="input-group">
                        <div class="input-group-addon">€</div>
                        <input type="text" class="form-control" id="InputAmount2" placeholder="5">
                    </div>

                </div>

                <br>
                <div class="form-group">
                    <label for="exampleInputFile">Voeg 3 foto's toe waarbij de staat van het materiaal goed zichtbaar is.</label>
                    <input type="file" id="InputFile1">
                    <p class="help-block"></p>

                    <input type="file" id="InputFile2">
                    <p class="help-block"></p>

                    <input type="file" id="InputFile3">
                    <p class="help-block"></p>
                </div>
                <br>
                <button type="submit" class="btn btn-default">Materiaal toevoegen</button>
            </div>
        </div>


    </div>

@endsection