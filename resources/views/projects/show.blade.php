@extends ("layouts.app")

@section("content")

    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-grey no-underline text-sm font-normal">
                <a href="/projects" class="text-grey no-underline text-sm font-normal">My Projects</a> / {{ $project->title }}
            </p>

            <a href="/projects/create" class="button">Add Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-grey font-normal mb-3">Tasks</h2>

                    <div class="card mb-3">Lorem Ipsum.</div>
                    <div class="card mb-3">Lorem Ipsum.</div>
                    <div class="card mb-3">Lorem Ipsum.</div>
                    <div class="card mb-3">Lorem Ipsum.</div>
                </div>

                <div>
                    <h2 class="text-lg text-grey font-normal mb-3">General Notes</h2>

                    <textarea class="card w-full" style="min-height: 200px;">Lorem Ipsum.</textarea>
                </div>
            </div>

            <div class="lg:w-1/4 px-3">
                @include("projects.card")
            </div>
        </div>
    </main>



@endsection