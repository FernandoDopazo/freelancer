<div>
    @foreach ($this->projects as $project)
        <li>
            <a href="">
                {{$project->id}}, {{$project}}
            </a>
        </li>
    @endforeach
</div>
