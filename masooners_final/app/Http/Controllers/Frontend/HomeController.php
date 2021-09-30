<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Models\ProfessionalDetail;
use App\Models\User;
use App\Models\Category;

class HomeController
{
    public function index()
    {
        $professionalDetails = ProfessionalDetail::with(['category', 'user'])->where('user_id',Auth::id())->get();
        if(sizeof($professionalDetails)==0){
            $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

            $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

            return view('frontend.professionalDetails.create', compact('categories', 'users'));

        }
        return view('frontend.home');
    }
}
