<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalonSecondRequest extends FormRequest
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
            'first_name'                        => ['required', 'string', 'max:250'],
            'last_name'                         => ['required', 'string', 'max:250'],
            // 'age'                               => ['required', 'integer', 'min:0', 'max:120'],
            'email'                             => ['required', 'email', 'max:500'],
            'phone_number'                      => ['required', 'string', 'max:500'],
            // 'country_of_residence'              => ['required', 'string', 'max:500'],
            // 'city_of_residence'                 => ['required', 'string', 'max:500'],
            // 'nationality'                       => ['required', 'string', 'max:500'], // FIXED: was 'date'
            'job_title'                         => ['required', 'string', 'max:500'],
            // 'company_name'                      => ['nullable', 'string', 'max:500'],
            'industry'                          => ['required', 'string', 'max:500'],
            // 'years_of_professional_experience'  => ['required', 'integer', 'min:0', 'max:99'], // FIXED
            'how_did_you_hear'                  => ['required', 'string', 'max:2000'],
            // 'have_you_attend'                   => ['required', 'string', 'max:2000'],
            // 'why_attend'                        => ['required', 'string', 'max:2000'],
            'subscribed'                        => ['nullable', 'boolean'],
        ];
    }


    public function messages(): array
    {
        return [
            'first_name.required' => 'Please enter your first name.',
            'last_name.required' => 'Please enter your last name.',
            // 'age.required' => 'Please provide your age.',
            // 'age.integer' => 'Age must be a valid number.',
            // 'age.min' => 'Age cannot be negative.',
            // 'age.max' => 'Age must be less than or equal to 120.',
            'email.required' => 'A valid email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone_number.required' => 'Your phone number is required.',
            // 'country_of_residence.required' => 'Please specify your country of residence.',
            // 'city_of_residence.required' => 'Please specify your city of residence.',
            // 'nationality.required' => 'Please enter your nationality.',
            'job_title.required' => 'Your job title is required.',
            'industry.required' => 'Please select or enter your industry.',
            // 'years_of_professional_experience.required' => 'Please provide your years of professional experience.',
            // 'years_of_professional_experience.integer' => 'Years of experience must be a number.',
            // 'years_of_professional_experience.min' => 'Experience cannot be negative.',
            // 'years_of_professional_experience.max' => 'Experience must be less than 100 years.',
            'how_did_you_hear.required' => 'Please let us know how you heard about us.',
            // 'have_you_attend.required' => 'Please indicate whether you have attended before.',
            // 'why_attend.required' => 'Tell us why you would like to attend.',
        ];
    }
}
