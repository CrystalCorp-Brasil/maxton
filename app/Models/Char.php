<?php
    namespace App\Models;

    use App\Http\Traits\{LikeableTrait,GlobalTrait};
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class Char extends Model {
        use LikeableTrait, GlobalTrait;
        protected $table = 'chars';
        protected $guarded = [];

        public function user(): BelongsTo {return $this->belongsTo(User::class);}

        public function Images(): HasMany {return $this->hasMany(Image::class);}

        public function getRouteKeyName() {return 'slug';}

        public function comments() {
            return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id')->with(['user', 'replies'])->orderBy('created_at', 'desc');
        }
    }
