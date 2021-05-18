<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            // "travel_packages_id"=>'integer|required',
            // "users_id"=>'integer|required',
            // 'addtional_visa'=>'integer|required',
            // 'transaction_total'=>'integer|required',
            'transaction_status'=>'string|required|in:IN_CART,PENDING,SUCCESS,CANCEL,FAILED'
        ];
    }
}
