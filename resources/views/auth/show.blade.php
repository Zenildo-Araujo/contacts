@extends('auth.layout')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($contacts as $contact)
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-name">Contact</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-name">{{ $contact->name }}</h5>
                            <p class="card-text">{{ $contact->contact }}</p>
                            <p class="card-text">{{ $contact->email }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                                <div class="col-sm">
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
