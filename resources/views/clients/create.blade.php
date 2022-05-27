@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('clients.store')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    Contact Information
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="contact_name">Name</label>
                        <input type="text" class="form-control" id="contact_name" name="contact_name">
                    </div>
                    <div class="form-group">
                        <label for="contact_email">Email</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email">
                    </div>
                    <div class="form-group">
                        <label for="contact_phone">Phone</label>
                        <input type="number" class="form-control" id="contact_phone" name="contact_phone">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Company Information
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name">
                    </div>
                    <div class="form-group">
                        <label for="company_vat">Company vat</label>
                        <input type="text" class="form-control" id="company_vat" name="company_vat">
                    </div>
                    <div class="form-group">
                        <label for="company_address">Company address</label>
                        <input type="text" class="form-control" id="company_address" name="company_address">
                    </div>
                    <div class="form-group">
                        <label for="company_city">Company city</label>
                        <input type="text" class="form-control" id="company_city" name="company_city">
                    </div>
                    <div class="form-group">
                        <label for="company_zip">Company zip</label>
                        <input type="text" class="form-control" id="company_zip" name="company_zip">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
