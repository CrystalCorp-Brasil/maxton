<?php
    namespace App\Models;

    use App\Http\Traits\{CharLikeableTrait,GlobalTrait};
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class CharLike extends Model {
        use CharLikeableTrait,GlobalTrait;
        protected $table = 'chars_likes';
        protected $guarded = [];

        public function char(): BelongsTo {
            return $this->belongsTo(Char::class);
        }

        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }
    }
