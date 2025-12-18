<?php

namespace App\Livewire\SchoolPrograms;

use App\Livewire\Forms\StoreSchoolProgramForm;
use Livewire\Component;

class CreateSchoolProgram extends Component
{
    public StoreSchoolProgramForm $form;

    public function save()
    {
        $this->form->store();
        return $this->redirect('/school-programs', navigate: true);
    }

    public function render()
    {
        return view('livewire.school-programs.create-school-program');
    }
}
