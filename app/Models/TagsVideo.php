<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class TagsVideo extends Model {
        use GlobalTrait;
        protected $table = 'tags_videos';
        protected $fillable = ['tag'];
    }
