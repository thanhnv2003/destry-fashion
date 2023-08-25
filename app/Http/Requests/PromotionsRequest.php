<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionsRequest extends FormRequest
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
                            'code' => 'required|numeric',
                            'price' => 'required|numeric',
                        ];
                        break;
                    case 'edit':
                        $rules = [
                            "name" => 'required',
                            'code' => 'required|numeric',
                            'price' => 'required|numeric',
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
            'name.required' => 'Tên là bắt buộc phải nhập',
            'code.required' => 'Code là bắt buộc phải nhập',
            'price.required' => 'Price là bắt buộc phải nhập'
        ];
    }
}

