<?php

namespace App\Http\Livewire;

use App\Models\Semuabarang;
use Livewire\Component;

class Barang extends Component
{
    public $barcode;
    public $namabarang;
    public $harga;
    public $stok;
    public $barangyangakandiedit;

    public function simpan()
    {
        if ($this->barangyangakandiedit) {
            $simpan = $this->barangyangakandiedit;
        } else {
            $simpan = new Semuabarang();
        }
        $simpan->barcode = $this->barcode;
        $simpan->nama_barang = $this->namabarang;
        $simpan->harga = $this->harga;
        $simpan->stok = $this->stok;
        $simpan->save();
        $this->reset();
    }
    public function hapus($id)
    {
        Semuabarang::find($id)->delete();
    }
    public function edit($id)
    {
        $this->barangyangakandiedit = Semuabarang::find($id);
        $this->barcode = $this->barangyangakandiedit->barcode;
        $this->namabarang = $this->barangyangakandiedit->nama_barang;
        $this->harga = $this->barangyangakandiedit->harga;
        $this->stok = $this->barangyangakandiedit->stok;
    }
    public function render()
    {
        return view('livewire.barang')->with([
            'semuabarang' => Semuabarang::all()
        ]);
    }
}
