@extends('layouts.app')

@section('content')
    <div class="container">
        <button class="btn btn-sm btn-success"><a href="{{route('clients.create')}}"> Create client</a></button>
        <div class="card">
            <div class="card-header">
                Clients list
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm table-striped">
                    <thead>
                    <tr>
                        <th>Company</th>
                        <th>VAT</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <th>{{$client->company_name}}</th>
                            <td>{{$client->company_vat}}</td>
                            <td>{{$client->company_address}}</td>
                            <td>
                                <button class="btn btn-primary btn-xs">Edit</button>
                                <button class="btn btn-danger btn-xs">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
