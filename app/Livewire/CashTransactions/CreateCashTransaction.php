<?php

namespace App\Livewire\CashTransactions;

use App\Livewire\Forms\StoreCashTransactionForm;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;

class CreateCashTransaction extends Component
{
    use WithFileUploads;

    public StoreCashTransactionForm $form;
    public $detectedProgramName = '';

    // PERBAIKAN: Hapus parameter $students dari sini
    public function mount()
    {
        // Tidak perlu $this->students = $students;
        $this->form->date_paid = date('Y-m-d');
    }

    // Logic Otomatis: Saat user memilih siswa, harga dan program terisi
    public function updatedFormStudentId($value)
    {
        if ($value) {
            $student = Student::with('schoolProgram')->find($value);

            if ($student && $student->schoolProgram) {
                $this->form->amount = $student->schoolProgram->fee;
                $this->detectedProgramName = $student->schoolProgram->name;
            } else {
                $this->form->amount = 0;
                $this->detectedProgramName = 'Tidak ada program';
            }
        }
    }

    public function save()
    {
        $this->form->store();

        // Dispatch event
        $this->dispatch('cash-transaction-created');
        $this->dispatch('close-modal'); // Trigger JS untuk tutup modal

        $this->form->reset();
        $this->detectedProgramName = '';
        $this->form->date_paid = date('Y-m-d'); // Reset tanggal ke hari ini
    }

    public function render()
    {
        // Ambil data siswa langsung di sini agar selalu update
        $students = Student::with(['schoolClass', 'schoolProgram'])
            ->orderBy('name', 'asc') // Urutkan nama abjad biar rapi
            ->get();

        return view('livewire.cash-transactions.create-cash-transaction', [
            'students' => $students
        ]);
    }
}
