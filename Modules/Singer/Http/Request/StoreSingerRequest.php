<?php

namespace Modules\Singer\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreSingerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:singers,slug',
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
            'name.required' => 'فیلد نام الزامی است.',
            'name.string' => 'نام باید یک رشته باشد.',
            'name.max' => 'نام نمی‌تواند بیشتر از ۲۵۵ کاراکتر باشد.',
            'slug.required' => 'فیلد اسلاگ الزامی است.',
            'slug.string' => 'اسلاگ باید یک رشته باشد.',
            'slug.max' => 'اسلاگ نمی‌تواند بیشتر از ۲۵۵ کاراکتر باشد.',
            'slug.unique' => 'این اسلاگ قبلاً استفاده شده است.',
            'bio.string' => 'بیوگرافی باید یک متن باشد.',
            'avatar.url' => 'آدرس آواتار باید یک URL معتبر باشد.',
            'birth_date.date' => 'تاریخ تولد باید یک تاریخ معتبر باشد.',
            'gender.in' => 'جنسیت فقط می‌تواند male یا female باشد.',
            'nationality.string' => 'ملیت باید یک رشته باشد.',
            'is_active.boolean' => 'وضعیت فعال بودن باید true یا false باشد.',
        ];
    }
}
