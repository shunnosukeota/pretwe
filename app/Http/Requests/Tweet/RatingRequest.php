<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
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
            'ratedata' => 'required',
            'raterSex' => 'required',
            'raterAge' => 'required',
            'comment' => 'max:140'
        ];
    }

    public function userId(): int
    {
        return $this->user()->id;
    }

    public function ratedata(): int
    {
        return $this->input('ratedata');
    }

    public function raterSex(): string
    {
    return $this->input('raterSex');
    }

    public function raterAge(): string
    {
    if (is_null($this->input('raterAge'))) {
        dd($this->input('raterAge'));
    }
    return $this->input('raterAge');
    }

    public function comment(): string
    {
    if (is_null($this->input('comment'))) {
            dd($this->input('comment'));
        }
    return $this->input('comment');
    }

    public function id(): int
    {
        return (int) $this->route('tweetId');
    }
}
