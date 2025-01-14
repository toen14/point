<?php

namespace App\Imports\Master;

use App\Model\Master\Customer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CustomerImport implements ToCollection
{
  public function collection(Collection $rows)
  {
    $index = 0;
    foreach ($rows as $row) {
      $index++;
      if($index == 1)  {
        continue;
      }
      
      if ($row[request()->get("name")] !== null) {
        $customer = new Customer();
        $customer->code = $row[request()->get("code")];
        $customer->name = $row[request()->get("name")];
        $customer->address = $row[request()->get("address")];
        $customer->phone = $row[request()->get("phone")];
        $customer->email = $row[request()->get("email")];
        $customer->branch_id = auth()->user()->branch_id ?? 1;
        $customer->save();
      }
    }
  }
}
