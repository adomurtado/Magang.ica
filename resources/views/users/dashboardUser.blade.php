<x-apps-layout>
      <div class="flex min-h-screen">
        <x-sidebar />
    <main class="flex-1 p-6 space-y-6">
      <section id="markas" class="tab-content tab-active">
        <h2 class="text-2xl font-bold mb-4">Markas Utama</h2>
        <div class="bg-[#1c2f5a] p-6 rounded-xl">
          <div class="flex items-center space-x-6">
            <img src="https://i.ibb.co/8K7Gq8N/avatar.png" class="w-24 h-24 rounded-full border-4 border-yellow-400">
            <div>
              <h3 class="text-xl font-bold">Rizal Saputra</h3>
              <p>SMK Negeri 1 Contoh</p>
              <p>Minat: Desain</p>
              <div class="mt-2 bg-gray-700 h-4 rounded">
                <div class="bg-green-400 h-4 rounded w-3/4"></div>
              </div>
              <p class="text-sm mt-1">1.450 / 2.000 XP</p>
            </div>
            <div class="ml-auto text-center">
              <div class="w-20 h-20 rounded-full border-4 border-yellow-500 flex items-center justify-center text-xl font-bold">Lv 7</div>
              <p class="mt-2 bg-purple-700 rounded px-3">No.14</p>
            </div>
          </div>
          <div class="grid grid-cols-2 gap-4 mt-6">
            <div class="bg-[#13254a] p-4 rounded-lg">
              <h4 class="font-bold mb-2">Ringkasan Misi Harian</h4>
              <p>📜 Selesaikan desain antarmuka</p>
            </div>
            <div class="bg-[#13254a] p-4 rounded-lg">
              <h4 class="font-bold mb-2">Status Proyek</h4>
              <p>📂 Landing Page <span class="text-green-400">Berlangsung</span></p>
            </div>
          </div>
        </div>
      </section>
      <section id="misi" class="tab-content">
        <h2 class="text-2xl font-bold mb-4">Misi Harian</h2>
        <div class="bg-[#1c2f5a] p-6 rounded-xl">
          <ul class="space-y-3">
            <li>📜 Tugas dari Master</li>
            <li>🔗 Submit Link</li>
            <li>🖌️ Sketsa Ilustrasi</li>
            <li>📄 Rangkuman Laporan <span class="text-yellow-400 font-bold">+50 XP</span></li>
            <li>✅ Hadir</li>
          </ul>
        </div>
      </section>
      <section id="jurnal" class="tab-content">
        <h2 class="text-2xl font-bold mb-4">Jurnal Petualang</h2>
        <div class="bg-[#1c2f5a] p-6 rounded-xl">
          <ul class="space-y-3">
            <li>📖 Apa yang Dipelajari</li>
            <li>⚡ Kendala</li>
            <li>🛠️ Rencana</li>
          </ul>
          <p class="mt-4">XP ▬▬▬▬▬▬▬▬▬</p>
          <p>✅ Hadir</p>
        </div>
      </section>

      <section id="level" class="tab-content">
        <h2 class="text-2xl font-bold mb-4">XP & Level</h2>
        <div class="bg-[#1c2f5a] p-6 rounded-xl text-center">
          <div class="flex justify-center space-x-6 mb-6">
            <div class="w-12 h-12 bg-yellow-600 rounded-full"></div>
            <div class="w-12 h-12 bg-gray-400 rounded-full"></div>
            <div class="w-12 h-12 bg-yellow-400 rounded-full"></div>
            <div class="w-12 h-12 bg-blue-400 rounded-full"></div>
            <div class="w-12 h-12 bg-indigo-700 rounded-full"></div>
          </div>
          <p class="font-bold text-xl">Level 16</p>
          <div class="bg-gray-700 h-4 rounded mt-2">
            <div class="bg-green-400 h-4 rounded w-3/4"></div>
          </div>
          <p class="mt-1">3.450 / 4.000 XP</p>
        </div>
      </section>
<section id="scroll" class="tab-content">
  <h2 class="text-2xl font-bold mb-6 text-center">Kekuatan Scroll Of Mastery</h2>

  <div class="certificate-container bg-[#0f1c36] p-4 rounded-lg flex justify-center">
    <img src="https://i.ibb.co/QKq3y6Z/certificate-sample.png" 
         alt="Certificate"
         class="certificate-img rounded-lg shadow-lg border-4 border-gray-200">
  </div>
  <div class="text-center mt-6 no-print">
    <button onclick="window.print()" 
      class="px-6 py-2 bg-yellow-500 text-black font-bold rounded-lg hover:bg-yellow-400">
      Unduh Sertifikat
    </button>
  </div>
</section>
</main>
  </div>

<style>
.certificate-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.certificate-img {
  max-width: 100%;
  height: auto;
}

@media print {
  body * {
    visibility: hidden;
  }
  #scroll, #scroll * {
    visibility: visible; 
  }
  #scroll {
    position: absolute;
    left: 0;
    top: 0;
    width: 210mm;  
    height: 297mm;  
    padding: 20mm;
    background: white;
  }
  .no-print {
    display: none !important;
  }
}
body { background-color: #0f1c36; }
  .tab-content { display: none; }
  .tab-active { display: block; }
</style>


      <section id="feedback" class="tab-content">
        <h2 class="text-2xl font-bold mb-4">Feedback dari Master</h2>
        <div class="bg-[#1c2f5a] p-6 rounded-xl">
          <p class="font-bold">Mentor: Rizal Saputra</p>
          <textarea class="w-full mt-3 p-2 rounded text-black" rows="4" placeholder="Tulis feedback..."></textarea>
          <button class="mt-3 px-4 py-2 bg-yellow-500 text-black rounded">Kirim</button>
        </div>
      </section>

 
<section id="profil" class="tab-content">
  <h2 class="text-2xl font-bold mb-6 text-center">Profil & Riwayat Petualangan</h2>

  <!-- Profil Peserta -->
  <div class="mb-6">
    <button class="px-4 py-2 border border-yellow-500 text-yellow-500 rounded-lg">Profil Peserta</button>
  </div>

  <div class="bg-[#0f1c36] border-2 border-yellow-500 p-4 rounded-lg mb-6 flex items-center space-x-4">
    <img src="https://i.ibb.co/8K7Gq8N/avatar.png" class="w-20 h-20 rounded-full border-2 border-yellow-500">
    <div>
      <p class="font-bold">Valery Alexander</p>
      <p>Batch 4</p>
      <p>Tanggal Masuk : 01 Juli 2025</p>
      <p>Bidang Minat : Desain</p>
    </div>
  </div>

  <!-- Riwayat Misi -->
  <div class="bg-[#0f1c36] border-2 border-yellow-500 p-4 rounded-lg mb-6">
    <h4 class="font-bold mb-3">Riwayat Misi Yang Diselesaikan</h4>
    <table class="w-full text-left border-collapse">
      <thead>
        <tr>
          <th class="pb-2">Misi</th>
          <th class="pb-2">Tanggal</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Misi 1</td><td>01 Juli 2025</td></tr>
        <tr><td>Misi 2</td><td>07 Juli 2025</td></tr>
        <tr><td>Misi 3</td><td>05 Agustus 2025</td></tr>
      </tbody>
    </table>
  </div>

  <!-- Status Proyek -->
  <div class="bg-[#0f1c36] border-2 border-yellow-500 p-4 rounded-lg mb-6 flex items-center justify-between">
    <p class="font-bold">Status Proyek</p>
    <span class="text-green-400 font-bold text-lg">Selesai</span>
  </div>

  <!-- Nilai Akhir & Unduh Sertifikat -->
<div class="text-center">
  <p class="px-4 py-2 border border-yellow-500 text-yellow-500 rounded-lg mb-6 inline-block">
    Nilai Akhir & Unduh Sertifikat
  </p>
  <br>
 
  <button 
    onclick="document.getElementById('scroll').scrollIntoView({behavior: 'smooth'}); setTimeout(()=>window.print(),1000);" 
    class="px-6 py-2 bg-yellow-500 text-black font-bold rounded-lg hover:bg-yellow-400">
    Cetak / Unduh
  </button>
</div>

    </main>
  </div>
</x-apps-layout>