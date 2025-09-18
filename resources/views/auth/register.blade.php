@extends("layouts.app")

@section("title", "Register Page")

@section("content")

<form class="form" action="#" method="post">
            <h2>Register</h2>
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="tel" name="phone" id="phone" placeholder="Phone">
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
            <div class="form-group">
                <p>Already have an account? <a href="#">Login</a></p>
            </div>
        </form>


@endsection