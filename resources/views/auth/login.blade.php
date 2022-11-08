@extends('layouts.app')

@section('content')
    <section class="text-center">

        <div class="card mx-4 mx-md-5 shadow-5-strong">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Login</h2>

                        <form method="post" action="{{url('login')}}">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                @csrf
                                <input type="text" name="email"  class="form-control"/>
                                <label class="form-label">Email address</label>
                            </div>
                            @error('email'){{ $message }}@enderror
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                @csrf
                                <input type="password" name="password" class="form-control"/>
                                <label class="form-label">Password</label>
                            </div>
                            @error('password'){{ $message }}@enderror
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Sign up
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
