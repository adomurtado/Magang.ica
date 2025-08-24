<nav class="bg-[#112233] shadow-lg sticky top-0 z-50">
  <div class="container mx-auto flex items-center justify-between px-4 py-3">
    <a href="/">
        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
    </a>

    <ul class="hidden md:flex items-center space-x-6 text-white font-medium">
      <li><a href="index.html" class="hover:text-[#d4af37] transition">Home</a></li>

      <li class="relative">
        <a href="#" id="profilBtn" class="hover:text-[#d4af37] font-semibold transition">
          Profil <i class="bi bi-caret-down-fill ms-1"></i>
        </a>
        <ul id="profilMenu" class="absolute hidden bg-[#0c1c3d] rounded-md mt-2 w-44 shadow-lg z-50">
          <li><a href="{{ route('sejarah') }}" class="block px-4 py-2 hover:bg-[#1c2f5a] hover:text-[#D4AF37]">Tentang Sejarah</a></li>
          <li><a href="{{ route('visi-misi') }}" class="block px-4 py-2 hover:bg-[#1c2f5a] hover:text-[#D4AF37]">Visi & Misi</a></li>
          <li><a href="{{ route('program') }}" class="block px-4 py-2 hover:bg-[#1c2f5a] hover:text-[#D4AF37]">Program</a></li>
        </ul>
      </li>

      <li><a href="{{ route('gallery') }}" class="hover:text-[#d4af37] transition">Galeri</a></li>
      <li><a href="{{ route('showcase') }}" class="hover:text-[#d4af37] transition">Showcase</a></li>
      <li><a href="{{ route('login') }}" class="bg-[#d4af37] text-black px-4 py-2 rounded-md font-semibold hover:bg-yellow-500 transition">Login</a></li>
      <li><a href="{{ route('register') }}" class="bg-[#d4af37] text-black px-4 py-2 rounded-md font-semibold hover:bg-yellow-500 transition">Register</a></li>
    </ul>

    <button id="mobileBtn" class="md:hidden flex flex-col justify-between w-6 h-6 focus:outline-none">
      <span class="block h-0.5 w-full bg-white"></span>
      <span class="block h-0.5 w-full bg-white"></span>
      <span class="block h-0.5 w-full bg-white"></span>
    </button>
  </div>

  <ul id="mobileMenu" class="md:hidden hidden bg-[#112233] text-white px-4 pt-2 pb-4 space-y-1">
    <li><a href="{{ route('home') }}" class="block px-2 py-2 hover:bg-[#1c2f5a] rounded">Home</a></li>

    <li class="relative">
      <button id="mobileDropdownBtn" class="w-full flex justify-between items-center px-2 py-2 hover:bg-[#1c2f5a] rounded">
        Profil
        <svg class="w-4 h-4 ml-2 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <ul id="mobileDropdown" class="hidden pl-4 mt-1 space-y-1">
        <li><a href="{{ route('sejarah') }}" class="block px-2 py-2 hover:bg-[#1c2f5a] rounded">Tentang Sejarah</a></li>
        <li><a href="{{ route('visi-misi') }}" class="block px-2 py-2 hover:bg-[#1c2f5a] rounded">Visi & Misi</a></li>
        <li><a href="{{ route('program') }}" class="block px-2 py-2 hover:bg-[#1c2f5a] rounded">Program</a></li>
      </ul>
    </li>

    <li><a href="{{ route('gallery') }}" class="block px-2 py-2 hover:bg-[#1c2f5a] rounded">Galeri</a></li>
    <li><a href="{{ route('showcase') }}" class="block px-2 py-2 hover:bg-[#1c2f5a] rounded">Showcase</a></li>
    <li><a href="{{ route('login') }}" class="block px-2 py-2 bg-[#d4af37] text-black rounded hover:bg-yellow-500">Login</a></li>
    <li><a href="{{ route('register') }}" class="block px-2 py-2 bg-[#d4af37] text-black rounded hover:bg-yellow-500">Register</a></li>
  </ul>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const profilBtn = document.getElementById('profilBtn');
const profilMenu = document.getElementById('profilMenu');

  profilBtn.addEventListener('click', e => {
    e.stopPropagation();
  profilMenu.classList.toggle('hidden');
});
document.addEventListener('click', () => {
  if(!profilMenu.classList.contains('hidden')) {
    profilMenu.classList.add('hidden');
  }
});

  const mobileBtn = document.getElementById('mobileBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  mobileBtn.addEventListener('click', ()=> mobileMenu.classList.toggle('hidden'));

  const mobileDropdownBtn = document.getElementById('mobileDropdownBtn');
  const mobileDropdown = document.getElementById('mobileDropdown');
  const arrow = mobileDropdownBtn.querySelector('svg');
  mobileDropdownBtn.addEventListener('click', e => {
    e.stopPropagation();
    mobileDropdown.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');
  });

  mobileDropdown.querySelectorAll('a').forEach(link=>{
    link.addEventListener('click', ()=>{
      mobileMenu.classList.add('hidden');
      mobileDropdown.classList.add('hidden');
      arrow.classList.remove('rotate-180');
    });
  });
});
</script>
