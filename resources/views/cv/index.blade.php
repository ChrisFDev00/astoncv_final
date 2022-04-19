@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">AstonCV Database</h1>
                        <p>Here is a comprehensive list of every CV in the database, press on a CV to see more information!</p>
                    </div>
                    <div class="col-4">
                        <p>Create CV</p>
                        <a href="/cv/create/CV" class="btn btn-primary btn-sm">Add CV</a>
                    </div>
                </div>              
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Education</th>
                                <th scope="col">Primary Programming Language</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cvs as $cv)  
                            <tr>
                                <th scope="row">{{ ucfirst($cv->id) }}</th>
                                    <td><a href="./cvs/{{ $cv->id }}">{{ ucfirst($cv->name) }}</a></td>
                                    <td>{{ ucfirst($cv->education) }}</td>
                                    <td>{{ ucfirst($cv->keyprogramming) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection