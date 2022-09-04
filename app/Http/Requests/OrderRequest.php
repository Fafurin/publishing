<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string',
            'type' => 'required|string',
            'format_id' => 'required|integer|exists:formats,id',
            'deadline' => 'nullable|string',
            'payment' => 'required|string',
            'isbn' => 'nullable|string',
            'order_number' => 'nullable|string',
            'circulation' => 'nullable|integer',
            'description' => 'nullable|string',
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|string',
            'files' => 'required|array',
            'files.*' => 'required|file'
        ];
    }
}
