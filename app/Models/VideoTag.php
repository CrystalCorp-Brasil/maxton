<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{BelongsTo,HasMany};

    class VideoTag extends Model {
        use GlobalTrait;
        protected $table = 'videos_tags';
        protected $guarded = [];
    }
