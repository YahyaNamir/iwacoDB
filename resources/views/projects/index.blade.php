<!-- resources/views/projects/index.blade.php -->

<h1>Projects</h1>

<ul>
    @foreach ($projects as $project)
        <li>
            Project Name: {{ $project->projectName }} <br>
            Manager: {{ $project->manager->phone }} <br>
        </li>
    @endforeach
</ul>
