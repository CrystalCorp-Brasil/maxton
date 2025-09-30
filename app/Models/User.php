<?php
    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class User extends Authenticatable implements MustVerifyEmail {
        use HasFactory, Notifiable;
        protected $table = 'users';
        protected $fillable = ['name','username','email','image','bio','password',];
        protected $hidden = ['password','remember_token',];
        protected function casts(): array {
            return ['email_verified_at' => 'datetime','password' => 'hashed',];
        }
        public function posts(): HasMany {
            return $this->hasMany(Post::class);
        }
    }
