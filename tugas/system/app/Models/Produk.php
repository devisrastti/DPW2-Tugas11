<?php 

namespace App\Models;
use App\Models\user;
use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class Produk extends Model {

    use ProdukAttributes, ProdukRelations;


    protected $table =  "produk";

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'harga' => 'decimal:2'
    ];

    function seller(){
        return $this->belongsTo(User::class, 'id_user');
    }
    
    function getHargaStringAttribute(){
        return "Rp. ".number_format($this->attributes['harga']);
    }

    function handleUpload(){
        if(request)->hasFile('foto')){
            $foto = request()->file('foto')
            $destination = "images/produk"
            $this->id = 2002;
            $filename = $this->id."-".time().".".$foto->extension();
        }
    }

}