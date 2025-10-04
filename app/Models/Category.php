<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class Category extends Model {
        use GlobalTrait;
        protected $table = 'categories';
        protected $fillable = ['category'];
    }
