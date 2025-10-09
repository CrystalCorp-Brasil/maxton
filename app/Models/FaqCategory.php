<?php
    namespace App\Models;

    use App\Http\Traits\GlobalTrait;
    use Illuminate\Database\Eloquent\Model;

    class FaqCategory extends Model {
        use GlobalTrait;
        protected $table = 'faqs_categories';
        protected $guarded = [];
    }
