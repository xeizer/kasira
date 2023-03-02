<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h6>DATA BARANG TOKO SUKSES SELALU OGAH RUGI</h6>
                    <label>BARCODE</label>
                    <input type="text" class="form-control" wire:model='barcode' />
                    <label>NAMA BARANG</label>
                    <input type="text" class="form-control" wire:model='namabarang' />
                    <label>HARGA</label>
                    <input type="text" class="form-control" wire:model='harga' />
                    <label>STOK</label>
                    <input type="text" class="form-control" wire:model='stok' />
                    <button class="btn btn-primary">SIMPAN</button>
                    <hr />
                    <table class="table table-bordered">
                        <tr>
                            <th>BARCODE</th>
                            <th>NAMA BARANG</th>
                            <th>HARGA</th>
                            <th>STOK</th>
                            <th>EDIT/HAPUS</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
