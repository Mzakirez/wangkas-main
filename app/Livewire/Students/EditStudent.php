<?php

namespace App\Livewire\Students;

use App\Livewire\Forms\UpdateStudentForm;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use App\Models\SchoolClass;
use App\Models\SchoolMajor;
use App\Models\SchoolProgram;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class EditStudent extends Component
{
    public UpdateStudentForm $form;

    public Collection $schoolClasses;

    public Collection $schoolMajors;

    /**
     * Render the view.
     */
    public function render(): View
    {
        return view('livewire.students.edit-student', [
            'school_classes' => SchoolClass::all(),
            'school_majors' => SchoolMajor::all(),
            'school_programs' => SchoolProgram::all(),
        ]);
    }

    /**
     * Set the specified model instance for the component.
     */
    #[On('student-edit')]
    public function setValue(Student $student): void
    {
        $this->form->student = $student;
        $this->form->fill($student);
    }

    /**
     * Update the form data and handle the related events.
     */
    public function edit(): void
    {
        $this->form->update();

        $this->dispatch('close-modal');
        $this->dispatch('success', message: 'Data berhasil diubah!');
        $this->dispatch('student-updated')->to(StudentTable::class);
    }
}
