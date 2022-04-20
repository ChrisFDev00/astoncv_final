@extends('layouts.app')

@section('content')
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
                        @foreach($cvs  as $cv)  
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
@endsection