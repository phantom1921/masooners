<?php

namespace App\Http\Controllers\userfrontend;

use App\Models\ProSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ajaxcontroller extends Controller
{
    public function pro_subcategory(Request $request)
    {

        $proSubCategories = ProSubCategory::where('prof_category_id',$request->cat_id)->get();
        echo json_encode($proSubCategories);
    }
}
