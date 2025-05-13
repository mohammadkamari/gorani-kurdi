<?php

namespace Modules\Singer\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSingerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $singerId = $this->route('id');

        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:singers,slug,' . $singerId,
            'bio' => 'nullable|string',
            'avatar' => 'nullable|url',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:male,female',
            'nationality' => 'nullable|string',
            'is_active' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'وارد کردن نام الزامی است.',
            'name.string' => 'نام باید رشته‌ای از نوع متن باشد.',
            'name.max' => 'نام نمی‌تواند بیش از ۲۵۵ کاراکتر باشد.',
            'slug.required' => 'اسلاگ الزامی است.',
            'slug.unique' => 'این اسلاگ قبلاً استفاده شده است.',
            'slug.max' => 'اسلاگ نمی‌تواند بیش از ۲۵۵ کاراکتر باشد.',
            'avatar.url' => 'آدرس تصویر معتبر نیست.',
            'birth_date.date' => 'تاریخ تولد باید به فرمت تاریخ باشد.',
            'gender.in' => 'جنسیت فقط می‌تواند male یا female باشد.',
            'is_active.boolean' => 'فعال بودن باید فقط true یا false باشد.',
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
