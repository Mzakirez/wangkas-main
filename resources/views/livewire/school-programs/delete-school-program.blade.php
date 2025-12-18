<div class="card">
  <div class="card-header">
    Hapus Program
  </div>
  <div class="card-body">
    <div class="alert alert-danger">
      <i class="bi bi-exclamation-triangle-fill me-2"></i>
      Apakah Anda yakin ingin menghapus program ini?
    </div>

    <div class="mb-4">
      <h5 class="fw-bold">{{ $schoolProgram->name }}</h5>
      <p class="text-muted mb-0">Biaya: Rp {{ number_format($schoolProgram->fee, 0, ',', '.') }}</p>
    </div>

    <div class="d-flex gap-2">
      {{-- Tombol Konfirmasi Hapus --}}
      <button wire:click="destroy" class="btn btn-danger">
        Ya, Hapus Permanen
      </button>

      {{-- Tombol Batal --}}
      <a href="{{ route('school-programs.index') }}" class="btn btn-secondary" wire:navigate>
        Batal
      </a>
    </div>
  </div>
</div>
