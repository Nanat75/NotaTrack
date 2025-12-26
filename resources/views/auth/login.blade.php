<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | NotaTrack</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f7f9fc, #d2e2f9);
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        body::before {
          content: "";
          position: absolute;
          width: 200%;
          height: 200%;
          background: radial-gradient(circle at 20% 30%, #e3edff, transparent 40%),
              radial-gradient(circle at 80% 70%, #d2f9e4, transparent 40%);
          z-index: 0;
}


        .login-container {
            width: 400px;
            background: #ffffff;
            border: 4px solid #345075;
            border-radius: 12px;
            box-shadow: 8px 8px 0px #999;
            padding: 30px;
            animation: fadeBounce 1.2s ease;
            text-align: center;
            position: relative;
            z-index: 10;
        }

        @keyframes fadeBounce {
            0% { opacity: 0; transform: scale(0.8); }
            60% { opacity: 1; transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        h2 {
            font-size: 20px;
            color: #345075;
            margin-bottom: 20px;
        }

        label {
            font-size: 13px;
            color: #345075;
            display: block;
            margin-bottom: 6px;
            text-align: left;
        }

        input[type="email"], input[type="password"] {
            width: 95%;
            padding: 10px;
            border: 3px solid #345075;
            border-radius: 6px;
            font-family: Arial, sans-serif;
            font-size: 15px;
            margin-bottom: 15px;
        }

        input:focus {
            outline: none;
            border-color: #1f7a3d;
            box-shadow: 3px 3px 0px #1f7a3d;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #1f7a3d;
            color: #fff;
            font-size: 15px;
            border: 3px solid #345075;
            box-shadow: 3px 3px 0px #345075;
            border-radius: 6px;
            margin-top: 10px;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn:hover {
            background: #2da85b;
            transform: translate(-2px, -2px);
            box-shadow: 5px 5px 0px #345075;
        }

        .links {
            margin-top: 15px;
            font-size: 15px;
        }

        .links a {
            color: #345075;
            text-decoration: none;

        }

        .links a:hover {
            text-decoration: underline;
        }

        /* Floating paper style */
.floating-paper {
  width: 100%;
  height: 100%;
  background: #fff;
  border: 3px solid #345075;
  border-radius: 6px;
  box-shadow: 6px 6px 0px #999;
  position: relative;
}

/* Add lined-paper effect */
.floating-paper::before {
  content: "";
  position: absolute;
  top: 15px;
  left: 10px;
  right: 10px;
  height: 2px;
  background: #c4d4f2;
  box-shadow: 
    0 20px #c4d4f2, 
    0 40px #c4d4f2, 
    0 60px #c4d4f2, 
    0 80px #c4d4f2, 
    0 100px #c4d4f2, 
    0 120px #c4d4f2, 
    0 140px #c4d4f2;
  opacity: 0.6;
}
      /* Base sway */
@keyframes sway {
  from { transform: rotate(-8deg) translateY(0px); }
  to   { transform: rotate(8deg) translateY(10px); }
}

/* Slightly slower & bigger swing */
@keyframes sway2 {
  from { transform: rotate(-12deg) translateY(0px); }
  to   { transform: rotate(12deg) translateY(15px); }
}

/* Faster small swing */
@keyframes sway3 {
  from { transform: rotate(-6deg) translateY(0px); }
  to   { transform: rotate(6deg) translateY(8px); }
}


 /* Left and right placement */
.floating-wrapper {
  position: fixed;
  z-index: 1000;
  animation: fadeBounce 1.2s ease; 
}

/* Each wrapper positioned differently */
.floating-left {
  left: 20px;
  top: 180px;
  width: 230px;
  height: 290px;
}

.floating-right {
  right: 20px;
  top: 480px;
  width: 200px;
  height: 260px;
}

.floating-right-2 {
  right: 300px;
  top: 80px;
  width: 130px;
  height: 190px;
}

.floating-left .floating-paper {
  animation: sway 5s ease-in-out infinite alternate;
}
.floating-right .floating-paper {
  animation: sway2 6s ease-in-out infinite alternate;
}
.floating-right-2 .floating-paper {
  animation: sway3 3.5s ease-in-out infinite alternate;
}

.back-home-wrapper {
  position: fixed;
  bottom: 20px;
  left: 20px;
  z-index: 1000;
}

.back-home-btn {
  display: inline-block;
  background-color: #4CAF50; /* same green as submit */
  color: #ffffff;
  text-decoration: none;
  padding: 0.6rem 1.2rem;
   border: 2px solid #2e7d32; 
  font-family: 'Press Start 2P', cursive;
  font-size: 15px;
  border-radius: 4px;
  transition: all 0.2s ease;
  box-shadow: 3px 3px 0 #2e7d32;
  text-align: center;
   animation: fadeBounce 1.2s ease;
}

.back-home-btn:hover {
  background-color: #45a049; /* hover green */
  color: #eaffea;
  transform: translate(-2px, -2px);
  box-shadow: 5px 5px 0 #2e7d32;
}
    </style>
</head>
<body>

<!-- Floating Papers -->
<div class="floating-wrapper floating-left">
  <div class="floating-paper"></div>
</div>

<div class="floating-wrapper floating-right">
  <div class="floating-paper"></div>
</div>

<div class="floating-wrapper floating-right-2">
  <div class="floating-paper"></div>
</div>


    <div class="login-container">
        <!-- Title -->
        <h2>Login to NotaTrack</h2>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div>
                <label for="email">{{ __('Email') }}</label>
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <label for="password">{{ __('Password') }}</label>
                <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember -->
            <div class="mt-3 flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="mr-2">
                    <span class="text-xs">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Login Button -->
            <button type="submit" class="btn">{{ __('Log in') }}</button>

            <!-- Extra links -->
            <div class="links">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <br>
                <a href="{{ route('register') }}">Create a new account</a>
            </div>
        </form>
    </div>

     <!-- Back to landing page -->
      <div class="back-home-wrapper">
            <a href="{{ url('/') }}" class="back-home-btn">⬅ Back to Landing Page</a>
            </div>
</body>
</html>
