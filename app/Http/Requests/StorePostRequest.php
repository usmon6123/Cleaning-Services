<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
//    public mixed $user_id;

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
            'title'=>'required|max:255',
            'short_content'=>'required',
            'contents'=>'required',
            'photo'=>'nullable|image|max:10240'
        ];
    }

    public function messages(): array
{
    return [
        'title' => 'Sarlavha kiritilmadi',
        'short_content' => 'ma\'qola qisqacha matni kiritilmadi',
        'contents' => 'ma\'qola matni kiritilmadi',
        'photo'=>'rasm yuklanmadi'
    ];
}
}
