@extends('layouts.app')

@section('content')
    <h2>Najpopularniejsze pasty</h2>
    <div class="item-container">
        <div class="header">
            <div class="user">
                <img src="https://ui-avatars.com/api/?name=First+Kowalski&amp;color=7F9CF5&amp;background=EBF4FF">
                <h5>Frank Kown</h5>
            </div>
            <span>13.05.2019</span>
        </div>
        <h5>Tytuł pasty</h5>
        <div class="text">
            Dłuższy opis lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor...
        </div>
        <div class="tags">
            <div>#pasta</div>
            <div>#example</div>
            <div>#frank_kown_posting</div>
            <div>#some_tag</div>
            <div>#another_one</div>
        </div>
    </div>
@endsection