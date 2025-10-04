<?php
    namespace App\Http\Traits;

    use App\Models\{Category,Post,User};

    trait GlobalTrait {
        public function scopeCatSlug($query, $slug) {
            return $query->where('category',$slug);
        }

        public function scopeUserID($query, $user_id) {
            return $query->where('user_id',$user_id);
        }

    }
