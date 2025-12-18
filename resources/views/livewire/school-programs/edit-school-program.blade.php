<div class="card">
  <div class="card-header">Edit Program</div>
  <div class="card-body">
    <form wire:submit="save">
      <div class="mb-3">
        <label class="form-label">Nama Program</label>
        <input type="text" class="form-control" wire:model="form.name">
        @error('form.name') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
        <label class="form-label">Nominal SPP</label>
        <input type="number" class="form-control" wire:model="form.fee">
        @error('form.fee') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="/school-programs" class="btn btn-secondary" wire:navigate>Batal</a>
    </form>
  </div>
</div>
