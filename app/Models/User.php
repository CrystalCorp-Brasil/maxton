<?php
    namespace App\Models;

    use App\Http\Traits\{CharLikeableTrait,GlobalTrait};
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class User extends Authenticatable implements MustVerifyEmail {
        use HasFactory, Notifiable, CharLikeableTrait, GlobalTrait;

        protected $table = 'users';
        protected $guarded = [];
        protected $hidden = ['password','remember_token',];
        protected function casts(): array {
            return ['email_verified_at' => 'datetime','password' => 'hashed',];
        }
        public function chars(): HasMany {
            return $this->hasMany(Char::class);
        }

        public function images(): HasMany {
            return $this->hasMany(Image::class);
        }

        public function posts(): HasMany {
            return $this->hasMany(Post::class);
        }

        public function videosLinks(): HasMany {
            return $this->hasMany(VideoLink::class);
        }
    }
