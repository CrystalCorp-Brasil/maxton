<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class PostUploadRequest extends FormRequest {
        public function rules(): array {
            return [
                'title' => ['required','string'],
                'category' => ['required','string'],
                'subject' => ['required','string'],
                'image' => ['nullable','image','max:2048','dimensions:min_width=512,min_height=288,max_width=1920,max_height=1080']
            ];
        }
    }
