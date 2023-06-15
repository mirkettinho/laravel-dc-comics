<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
        return [
            "title" => "required|min:2|max:50",
            "series" => "max:50",
            "type" => "max:30",
            "artists" => "required|min:2|max:255",
            "writers" => "required|min:2|max:255",
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve avere almeno :min caratteri",
            "title.max" => "Il titolo può avere :max caratteri",

            "series.max" => "la serie può avere :max caratteri",

            "type.max" => "Il tipo può avere :max  caratteri",

            "artists.required" => "Artisti é un campo obbligatorio",
            "artists.min" => "Il campo artisti deve avere almeno :min caratteri",
            "artists.max" => "Il campo artisti può avere :max caratteri",

            "writers.required" => "Scrittori é un campo obbligatorio",
            "writers.min" => "Il campo scrittori deve avere almeno :min caratteri",
            "writers.max" => "Il campo scrittori può avere :max caratteri",
        ];
    }
}
