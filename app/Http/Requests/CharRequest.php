<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class CharRequest extends FormRequest {
        public function rules(): array {
            return [
                'nick' => ['required','string'],
                'name' => ['required','string'],
                'bio' => ['required','string'],
                'image' => ['required','image','max:2048','dimensions:min_width=512,min_height=288,max_width=1920,max_height=1080']
            ];
        }
    }
