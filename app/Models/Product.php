<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected  $fillable = [
        'id','nome', 'preco', 'quantidade', 'description'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * @var string
     */
    public $nome;

    /**
     * @var decimal
     */
    public $preco;

    /**
     * @var integer
     */
    public $quantidade;

    public $description;

    public function setNome($value)
    {
        $this->attributes['nome'] = $value;
    }

    public function setPreco($value)
    {
        $this->attributes['preco'] = $value;
    }

    public function setQuantidade($value)
    {
        $this->attributes['quantidade'] = $value;
    }
    
    public function setDescription($value)
    {
        $this->attributes['description'] = $value;
    }
}
