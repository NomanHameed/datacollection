@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Personal Information') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('personal.save') }}" method="post">
                            @csrf

                            <div class="mb-1 row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="father_name" class="col-sm-2 col-form-label">Father Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="father_name" id="father_name" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone" id="phone" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="doj" class="col-sm-2 col-form-label">Date of oining</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="doj" id="doj" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="dob" id="dob" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="department" class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="department" id="department" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="designation" id="designation" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="currency" class="col-sm-2 col-form-label">Currency</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="currency" id="currency" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="salary" class="col-sm-2 col-form-label">Salary</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="salary" id="salary" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="location" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location" id="location" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="cnic" class="col-sm-2 col-form-label">CNIC</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="cnic" id="cnic" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="employee_type" class="col-sm-2 col-form-label">Employee Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="employee_type" id="employee_type" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="back_name" class="col-sm-2 col-form-label">Back Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="back_name" id="back_name" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="back_account" class="col-sm-2 col-form-label">Back Account</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="back_account" id="back_account" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="back_account_name" class="col-sm-2 col-form-label">Account Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="back_account_name"
                                           id="back_account_name" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="ibn" class="col-sm-2 col-form-label">IBN</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="ibn" id="ibn" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="bank_address" class="col-sm-2 col-form-label">Bank Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bank_address" id="bank_address" required>
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col-sm-2 offset-10">
                                    <input type="submit" class="form-control btn btn-primary" value="Save">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
