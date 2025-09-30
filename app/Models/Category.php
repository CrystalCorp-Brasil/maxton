<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class Category extends Model {
        protected $table = 'categories';
        protected $fillable = ['category'];
    }
