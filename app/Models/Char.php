<?php
    namespace App\Models;

    use App\Http\Traits\{CharLikeableTrait,GlobalTrait};
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class Char extends Model {
        use CharLikeableTrait, GlobalTrait;
        protected $table = 'chars';
        protected $guarded = [];

        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }

        public function charImages(): HasMany {
            return $this->hasMany(CharImage::class);
        }
    }
