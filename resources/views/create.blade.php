@extends('layouts.app')

@section('content')
    <h2>Stwórz nową pastę</h2>
    <div class="input-group">
        <h5>Nazwa pasty</h5>
        <input type="text">
    </div>
    <div class="input-group">
        <h5>Treść</h5>
        <textarea type="text"></textarea>
    </div>
    <div class="input-group">
        <h5>Tagi (oddzielone przecinkiem, max. 3)</h5>
        <input type="text">
    </div>
    <button>Utwórz</button>
@endsection