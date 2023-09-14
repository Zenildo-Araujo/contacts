@extends('auth.layout')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard
                <a class="btn btn-sm btn-success" href={{ URL('/contact/create') }}>Add Contact</a>
                <a class="btn btn-sm btn-success" href={{ URL('/contacts/show_all') }}>Show All</a>
                <a class="btn btn-sm btn-success" href={{ URL('/contacts/show_all') }}>Show All</a>
            </div>
            
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>       
                @endif
                <div class="row">
            @foreach ($contacts as $contact)
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-name">{{ $contact->name }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary btn-sm-2">Edit</a>
                                </div>
                                <div class="col-sm">
                                    <a href="{{ route('contacts.detail', $contact->id) }}" class="btn btn-warning btn-sm-2">Detail</a>
                                </div>
                                <div class="col-sm">
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm-2">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            </div>
        </div>
    </div>    
</div>
    
@endsection