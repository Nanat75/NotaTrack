<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NotaTrack | Welcome</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #f7f9fc, #d2e2f9);
      font-family: "Press Start 2P", monospace;
      overflow: hidden;
    }
    

    /* Floating icons background */
    .icon {
      position: absolute;
      font-size: 20px;
      opacity: 0.2;
      animation: float 10s infinite linear;
    }

    @keyframes float {
      from { transform: translateY(100vh) rotate(0deg); }
      to { transform: translateY(-120vh) rotate(360deg); }
    }

    .container {
      display: flex;
      width: 900px;
      height: 500px;
      background: #ffffff;
      border: 4px solid #345075;
      box-shadow: 8px 8px 0px #999;
      border-radius: 12px;
      overflow: hidden;
      animation: fadeBounce 1.2s ease;
      position: relative;
      z-index: 10;
    }

    @keyframes fadeBounce {
      0% { opacity: 0; transform: scale(0.8); }
      60% { opacity: 1; transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    /* Left side (Pixel desk / computer area) */
    .left-panel {
      flex: 1;
      background: #f0f4fa;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border-right: 4px solid #345075;
      padding: 20px;
    }

    .pixel-computer {
      width: 250px;
      height: 140px;
      background: #cdd6e6;
      border: 4px solid #345075;
      position: relative;
      box-shadow: 4px 4px 0px #345075;
    }

    .pixel-screen {
      width: 200px;
      height: 100px;
      background: #1e3a5f;
      margin: 8px auto;
      border: 3px solid #345075;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #a4fcb3;
      font-size: 10px;
      overflow: hidden;
      white-space: nowrap;
    }

    /* Typing effect */
   .typing {
  display: inline-block;
  border-right: 2px solid #a4fcb3;
  white-space: nowrap;
  overflow: hidden;
  width: 0; /* start hidden */
  animation: typing 3s steps(14, end) forwards, blink 1s step-end infinite;
}

/* adjust number of steps to match your text length */
@keyframes typing {
  from { width: 0 }
  to { width: 14ch } 
}

@keyframes blink {
  50% { border-color: transparent }
}

    .pixel-stand {
      width: 60px;
      height: 20px;
      background: #cdd6e6;
      border: 3px solid #345075;
      margin: 0 auto;
      margin-top: -10px;
    }

    /* Right side (welcome + buttons) */
    .right-panel {
      flex: 1.2;
      padding: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }

    h1 {
      font-size: 16px;
      margin-bottom: 20px;
      color: #345075;
      animation: fadeIn 1s ease;
    }

    p {
      font-size: 10px;
      color: #444;
      margin-bottom: 30px;
      animation: fadeIn 1.5s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .btn {
      display: block;
      margin: 10px auto;
      padding: 12px 24px;
      background: #1f7a3d;
      color: #fff;
      text-decoration: none;
      font-size: 10px;
      border: 3px solid #345075;
      box-shadow: 3px 3px 0px #345075;
      transition: 0.2s;
      border-radius: 6px;
      animation: fadeIn 2s ease;
    }

    .btn:hover {
      background: #2da85b;
      transform: translate(-2px, -2px);
      box-shadow: 5px 5px 0px #345075;
    }

    .footer {
      margin-top: auto;
      font-size: 8px;
      color: #777;
    }

    .pixel-keyboard {
  width: 180px;
  height: 25px;
  background: #cdd6e6;
  border: 3px solid #345075;
  margin-top: 10px;
  box-shadow: 3px 3px 0px #345075;
  position: relative;
}

.pixel-keyboard::before {
  content: "";
  position: absolute;
  top: 4px;
  left: 6px;
  width: 90%;
  height: 6px;
  background: repeating-linear-gradient(
    to right,
    #345075,
    #345075 6px,
    transparent 6px,
    transparent 12px
  );
}

.pixel-character {
  display: flex;
  justify-content: center;
  margin-top: 10px;
  flex-shrink: 0;  
  max-width: 90%;
}

.pixel-character img {
  width: 280px;   
  height: auto;
  image-rendering: pixelated;
  margin-top: 8px;
  filter: brightness(0.95) contrast(0.9) saturate(0.8);
}

.coffee {
  display: flex;
  justify-content: center;
  margin-top: -50px;
  flex-shrink: 0;  
  max-width: 90%;
}

.coffee img {
  width: 100px;   
  height: auto;
  image-rendering: pixelated;
  margin-top: 8px;
  filter: brightness(0.95) contrast(0.9) saturate(0.8);
 position: relative;  
  left: -120px; 
}
/* Left paper */
.floating-paper-left {
  width: 60px;
  height: 80px;
  background: #fff;
  border: 2px solid #345075;
  box-shadow: 3px 3px 0px #999;
  position: absolute;
  top: 150px;
  left: -40px;  
  transform: rotate(-10deg);
  animation: sway-left 4s ease-in-out infinite alternate;
  z-index: 5;
}

.floating-paper-left::before {
  content: "";
  position: absolute;
  top: 10px;
  left: 5px;
  right: 5px;
  height: 2px;
  background: #c4d4f2;
  box-shadow: 0 10px #c4d4f2, 0 20px #c4d4f2, 0 30px #c4d4f2;
  opacity: 0.6;
}

/* Right calculator */

.floating-calculator {
  background: #d9d9d9;   
  border: 2px solid #345075;
  border-radius: 6px;
  width: 60px;     
  height: 90px;   
  box-shadow: 4px 4px 0px #999;
  position: absolute;
  top: 200px;      
  right: -50px;
  animation: sway-right 5s ease-in-out infinite alternate;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 5px;
  z-index: 5;
}

/* Calculator screen */
.floating-calculator .screen {
  width: 90%;
  height: 20px;        
  background: #1e1e1e;    /* darker gray/black screen */
  border: 2px solid #345075;
  margin-bottom: 5px;
  color: #a4fcb3;
  font-size: 8px;      
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding-right: 3px;
}

/* Calculator buttons */
.floating-calculator .buttons {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2px;
  width: 90%;
}

.floating-calculator .buttons div {
  background: #bfbfbf;   /* button gray */
  border: 1.5px solid #345075;
  height: 14px;       
  border-radius: 2px;
}


/* Animations */
@keyframes sway-left {
  from { transform: rotate(-8deg) translateY(0px); }
  to { transform: rotate(8deg) translateY(10px); }
}

@keyframes sway-right {
  from { transform: rotate(8deg) translateY(0px); }
  to { transform: rotate(-8deg) translateY(10px); }
}


  </style>
</head>
<body>

  <div class="container">
    <!-- Left panel: Pixel computer -->
   <div class="left-panel">
  <div class="pixel-computer">
    <div class="pixel-screen">
  <div class="floating-paper-left"></div>
<div class="floating-calculator">
  <div class="screen">143</div>
  <div class="buttons">
    <div></div><div></div><div></div><div></div>
    <div></div><div></div><div></div><div></div>
    <div></div><div></div><div></div><div></div>
  </div>
</div>

      <div class="typing">NotaTrack v1.0</div>
    </div>
    <div class="pixel-stand"></div>
  </div>

  <!-- Pixel keyboard below the computer -->
  <div class="pixel-keyboard"></div>

    <!-- Pixel character -->
  <div class="pixel-character">
    <img src="{{ asset('img/Me.png') }}" alt="Pixel Character" />
  </div>

   <div class="coffee">
    <img src="{{ asset('img/coffee.png') }}" alt="coffee" />
  </div>

  <div class="footer">Made By Nathasya Aulia Putri</div>
</div>


    <!-- Right panel: Welcome + buttons -->
    <div class="right-panel">
      <h1>Welcome to NotaTrack</h1>
      <p>Input barang, generate nota, and export to Excel — fast and simple.</p>
      <a href="{{ route('login') }}" class="btn">Login</a>
      <a href="{{ route('register') }}" class="btn">Register</a>
    </div>
  </div>
</body>
</html>
