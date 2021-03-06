@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">AstonCV Database</h1>
                        <p id="test" >Here is a comprehensive list of every CV in the database, press on a CV to see more information!</p>
                    </div>
                </div>              
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Contact Email</th>
                                <th scope="col">Primary Programming Language</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cvs as $cv)  
                            <tr>
                                <th scope="row">{{ ucfirst($cv->id) }}</th>
                                    <td><a href="./cvs/{{ $cv->id }}">{{ ucfirst($cv->name) }}</a></td>
                                    <td>{{ ucfirst($cv->email) }}</td>
                                    <td>{{ ucfirst($cv->keyprogramming) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        @if(\Illuminate\Support\Facades\Auth::user())
        <div class="col-4">
            <a href="/cvs/create/cv" class="btn btn-primary btn-sm">Add CV</a>
        </div>
        @else
        <p>Please login to add a CV</p>
        @endif
    </div>
@endsection