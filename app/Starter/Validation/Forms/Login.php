<?php  namespace Starter\Validation\Forms;

class Login extends FormValidator{
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

} 