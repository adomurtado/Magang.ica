<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About page</title>
</head>
<body>
  @section('content')
<section class="flex flex-col md:flex-row items-center justify-between px-12 py-20 bg-[#0A1D36]">
    <div class="text-left max-w-lg">
        <h1 class="text-4xl font-bold leading-snug">Halo Selamat Datang Di Dunia Petualangan Cikara</h1>
        <p class="mt-4 text-gray-300">Cikara Studio</p>
        <a href="/pendaftaran" class="mt-6 inline-block bg-gradient-to-r from-yellow-500 to-orange-500 text-black px-6 py-3 rounded-lg font-bold hover:opacity-90">DAFTAR</a>
    </div>
    <div class="mt-10 md:mt-0">
        <img src="/hero-character.png" alt="Hero Character" class="rounded-lg shadow-lg max-w-sm">
    </div>
</section>
@endsection
</body>
</html>
