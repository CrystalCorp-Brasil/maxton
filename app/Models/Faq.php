<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;

    class Faq extends Model {
        use GlobalTrait;
        protected $table = 'posts_categories';
        protected $guarded = [];
    }
