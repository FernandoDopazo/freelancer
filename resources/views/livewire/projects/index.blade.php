<div class="grid grid-cols-2 gap-4">
    @foreach ($this->projects as $project)

            <a href="">
                <x-project-card-simple :$project />
            </a>

    @endforeach
</div>
