<?php

namespace App\Livewire\SchoolPrograms;

use App\Models\SchoolProgram;
use Livewire\Component;
use Livewire\WithPagination;

class SchoolProgramTable extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.school-programs.school-program-table', [
            'programs' => SchoolProgram::latest()->paginate(10)
        ]);
    }
}
