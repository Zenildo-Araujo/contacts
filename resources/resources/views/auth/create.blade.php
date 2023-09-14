@extends('auth.layout')
@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Add a Contact</h3>
                <form action="{{ route('contacts.store') }}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                                <input placeholder="Your name" min="5" type="text" class="form-control" id="name" name="name" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input placeholder="Your Email Address" type="email" class="form-control" id="email" name="email" tabindex="2" required>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Phone Number</label>
                            <input placeholder="Your Phone Number" id="contact" name="contact" class="form-control" type="tel" tabindex="3" required>
                        </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
