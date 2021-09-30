<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCustomerContactRequest;
use App\Http\Requests\StoreCustomerContactRequest;
use App\Http\Requests\UpdateCustomerContactRequest;
use App\Models\CustomerContact;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerContactController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('customer_contact_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerContacts = CustomerContact::all();

        return view('admin.customerContacts.index', compact('customerContacts'));
    }

    public function create()
    {
        abort_if(Gate::denies('customer_contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.customerContacts.create');
    }

    public function store(StoreCustomerContactRequest $request)
    {
        $customerContact = CustomerContact::create($request->all());

        return redirect()->route('admin.customer-contacts.index');
    }

    public function edit(CustomerContact $customerContact)
    {
        abort_if(Gate::denies('customer_contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.customerContacts.edit', compact('customerContact'));
    }

    public function update(UpdateCustomerContactRequest $request, CustomerContact $customerContact)
    {
        $customerContact->update($request->all());

        return redirect()->route('admin.customer-contacts.index');
    }

    public function show(CustomerContact $customerContact)
    {
        abort_if(Gate::denies('customer_contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.customerContacts.show', compact('customerContact'));
    }

    public function destroy(CustomerContact $customerContact)
    {
        abort_if(Gate::denies('customer_contact_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerContact->delete();

        return back();
    }

    public function massDestroy(MassDestroyCustomerContactRequest $request)
    {
        CustomerContact::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
