@extends ('layouts.app')

@section('content')

    <form method = "POST"  action = "/vacancies">
    @csrf
        <h1 class = "heading is-1">Create a vacancy</h1>
        <div class = "field">
            <label class = "control" for = "title">Title</label>
            <div class = "control">
                <input type= "text" class= "input" placeholder= "Title">
            </div>
        </div>

        <div class = "field">
            <label class = "control" for = "description">Description</label>
            <div class = "control">
                <textarea name= "description" class= "textarea"></textarea>
            </div>
        </div>

        <div class = "field">
            <label class = "control" for = "responsibilities">Responsibilities</label>
            <div class = "control">
                <textarea name= "responsibilities" class= "textarea"></textarea>
            </div>
        </div>

        <div class = "field">
            <label class = "control" for = "requirements">Requirements</label>
            <div class = "control">
                <textarea name= "requirements" class= "textarea"></textarea>
            </div>
        </div>

        <div class = "field">
            <label class = "control" for = "address">Address</label>
            <div class = "control">
                <textarea name= "address" class= "textarea"></textarea>
            </div>
        </div>

        <div class = "field">
            <div class = "control">
                <button type= "sumit" class= "button is-link">Create a vacancy</button>
                <a href="/vacancies">Cancel</a>
            </div>
        </div>
    </form>

@endsection
