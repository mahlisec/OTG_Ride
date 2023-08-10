

 @extends('Frontend.Auth.main')
 @section('title', 'Login')
@section('auth-container')

<auth id="auth" >
    <div class="login-container">
        <h1>Welcome Back</h1>
        <form>
          <input type="email" placeholder="Email">
          <input type="password" placeholder="Password">
          <button class="login-btn">Log In</button>
        </form>
        <div class="signup-link">
          Don't have an account? <a href="{{url('signup')}}">Sign Up</a>
        </div>
        <div class="social-login">
          <p>Or log in with:</p>
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
