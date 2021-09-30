<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyProfessionalDetailRequest;
use App\Http\Requests\StoreProfessionalDetailRequest;
use App\Http\Requests\UpdateProfessionalDetailRequest;
use App\Models\Category;
use App\Models\ProfessionalDetail;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfessionalDetailsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('professional_detail_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionalDetails = ProfessionalDetail::with(['category', 'user'])->get();

        return view('admin.professionalDetails.index', compact('professionalDetails'));
    }

    public function create()
    {
        abort_if(Gate::denies('professional_detail_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.professionalDetails.create', compact('categories', 'users'));
    }

    public function store(StoreProfessionalDetailRequest $request)
    {
        $professionalDetail = ProfessionalDetail::create($request->all());

        return redirect()->route('admin.professional-details.index');
    }

    public function edit(ProfessionalDetail $professionalDetail)
    {
        abort_if(Gate::denies('professional_detail_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $professionalDetail->load('category', 'user');

        return view('admin.professionalDetails.edit', compact('categories', 'users', 'professionalDetail'));
    }

    public function update(UpdateProfessionalDetailRequest $request, ProfessionalDetail $professionalDetail)
    {
        $professionalDetail->update($request->all());

        return redirect()->route('admin.professional-details.index');
    }

    public function show(ProfessionalDetail $professionalDetail)
    {
        abort_if(Gate::denies('professional_detail_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionalDetail->load('category', 'user');

        return view('admin.professionalDetails.show', compact('professionalDetail'));
    }

    public function destroy(ProfessionalDetail $professionalDetail)
    {
        abort_if(Gate::denies('professional_detail_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $professionalDetail->delete();

        return back();
    }

    public function massDestroy(MassDestroyProfessionalDetailRequest $request)
    {
        ProfessionalDetail::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
