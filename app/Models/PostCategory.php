<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class PostCategory extends Model {
        use GlobalTrait;
        protected $table = 'posts_categories';
        protected $guarded = [];
    }
