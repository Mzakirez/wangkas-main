<div>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span>Daftar Program & SPP</span>
            <a href="/school-programs/create" class="btn btn-primary btn-sm" wire:navigate>Tambah Program</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Program</th>
                            <th>Biaya SPP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($programs as $index => $program)
                            <tr>
                                <td>{{ $programs->firstItem() + $index }}</td>
                                <td>{{ $program->name }}</td>
                                <td>Rp {{ number_format($program->fee, 0, ',', '.') }}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        {{-- Tombol Edit --}}
                                        <a href="/school-programs/{{ $program->id }}/edit" class="btn btn-warning btn-sm"
                                            wire:navigate>
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>

                                        {{-- Tombol Hapus (BARU) --}}
                                        <a href="/school-programs/{{ $program->id }}/delete"
                                            class="btn btn-danger btn-sm" wire:navigate>
                                            <i class="bi bi-trash"></i> Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $programs->links() }}
        </div>
    </div>
</div>
