@extends('BackLab.Back');

@section('contient')

<div class="container" style="padding-bottom: 15px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laravel Post CRUD
                        <a href="{{ url('add-PosteLap') }}" class="btn btn-primary float-end">Add PosteLap</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: auto;">ID</th>
                                <th style="width: 15%;">Name</th>
                                <th style="width: 15%;">Post</th>
                                <th style="width: 30%;">Description</th>
                                <th style="width: 20%;">Date</th>
                                <th style="width: auto;">Edit</th>
                                <th style="width: auto;">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($PosteLap as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->Name }}</td>
                                <td>{{ $item->DevPost}}</td>
                                <td>{{ $item->Description}}</td>
                                <td>{{ $item->Day_s}} To {{ $item->Day_f}}</td>
                                <td>
                                    <a href="{{ url('edit-PosteLap/'.$item->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    {{-- <a href="{{ url('delete-student/'.$item->id) }}"
                                        class="btn btn-danger btn-sm">Delete</a> --}}
                                    <form action="{{ url('delete-PosteLap/'.$item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@endsection