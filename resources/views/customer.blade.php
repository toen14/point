<table>
    <thead>
	<tr></tr>
	<tr>
		<td style="width: 80px">Data Export:</td>
		<td style="width: 200px">{{$tanggal}}</td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr>
		<th></th>
		<th></th>
		<th colspan="9" style='text-align:center;'>Customers Tenant</th>
		<th></th>
        <th></th>
        <th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
    </tr>
    <tr>
		<th></th>
		<th></th>
		<th style="width: 100px">No</th>
		<th style="width: 110px">Customer Code</th>
        <th style="width: 200px">Customer Name</th>
        <th style="width: 200px">Email</th>
		<th style="width: 110px">Phone</th>
		<th style="width: 200px">Address</th>
		<th style="width: 200px">Credit Limit</th>
		<th style="width: 200px">Pricing Group</th>
		<th style="width: 200px">Customer Group</th>
    </tr>
    </thead>
    <tbody>
	@php $no = 1; @endphp
    @foreach($customers as $customer)
        <tr>
			<td></td>
			<td></td>
			<td>{{$no}}</td>
			<td>{{$customer->code}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
			<td>{{$customer->phone}}</td>
			<td>{{$customer->address}}</td>
			<td>{{$customer->credit_limit}}</td>
			<td>{{$customer->pricingGroup->label ?? ''}}</td>
			<td>{{$customer->branch_id}}</td>
        </tr>
		@php $no++; @endphp
    @endforeach
    </tbody>
</table>
