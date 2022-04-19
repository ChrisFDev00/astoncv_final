@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/cvs" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit CV</h1>
                    <p>Submit this form to update the CV we already have on file for your account.</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="{{ ucfirst($cv->name) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="{{ ucfirst($cv->email) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="keyprogramming" class="form-label">Primary Programming Language</label>
                            <input name="keyprogramming" type="text" class="form-control" id="keyprogramming" placeholder="{{ ucfirst($cv->keyprogramming) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="education" class="form-label">Education</label>
                            <input name="education"type="text" class="form-control" id="education" placeholder="{{ ucfirst($cv->education) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="urllinks" class="form-label">Primary Digital Profile URL</label>
                            <input name="urllinks" type="url" class="form-control" id="urllinks" placeholder="{{ ucfirst($cv->urllinks) }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection