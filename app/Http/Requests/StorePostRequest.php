<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => [
                'string',
                'max:255',
                'required',
            ],
            'description' => [
                'max:255',
                'string',
                'required',
            ],
            'avatar' => [
                'file', // Change 'image' to 'file' to allow any file type.
                'mimetypes:video/*', // Allow any video MIME type.
                'max:1048576', // Maximum file size (1GB in this example).
                'required',
            ],
        ];
    }
}
