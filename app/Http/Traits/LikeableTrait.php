<?php
    namespace App\Http\Traits;

    use App\Models\{Like,User};
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\MorphMany;
    use Illuminate\Support\Facades\Auth;

    trait LikeableTrait {
        public function likes(): MorphMany {return $this->morphMany(Like::class, 'likeable');}

        public function scopeWithLikes(Builder $query) {
            return $query->withCount([
                'likes as likes_count' => function ($q) {$q->where('liked', true);},
                'likes as dislikes_count' => function ($q) {$q->where('liked', false);}
            ]);
        }

        public function like(User $user, bool $liked) {
            $existing = $this->likes()->where('user_id', $user->id)->first();
            if ($existing) {
                if ($existing->liked === $liked) {$existing->delete();}
                else {$existing->update(['liked' => $liked]);}
            }
            else {
                $this->likes()->create(['user_id' => $user->id,'liked' => $liked,]);
            }
        }

        public function isLikedBy(?User $user): bool {
            if (!$user) return false;
            return $this->likes()->where('user_id', $user->id)->where('liked', true)->exists();
        }

        public function isDislikedBy(?User $user): bool {
            if (!$user) return false;
            return $this->likes()->where('user_id', $user->id)->where('liked', false)->exists();
        }
    }
