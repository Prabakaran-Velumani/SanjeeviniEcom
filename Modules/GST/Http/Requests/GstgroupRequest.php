<?php

namespace Modules\GST\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class GstgroupRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $isUpdate = $this->id !== null;
        return [
            'name' => [
                'required',
                Rule::unique('g_s_t_groups', 'name')->ignore($isUpdate ? $this->id : null),
            ],
            'same_state_gst.*' => ['required'],
            'same_state_gst_percent.*' => ['required'],
            'outsite_state_gst.*' => ['required'],
            'outsite_state_gst_percent.*' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.unique' => 'The GST group name has already been taken',
            'same_state_gst_percent.*.required' => 'The same state gst value all field is required',
            'outsite_state_gst_percent.*.required' => 'The outsite state gst value all field is required',
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
