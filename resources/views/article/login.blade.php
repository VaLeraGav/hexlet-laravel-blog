@extends('layouts.app')

@section('content')
    <section class="text-center">

        <div class="card mx-4 mx-md-5 shadow-5-strong">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Login</h2>
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control"/>
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control"/>
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>
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
