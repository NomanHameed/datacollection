@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">CNIC</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Account Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($presonals as $presonal)
                        <tr>
                            <th scope="row">{{ $presonal->name }}</th>
                            <td>{{ $presonal->cnic }}</td>
                            <td>{{ $presonal->Designation }}</td>
                            <td>{{ $presonal->back_account }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
