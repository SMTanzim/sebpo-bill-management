<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Address;
use App\Models\Billing;
use App\Models\Internet;
use App\Models\Official_Information;

class CustomerController extends Controller
{
    public function index()
    {
        return view('create_customer');
    }

    public function store(Request $request)
    {

        $customer = new Customer;
        $customer->name = $request->cname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->alt_phone = $request->alt_phone;
        $customer->personal_details = $request->personal_details;
        $customer->id_no = $request->id_no;
        $customer->contact_person = $request->contact_person;
        $customer->marchant_company = $request->marchant_company;
        $customer->save();

        
        $address = new Address;
        $address->customer_id = $customer->id;
        $address->country = $request->country;
        $address->district = $request->district;
        $address->thana = $request->thana;
        $address->area = $request->area;
        $address->building_name = $request->building_name;
        $address->house = $request->house;
        $address->floor = $request->floor;
        $address->house_info = $request->house_info;
        $address->save();

        
        $internet = new Internet;
        $internet->customer_id = $customer->id;
        $internet->connection_date = $request->connection_date;
        $internet->mikrotik = $request->mikrotik;
        $internet->ip_name = $request->ip_name;
        $internet->mac = $request->mac;
        $internet->bandwidth = $request->bandwidth;
        $internet->comment = $request->comment;
        $internet->package_id = $request->package_id;
        $internet->save();

        $billing = new Billing;
        $billing->customer_id = $customer->id;
        $billing->monthly_charge = $request->monthly_charge;
        $billing->due = $request->due;
        $billing->additional_charge = $request->additional_charge;
        $billing->discount = $request->discount;
        $billing->advance = $request->advance;
        $billing->vat = $request->vat;
        $billing->total = $request->total;
        $billing->save();

        $info = new Official_Information;
        $info->customer_id = $customer->id;
        $info->billing_type = $request->billing_type;
        $info->connection_type = $request->connection_type;
        $info->connectivity_type = $request->connectivity_type;
        $info->client_type = $request->client_type;
        $info->distribution_location = $request->distribution_location;
        $info->description = $request->description;
        $info->note = $request->note;
        $info->employee = $request->employee;
        $info->deposit = $request->deposit;
        $info->save();

        return redirect('/');
    }
}
