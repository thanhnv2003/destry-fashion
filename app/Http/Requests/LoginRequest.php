<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
                    case 'login':
                        $rules = [
                            'email' => 'required|email',
                            'password' => 'required|min:6|max:255'
                        ];
                        break;
                    case 'register':
                        $rules = [
                            'name' => 'required',
                            'email' => 'required|email|unique:users',
                            'password' => 'required|min:6|max:255'
                        ];
                        break;
                    case 'myAccount':
//                        $this->dd('123');
                        $rules = [
                            'name' => 'required',
                            'email' => 'required|email',
                        ];
                        break;
                    case 'updateAddress':
                        $rules = [
                            'address' => 'required',
                            'phone' => 'required|min:10|max:10'
                        ];
                        break;
                    case 'forgot':
                        $rules = [
                            'email' => 'required|email',
                        ];
                        break;
                    case 'resetPass':
                        $rules = [
                            'token' => 'required',
                            'password' => 'required|min:6|max:255|confirmed'
                        ];
                        break;
                    default:
                        break;
                endswitch;
        endswitch;
        return $rules;
    }
}
