<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
                          "catename" => 'required'
                        ];
                        break;
                    case 'edit':
                        $rules = [
                            "catename" => 'required'
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
            'catename.required' => 'Tên bắt buộc phải là nhập',
        ];
    }
}
