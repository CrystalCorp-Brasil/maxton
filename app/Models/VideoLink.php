<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};
    class VideoLink extends Model {
        use HasFactory, GlobalTrait;
        protected $table = 'videos_links';
        protected $guarded = [];

        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }
    }
