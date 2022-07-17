<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_ar' => 'required|string|max:255',
            'content_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_en' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,jpg,png',
        ];
    }

    public function attributes()
    {
        return [
            'title_ar' => trans('posts.title_ar'),
            'content_ar' => trans('posts.content_ar'),
            'title_en' => trans('posts.title_en'),
            'content_en' => trans('posts.content_en'),
            'image' => trans('posts.image'),
        ];
    }
}
