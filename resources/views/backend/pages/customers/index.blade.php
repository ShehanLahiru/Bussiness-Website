@extends('backend.layouts.app', [
    'namePage' => 'customers',
    'class' => 'sidebar-mini',
    'activePage' => 'customers',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Message List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->contact_no }}</td>
                                    <td>
                                        <a href="{{ route('backend.customers.show',$customer->id) }}">
                                            <button class="btn btn-default">View</button>
                                        </a>
                                        <form method="post" action="{{ route('backend.customers.destroy',$customer->id) }}">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- {{ $customers->links() }} --}}
</div>
@endsection
