<?php
    namespace App\Models;

    use App\Http\Traits\{GlobalTrait,LikeableTrait};
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class Post extends Model {
        use HasFactory,GlobalTrait,LikeableTrait;
        protected $table = 'posts';
        protected $guarded = [];

        public function user(): BelongsTo {return $this->belongsTo(User::class);}
    }
