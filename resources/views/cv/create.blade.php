@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cvs" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Create a New CV</h1

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="johndoe@email.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="keyprogramming" class="form-label">Primary Programming Language</label>
                            <input type="text" class="form-control" id="keyprogramming" placeholder="HTML5/CSS/Python/Java etc." required>
                        </div>

                        <div class="mb-3">
                            <label for="education" class="form-label">Education</label>
                            <input type="text" class="form-control" id="education" placeholder="BSc Computer Science" required>
                        </div>

                        <div class="mb-3">
                            <label for="urllinks" class="form-label">Primary Digital Profile URL</label>
                            <input type="url" class="form-control" id="urllinks" placeholder="https://www.github.com/testdev" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

            </div>
        </div>
    </div>

@endsection