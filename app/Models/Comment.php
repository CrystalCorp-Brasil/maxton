<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\{MorphTo,HasMany,BelongsTo};

    class Comment extends Model {
        use HasFactory;

        protected $guarded = [];

        protected $casts = ['is_deleted' => 'boolean','is_edited' => 'boolean',];

        public function user(): BelongsTo {return $this->belongsTo(User::class);}

        public function commentable(): MorphTo {return $this->morphTo();}

        public function parent(): BelongsTo {return $this->belongsTo(Comment::class, 'parent_id');}

        public function replies(): HasMany {
            return $this->hasMany(Comment::class, 'parent_id')->with('user')->with('replies')->orderBy('created_at', 'asc');
        }

        public function scopeRoots($query) {return $query->whereNull('parent_id');}

        public function getDisplayBodyAttribute(): string {
            if ($this->is_deleted) {return '[comentário removido]';}
            return e($this->body);
        }
    }
