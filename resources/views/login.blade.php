<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Register</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
 
  <div class="container">
    @if(session('registrationSuccess'))
    <div class="alert alert-success">
        {{ session('registrationSuccess') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('login') }}" method="POST" id="loginForm" class="form">
  @csrf
      <div class="bar">
        <li class="active" onclick="toggleForm('loginForm')">Sign In</li>
        <li onclick="toggleForm('registerForm')">Sign Up</li>
      </div>     
      <h1>Login Account</h1>
      <p>Please login account to continue </p>
      <div class="input-container">
        <img src="assets/images/mail.png" class="icon" alt="">
        <input type="email" class="icon-input" placeholder="Email" id="email" name="email" required>
      </div>
      <div class="input-container">
        <img src="assets/images/lock.png" class="icon" alt="">
        <input type="password" class="icon-input" placeholder="Password" id="password" name="password" required>
      </div>
   
      
      <button onclick="login()" type="submit">Sign In</button>
    </form>
    <div class="modal" id="registrationSuccessModal" style="display: none;">
      <div class="modal-content">
          <span class="close" onclick="closeModal()">&times;</span>
          <p>Registrasi berhasil!</p>
          <button onclick="redirectToHome()">Home</button>
      </div>
  </div>
    <form action="{{ route('register') }}" method="POST" id="registerForm" class="form" style="display: none;">
    @csrf
      <div class="bar">
        <li onclick="toggleForm('loginForm')">Sign In</li>
        <li class="active" onclick="toggleForm('registerForm')">Sign Up</li>
      </div>   
      <h1>Create Account</h1>
      <p>Please create account to continue </p>
      <div class="input-container">
        <img src="assets/images/user.png" class="icon" alt="">
        <input type="text" class="icon-input" placeholder="Username" id="name" name="name" required>
      </div>
      <div class="input-container">
        <img src="assets/images/mail.png" class="icon" alt="">
        <input type="email" class="icon-input" placeholder="Email" id="email" name="email" required>
      </div>
      <div class="input-container">
        <img src="assets/images/lock.png" class="icon" alt="">
        <input type="password" class="icon-input" placeholder="Password" id="password" name="password" required>
      </div>
      <div class="input-container">
        <img src="assets/images/lock.png" class="icon" alt="">
        <input type="password" class="icon-input" placeholder="Confirm Password" id="confirmPassword" name="confirmPassword" required>
        <span id="passwordError" style="color: gooldenrod;"></span>
      </div>
      <button type="submit" onclick="validatePassword()">Register</button>
    </form>

    <div class="bg">
      <img src="assets/images/bglog9.png" alt="" srcset="">
    </div>
  </div>

  <script>

function validatePassword() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        var passwordError = document.getElementById("passwordError");

        if (password !== confirmPassword) {
            passwordError.innerHTML = "Passwords do not match";
            return false;
        } else {
            passwordError.innerHTML = ""; // Clear any previous error message
            return true;
        }
    }

 function closeModal() {
        var modal = document.getElementById('registrationSuccessModal');
        modal.style.display = 'none';
    }

    function redirectToHome() {
        window.location.href = '/home'; // Ganti '/home' dengan URL halaman home Anda
    }
        // Script JavaScript di sini
        var modal = document.getElementById('registrationSuccessModal');
        var closeBtn = document.querySelector('.close');
        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        }
  

    function toggleForm(formId) {
  document.getElementById('loginForm').style.display = (formId === 'loginForm') ? 'block' : 'none';
  document.getElementById('registerForm').style.display = (formId === 'registerForm') ? 'block' : 'none';
}

  </script>
</body>
</html>
