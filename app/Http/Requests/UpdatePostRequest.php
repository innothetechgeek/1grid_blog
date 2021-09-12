<?php

namespace App\Http\Requests;
use App\Models\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Auth;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {

      
        $userPost = Post::where('id', $request->post_id)
                        ->where('user_id',  Auth::user()->id)
                        ->get();

                    
        if(!count($userPost)) return false;

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
            'title' => 'required|max:255',
            'content' => 'required',
        ];
    }
}
