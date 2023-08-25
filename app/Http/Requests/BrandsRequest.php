<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandsRequest extends FormRequest
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
        $rules = [];

        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()):
            case "POST":
                switch ($currentAction):
                    case 'add':
                        $rules = [
                            "name" => 'required',
                            'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                        ];
                        break;
                    case 'edit':
                        $rules = [
                            "name" => 'required',
                            'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                        ];
                        break;
                    default:
                        break;
                endswitch;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bắt buộc phải là nhập',
        ];
    }
}
