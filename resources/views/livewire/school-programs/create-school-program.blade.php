<div class="card">
  <div class="card-header">Tambah Program Baru</div>
  <div class="card-body">
    <form wire:submit="save">
      <div class="mb-3">
        <label class="form-label">Nama Program</label>
        <input type="text" class="form-control" wire:model="form.name" placeholder="Contoh: Reguler">
        @error('form.name') <span class="text-danger">{{ $message }}</span> @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Nominal SPP</label>
        <input type="number" class="form-control" wire:model="form.fee" placeholder="Contoh: 150000">
        @error('form.fee') <span class="text-danger">{{ $message }}</span> @enderror
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="/school-programs" class="btn btn-secondary" wire:navigate>Batal</a>
    </form>
  </div>
</div>
