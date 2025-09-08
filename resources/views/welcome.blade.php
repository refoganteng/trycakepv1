<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minimalist Navbar</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
</head>

<body>

  {{-- Navbar --}}
  <nav class="bg-white border-gray-200 border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#"
        class="flex items-center space-x-3 rtl:space-x-reverse hover:underline hover:text-pink-700">
        <span class="self-center text-2xl font-semibold whitespace-nowrap">Cakep!</span>
      </a>
      <button data-collapse-toggle="navbar-dropdown" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
        aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul
          class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
          <li>
            <a href="#"
              class="block py-2 px-3 text-white bg-neutral-700 rounded-sm md:bg-transparent md:text-neutral-700 md:p-0 hover:text-pink-700 hover:underline"
              aria-current="page">Home</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-white bg-neutral-700 rounded-sm md:bg-transparent md:text-neutral-700 md:p-0 hover:text-pink-700 hover:underline">Surat</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-white bg-neutral-700 rounded-sm md:bg-transparent md:text-neutral-700 md:p-0 hover:text-pink-700 hover:underline">Agenda</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-white bg-neutral-700 rounded-sm md:bg-transparent md:text-neutral-700 md:p-0 hover:text-pink-700 hover:underline">Pencairan</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-white bg-neutral-700 rounded-sm md:bg-transparent md:text-neutral-700 md:p-0 hover:text-pink-700 hover:underline">Aplikasi BPS</a>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
              class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-pink-700 md:p-0 md:w-auto hover:underline">
              Tim Kerja
              <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" d="m1 1 4 4 4-4" />
              </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar"
              class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
              <ul class="py-2 text-sm text-gray-900" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#"
                    class="block px-4 py-2 text:neutral-900 hover:underline hover:text-pink-700">Subbag Umum</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text:neutral-900 hover:underline hover:text-pink-700"">Sosial</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text:neutral-900 hover:underline hover:text-pink-700">Produksi</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text:neutral-900 hover:underline hover:text-pink-700">Distribusi</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text:neutral-900 hover:underline hover:text-pink-700">Neraca</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text:neutral-900 hover:underline hover:text-pink-700">PTIM</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text:neutral-900 hover:underline hover:text-pink-700">Diseminasi</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text:neutral-900 hover:underline hover:text-pink-700">Statistik Sektoral</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text:neutral-900 hover:underline hover:text-pink-700">Zona Integritras</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- Hero Section --}}
  <section class="bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
      <a href="#"
        class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full hover:bg-gray-200"
        role="alert">
        <span class="text-xs bg-pink-700 rounded-full text-white px-4 py-1.5 mr-3">Hallo, Cakepers! </span>
        <span class="text-sm font-medium">Selamat datang di website</span>
      </a>
      <h1
        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
        <i>Catalog of Archives</i> <br> BPS Kabupaten Kepahiang
      </h1>
      <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">
        Kita jargon dulu: BPS Kepahiang! CAKEP! Cerdaz, Kreatip, Inopatip!
      </p>
      <div
        class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        <a href="#"
          class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-neutral-700 hover:bg-neutral-800 focus:ring-4 focus:ring-neutral-300">
          Learn more
          <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
        <a href="#"
          class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
          <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
            </path>
          </svg>
          Watch video
        </a>
      </div>
    </div>
  </section>

</body>

</html>
