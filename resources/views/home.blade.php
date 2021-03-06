@extends('layouts.app')

@section('content')

    <div class="main-content">
        <div class="left-section">
            <div class="left-nav-menu">
                {{--<span class="left-menu-item">Top Stories</span>--}}
                {{--<span class="left-menu-item">Saved Questions</span>--}}
                <a class="left-menu-item" href="{{url('new-question')}}">New Question</a>
                {{--<span class="left-menu-item">Bodybuilding</span>--}}
                {{--<span class="left-menu-item">Fitness</span>--}}
                {{--<span class="left-menu-item">Nutrition</span>--}}
                {{--<span class="left-menu-item">Recuperation</span>--}}
                {{--<span class="left-menu-item">Sport performance</span>--}}
                @if ( $isTrainer && $isTrainerAccepted )
                    <a href="{{url('/all-clubs')}}" class="left-menu-item">View all clubs</a>
                    <a href="{{url('/add-class')}}" class="left-menu-item">Add class</a>
                @endif

                @if ( $isAdmin )
                    <a href="{{url('/add-trainer')}}" class="left-menu-item">Add trainer</a>
                    <a href="{{url('/add-club')}}" class="left-menu-item">Add club</a>
                    <a href="{{url('/trainers-list')}}" class="left-menu-item">View trainers List</a>
                    <a href="{{url('/subscribers-list')}}" class="left-menu-item">View subscribers List</a>
                    {{--<a href="{{url('/dummy-data')}}" class="left-menu-item">Add Dummy data</a>--}}
                @endif

            </div>
        </div>
        <div class="right-section main-section">
            <div class="story-section">
                @if ( $isTrainer && ! $isTrainerAccepted )
                    <h1>Upload here the documents which can provide that you're an eligible trainer</h1>
                    <h3>The administrators will review them shortly and you will be informed if your request has been approved</h3>

                    <form action="{{ route('trainer.upload.docs') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{--Document title:--}}
                        {{--<br/>--}}
                        {{--<input type="text" name="title"/>--}}
                        {{--<br/><br/>--}}
                        Document:
                        <br/>
                        <input type="file" name="asset"/>
                        <br/><br/>
                        <input type="submit" value=" Save "/>
                    </form>

                    <h1>Uploaded files</h1>

                    @foreach($trainerFiles as $key => $file)
                        <div class="row">
                            <a class="document-name" href="{{$file}}">File {{$key + 1}} </a>
                        </div>

                    @endforeach

                @endif
            </div>
        </div>

    </div>
@endsection

<style>

    .document-name {
        color: white;
        font-size: 25px;
    }

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
</style>