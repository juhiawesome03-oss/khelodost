<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Register Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f0f8ff;
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .bg-custom-green { background-color: #0c9971; }
    .btn-yellow {
      background-color: #ffd600; color: #000; font-weight: 700;
      border-radius: 0.5rem; border: none; transition: background-color 0.3s ease;
    }
    .btn-yellow:hover,
    .btn-yellow:focus { background-color: #e6c200; color: #000; }
    .input-group-text-yellow {
      background-color: #ffd600; color: #000; font-weight: 600; border: none; border-radius: 0.5rem 0 0 0.5rem;
    }
    .form-control:focus { box-shadow: 0 0 0 0.25rem rgb(255 214 0 / 0.5); border-color: #ffd600; outline: none; }
    a { color: #fff; font-weight: 600; text-decoration: none; }
    a:hover { text-decoration: underline; }
    .btn-outline-secondary {
      border-radius: 0 0.5rem 0.5rem 0; border: none;
      background: rgba(255 255 255 / 0.15); color: #fff;
      width: 3rem; display: flex; align-items: center; justify-content: center; transition: background 0.3s ease;
    }
    .btn-outline-secondary:hover { background: rgba(255 255 255 / 0.3); color: #fff; }
  </style>
</head>

<body>
  <div class="bg-custom-green p-4 rounded-3 shadow-lg" style="width: 100%; max-width: 440px; color: white;">

    <!-- Logo -->
    <a class="d-block mb-4 text-center">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-width: 180px;" />
    </a>

    <!-- Form -->
    <form>
      <!-- Phone -->
      <div class="input-group mb-3">
        <span class="input-group-text input-group-text-yellow"><i class="bi bi-phone text-warning"></i> +91</span>
        <input type="text" name="phone" class="form-control rounded-0 rounded-end" placeholder="Enter Your 10 Digit Number" maxlength="10" />
        <a href="javascript:void(0)" class="btn btn-yellow rounded-0 rounded-end text-center">Get OTP</a>
      </div>

      <!-- OTP -->
      <div class="mb-3">
        <input type="text" name="otp" class="form-control rounded-3" placeholder="Enter OTP" maxlength="6" />
      </div>

      <!-- Password -->
      <div class="input-group mb-3">
        <span class="input-group-text input-group-text-yellow"><i class="bi bi-lock text-warning"></i></span>
        <input type="password" name="password" class="form-control rounded-0 rounded-end" placeholder="Password" />
        <a href="#" class="btn btn-outline-secondary" aria-label="Toggle password visibility">
          <i class="bi bi-eye"></i>
        </a>
      </div>

      <!-- Confirm Password -->
      <div class="input-group mb-3">
        <span class="input-group-text input-group-text-yellow"><i class="bi bi-lock text-warning"></i></span>
        <input type="password" name="confirm_password" class="form-control rounded-0 rounded-end" placeholder="Confirm Password" />
        <a href="#" class="btn btn-outline-secondary" aria-label="Toggle confirm password visibility">
          <i class="bi bi-eye"></i>
        </a>
      </div>

      <!-- Referral Code -->
      <div class="mb-3">
        <input type="text" name="referral_code" class="form-control rounded-3" placeholder="Referral Code (if any)" />
      </div>

      <!-- Remember Me -->
      <div class="form-check mb-3 text-start">
        <input class="form-check-input" type="checkbox" id="remember" name="remember" />
        <label class="form-check-label small fw-semibold" for="remember">REMEMBER ME</label>
      </div>

      <!-- Register -->
      <div class="d-grid mb-3">
        <a href="javascript:void(0)" class="btn btn-yellow rounded-3 text-center">Register</a>
      </div>

      <!-- Or -->
      <p class="mb-3 fs-6 text-white">Or register with</p>

      <!-- Chatbot -->
      <div class="d-grid mb-3">
        <a href="javascript:void(0)" class="btn btn-success rounded-3 fw-semibold text-center">
          <i class="bi bi-chat-dots-fill me-2"></i> Chatbot
        </a>
      </div>

      <!-- Login link -->
      <p class="small text-white">
        Already have an account? <a href="{{route('login')}}"><b>Login</b></a>
      </p>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
