<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfessionalDetail extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'professional_details';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'business_name',
        'category_id',
        'subcategory_id',
        'phone',
        'country',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(ProSubCategory::class, 'subcategory_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
