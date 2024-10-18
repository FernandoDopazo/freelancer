<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;
use Livewire\Attribute\Computed;
use Request;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }

 public function getProjectsProperty()
    {
        $projects = Project::query()->inRandomOrder()->get();

        //dd($projects->pluck('id'));

        return $projects;

    }
}
