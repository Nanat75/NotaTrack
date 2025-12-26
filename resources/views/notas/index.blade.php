<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NotaTrack | Daftar Nota</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

<!-- CSS Style -->
    <style>
    body {
      margin: 0;
      font-family: "Inter", sans-serif;
      background: linear-gradient(135deg, #f7f9fc, #d2e2f9);
      color: #2d2d2d;
    }

    html, body {
      height: 100%;        
      margin: 0;
      display: flex;
      flex-direction: column;
}

main {
  flex: 1;   
  margin-top: 80px;         
}

  header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000; 
  background: #345075;
  color: white;
  padding: 20px 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 4px solid #1e3a5f;
  box-shadow: 6px 6px 0px #999;
}


    header h1 {
      font-family: 'Press Start 2P', cursive;
      font-size: 25px;
      margin: 0;
    }

 .hero {
  text-align: center;
  padding: 60px 20px 40px;
  position: relative;
}

.hero-card {
  display: inline-block;
  max-width: 700px;
  padding: 30px 40px;
  background: #fff;
  border: 4px solid #345075;
  border-radius: 12px;
  box-shadow: 6px 6px 0px #000;
  animation: floatUp 1s ease-out;
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
}

.hero-card:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 10px 10px 0px #000;
  border-color: #1e3557; 
}

.hero h2 {
  font-family: 'Press Start 2P', cursive;
  font-size: 28px;
  color: #345075;
  margin-bottom: 15px;
}

.hero p {
  font-size: 14px;
  color: #444;
  margin-bottom: 20px;
  line-height: 1.5;
}

@keyframes floatUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

    .container {
      max-width: 1100px;
      margin: 20px auto;
      padding: 20px;
      background: #fff;
      border: 4px solid #345075;
      border-radius: 12px;
      box-shadow: 8px 8px 0px #999;
      position: relative;
      overflow: hidden;
    }

    .floating-paper {
      width: 40px;
      height: 50px;
      background: #fff;
      border: 2px solid #345075;
      position: absolute;
      top: -20px;
      right: -20px;
      transform: rotate(8deg);
      animation: sway 4s ease-in-out infinite alternate;
      opacity: 0.8;
    }

    @keyframes sway {
      from { transform: rotate(6deg) translateY(0px); }
      to { transform: rotate(-6deg) translateY(10px); }
    }
    
.actions {
  display: flex;
  justify-content: space-between; 
  align-items: center;
  margin-bottom: 20px;
  gap: 12px;
}


    .actions form {
       display: flex;
       gap: 12px;  
       align-items: center; 
    }


    .btn {
      padding: 10px 18px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
      font-size: 12px;
      border: 3px solid #345075;
      box-shadow: 3px 3px 0px #345075;
      transition: 0.2s;
    }

    .btn-add {
      background: #1f7a3d;
      color: white;
    }
    .btn-add:hover {
      background: #2da85b;
      transform: translate(-2px, -2px);
      box-shadow: 5px 5px 0px #345075;
    }

    .btn-export {
      background: #e4f0ff;
      color: #345075;
    }
    .btn-export:hover {
      background: #d0e4ff;
      transform: translate(-2px, -2px);
      box-shadow: 5px 5px 0px #345075;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fdfdfd;
      border: 3px solid #345075;
      border-radius: 8px;
      overflow: hidden;
    }

    thead {
      background: #345075;
      color: white;
      font-family: 'Press Start 2P', cursive;
      font-size: 10px;
    }

    th, td {
      padding: 12px 14px;
      font-size: 13px;
      border-bottom: 1px solid #ddd;
    }

    tbody tr:nth-child(even) {
      background: #f7faff;
    }
    tbody tr:hover {
      background: #eef4ff;
    }

    footer {
      text-align: center;
      padding: 20px;
      font-size: 10px;
      color: #777;
      background: #f0f4fa;
      border-top: 3px solid #345075;
      margin-top: 30px;
    }

.modal {
  display: none; 
  position: fixed; 
  z-index: 1000; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.5);
}

.modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 20px;
  border: 3px solid #345075;
  width: 400px;
  border-radius: 12px;
  box-shadow: 6px 6px 0px #999;
  font-size: 14px;
  backdrop-filter: blur(12px);
}

.modal-content h2 {
  margin-top: 0;
  font-size: 16px;
  color: #345075;
}

.modal-content label {
  display: block;
  margin-top: 10px;
  font-size: 13px;
  font-weight: 600;
}

.modal-content input {
  width: 97%;
  padding: 8px;
  margin-top: 5px;
  border: 2px solid #345075;
  border-radius: 6px;
  font-size: 13px;
}

.modal-content button {
  margin-top: 15px;
  width: 100%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover {
  color: #345075;
}

.empty-state {
  text-align: center;
  color: #555;
}

.empty-state img {
  width: 120px;
  opacity: 0.7;
  margin-bottom: 10px;
  filter: drop-shadow(2px 4px 6px rgba(0,0,0,0.1));
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-5px); }
}

.action-buttons {
  display: flex;
  gap: 10px; 
  justify-content: center; 
}
.action-buttons form {
  margin: 0; 
}

.falling-papers {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none; 
  z-index: -1; 
  overflow: hidden;
}

.paper {
  position: absolute;
  width: 40px;
  height: 50px;
  background: #fff;
  border: 2px solid #345075;
  box-shadow: 3px 3px 0px #999;
  opacity: 0.8;
  animation: fall linear infinite;
}

.paper::before {
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

@keyframes fall {
  0% {
    transform: translateY(-60px) rotate(0deg);
    opacity: 1;
  }
  100% {
    transform: translateY(110vh) rotate(360deg);
    opacity: 0;
  }
}

.transition-overlay {
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: #ffffff;
  opacity: 1; 
  transition: opacity 0.9s ease; 
  z-index: 9999;
  pointer-events: none;
}

.transition-overlay.hidden {
  opacity: 0;
}

    body {
      font-family: 'Press Start 2P', cursive !important;
      background: #ecf4ff !important;
    }

    header {
      box-shadow: 4px 4px 0px #000 !important;
    }

    .container {
      border-radius: 0 !important;
      box-shadow: 6px 6px 0px #000 !important;
    }

    .btn {
      font-size: 13px !important;
      border-radius: 0 !important;
      box-shadow: 3px 3px 0px #000 !important;
      font-weight: normal !important;
    }

    .btn-add:hover,
    .btn-export:hover {
      box-shadow: 5px 5px 0px #000 !important;
    }

    table {
      border-radius: 0 !important;
      box-shadow: 4px 4px 0px #000 !important;
    }

    th, td {
      font-size: 13px !important;
      border-bottom: 2px solid #345075 !important;
    }

    footer {
      font-size: 15px !important;
      color: #333 !important;
      box-shadow: 0 -3px 0 #000 !important;
    }

   .user-nav {
  display: flex;
  align-items: center;
  gap: 20px;
  font-size: 14px;
}

.username {
  font-weight: 600;
  font-size: 16px;
  color: #1e293b; 
  background: linear-gradient(135deg, #e2e8f0, #cbd5e1);
  padding: 6px 14px;
  border-radius: 10px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.12);
  transition: all 0.25s ease;
  cursor: default;
}

.username:hover {
  transform: translateY(-2px) scale(1.02);
  box-shadow: 0 5px 12px rgba(0, 0, 0, 0.18);
}

.btn, 
.btn-add {
  text-decoration: none !important; 
}

th[onclick] {
  cursor: pointer;
  user-select: none;
  transition: background 0.2s;
}

th[onclick]:hover {
  background: #1a283a; 
}

.search-box {
  position: relative;
  display: inline-block;
  width: 360px;
  margin-bottom: 15px;
}

.search-box input {
  width: 100%;
  padding: 10px 38px 10px 12px;
  font-size: 13px;
  border: 3px solid #345075;
  border-radius: 8px;
  box-shadow: 3px 3px 0px #000;
  outline: none;
  font-family: 'Press Start 2P', cursive;
  box-sizing: border-box;
}

.search-box input:focus {
  border-color: #1e3a5f;
  box-shadow: 4px 4px 0px #000;
}

.search-box .icon {
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 14px;
  color: #345075;
  pointer-events: none;
}

.stats-dashboard {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 18px;
  margin: 25px 0;
}

.stat-card {
  background: linear-gradient(135deg, #f8fafc, #e2e8f0);
  border: 3px solid #345075;
  border-radius: 10px;
  padding: 18px;
  text-align: center;
  box-shadow: 4px 4px 0px #000;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.stat-card:hover {
  transform: translate(-3px, -3px);
  box-shadow: 6px 6px 0px #000;
}

.stat-title {
  font-size: 12px;
  font-weight: bold;
  color: #345075;
  margin-bottom: 8px;
  font-family: 'Press Start 2P', cursive;
}

.stat-value {
  font-size: 16px;
  font-weight: 700;
  color: #1a1a1a;
}

.toast-custom {
  position: fixed;
  bottom: 20px;
  right: 20px;
  min-width: 240px;
  max-width: 320px;
  padding: 10px 14px;
  border: 2px solid #000;
  border-radius: 6px;
  background: #2da85b;
  color: #fff;
  font-family: 'Press Start 2P', cursive;
  font-size: 12px;
  line-height: 1.5;
  box-shadow: 3px 3px 0px #000;
  display: flex;
  align-items: flex-start;
  gap: 8px;
  opacity: 0;
  transform: translateY(15px);
  transition: all 0.3s ease-in-out;
  z-index: 2000;
}

.toast-custom.show {
  opacity: 1;
  transform: translateY(0);
}

.toast-success {
  background: #2da85b;
}

.toast-error {
  background: #e14d4d;
}

.toast-icon {
  font-size: 14px;
  flex-shrink: 0;
  margin-top: 2px;
}

.toast-body {
  flex-grow: 1;
}

.mascot-sit {
  position: absolute;
  left: 320px;   
  top: 130px;     
  width: 230px;  
  height: auto;
  image-rendering: pixelated; 
  z-index: 10; 
}

.speech-bubble.thought {
  position: absolute;
  top: 80px;          
  left: 150px;       
  width: 230px;
  height: 180px;
  display: flex;      
  justify-content: center;
  align-items: center;
  padding: 16px;       
  pointer-events: none;
  animation: floatUp 1s ease-out;
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

.site-footer {
  position: relative;          
  text-align: center;
  padding: 20px 0 40px;        
  background: transparent;     
  font-size: 15px;
  color: #333;
}

.paper-pile {
  position: absolute;
  bottom: 90px;                  
  left: 80px;                  
  transform: translateX(-50%);
  width: 200px;               
  height: auto;
  image-rendering: pixelated;               
  pointer-events: none;        
  z-index: 1;                 
}

.paper-pile1 {
  position: absolute;
  bottom: 90px;                  
  left: 220px;                  
  transform: translateX(-50%) scaleX(-1); 
  width: 180px;               
  height: auto;
  image-rendering: pixelated;
  opacity: 0.4;                
  pointer-events: none;        
  z-index: -1;                 
}

.paper-pile2 {
  position: absolute;
  bottom: 90px;                  
  right: -100px;                  
  transform: translateX(-50%);
  width: 200px;               
  height: auto;
  image-rendering: pixelated;               
  pointer-events: none;        
  z-index: 1;                 
}

.paper-pile3 {
  position: absolute;
  bottom: 90px;                  
  right: 50px;                  
  transform: translateX(-50%) scaleX(-1); 
  width: 160px;               
  height: auto;
  image-rendering: pixelated;
  opacity: 0.4;                
  pointer-events: none;        
  z-index: -1;                 
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
</head>
<body>

   <!-- Transtition Section -->
  <div class="transition-overlay"></div>

  <!-- Falling paper background -->
<div class="falling-papers" id="fallingPapers"></div>

<!-- Header -->
 <header>
  <h1>NotaTrack</h1>
  <nav class="user-nav">
    <span class="username">👤 {{ Auth::user()->name ?? 'Guest' }}</span>

   <!-- Exit Button -->
<button type="button" class="btn btn-add" style="background:#bb4141;" onclick="openExitModal()">
  Exit
</button>

  </nav>
</header>
      <main>

  <!-- Hero Section -->
<section class="hero">
  <div class="hero-card">
    <h2>Daftar Nota</h2>
    <p>Kelola dan pantau semua nota barang Anda dengan mudah dan profesional.</p>
  </div>

  <img src="{{ asset('img/mr.pepbot.png') }}" alt="Mascot" class="mascot-sit">

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
    <!-- tail circles (moved to right side) -->
    <circle cx="295" cy="165" r="12" fill="#fff" stroke="#333" stroke-width="4"/>
    <circle cx="318" cy="190" r="8"  fill="#fff" stroke="#333" stroke-width="4"/>
  </svg>
  <div class="bubble-content">
    Halo, {{ Auth::user()->name }}! Siap mengatur nota hari ini?
  </div>
</div>
</section>

<div class="container">

    <!-- Filter Section -->
<div class="actions">
    <form method="GET" action="{{ route('notas.index') }}" style="display:flex; justify-content:space-between; width:100%; align-items:center;">
        
        <!-- Left side: Per Page -->
        <div class="per-page">
            <label style="font-size:13px; display:flex; align-items:center; gap:5px;">
                Tampilkan:
                <select name="per_page" onchange="this.form.submit()" class="btn btn-export">
                    <option value="10" {{ request('per_page',10)==10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request('per_page')==25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request('per_page')==50 ? 'selected' : '' }}>50</option>
                    <option value="100" {{ request('per_page')==100 ? 'selected' : '' }}>100</option>
                </select>
                per halaman
            </label>
        </div>

        <!-- Right side: Filters + Export + Add -->
        <div class="right-controls" style="display:flex; gap:12px; align-items:center;">
            <!-- Filter Tahun -->
            <select name="year" onchange="this.form.submit()" class="btn btn-export">
                <option value="">-- Pilih Tahun --</option>
                @foreach($years as $year)
                    <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                        {{ $year }}
                    </option>
                @endforeach
            </select>

            <!-- Filter Bulan -->
            <select name="month" onchange="this.form.submit()" class="btn btn-export">
                <option value="">-- Pilih Bulan --</option>
                @foreach($months as $key => $month)
                    <option value="{{ $key }}" {{ request('month') == $key ? 'selected' : '' }}>
                        {{ $month }}
                    </option>
                @endforeach
            </select>

            <!-- Export Button -->
            <button type="button" class="btn btn-export" onclick="openExportModal()">
                📥 Export
            </button>

            <!-- Tambah Nota -->
            <a href="{{ route('notas.create') }}" class="btn btn-add">+ Tambah Nota</a>

        </div>
    </form>
</div>

<!-- Stats Dashboard -->
<div class="stats-dashboard">
    <div class="stat-card">
        <div class="stat-title">Total Nota</div>
        <div class="stat-value">{{ $stats['total_notas'] }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-title">Total Spending</div>
        <div class="stat-value">Rp{{ number_format($stats['total_spending'], 0, ',', '.') }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-title">Average Spending</div>
        <div class="stat-value">Rp{{ number_format($stats['avg_spending'], 0, ',', '.') }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-title">Highest Spending</div>
        <div class="stat-value">Rp{{ number_format($stats['max_spending'], 0, ',', '.') }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-title">Lowest Spending</div>
        <div class="stat-value">Rp{{ number_format($stats['min_spending'], 0, ',', '.') }}</div>
    </div>
</div>

<!-- Search Actions -->
<div class="search-box">
  <input type="text" id="searchInput" placeholder="Cari nota...">
  <span class="icon">🔍</span>
</div>

    <!-- Table -->
<table id="notaTable">
  <thead>
    <tr>
      <th onclick="sortTable(0)">Tanggal Masuk ⬍</th>
      <th onclick="sortTable(1)">Nama Barang ⬍</th>
      <th onclick="sortTable(2)">Nama Vendor ⬍</th>
      <th onclick="sortTable(3)">Quantity ⬍</th>
      <th onclick="sortTable(4)">Harga ⬍</th>
      <th onclick="sortTable(5)">Total Harga ⬍</th>
      <th>Aksi</th>
    </tr>
  </thead>
        <tbody>
           @forelse($notas as $nota)
<tr>
    <td>
        <input type="checkbox" name="selected_notas[]" value="{{ $nota->id }}">
        {{ $nota->tanggal_masuk }}
    </td>
    <td>{{ $nota->nama_barang }}</td>
    <td>{{ $nota->nama_vendor }}</td>
    <td>{{ $nota->quantity }}</td>
    <td>{{ number_format($nota->harga, 2) }}</td>
    <td>{{ number_format($nota->total_harga, 2) }}</td>
    <td>

    <div class="action-buttons">
        <!-- Update -->
        <button type="button" class="btn btn-export"
             onclick="openEditModal('{{ $nota->id }}', '{{ $nota->nama_barang }}', '{{ $nota->nama_vendor }}', '{{ $nota->quantity }}', '{{ $nota->harga }}', '{{ $nota->tanggal_masuk }}')">
            ✏ Update
        </button>

        <!-- Delete -->
<form action="{{ route('notas.destroy', $nota->id) }}" method="POST" class="delete-form">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-add" style="background:#a23737"
            onclick="openDeleteModal(this.form)">
        🗑 Delete
    </button>
</form>
    </div>
</td>
</tr>

<!-- Empty -->
@empty

<tr id="noResultsRow">
  <td colspan="7" style="text-align:center; padding:30px;">
    <div class="empty-state">
      <img src="https://cdn-icons-png.flaticon.com/512/7486/7486795.png" 
           alt="No data" class="empty-img">
      <p>Tidak ada nota yang cocok dengan pencarian.</p>
    </div>
  </td>
</tr>
@endforelse
        </tbody>
    </table>
    </form>
</div>

<!-- Pagination -->
@if($hasFilter && $notas->count())
    <div class="pagination-wrapper" style="margin-top: 25px; display:flex; justify-content:center;">
        {{ $notas->links('pagination::bootstrap-5') }}
    </div>
@endif

<!-- ===== EDIT MODAL ===== -->
<div id="editModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeEditModal()">&times;</span>
    <h2>Edit Nota</h2>

    <form id="editForm" method="POST" action="">
      @csrf
      @method('PUT')

      <input type="hidden" name="id" id="editId">

      <label>Tanggal Masuk:</label>
      <input type="date" name="tanggal_masuk" id="editTanggalMasuk" required>

      <label>Nama Barang:</label>
      <input type="text" name="nama_barang" id="editNamaBarang" required>

      <label>Nama Vendor:</label>
      <input type="text" name="nama_vendor" id="editNamaVendor" required>

      <label>Quantity:</label>
      <input type="number" name="quantity" id="editQuantity" required>

      <label>Harga:</label>
      <input type="number" step="0.01" name="harga" id="editHarga" required>

      <button type="submit" class="btn btn-add">💾 Simpan</button>
    </form>
  </div>
</div>

<!-- ===== EXPORT MODAL ===== -->
<div id="exportModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeExportModal()">&times;</span>
    <h2>Export Options</h2>

    <form id="exportForm" method="POST">
      @csrf

      <label for="range">Choose Range:</label>
      <select name="range" id="range" onchange="toggleRangeInputs()" class="btn btn-export">
        <option value="all">All Data</option>
        <option value="month">Per Month</option>
        <option value="week">Per Week</option>
        <option value="selected">Selected Only</option> <!-- 🔹 new -->
      </select>

      <!-- Month Picker -->
      <div id="monthInput" style="display:none; margin-top:10px;">
        <label for="month">Select Month:</label>
        <input type="month" name="month" class="btn btn-export">
      </div>

      <!-- Week Picker -->
      <div id="weekInput" style="display:none; margin-top:10px;">
        <label for="week">Select Week:</label>
        <input type="week" name="week" class="btn btn-export">
      </div>

      <!-- Hidden Selected IDs -->
     <input type="hidden" name="ids" id="selectedNotasInput">

      <button type="submit" class="btn btn-add" style="margin-top:10px;">
        📥 Export
      </button>
    </form>
  </div>
</div>


<!-- ===== DELETE CONFIRM MODAL ===== -->
<div id="deleteModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeDeleteModal()">&times;</span>
    <h2>⚠ Konfirmasi Hapus</h2>
    <p>Apakah Anda yakin ingin menghapus nota ini? Tindakan ini tidak dapat dibatalkan.</p>

    <div style="display:flex; gap:10px; margin-top:15px;">
      <button class="btn btn-add" style="background:#a23737; flex:1;" onclick="confirmDelete()">
        Ya, Hapus
      </button>
      <button class="btn btn-export" style="flex:1;" onclick="closeDeleteModal()">
        Batal
      </button>
    </div>
  </div>
</div>

<!-- Exit Modal -->
<div id="exitModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeExitModal()">&times;</span>
    <h2>Konfirmasi Keluar</h2>
    <p>Apakah Anda yakin ingin keluar dari halaman ini?</p>

  <div style="display:flex; gap:10px; margin-top:15px;">
  <form action="{{ url('/') }}" method="GET" style="flex:1;">
    <button type="submit" class="btn btn-add" style="background:#bb4141; width:100%;">
      Ya, Keluar
    </button>
  </form>
  <button class="btn btn-export" style="flex:1; width:100%;" onclick="closeExitModal()">
    Batal
  </button>
</div>

  </div>
</div>

<!-- Toast Container -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
    <div id="liveToast" class="toast-custom" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex align-items-center">
            <span class="toast-icon">✅</span>
            <div class="toast-body" id="toastMessage">Message here</div>
            <button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- Nota Chart -->
<div class="chart-section" style="margin: 30px auto; padding: 20px; width: 90%; max-width: 900px; background: white; border: 2px solid #2c3e50; border-radius: 12px; box-shadow: 4px 4px #2c3e50;">
    <h3 style="font-family: 'Press Start 2P', monospace; font-size: 15px; margin-bottom: 15px; color: #2c3e50; text-align:center;">
        Grafik Pengeluaran Bulanan
    </h3>
    <canvas id="spendingChart"></canvas>
</div>
      </main>

<!-- Footer -->
<footer class="site-footer">
    <img src="{{ asset('img/paper.png') }}" alt="paper-pile" class="paper-pile">
    <img src="{{ asset('img/paper.png') }}" alt="paper-pile1" class="paper-pile1">
    <img src="{{ asset('img/paper.png') }}" alt="paper-pile2" class="paper-pile2">
    <img src="{{ asset('img/paper.png') }}" alt="paper-pile3" class="paper-pile3">
    <p>© 2025 NotaTrack. All rights reserved.</p>
</footer>

   <!-- Chart JS Library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- JS Script -->
    <script>
function openEditModal(id, namaBarang, namaVendor, quantity, harga, tanggalMasuk) {
  document.getElementById("editModal").style.display = "block";

  // Fill form
  document.getElementById("editId").value = id;
  document.getElementById("editNamaBarang").value = namaBarang;
  document.getElementById("editNamaVendor").value = namaVendor;
  document.getElementById("editQuantity").value = quantity;
  document.getElementById("editHarga").value = harga;
  document.getElementById("editTanggalMasuk").value = tanggalMasuk;

  // Set action dynamically
  document.getElementById("editForm").action = "/notas/" + id;
}

function closeEditModal() {
  document.getElementById("editModal").style.display = "none";
}

function openExportModal() {
  document.getElementById("exportModal").style.display = "block";
}

function closeExportModal() {
  document.getElementById("exportModal").style.display = "none";
}

function toggleRangeInputs() {
  let range = document.getElementById("range").value;
  document.getElementById("monthInput").style.display = (range === "month") ? "block" : "none";
  document.getElementById("weekInput").style.display = (range === "week") ? "block" : "none";
}

function createPaper() {
  const paper = document.createElement("div");
  paper.classList.add("paper");

  // random horizontal position
  paper.style.left = Math.random() * window.innerWidth + "px";

  // random animation duration & delay
  const duration = 5 + Math.random() * 5; // 5–10s
  const delay = Math.random() * 5; // 0–5s
  paper.style.animationDuration = duration + "s";
  paper.style.animationDelay = delay + "s";

  document.getElementById("fallingPapers").appendChild(paper);

  // remove after it finishes
  setTimeout(() => {
    paper.remove();
  }, (duration + delay) * 1000);
}

// continuously spawn papers
setInterval(createPaper, 1000);

const overlay = document.querySelector('.transition-overlay');

// On load → fade OUT
window.addEventListener("load", () => {
  setTimeout(() => {
    overlay.classList.add("hidden"); 
  }, 100); // tiny delay avoids flash
});

// On link click → fade IN
document.querySelectorAll("a").forEach(link => {
  link.addEventListener("click", e => {
    if (link.getAttribute("href").startsWith("#")) return;

    e.preventDefault();
    overlay.classList.remove("hidden"); // fade in to white

    // Hold slightly longer than transition for smoothness
    setTimeout(() => {
      window.location.href = link.href;
    }, 900); // transition(700ms) + 200ms "hold"
  });
});

function smoothSubmit(form) {
  // prevent double-submission / re-entrancy
  if (form.dataset.submitting === 'true') return;
  form.dataset.submitting = 'true';

  // show overlay
  const overlay = document.querySelector('.transition-overlay');
  overlay.classList.remove('hidden');

  // delay then submit — remove onsubmit attr so submit() won't re-run this handler
  setTimeout(() => {
    form.removeAttribute('onsubmit'); // prevent recursion
    form.submit(); // native submit
  }, 900);
}

let deleteFormTarget = null; // store the form to delete

function openDeleteModal(form) {
  deleteFormTarget = form;
  document.getElementById("deleteModal").style.display = "block";
}

function closeDeleteModal() {
  deleteFormTarget = null;
  document.getElementById("deleteModal").style.display = "none";
}

function confirmDelete() {
  if (!deleteFormTarget) return;

  // fade overlay then submit
  smoothSubmit(deleteFormTarget);
  closeDeleteModal();
}

function openExitModal() {
  document.getElementById("exitModal").style.display = "block";
}
function closeExitModal() {
  document.getElementById("exitModal").style.display = "none";
}

// 🔍 Search Filter
document.getElementById("searchInput").addEventListener("keyup", function() {
  let filter = this.value.toLowerCase();
  let rows = document.querySelectorAll("#notaTable tbody tr");
  let noResultsRow = document.getElementById("noResultsRow");
  let visible = 0;

  rows.forEach(row => {
    let text = row.innerText.toLowerCase();
    if (text.includes(filter)) {
      row.style.display = "";
      visible++;
    } else {
      row.style.display = "none";
    }
  });

  // show/hide "no results"
  if (visible === 0) {
    noResultsRow.style.display = "";
  } else {
    noResultsRow.style.display = "none";
  }
});

// 📊 Improved Sorting (numbers + dates handled correctly)
let sortDirection = {}; 

function sortTable(n) {
  let table = document.getElementById("notaTable");
  let rows = Array.from(table.tBodies[0].rows);
  let headers = table.rows[0].cells;

  // reset all headers (remove arrows)
  for (let i = 0; i < headers.length; i++) {
    headers[i].innerHTML = headers[i].innerHTML.replace(/ ▲| ▼/g, "");
  }

  // Default first sort is ascending
  let dir = sortDirection[n] ? (sortDirection[n] === "asc" ? "desc" : "asc") : "asc";
  sortDirection[n] = dir;

  // Add arrow indicator to clicked header
  headers[n].innerHTML += dir === "asc" ? " ▲" : " ▼";

  rows.sort((a, b) => {
    let x = a.cells[n].innerText.trim();
    let y = b.cells[n].innerText.trim();

    // Try detect number
    let xNum = parseFloat(x.replace(/[^0-9.-]+/g, ""));
    let yNum = parseFloat(y.replace(/[^0-9.-]+/g, ""));

    // Try detect date (yyyy-mm-dd or dd/mm/yyyy)
    let xDate = Date.parse(x);
    let yDate = Date.parse(y);

    if (!isNaN(xDate) && !isNaN(yDate)) {
      x = xDate; y = yDate;
    } else if (!isNaN(xNum) && !isNaN(yNum)) {
      x = xNum; y = yNum;
    } else {
      x = x.toLowerCase(); y = y.toLowerCase();
    }

    if (x < y) return dir === "asc" ? -1 : 1;
    if (x > y) return dir === "asc" ? 1 : -1;
    return 0;
  });

  rows.forEach(r => table.tBodies[0].appendChild(r));
}

  function showToast(message, type = "success") {
    let toastEl = document.getElementById("liveToast");
    let toastMessage = document.getElementById("toastMessage");
    let toastIcon = toastEl.querySelector(".toast-icon");

    // Set text
    toastMessage.innerText = message;

    // Reset style
    toastEl.classList.remove("toast-success", "toast-error");

    if (type === "success") {
        toastEl.classList.add("toast-success");
        toastIcon.textContent = "✅";
    } else {
        toastEl.classList.add("toast-error");
        toastIcon.textContent = "❌";
    }

    // Show
    toastEl.classList.add("show");

    // Auto-hide after 3s
    setTimeout(() => {
        toastEl.classList.remove("show");
    }, 3000);
}

        @if(session('success'))
        showToast("{{ session('success') }}", "success");
    @endif

    @if(session('error'))
        showToast("{{ session('error') }}", "error");
    @endif
function toggleRangeInputs() {
  const range = document.getElementById("range").value;
  document.getElementById("monthInput").style.display = range === "month" ? "block" : "none";
  document.getElementById("weekInput").style.display = range === "week" ? "block" : "none";
}

function openExportModal() {
  document.getElementById("exportModal").style.display = "block";
}

function closeExportModal() {
  document.getElementById("exportModal").style.display = "none";
}

// 🔹 Gather selected checkboxes before form submit
document.getElementById("exportForm").addEventListener("submit", function (e) {
    const range = document.getElementById("range").value;

    if (range === "selected") {
        const selected = [...document.querySelectorAll("input[name='selected_notas[]']:checked")]
            .map(cb => cb.value);

        if (selected.length === 0) {
            e.preventDefault();
            alert("Pilih minimal 1 nota untuk export!");
            return;
        }

        // 👇 put IDs into hidden input called "ids"
        document.getElementById("selectedNotasInput").value = JSON.stringify(selected);

        // send to exportSelected route
        this.action = "{{ route('notas.exportSelected') }}";
    } else {
        // fallback for all/month/week
       this.action = "{{ route('notas.export') }}";

    }
});

function searchNotas() {
  let input = document.getElementById("searchInput").value.toLowerCase();
  let rows = document.querySelectorAll("#notaTable tbody tr");
  let visible = 0;

  rows.forEach(row => {
    if (row.id === "noResultsRow") return; // skip empty-state row
    if (row.textContent.toLowerCase().includes(input)) {
      row.style.display = "";
      visible++;
    } else {
      row.style.display = "none";
    }
  });

  // show/hide empty state
  document.getElementById("noResultsRow").style.display = visible === 0 ? "" : "none";
}

document.getElementById("searchInput").addEventListener("input", searchNotas);

  // Chart js
document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById('spendingChart').getContext('2d');

    const monthlyData = @json($monthlySpending);

    // convert PHP array to chart-friendly arrays
    const labels = Object.keys(monthlyData).map(m => {
        const bulan = {
            1: 'Jan', 2: 'Feb', 3: 'Mar', 4: 'Apr',
            5: 'Mei', 6: 'Jun', 7: 'Jul', 8: 'Aug',
            9: 'Sep', 10: 'Okt', 11: 'Nov', 12: 'Des'
        };
        return bulan[m] || m;
    });

    const data = Object.values(monthlyData);

    new Chart(ctx, {
        type: 'bar', // you can try 'line' too
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Pengeluaran (Rp)',
                data: data,
                borderWidth: 2,
                borderColor: '#2c3e50',
                backgroundColor: '#a6dcef',
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    labels: {
                        color: '#2c3e50',
                        font: { family: 'Press Start 2P, monospace', size: 10 } // pixel retro style
                    }
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: '#2c3e50',
                        font: { family: 'Press Start 2P, monospace', size: 8 }
                    }
                },
                y: {
                    ticks: {
                        color: '#2c3e50',
                        font: { family: 'Press Start 2P, monospace', size: 8 }
                    }
                }
            }
        }
    });
});


</script>

</body>
</html>
