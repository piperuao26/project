<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specification extends Model
{
    use HasFactory;

        /**
     * specification ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['Especificacion'] - string - contains the product name
     * $this->attributes['RAM'] - string - contains the product name
     * $this->attributes['CPU'] - string - contains the product name
     * $this->attributes['DiscoDuro'] - string - contains the product name
     * $this->attributes['TarjetaGrafica'] - string - contains the product name
    */

    protected $fillable = ['Especificacion','RAM', 'CPU', 'DiscoDuro', 'TarjetaGrafica'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId($id) : void
    {
        $this->attributes['id'] = $id;
    }

    public function getEspecificacion(): string
    {
        return $this->attributes['Especificacion'];
    }

    public function setEspecificacion($Especificacion) : void
    {
        $this->attributes['Especificacion'] = $Especificacion;
    }

    public function getRAM(): int
    {
        return $this->attributes['RAM'];
    }

    public function setRAM($RAM) : void
    {
        $this->attributes['RAM'] = $RAM;
    }

    
    public function getCPU(): string
    {
        return $this->attributes['CPU'];
    }

    public function setCPU($Especificacion) : void
    {
        $this->attributes['CPU'] = $CPU;
    }

    
    
    public function getDiscoDuro(): int
    {
        return $this->attributes['DiscoDuro'];
    }

    public function setDiscoDuro($DiscoDuro) : void
    {
        $this->attributes['DiscoDuro'] = $DiscoDuro;
    }

    
    
    
    public function getTarjetaGrafica(): string
    {
        return $this->attributes['TarjetaGrafica'];
    }

    public function setTarjetaGrafica($TarjetaGrafica) : void
    {
        $this->attributes['TarjetaGrafica'] = $TarjetaGrafica;
    }

}
