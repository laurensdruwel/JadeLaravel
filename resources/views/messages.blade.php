@extends('layouts.home')

@section('containerTitle')Messages
@endsection


@section('contentContainer')
    <div class="ui list">
        <div class="item">
            <img class="ui avatar image" src="/images/avatar2/small/rachel.png">
            <div class="content">
                <a class="header">Rachel</a>
                <div class="description">Last seen watching <a><b>Arrested Development</b></a> just now.</div>
            </div>
        </div>
        <div class="item">
            <img class="ui avatar image" src="/images/avatar2/small/lindsay.png">
            <div class="content">
                <a class="header">Lindsay</a>
                <div class="description">Last seen watching <a><b>Bob's Burgers</b></a> 10 hours ago.</div>
            </div>
        </div>
        <div class="item">
            <img class="ui avatar image" src="/images/avatar2/small/matthew.png">
            <div class="content">
                <a class="header">Matthew</a>
                <div class="description">Last seen watching <a><b>The Godfather Part 2</b></a> yesterday.</div>
            </div>
        </div>
        <div class="item">
            <img class="ui avatar image" src="/images/avatar/small/jenny.jpg">
            <div class="content">
                <a class="header">Jenny Hess</a>
                <div class="description">Last seen watching <a><b>Twin Peaks</b></a> 3 days ago.</div>
            </div>
        </div>
        <div class="item">
            <img class="ui avatar image" src="/images/avatar/small/veronika.jpg">
            <div class="content">
                <a class="header">Veronika Ossi</a>
                <div class="description">Has not watched anything recently</div>
            </div>
        </div>
    </div>


@endsection