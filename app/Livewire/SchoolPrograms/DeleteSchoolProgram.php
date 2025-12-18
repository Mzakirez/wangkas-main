<?php

namespace App\Livewire\SchoolPrograms;

use App\Models\SchoolProgram;
use Livewire\Component;

class DeleteSchoolProgram extends Component
{
    public SchoolProgram $schoolProgram;

    // Menangkap data program dari URL
    public function mount(SchoolProgram $schoolProgram)
    {
        $this->schoolProgram = $schoolProgram;
    }

    // Fungsi untuk menghapus data
    public function destroy()
    {
        $this->schoolProgram->delete();

        // Redirect kembali ke halaman tabel setelah dihapus
        return $this->redirect(route('school-programs.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.school-programs.delete-school-program');
    }
}
