@extends('layouts.app')

@section('content')
    <div class="main-content">

        <div class="center-content">
            <h1 class="class-headline">Available trainers</h1>

            @foreach($trainers as $trainer)
                <div class="club-row">
                    <div class="single-row">
                        <p>Trainer name</p>
                        <p class="club-name">{{$trainer->name}}</p>
                        @if (isset($trainer->club))
                            <p>Trainer club</p>
                            <p class="club-name">{{$trainer->club->name}}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

<style>

    .main-content {
        margin: 0 !important;
        margin-top: -1.5rem !important;
        background-color: rgba(17, 16, 8, 0.52);
        min-height: 720px;
        position: absolute;
        width: 100%;
    }

    .left-section {
        max-width: 20%;
        margin: 0;
        padding: 15px;
        float: left;
    }

    .left-nav-menu {
        margin-top: 50px;
        margin-left: 50px;
    }

    .left-menu-item {
        text-transform: capitalize;
        color: white;
        font-size: 20px;
        display: block;

    }

    .right-section {
        margin-left: 20%;
        position: relative;
    }

    .single-story {
        margin: 50px;
        color: white;
    }

    .story-category {
        margin-bottom: 30px;
        font-size: 20px;
    }

    .center-content {
        margin-left: auto !important;
        margin-right: auto !important;
        max-width: 1120px;
        display: block;
        padding: 15px;
    }

    .custom-label {
        display: block;
        position: static;
        margin: 0;
        padding: 0;
        color: #fff;
        font-family: 'Arvo';
        font-size: 16px;
    }

    .input-title {
        display: block;
        width: 300px;
        padding: 15px 0 15px 12px;
        font-family: "Arvo";
        font-weight: 400;
        color: #377D6A;
        background: rgba(0, 0, 0, 0.3);
        border: none;
        outline: none;
        color: #fff;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(0, 0, 0, 0.3);
        border-radius: 4px;
        box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.2), 0 1px 1px rgba(255, 255, 255, 0.2);
        text-indent: 60px;
        transition: all .3s ease-in-out;
        position: relative;
        font-size: 13px;
    }

    .club-row {
        padding: 20px;
        padding-left: 0;
    }


</style>