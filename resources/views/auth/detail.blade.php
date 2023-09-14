@extends('auth.layout')
@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
            <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-name">Contact</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-name">Name: {{ $contact->name }}</p>
                            <p class="card-name">Number: {{ $contact->contact }}</p>
                            <p class="card-name">Email: {{ $contact->email }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <a class="btn btn-danger" href={{ URL('/index') }}>Back</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
    </div>
@endsection
