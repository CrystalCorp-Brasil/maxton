<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};
    class LinkYT extends Model {
        use HasFactory, GlobalTrait;
        protected $table = 'links_yt';
        protected $fillable = ['title','slug','image','yt_resume','yt_tag','yt_link','user_id'];

        public function user(): BelongsTo {
            return $this->belongsTo(User::class);
        }
    }
