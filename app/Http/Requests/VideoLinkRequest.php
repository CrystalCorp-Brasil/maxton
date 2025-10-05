<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class VideoLinkRequest extends FormRequest {
        public function authorize(): bool {
            return true;
        }

        public function rules(): array {
            return [
                'title' => ['required','string'],
                'content' => ['required','string','max:150'],
                'tag' => ['required','string'],
                'link' => ['required','string'],
                'image' => ['required','image','max:2048','dimensions:min_width=512,min_height=288,max_width=1920,max_height=1080']
            ];
        }
    }
