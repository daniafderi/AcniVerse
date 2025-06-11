<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AcneScan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">

  <!-- Header -->
  <header class="bg-[#E07A91] text-gray-800 h-20">
    <div class="max-w-7xl mx-auto px-4 h-full flex justify-between items-center">
      
      <!-- Logo + Text -->
      <div class="flex items-center space-x-0.5 text-2xl font-bold">
        <img src="images/logo-acne.png" alt="Logo AcneScan" class="h-14 w-14 object-contain" />
        <span>AcniVerse</span>
      </div>

      <!-- Navigation as buttons inside forms -->
      <div class="flex space-x-4 text-lg font-medium">
        <a href="{{ route('home') }}" rel="nofollow" class="hover:text-black px-3 py-1 text-[#3e3e3e]">Beranda</a>
        <a href="#jenis-jerawat" rel="nofollow" class="bg-pink-200 px-3 py-1 rounded-lg text-[#3E3E3E]">Jenis Jerawat</a>
        <a href="{{ route('scan') }}" rel="nofollow" class="hover:text-black px-3 py-1 text-[#3E3E3E]">Deteksi</a>
      </div>
    </div>
  </header>

</body>
</html>
