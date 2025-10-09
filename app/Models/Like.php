<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphMany;

    class Like extends Model {
        protected $table = 'likes';
        protected $guarded = [];

        public function likeable(): MorphMany {return $this->morphTo();}

        public function user() {return $this->belongsTo(User::class);}
    }
