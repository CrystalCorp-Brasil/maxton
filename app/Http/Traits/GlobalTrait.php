<?php
    namespace App\Http\Traits;

    use App\Models\{Category,Post,User};
    use Illuminate\Support\Facades\Auth;

    trait GlobalTrait {
        public function scopeCatSlug($query, $slug) {
            return $query->where('category',$slug);
        }

        public function scopeCharSlug($query, $slug) {
            return $query->where('slug',$slug);
        }

        public function scopeCharID($query, $char_id) {
            return $query->where('char_id',$char_id);
        }

        public function scopeUserID($query, $char_id) {
            return $query->where('user_id',$char_id);
        }
        public function getCurrentUser() {
            return Auth::user();
        }
    }
