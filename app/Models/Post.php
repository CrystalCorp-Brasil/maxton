<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class Post extends Model {
        protected $table = 'posts';
        protected $fillable = ['title','slug','category_id','subject','image'];

        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }
    }
