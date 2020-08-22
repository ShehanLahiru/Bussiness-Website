@extends('backend.layouts.app', [
    'namePage' => 'contactDetails',
    'class' => 'sidebar-mini',
    'activePage' => 'contactDetails',
  ])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Main Contact Detail List</h4>
                    <div class="pull-right">
                        <a href="{{ route('backend.contactDetails.create') }}">
                            <button class="btn btn-primary">Create</button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>EMAIL</th>
                                <th>ADDERESS</th>
                                <th>CONTACT_NO</th>
                                <th>SOCIAL MEDIA LINK</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($contactDetails as $contactDetail)
                                <tr>
                                    <td>{{ $contactDetail->id }}</td>
                                    <td>{{ $contactDetail->email }}</td>
                                    <td>{{ $contactDetail->address}}</td>
                                    <td>{{ $contactDetail->contact_no }}</td>
                                    <td>{{ $contactDetail->social_media_link}}</td>
                                    <td>
                                        <a href="{{ route('backend.contactDetails.edit',$contactDetail->id) }}">
                                            <button class="btn btn-default">Edit</button>
                                        </a>
                                        <form method="post" action="{{ route('backend.contactDetails.destroy',$contactDetail->id) }}">
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
    {{-- {{ $projects->links() }} --}}
</div>
@endsection
