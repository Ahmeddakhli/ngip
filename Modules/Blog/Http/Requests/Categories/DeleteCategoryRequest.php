<?php

namespace Modules\Blog\Http\Requests\Categories;

use App\Http\Requests\FormRequest;

class DeleteCategoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => "required|exists:blog_categories,id,deleted_at,NULL"
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
