<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email'=> 'required|email|unique:users|max:50',
            'pass' => 'required|min:8|same:re_pass|max:50',
            're_pass' => 'required|min:8|same:pass|max:50'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.max' => 'Name is too long',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email is already taken',
            'email.max' => 'Email is too long',
            'pass.required' => 'Password is required',
            'pass.min' => 'Password is too short',
            'pass.same' => 'Password is not match',
            'pass.max' => 'Password is too long',
            're_pass.required' => 'Password is required',
            're_pass.min' => 'Password is too short',
            're_pass.same' => 'Password is not match',
            're_pass.max' => 'Password is too long'
        ];
    }

    public function fails()
    {
        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($this->errors(), 'register');
    }
}
