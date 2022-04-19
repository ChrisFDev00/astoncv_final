@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cvs" class="btn btn-outline-primary btn-sm">Return to database</a>
                <h1 class="display-one">{{ ucfirst($cv->name) }} <br> <em id="email">{{ ucfirst($cv->email) }}</em></h1>
                <h3> Education </h3>
                    <li>{{ ucfirst($cv->education) }} </li>
                <hr>
                <h3> Primary Programming Language </h3>
                    <li>{{ ucfirst($cv->keyprogramming) }} </li>
                <hr>
                <h3>Online Presence</h3>
                    <a href="{{ ucfirst($cv->urllinks) }}">Click here to visit this individuals most used digital profile.</a> </li>
                <hr>
                <a href="/cvs/{{ $cv->id }}/edit" class="btn btn-outline-primary">Edit CV</a>
                <br><br>
                <form id="delete" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection