<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'caption' => 'nullable|string|max:10000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:10000',
            'video' => 'nullable|mimes:mp4,mov,ogg|max:10000',
            'music' => 'nullable|mimes:mp3,wav|max:10000'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator){
            if(empty($this->caption) && !$this->hasFile('image') && !$this->hasFile('video') && !$this->hasFile('music'))
            {
                $validator->errors()->add('media','at least add one thing you cannot make a blank post');
            }
        });
    }
}
