@extends ("layouts.app")

@section("content")

<h1>Create A Project</h1>

<form method="POST" action="/projects">
    @csrf 

    <div class="field">
        <label for="title">Title</label>

        <div class="control">
            <input type="text" name="title" placeholder="Title">
        </div>
    </div>

    <div class="field">
        <label for="description">Description</label>
        <div class="control">
            <textarea name="description" cols="30" rows="10" placeholder="Description"></textarea> 
        </div>
    </div>

    <button type="submit">Create Project</button>
    <a href="/projects">Cancel</a>
</form>

@endsection