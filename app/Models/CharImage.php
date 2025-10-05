<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class CharImage extends Model {
        use GlobalTrait;
        protected $table = 'chars_images';
        protected $guarded = [];

        public function char(): BelongsTo {
            return $this->belongsTo(Char::class);
        }
    }
