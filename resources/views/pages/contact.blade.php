@extends('main')

@section('title', 'Kontaktní formulář')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Kontakt</h1>
            <hr>
            <form method="get">
                <div class="form-group">
                    <label name="email">Email:</label>
                    <input class="form-control" name="email" id="email" type="text">
                </div>
                <div class="form-group">
                    <label name="email">Předmět:</label>
                    <input class="form-control" name="subject" id="subject" type="text">
                </div>
                <div class="form-group">
                    <label name="email">Zpráva:</label>
                    <textarea class="form-control" name="message" id="message" type="text"></textarea>
                </div>
                <input class="btn btn-success" type="submit" value="Poslat email">
            </form>
        </div>
    </div>
@stop