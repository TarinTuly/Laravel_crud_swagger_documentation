<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Product",
 *     type="object",
 *     required={"title", "slug", "price", "image", "user_id"},
 *     @OA\Property(property="id", type="integer", format="int64"),
 *     @OA\Property(property="title", type="string"),
 *     @OA\Property(property="slug", type="string"),
 *     @OA\Property(property="price", type="number", format="float"),
 *     @OA\Property(property="image", type="string"),
 *     @OA\Property(property="user_id", type="integer", format="int64"),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 */

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'slug',
        'price',
        'image',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
