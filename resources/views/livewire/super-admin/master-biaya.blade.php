<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="form-inline row p-3 justify-content-end" style="gap: 1em">
                <input type="number" class="form-control col-2" placeholder="Kode biaya">
                <input type="number" class="form-control col-2" placeholder="Biaya">
                <input type="number" class="form-control col-4" placeholder="Deskripsi">
                <button class="btn btn-primary" type="submit">Tambah</button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-inline mb-3">
                <input class="form-control mr-sm-2" placeholder="Cari" wire:model="query">
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Biaya</th>
                        <th>Biaya</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($biayas as $index => $biaya)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $biaya->kode_biaya }}</td>
                        <td>{{ $biaya->biaya }}</td>
                        <td>{{ $biaya->description }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $biayas->links('pagination-links') }}</div>
        </div>
    </div>
</div>
