<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nota</title>

<!-- CSS Style -->
   <style>
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background: 
    linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%), 
    linear-gradient(90deg, rgba(0,0,0,0.05) 1px, transparent 1px),
    linear-gradient(rgba(0,0,0,0.05) 1px, transparent 1px);
  background-size: 20px 20px;
}
    .form-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
        min-height: 100vh;
        padding: 20px;
    }

    .character {
        position: relative;
        width: 650px;
        flex-shrink: 0;
    }

.character-box { 
    position: relative;
    background: #f0f5ff;
    border: 6px solid #333;
    padding: 24px;
    font-family: "Press Start 2P", monospace;
    font-size: 14px;
    line-height: 1.6;
    color: #222;
    
    /* Pixel-art style shadow */
    box-shadow: 4px 4px 0 #222, 8px 8px 0 rgba(0,0,0,0.3);
    border-radius: 0; 
    max-width: 400px;
    margin: 20px auto;
      animation: fadeBounce 1.4s ease forwards,
             floatSmooth 7s ease-in-out infinite 1.2s;

}

.character-box::after {
    content: "";
    position: absolute;
    bottom: 15%;
    left: 8px;
    right: 8px;
    height: 2px;
    background: repeating-linear-gradient(
        90deg,
        #222 0 8px,
        transparent 8px 16px
    );
    opacity: 0.3;
}

.character-box::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 60px;
    background: linear-gradient(to top, #d3f1f9 0%, #f0f5ff 100%);
    z-index: 0;
}
    .character img {
        width: 100%;
        height: auto;
        object-fit: contain;
        image-rendering: pixelated;
        z-index: 1;
        position: relative;
    }

.speech-bubble.thought {
  position: absolute;
  top: -13px;          
  right: 40px;       
  width: 230px;
  height: 180px;
  display: flex;      
  justify-content: center;
  align-items: center;
  padding: 16px;       
  pointer-events: none;
  animation: fadeBounce 1.2s ease;
}

.bubble-svg {
  width: 100%;
  height: 100%;
  display: block;
  filter: drop-shadow(3px 3px 4px rgba(0,0,0,0.25));
}

.bubble-content {
  position: absolute;  
  font-family: "Comic Neue", cursive;
  font-size: 13px;
  font-weight: bold;
  line-height: 1.5;
  text-align: center;
  color: #000000;
  max-width: 60%;
}

.form-card {
    background: linear-gradient(145deg, #ffffff, #f9f9f9);
    padding: 35px 40px;
    border-radius: 16px;
    border: 3px solid #345075;
    box-shadow: 6px 6px 0 #345075, 10px 10px 20px rgba(0,0,0,0.15);
    width: 100%;
    max-width: 450px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    animation: fadeBounce 1.2s ease;
}

.form-card:hover {
    transform: translateY(-5px);
    box-shadow: 8px 8px 0 #345075, 14px 14px 25px rgba(0,0,0,0.25);
}

.form-title {
    text-align: center;
    margin-bottom: 25px;   
    font-size: 24px;
    color: #345075;
    font-weight: bold;
    font-family: 'Press Start 2P', cursive;
    text-shadow: 2px 2px #c2cfe1;
    border-bottom: 3px dashed #010a15;
    padding-bottom: 12px;
}

.form-group {
    margin-bottom: 20px;   
}

.form-group label {
    display: block;
    font-size: 14px;
    margin-bottom: 6px;  
    font-weight: bold;  
    color: #345075;
}

.form-group input {
    width: 95%;          
    padding: 12px 14px;
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 15px;
    transition: all 0.25s ease;
    font-weight: bold;
    color: #1c2a3c
}

.form-group input:focus {
    border-color: #345075;
    background: #f1f4ff;
    box-shadow: 0 0 8px rgba(46, 67, 125, 0.25);
}

.btn-submit {
    display: block;
    width: 100%;
    padding: 14px;
    background: #1f7a3d;
    color: #fff;
    border: 3px solid #345075;
    border-radius: 10px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 3px 3px 0px #345075;
    transition: all 0.25s ease;
    margin-top: 15px;
}

.btn-submit:hover {
   background: #2da85b;
            transform: translate(-2px, -2px);
            box-shadow: 5px 5px 0px #345075;
}

    .back-home-wrapper {
  position: fixed;
  bottom: 20px;
  left: 20px;
  z-index: 1000;
}

.back-home-btn {
  display: inline-block;
  background-color: #4CAF50; 
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
}

.back-home-btn:hover {
  background-color: #45a049; 
  color: #eaffea;
  transform: translate(-2px, -2px);
  box-shadow: 5px 5px 0 #2e7d32;
}

.receipt {
  position: absolute;
  background: #fff;
  padding: 12px 16px;
  border: 2px solid #333;
  border-radius: 6px;
  box-shadow: 3px 3px 0 #333, 6px 6px 12px rgba(0,0,0,0.2);
  width: 200px;
  font-family: monospace;
  font-size: 13px;
  opacity: 0.9;
  animation: fadeBounce 1.2s ease forwards,
             floatSmooth 8s ease-in-out infinite 1.2s;
}

.receipt h3 {
  margin-top: 0;
  font-size: 14px;
  text-align: center;
  border-bottom: 2px dashed #333;
  padding-bottom: 3px;
}


.receipt1 {
  top: 30px;
  left: 40px;
  width: 280px;
  height: 180px;
  animation-delay: 0s, 1s;   
}

.receipt2 {
  bottom: 80px;
  left: 120px;
  animation-delay: 0s, 1s;   
}

@keyframes fadeBounce {
  0%   { opacity: 0; transform: scale(0.85) translateY(20px); }
  50%  { opacity: 1; transform: scale(1.05) translateY(-5px); }
  70%  { transform: scale(0.98) translateY(3px); }
  100% { transform: scale(1) translateY(0); }
}

@keyframes floatSmooth {
  0%, 100% { transform: translateY(0) rotate(-2deg); }
  25%      { transform: translateY(-6px) rotate(1deg); }
  50%      { transform: translateY(-12px) rotate(2deg); }
  75%      { transform: translateY(-6px) rotate(-1deg); }
}
#barang-wrapper {
    margin-top: 10px;
}

.barang-row {
    display: flex;
    gap: 10px;
    margin-bottom: 12px;
    align-items: center;
}

.barang-row input {
    flex: 1;
    padding: 10px;
    border: 2px dashed #777;
    border-radius: 0;
    font-size: 13px;
    font-family: monospace;
    background: #fff;
}

.barang-row input:focus {
    border-color: #345075;
    outline: none;
    background: #f9fcff;
}

.barang-row input::placeholder {
    color: #888;
    font-style: italic;
}

.btn-add {
    display: block;
    margin-bottom: 15px;
    padding: 10px;
    background: #345075;
    color: #fff;
    border: 2px solid #222;
    border-radius: 8px;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-add:hover {
    background: #4a68a2;
    transform: translate(-2px, -2px);
    box-shadow: 3px 3px 0 #222;
}


::-webkit-scrollbar {
  width: 14px; 
  height: 14px; 
}

::-webkit-scrollbar-track {
  background: #e2e8f0; 
  border: 3px solid #345075;
  box-shadow: inset 3px 3px 0px #000;
}

::-webkit-scrollbar-thumb {
  background: #345075; 
  border: 3px solid #e2e8f0; 
  border-radius: 0; 
  box-shadow: 3px 3px 0px #000;
}

::-webkit-scrollbar-thumb:hover {
  background: #1e3a5f; 
  box-shadow: 4px 4px 0px #000;
}

* {
  scrollbar-width: thin;
  scrollbar-color: #345075 #e2e8f0;
}



</style>

<div class="form-wrapper">

    <!-- Character Box -->
    <div class="character">
        <div class="character-box">
            <img src="{{ asset('img/me2.png') }}" alt="Character" />
        </div>
 
  
   <!-- Speech Bubble -->
<div class="speech-bubble thought">
  <svg class="bubble-svg" viewBox="0 0 340 230" aria-hidden="true">
    <!-- cloud body -->
    <path d="M75 55
             q25 -35 65 -25
             q35 -25 75 5
             q35 -5 55 25
             q30 20 20 60
             q10 35 -20 55
             q-20 25 -70 20
             q-40 15 -80 -5
             q-45 10 -70 -25
             q-35 -15 -25 -55
             q-10 -35 25 -55
             Z"
          fill="#fff" stroke="#333" stroke-width="4"/>
    <!-- tail circles -->
    <circle cx="45" cy="165" r="12" fill="#fff" stroke="#333" stroke-width="4"/>
    <circle cx="22" cy="190" r="8"  fill="#fff" stroke="#333" stroke-width="4"/>
  </svg>
  <div class="bubble-content">Silahkan input nota anda pada form tersebut:</div>
</div>
    </div>

<!-- Form Card -->
<div class="form-card">
    <h2 class="form-title"> Input Nota</h2>
    <form action="{{ route('notas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" required>
        </div>

        <div class="form-group">
            <label>Nama Vendor</label>
            <input type="text" name="nama_vendor" required>
        </div>

<div class="form-group">
  <label>Barang & Harga</label>
  <div id="barang-wrapper">
    <div class="barang-row">
      <input type="text" name="nama_barang[]" placeholder="Nama Barang" required>
      <input type="number" name="quantity[]" placeholder="Qty" min="1" required>
      <input type="number" step="0.01" name="harga[]" placeholder="Harga" required>
    </div>
  </div>
</div>

        <button type="button" onclick="addBarang()" class="btn-add">+ Tambah Barang</button>
        <button type="submit" class="btn-submit"> Simpan</button>
    </form>
</div>


  <!-- Back to landing page -->
      <div class="back-home-wrapper">
            <a href="{{ url('notas') }}" class="back-home-btn">⬅ Back to Index Page</a>
            </div>

            
   <!-- Receipt Section -->
<div class="receipt receipt1">
  <h3>Receipt</h3>
  <p>Item A ....... Rp 20.000</p>
    <p>Item B ....... Rp 15.000</p>
    <p>Item C ....... Rp 10.000</p>
    <hr>
    <p><strong>Total: Rp 45.000</strong></p>
</div>

<div class="receipt receipt2">
  <h3>Receipt</h3>
  <p>Service X - $20</p>
  <p>Fee - $3</p>
  <p>Total - $23</p>
</div>

<script>
function addBarang() {
    let wrapper = document.getElementById('barang-wrapper');
    let div = document.createElement('div');
    div.classList.add('barang-row');
    div.innerHTML = `
        <input type="text" name="nama_barang[]" placeholder="Nama Barang" required>
        <input type="number" name="quantity[]" placeholder="Qty" min="1" required>
        <input type="number" step="0.01" name="harga[]" placeholder="Harga" required>
    `;
    wrapper.appendChild(div);
}

</script>

 </body>
</html>
