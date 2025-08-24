
<x-app-layout>
<section class="py-16 bg-[#112233] text-white" style="font-family: 'Cinzel', serif;">
  <div class="container mx-auto flex flex-col md:flex-row items-center gap-8">
    
    <div class="flex-1 text-center md:text-left">
      <h1 class="text-4xl md:text-6xl font-bold drop-shadow-lg leading-tight">
        Halo Selamat<br>Datang Di Dunia<br>Petualangan <br>Cikara Studio
      </h1>
      <p class="muted mt-4">Cikara Studio</p>
      <a href="daftar.html" class="btn btn-warning mt-6 px-5 py-2 fw-bold">Daftar</a>
    </div>
    <div class="flex-1 flex justify-center">
      <img src="gambar/gambar sej 1.jpg" alt="Hero Image" class="max-w-sm md:max-w-md rounded-xl shadow-lg">
    </div>
  </div>
</section>

<section class="py-16 bg-[#112233] text-white font-sans">
  <div class="container mx-auto px-4">
    
    <div class="grid md:grid-cols-2 gap-8 items-center mb-16">
      <div class="rounded-xl overflow-hidden shadow-lg">
        <a href="https://youtu.be/ExlXsQBhlNg?si=lMYXI52TbeQ9xXjR" target="_blank">
          <img src="gambar/gambar game.jpg" 
               alt="Featured Course" 
               class="w-full h-full object-cover">
        </a>
      </div>
    
      <div>
        <img src="gambar/images.jpeg" alt="Featured Course" class="mb-2 w-32"> 
        <h2 class="text-3xl md:text-4xl font-bold mt-2">Mulailah Langkah Pertamamu untuk menjadi <span class="text-yellow-400">Game Developer</span></h2>
        <p class="text-gray-300 mt-4">Jelajahi video pembelajaran game development yang tersedia.</p>
        <ul class="mt-4 space-y-2 text-gray-300">
          <li class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-green-400"></i> Fundamental</li>
          <li class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-green-400"></i> Beragam Studi Kasus</li>
          <li class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-green-400"></i> Bisa Langsung Praktek</li>
          <li class="flex items-center gap-2"><i class="bi bi-check-circle-fill text-green-400"></i> 10+ Video Pembelajaran</li>
        </ul>
        <a href="https://youtu.be/5wnZU9Ov_0c?si=ENDcPIi4E2kt3YiK" target="_blank" 
           class="inline-block mt-6 px-6 py-3 bg-yellow-500 text-[#112233] font-semibold rounded-lg shadow hover:bg-yellow-600 transition">
          Mulai Belajar
        </a>
      </div>
    </div>

    <div>
      <h3 class="text-2xl font-bold mb-8 text-center text-white">Kursus Game Development</h3>
      <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
        
        <a href="https://youtu.be/5wnZU9Ov_0c?si=u-G9Znd43VRPhSAR" target="_blank" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="gambar/2d.jpg" alt="Kursus 1" class="w-full h-40 object-cover">
          <div class="p-4 text-gray-800">
            <span class="text-xs uppercase text-black-500">Game Development</span>
            <h4 class="text-lg font-semibold mt-2">Membuat Game 2D Susun Huruf di Unity 3D</h4>
            <div class="flex items-center justify-between mt-4 text-gray-500 text-sm">
              <span><i class="bi bi-bar-chart"></i> Beginner</span>
              <span><i class="bi bi-clock"></i> 1h</span>
            </div>
          </div>
        </a>

        <a href="https://youtu.be/icCrHYfqsSg?si=cKbuT--sNup-LMiV" target="_blank" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="gambar/kuis.jpg" alt="Kursus 2" class="w-full h-40 object-cover">
          <div class="p-4 text-gray-800">
            <span class="text-xs uppercase text-black-500">Game Development</span>
            <h4 class="text-lg font-semibold mt-2">Membuat Game Kuis Versi Drag and Drop di Unity 3D</h4>
            <div class="flex items-center justify-between mt-4 text-gray-500 text-sm">
              <span><i class="bi bi-bar-chart"></i> Beginner</span>
              <span><i class="bi bi-clock"></i> 1h 30m</span>
            </div>
          </div>
        </a>

        <!-- Card 3 -->
        <a href="https://youtu.be/DY2ttgaoNOM?si=SYdI0hDfmqHlWj6v" target="_blank" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="gambar/JSON.jpg" alt="Kursus 3" class="w-full h-40 object-cover">
          <div class="p-4 text-gray-800">
            <span class="text-xs uppercase text-black-500">Game Development</span>
            <h4 class="text-lg font-semibold mt-2">Mengambil Data JSON Dari API di UNITY 3D</h4> 
            <div class="flex items-center justify-between mt-4 text-gray-500 text-sm">
              <span><i class="bi bi-bar-chart"></i> Intermediate</span>
              <span><i class="bi bi-clock"></i> 2h</span>
            </div>
          </div>
        </a>
        <a href="https://youtu.be/DY2ttgaoNOM?si=Qv9lfjVA0HW-3xaU" target="_blank" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">
          <img src="gambar/3d.jpg" alt="Kursus 3" class="w-full h-40 object-cover">
          <div class="p-4 text-gray-800">
            <span class="text-xs uppercase text-black-500">Game Development</span>
            <h4 class="text-lg font-semibold mt-2">Membuat Game Kuis Versi Essay di Unity 3D</h4>
            <div class="flex items-center justify-between mt-4 text-gray-500 text-sm">
              <span><i class="bi bi-bar-chart"></i> Intermediate</span>
              <span><i class="bi bi-clock"></i> 2h</span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
</x-app-layout>
