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



 /*
 Erro no processamento do LiveWire para a index, ta retornando em JSON / HTML.
 Fiz o teste com uma rota alterntiva (web.php) e uma view de teste (projects-test) e funcionou corretamente.
 Tratar esse erro antes de prosseguir
  */

 public function getProjectsProperty()
    {
        $projects = Project::query()->inRandomOrder()->get();

        //dd($projects->pluck('id'));

        return $projects;

    }
}
