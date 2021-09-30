<?php

namespace App\Http\Controllers\Frontend;

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

        return view('frontend.customerContacts.index', compact('customerContacts'));
    }

    public function create()
    {
        abort_if(Gate::denies('customer_contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.customerContacts.create');
    }

    public function store(StoreCustomerContactRequest $request)
    {
        $customerContact = CustomerContact::create($request->all());

        return redirect()->route('frontend.customer-contacts.index');
    }

    public function edit(CustomerContact $customerContact)
    {
        abort_if(Gate::denies('customer_contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.customerContacts.edit', compact('customerContact'));
    }

    public function update(UpdateCustomerContactRequest $request, CustomerContact $customerContact)
    {
        $customerContact->update($request->all());

        return redirect()->route('frontend.customer-contacts.index');
    }

    public function show(CustomerContact $customerContact)
    {
        abort_if(Gate::denies('customer_contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.customerContacts.show', compact('customerContact'));
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
