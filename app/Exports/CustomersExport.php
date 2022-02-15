<?php

namespace App\Exports;

use App\Model\Master\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Carbon;

class CustomersExport implements FromView
{
    
    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     return Customer::all();
    // }
    
    // public function headings(): array
    // {
        //     return ["No", "Customer Code", "Customer Name", "Email", "Phone", "Address", "Credit Limit", "Pricing Group", "Customer Group"];
        // }
        
    // public function model(array $row)
    // {
    //     return new Customer([
    //         'No'                => $row['id'],
    //         'Customer Code'     => $row['code'],
    //         'Customer Name'     => $row['name'],
    //         'Email'             => $row['email'],
    //         'Phone'             => $row['phone'],
    //         'Address'           => $row['address'],
    //         'Credit Limit'      => $row['credit_limit'],
    //         'Pricing Group'     => $row['pricing_group_id'],
    //         'Customer Group'    => $row['branch_id'],
    //     ]);
    // }

    public function view(): View
    {
        return view('customer', [
            'customers' => Customer::with('pricingGroup')->get(),
            'tanggal'   => Carbon::now(),
        ]);
    }
}
