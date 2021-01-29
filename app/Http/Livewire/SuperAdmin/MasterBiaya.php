<?php

namespace App\Http\Livewire\SuperAdmin;

use App\Models\MasterBiaya as ModelsMasterBiaya;
use Livewire\Component;
use Livewire\WithPagination;

class MasterBiaya extends Component
{
    use WithPagination;

    public $query = '';

    public $kode_biaya, $biaya, $description;

    public function mount() 
    {
        ModelsMasterBiaya::create([
            'kode_biaya' => $this->kode_biaya,
            'biaya' => $this->biaya,
            'description' => $this->description,
        ]);
    }

    public function render()
    {
        return view('livewire.super-admin.master-biaya', [
            'biayas' => ModelsMasterBiaya::orderBy('kode_biaya', 'asc')->where('kode_biaya', 'like', "%%$this->query%%")->orWhere('description', 'like', "%%$this->query%%")->paginate(10),
        ])->extends('admin.layouts.app')->section('main.content');
    }
}
