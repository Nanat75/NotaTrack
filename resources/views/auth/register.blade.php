<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | NotaTrack</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f7f9fc, #e4f0ff);
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

         body::before {
          content: "";
          position: absolute;
          width: 200%;
          height: 200%;
          background: radial-gradient(circle at 20% 30%, #e3edff, transparent 40%),
              radial-gradient(circle at 80% 70%, #dddddd, transparent 40%);
          z-index: 0;
}


        .register-container {
            width: 460px;
            background: #ffffff;
            border: 4px solid #345075;
            border-radius: 12px;
            box-shadow: 8px 8px 0px #999;
            padding: 35px;
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
            font-size: 22px;
            color: #345075;
            margin-bottom: 22px;
        }

        label {
            font-size: 13px;
            color: #345075;
            display: block;
            margin-bottom: 6px;
            text-align: left;
        }

        input[type="text"], 
        input[type="email"], 
        input[type="password"] {
            width: 97%;
            padding: 10px;
            border: 3px solid #345075;
            border-radius: 6px;
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
         /* Base calculator style */
.floating-calculator {
  background: #d9d9d9;
  border: 2px solid #345075;
  border-radius: 6px;
  box-shadow: 4px 4px 0px #999;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 5px;
}

/* Screen */
.floating-calculator .screen {
  width: 90%;
  background: #1e1e1e;
  border: 2px solid #345075;
  margin-bottom: 5px;
  color: #a4fcb3;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding-right: 3px;
}

/* Buttons grid */
.floating-calculator .buttons {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2px;
  width: 90%;
}
.floating-calculator .buttons div {
  background: #bfbfbf;
  border: 1.5px solid #345075;
  border-radius: 2px;
}

        @keyframes sway {
          from { transform: rotate(-8deg) translateY(0px); }
          to   { transform: rotate(8deg) translateY(10px); }
        }
        @keyframes sway2 {
          from { transform: rotate(-6deg) translateY(0px); }
          to   { transform: rotate(6deg) translateY(8px); }
        }

    /* Wrapper (floating position) */
.floating-wrapper {
  position: fixed;
  z-index: 1000;
  animation: fadeBounce 1.2s ease; 
}

/* Left calculator */
.floating-left {
  left: 40px;
  top: 100px;
}
.floating-left .floating-calculator {
  width: 200px;   /* custom width */
  height: 250px;  /* custom height */
  animation: sway 5s ease-in-out infinite alternate;
}
.floating-left .screen { height: 35px; font-size: 14px; }
.floating-left .buttons div { height: 28px; }

/* Right calculator */
.floating-right {
  right: 50px;
  top: 300px;
}
.floating-right .floating-calculator {
  width: 180px;   
  height: 240px;  
  animation: sway2 3.5s ease-in-out infinite alternate;
}
.floating-right .screen { height: 32px; font-size: 14px; }

.floating-right .buttons div {
  height: 28px;      /* Bigger buttons */
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
     
<!-- Floating Calculator (Left) -->
<div class="floating-wrapper floating-left">
    <div class="floating-calculator">
        <div class="screen">321</div>
        <div class="buttons">
            <div></div><div></div><div></div><div></div>
            <div></div><div></div><div></div><div></div>
            <div></div><div></div><div></div><div></div>
        </div>
    </div>
</div>


        <!-- Floating Calculator (Right) -->
    <div class="floating-wrapper floating-right">
        <div class="floating-calculator">
            <div class="screen">123</div>
            <div class="buttons">
                <div></div><div></div><div></div><div></div>
                <div></div><div></div><div></div><div></div>
                <div></div><div></div><div></div><div></div>
            </div>
        </div>
    </div>

    <div class="register-container">
        <!-- Title -->
        <h2>Create your NotaTrack account</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name">{{ __('Name') }}</label>
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div>
                <label for="email">{{ __('Email') }}</label>
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <label for="password">{{ __('Password') }}</label>
                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Button + link -->
            <button type="submit" class="btn">{{ __('Register') }}</button>
            <div class="links">
                <a href="{{ route('login') }}">Already registered? Log in</a>
            </div>
        </form>
    </div>

      <!-- Back to landing page -->
      <div class="back-home-wrapper">
            <a href="{{ url('/') }}" class="back-home-btn">⬅ Back to Landing Page</a>
            </div>
</body>
</html>
