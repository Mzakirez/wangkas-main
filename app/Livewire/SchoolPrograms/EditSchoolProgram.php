<?php

namespace App\Livewire\SchoolPrograms;

use App\Livewire\Forms\UpdateSchoolProgramForm;
use App\Models\SchoolProgram;
use Livewire\Component;

class EditSchoolProgram extends Component
{
    public UpdateSchoolProgramForm $form;

    public function mount(SchoolProgram $schoolProgram)
    {
        $this->form->setSchoolProgram($schoolProgram);
    }

    public function save()
    {
        $this->form->update();
        return $this->redirect('/school-programs', navigate: true);
    }

    public function render()
    {
        return view('livewire.school-programs.edit-school-program');
    }
}
