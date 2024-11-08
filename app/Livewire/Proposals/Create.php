<?php

namespace App\Livewire\Proposals;

use Livewire\Component;
use App\Models\Project;

class Create extends Component
{

    public Project $project;
    public bool $modal = true;

    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'number', 'min:1'])]
    public int $hours = 0;

/*Esse #Rule não ta funcionado para fazer a validação.
Ta dando esse erro: Missing [$rules/rules()] property/method on: [App\Livewire\Proposals\Create].
Preciso ver uma forma de fazer funcionar e pegar a formatação do erro que fiz no front (create.blade);
*/

    public function save()
    {
        $this->validate();

        $this->project->proposals()
        ->updateOrCreate(
['email' => $this->email],
    ['hours' => $this->hours],
        );
    }

    public function render()
    {
        return view('livewire.proposals.create');
    }

}
