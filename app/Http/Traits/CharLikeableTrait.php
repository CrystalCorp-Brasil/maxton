<?php
    namespace App\Http\Traits;

    use App\Models\{Char,CharLike,User};
    use Illuminate\Contracts\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Support\Facades\{Auth};

    trait CharLikeableTrait {
        public function scopeWithCharsLikes(Builder $query){
            $query->leftJoinSub(
                'select char_id, sum(liked) likes, sum(not liked) dislikes from chars_likes group by char_id','chars_likes','char_id','chars.id'
            );
        }

        public function charsLikes(): HasMany {return $this->hasMany(CharLike::class);}

        public function like(?User $user = null, $liked = true) {
            if (!$user) {$user = Auth::user();}
            $this->charsLikes()->updateOrCreate(
                ['user_id' => $user ? $user->id : null,'char_id' => $this->id],
                ['liked' => $liked]
            );
        }

        public function dislike(?User $user = null, $liked = false) {
            if (!$user) {$user = Auth::user();}
            $this->charsLikes()->updateOrCreate(
                ['user_id' => $user ? $user->id : null,'char_id' => $this->id],
                ['liked' => $liked]
            );
        }

        public function isLikedBy(?User $user): bool {
            if (!$user) {return false;}
            return $user->charsLikes->where('char_id', $this->id)->where('liked', true)->count() > 0;
        }

        public function isDislikedBy(?User $user): bool {
            if (!$user) {return false;}
            return $user->charsdislike->where('char_id', $this->id)->where('liked', false)->count() > 0;
        }
    }

