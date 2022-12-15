<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        if (request()->routeIs('bio.store')) {
            $imageRule = 'image|required';
        } elseif (request()->routeIs('bio.update')) {
            $imageRule = 'sometimes';
        }

        return [
            'content' => 'required',
            'image' => $imageRule
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->image == null) {
            $this->request->remove('image');
        }
    }
}
