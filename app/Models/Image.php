<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};
    class Image extends Model {
        use HasFactory, GlobalTrait;
        protected $table = 'images';
        protected $fillable = ['title','slug','image','user_id'];

        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }
    }
