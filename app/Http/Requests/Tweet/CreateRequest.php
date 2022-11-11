<?php

namespace App\Http\Requests\Tweet;

use Brick\Math\BigDecimal;
use Illuminate\Foundation\Http\FormRequest;
use Ramsey\Uuid\Type\Decimal;

class CreateRequest extends FormRequest
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
            'present' => 'required|max:140',
            'detail' => 'max:140',
            'images' => 'array|max:4',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
     // Requestクラスのuser関数で今自分がログインしているユーザーが取得できる
    public function userId(): int
    {
        return $this->user()->id;
    }
    public function gift(): string
    {
    return $this->input('gift');
    }

    public function present(): string
    {
    return $this->input('present');
    }
    
    public function relation(): string
    {
    return $this->input('relation');
    }
    
    public function age(): string
    {
    if (is_null($this->input('age'))) {
        dd($this->input('age'));
    }
    return $this->input('age');
    }

    public function situation(): string
    {
    return $this->input('situation');
    }

    public function detail(): string
    {
    if (is_null($this->input('detail'))) {
            dd($this->input('detail'));
        }
    return $this->input('detail');
    }

    public function images(): array
    {
        return $this->file('images', []);
    }

}
