

@extends('Frontend.Auth.main')
@section('title', 'Signup')
@section('auth-container')

<auth id="auth">

<div class="signup-container">
    <h1>Create an Account</h1>
    <form>
        <input type="text" placeholder="First Name">
        <input type="text" placeholder="Last Name">
        <input type="email" placeholder="Email">
        <input type="tel" placeholder="Phone Number">
        <select id="sel">
        <option value="rider">Select</option>
        <option value="rider">Rider</option>
        <option value="seeker">Seeker</option>
        </select>
        <input type="password" placeholder="Password">
        <input type="password" placeholder="Confirm Password">
        <button class="signup-btn">Sign Up</button>
    </form>
    <div class="login-link">
        Already have an account? <a href="{{url('login')}}">Login</a>
    </div>
    <div class="social-login">
        <p>Or sign up with:</p>
        <br>
        <div class="social-icons">
        <a href="#"><img src="https://img.icons8.com/?size=512&id=60984&format=png" alt="Google"></a>
        <a href="#"><img src="https://img.icons8.com/?size=512&id=118466&format=png" alt="Facebook"></a>
        <a href="#"><img src="https://img.icons8.com/?size=512&id=phOKFKYpe00C&format=png" alt="Twitter"></a>
        </div>
    </div>
    </div>
</auth>

@endsection
