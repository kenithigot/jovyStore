<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jovy Store</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-linear-to-r from-slate-100 to-slate-200">

  <!-- ========== HEADER ========== -->
  <header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-5 bg-slate-300">
    <nav
      class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
      <div class="lg:col-span-3 flex items-center">
        <!-- Logo -->
        <img src="{{ asset('images/logo.png') }}" alt="Store Logo" class="h-16 w-26">
        <!-- End of Logo -->
        <div class="ms-1 sm:ms-2"> </div>
      </div>

      <!-- Button Group -->
      <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
        <button type="button"
          class="size-9.5 relative flex justify-center items-center rounded-xl bg-white border border-orange-500 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none cursor-pointer">
          <span class="sr-only">Cart</span>
          <svg class="shrink-0 size-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <circle cx="8" cy="21" r="1" />
            <circle cx="19" cy="21" r="1" />
            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
          </svg>
        </button>
        <button type="button"
          class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl border border-transparent bg-orange-500 text-white hover:bg-orange-600 focus:outline-hidden focus:bg-yellow-500 transition disabled:opacity-50 disabled:pointer-events-none cursor-pointer">
          Sign in
        </button>

        <div class="lg:hidden">
          <button type="button"
            class="hs-collapse-toggle size-9.5 flex justify-center items-center text-sm font-semibold rounded-xl border bg-white border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
            id="hs-pro-hcail-collapse" aria-expanded="false" aria-controls="hs-pro-hcail" aria-label="Toggle navigation"
            data-hs-collapse="#hs-pro-hcail">
            <svg class="hs-collapse-open:hidden shrink-0 size-4 text-orange-500" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden shrink-0 size-4 text-orange-500"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>
      <!-- End Button Group -->

      <!-- Collapse -->
      <div id="hs-pro-hcail"
        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6"
        aria-labelledby="hs-pro-hcail-collapse">
        <div
          class="flex flex-col text-center gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
          <x-nav-link href="#about">About</x-nav-link>
          <x-nav-link href="#product">Product</x-nav-link>
          <x-nav-link href="#deals">Deals</x-nav-link>
          <x-nav-link href="#contact">Contact</x-nav-link>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- Hero -->
  <div class="relative overflow-hidden bg-gradient-to-l from-blue-500 via-blue-300 to-blue-400">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-16">

      <div class="grid lg:grid-cols-3 items-center gap-4">

        <!-- Image -->
        <div
          class="lg:col-span-1 absolute lg:relative top-0 left-1/2 transform -translate-x-1/2 lg:left-0 lg:translate-x-0 -z-15 lg:z-0">
          <div class="flex justify-center lg:justify-center">
            <img src="{{ asset('images/cart-banner.png') }}" alt="Cart Banner"
              class="max-w-sm drop-shadow-2xl drop-shadow-orange-500/50">
          </div>
        </div>


        <!-- Content -->
        <div class="lg:col-span-2 text-center lg:text-start">
          <!-- Title -->
          <h1 class="block text-gray-900 text-4xl/12 md:text-5xl lg:text-6xl/18 italic">
            Your Neighborhood Mini Market – Fresh, Affordable, Convenient.</h1>

          <!-- Subtitle -->
          <p class="mt-5 text-lg text-gray-800 max-w-3xl mx-auto lg:mx-0">
            From canned goods and pantry staples to daily essentials, everything you need is just around the corner.
          </p>

          <!-- Buttons -->
          <div class="mt-8 flex justify-center lg:justify-start">
            <a class="inline-flex justify-center items-center gap-x-3 text-center bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:from-violet-600 focus:to-blue-600 border border-transparent text-white text-sm font-medium rounded-full py-3 px-4"
              href="#">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>
              View Product
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- Clients -->
  <div class="max-w-[85rem] pt-10 lg:pt-14 mx-auto bg-slate-100">
    <div class="pb-16">
      <!-- Title -->
      <div class="w-full lg:w-2/3 mx-auto text-center my-6">
        <h2 class="text-gray-900 text-lg">Trusted by food producers, local distributors, and thousands of Filipino
          households.
        </h2>
      </div>
      <!-- End Title -->

      <div class="">
        <div
          class="px-10 py-3 lg:py-8 flex justify-center items-center gap-x-6 sm:gap-x-12 lg:gap-x-24 bg-gradient-to-l from-orange-500 via-orange-300 to-orange-400">
          <x-partner-logo src="{{ asset('images/beer.png') }}" class="motion-translate-y-loop-25" />
          <x-partner-logo src="{{ asset('images/burger.png') }}" class="-motion-translate-y-loop-25" />
          <x-partner-logo src="{{ asset('images/coffee.png') }}" class="motion-translate-y-loop-25" />
          <x-partner-logo src="{{ asset('images/cookie.png') }}" class="-motion-translate-y-loop-25" />
          <x-partner-logo src="{{ asset('images/lemonade.png') }}" class="motion-translate-y-loop-25" />
        </div>
      </div>
    </div>

    <div>
      <!-- Hero -->
      <div class="relative overflow-hidden">

        <div class="relative z-10">
          <div id="about" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
            <div class="max-w-2xl text-center mx-auto">
              <p
                class="inline-block text-lg font-medium bg-clip-text bg-linear-to-l from-orange-600 to-orange-500 text-transparent">
                About us - Why Shop Here
              </p>

              <!-- Title -->
              <div class="mt-5 max-w-2xl">
                <h1 class="block font-semibold text-gray-900 text-4xl md:text-5xl lg:text-6xl">
                  “Everyday Needs, One Stop Away”
                </h1>
              </div>
              <!-- End Title -->

              <div class="mt-5 max-w-3xl">
                <p class="text-lg text-gray-600">local mini market committed to providing affordable groceries, quality
                  canned goods, and daily essentials. Whether you’re restocking your pantry or picking up a quick snack,
                  we’ve got you covered.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Hero -->
    </div>
    <!-- Slider -->
    <div class="px-4 sm:px-6 lg:px-8 py-10">
      <div data-hs-carousel='{
      "loadingClasses": "opacity-0",
       "isAutoPlay": true
    }' class="relative">
        <div
          class="hs-carousel relative overflow-hidden w-full h-120 md:h-[calc(100vh-106px)]  bg-gray-100 rounded-2xl">
          <div
            class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
            <!-- Item -->
            <div class="hs-carousel-slide relative w-full">
              <img src="{{ asset('images/shop-banner1.jpg') }}" alt="Shop Banner"
                class="w-full h-120 md:h-[calc(100vh-106px)] object-cover object-center">

              <div class="absolute bottom-0 left-0 w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                <span class="block text-white">Jovy Store</span>
                <span class="block text-white text-xl md:text-3xl bg-orange-400/50 px-2 rounded">
                  Carries over 500 essential items — all in one convenient stop!
                </span>
                <div class="mt-5">
                  <a href="#"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                    Shop Now
                  </a>
                </div>
              </div>
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="hs-carousel-slide relative w-full">
              <img src="{{ asset('images/shop-banner2.jpg') }}" alt="Shop Banner"
                class="w-full h-120 md:h-[calc(100vh-106px)] object-cover object-center">

              <div class="absolute bottom-0 left-0 w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                <span class="block text-white">Jovy Store</span>
                <span class="block text-white text-xl md:text-3xl bg-orange-400/50 px-2 rounded">
                  Restock daily to keep your favorites fresh and ready anytime!
                </span>
                <div class="mt-5">
                  <a href="#"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                    Shop Now
                  </a>
                </div>
              </div>
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="hs-carousel-slide relative w-full">
              <img src="{{ asset('images/shop-banner3.jpg') }}" alt="Shop Banner"
                class="w-full h-120 md:h-[calc(100vh-106px)] object-cover object-center">

              <div class="absolute bottom-0 left-0 w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                <span class="block text-white">Jovy Store</span>
                <span class="block text-white text-xl md:text-3xl bg-orange-400/50 px-2 rounded">
                  Products come from trusted local suppliers — fresher and more affordable!
                </span>
                <div class="mt-5">
                  <a href="#"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                    Shop Now
                  </a>
                </div>
              </div>
            </div>
            <!-- End Item -->
          </div>
        </div>

        <!-- Arrows -->
        <button type="button"
          class="hs-carousel-prev hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-s-2xl focus:outline-hidden focus:bg-white/20">
          <span class="text-2xl" aria-hidden="true">
            <svg class="shrink-0 size-3.5 md:size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
              </path>
            </svg>
          </span>
          <span class="sr-only">Previous</span>
        </button>

        <button type="button"
          class="hs-carousel-next hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-e-2xl focus:outline-hidden focus:bg-white/20">
          <span class="sr-only">Next</span>
          <span class="text-2xl" aria-hidden="true">
            <svg class="shrink-0 size-3.5 md:size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
              </path>
            </svg>
          </span>
        </button>
        <!-- End Arrows -->
      </div>
    </div>
    <!-- End Slider -->
    <div class="pb-20">
      <!-- Card Section -->
      <div class="max-w-6xl px-4 sm:px-6 lg:px-8 lg:py-6 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-6">
          <!-- Card -->
          <x-card.group-card href="#">
            <div class="p-4 md:p-5">
              <div class="flex gap-x-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-7 text-gray-800">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                </svg>

                <x-card.text-card title="Affordable Essentials">
                  Groceries at budget-friendly prices
                </x-card.text-card>
              </div>
            </div>
          </x-card.group-card>
          <!-- End Card -->

          <!-- Card -->
          <x-card.group-card>
            <div class="p-4 md:p-5">
              <div class="flex gap-x-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-7 text-gray-800">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                </svg>
                <x-card.text-card title="Wide Selection">
                  From canned goods to fresh items
                </x-card.text-card>
              </div>
            </div>
          </x-card.group-card>
          <!-- End Card -->

          <!-- Card -->
          <x-card.group-card>
            <div class="p-4 md:p-5">
              <div class="flex gap-x-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-7 text-gray-800">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                </svg>
                <x-card.text-card title="Convenient & Reliable">
                  Easy access, hassle-free shopping
                </x-card.text-card>
              </div>
            </div>
          </x-card.group-card>
          <!-- End Card -->

          <!-- Card -->
          <x-card.group-card>
            <div class="p-4 md:p-5">
              <div class="flex gap-x-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-7 text-gray-800">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                </svg>
                <x-card.text-card title="Community Trusted">
                  Serving local families daily.
                </x-card.text-card>
              </div>
            </div>
          </x-card.group-card>
          <!-- End Card -->
        </div>
        <!-- End Grid -->
      </div>
      <!-- End Card Section -->
    </div>

    <div class="bg-gradient-to-l from-blue-500 via-blue-300 to-blue-400 pb-10">
      <!-- Hero -->
      <div class="relative overflow-hidden">

        <div class="relative z-10">
          <div id="product" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
            <div class="max-w-2xl text-center mx-auto">
              <p class="inline-block text-lg font-medium text-gray-900">
                Product - Shop by Category
              </p>

              <!-- Title -->
              <div class="mt-5 max-w-2xl">
                <h1 class="block font-semibold text-gray-900 text-4xl md:text-5xl lg:text-6xl">
                  Discover everything you need, all in one place!
                </h1>
              </div>
              <!-- End Title -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Hero -->

      <!-- Card Blog -->
      <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:p-2 mx-auto">
        <!-- Grid -->
        <div class="grid lg:grid-cols-2 gap-6 lg:gap-12">

          <!-- Card -->
          <div
            class="group relative block rounded-xl focus:outline-hidden drop-shadow-xl drop-shadow-gray-600 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
            <div
              class="shrink-0 relative rounded-xl overflow-hidden w-full h-87.5 before:absolute before:inset-x-0 before:z-1 before:size-full before:bg-linear-to-t before:from-gray-900/70">
              <img class="size-full absolute top-0 start-0 object-cover"
                src="{{ asset('images/product/canned-goods.jpg') }}" alt="Blog Image">
            </div>

            <div class="absolute top-0 p-4 z-10">
              <div
                class="flex items-center justify-center text-white px-3 py-1 bg-linear-to-tl from-orange-500 drop-shadow-md to-orange-500/50 rounded-full">
                <div class="text-center font-extrabold">
                  1
                </div>
              </div>
            </div>

            <div class="absolute top-0 right-0 p-4 z-10">
              <div class="flex items-center justify-center text-white px-3 py-1">
                <div class="inline-flex items-center font-extrabold">
                  <x-icons.star-icon />
                  <x-icons.star-icon />
                  <x-icons.star-icon />
                </div>
              </div>
            </div>

            <div class="absolute bottom-0 inset-x-0">
              <div class="relative z-10 flex flex-col p-4 sm:p-6">
                <h3
                  class="text-lg sm:text-3xl font-semibold text-white group-hover:text-white/80 group-focus:text-white/80">
                  Canned Goods
                </h3>
                <div class="mt-2">
                  <a href="#"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                    Buy Now
                  </a>
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <!-- Card -->
          <div
            class="group relative block rounded-xl focus:outline-hidden drop-shadow-xl drop-shadow-gray-600 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
            <div
              class="shrink-0 relative rounded-xl overflow-hidden w-full h-87.5 before:absolute before:inset-x-0 before:z-1 before:size-full before:bg-linear-to-t before:from-gray-900/70">
              <img class="size-full absolute top-0 start-0 object-cover"
                src="{{ asset('images/product/snacks-biscuits.jpg') }}" alt="Blog Image">
            </div>

            <div class="absolute top-0 p-4 z-10">
              <div
                class="flex items-center justify-center text-white px-3 py-1 bg-linear-to-tl from-orange-500 drop-shadow-md to-orange-500/50 rounded-full">
                <div class="text-center font-extrabold">
                  2
                </div>
              </div>
            </div>

            <div class="absolute top-0 right-0 p-4 z-10">
              <div class="flex items-center justify-center text-white px-3 py-1">
                <div class="inline-flex items-center font-extrabold">
                  <x-icons.star-icon />
                  <x-icons.star-icon />
                  <x-icons.star-icon />
                  <x-icons.star-icon />
                </div>
              </div>
            </div>

            <div class="absolute bottom-0 inset-x-0">
              <div class="relative z-10 flex flex-col p-4 sm:p-6">
                <h3
                  class="text-lg sm:text-3xl font-semibold text-white group-hover:text-white/80 group-focus:text-white/80">
                  Biscuits and Snacks
                </h3>
                <div class="mt-2">
                  <a href="#"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                    Buy Now
                  </a>
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <!-- Card -->
          <div
            class="group relative block rounded-xl focus:outline-hidden drop-shadow-xl drop-shadow-gray-600 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
            <div
              class="shrink-0 relative rounded-xl overflow-hidden w-full h-87.5 before:absolute before:inset-x-0 before:z-1 before:size-full before:bg-linear-to-t before:from-gray-900/70">
              <img class="size-full absolute top-0 start-0 object-cover" src="{{ asset('images/product/drinks.jpg') }}"
                alt="Blog Image">
            </div>

            <div class="absolute top-0 p-4 z-10">
              <div
                class="flex items-center justify-center text-white px-3 py-1 bg-linear-to-tl from-orange-500 drop-shadow-md to-orange-500/50 rounded-full">
                <div class="text-center font-extrabold">
                  3
                </div>
              </div>
            </div>

            <div class="absolute top-0 right-0 p-4 z-10">
              <div class="flex items-center justify-center text-white px-3 py-1">
                <div class="inline-flex items-center font-extrabold">
                  <x-icons.star-icon />
                  <x-icons.star-icon />
                  <x-icons.star-icon />
                </div>
              </div>
            </div>

            <div class="absolute bottom-0 inset-x-0">
              <div class="relative z-10 flex flex-col p-4 sm:p-6">
                <h3
                  class="text-lg sm:text-3xl font-semibold text-white group-hover:text-white/80 group-focus:text-white/80">
                  Drinks and Beverages
                </h3>
                <div class="mt-2">
                  <a href="#"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                    Buy Now
                  </a>
                </div>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <!-- Card -->
          <div
            class="group relative block rounded-xl focus:outline-hidden drop-shadow-xl drop-shadow-gray-600 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
            <div
              class="shrink-0 relative rounded-xl overflow-hidden w-full h-87.5 before:absolute before:inset-x-0 before:z-1 before:size-full before:bg-linear-to-t before:from-gray-900/70">
              <img class="size-full absolute top-0 start-0 object-cover"
                src="{{ asset('images/product/household-essentials.jpg') }}" alt="Blog Image">
            </div>

            <div class="absolute top-0 p-4 z-10">
              <div
                class="flex items-center justify-center text-white px-3 py-1 bg-linear-to-tl from-orange-500 drop-shadow-md to-orange-500/50 rounded-full">
                <div class="text-center font-extrabold">
                  4
                </div>
              </div>
            </div>

            <div class="absolute top-0 right-0 p-4 z-10">
              <div class="flex items-center justify-center text-white px-3 py-1">
                <div class="inline-flex items-center font-extrabold">
                  <x-icons.star-icon />
                  <x-icons.star-icon />
                  <x-icons.star-icon />
                </div>
              </div>
            </div>

            <div class="absolute bottom-0 inset-x-0">
              <div class="relative z-10 flex flex-col p-4 sm:p-6">
                <h3
                  class="text-lg sm:text-3xl font-semibold text-white group-hover:text-white/80 group-focus:text-white/80">
                  Household Essentials
                </h3>
                <div class="mt-2">
                  <a href="#"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                    Buy Now
                  </a>
                </div>
              </div>
            </div>
            <!-- End Card -->

          </div>
        </div>
        <!-- End Grid -->
      </div>
      <div class="max-w-6xl px-4 sm:px-6 lg:px-8 lg:py-12 mx-auto">
        <div class="flex flex-col items-center gap-y-2">
          <h1 class="text-gray-900 text-2xl md:text-4xl lg:text-5xl text-center">
            So what are you waiting for?
          </h1>
          <div class="inline-flex items-center gap-x-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="motion-translate-x-loop-25 size-8 md:size-16 lg:size-20 text-orange-600 drop-shadow-md drop-shadow-orange-600/50">
              <path fill-rule="evenodd"
                d="M16.72 7.72a.75.75 0 0 1 1.06 0l3.75 3.75a.75.75 0 0 1 0 1.06l-3.75 3.75a.75.75 0 1 1-1.06-1.06l2.47-2.47H3a.75.75 0 0 1 0-1.5h16.19l-2.47-2.47a.75.75 0 0 1 0-1.06Z"
                clip-rule="evenodd" />
            </svg>
            <a href="#"
              class="font-semibold bg-clip-text bg-linear-to-l from-orange-600 to-orange-500 text-transparent text-3xl md:text-5xl lg:text-6xl underline decoration-orange-500 underline-offset-12">
              Start shopping now!
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="-motion-translate-x-loop-25 size-8 md:size-16 lg:size-20 text-orange-600 drop-shadow-md drop-shadow-orange-600/50">
              <path fill-rule="evenodd"
                d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z"
                clip-rule="evenodd" />
            </svg>

          </div>
        </div>
      </div>
    </div>
    <!-- Hero -->
    <div class="relative overflow-hidden pb-16">

      <div class="relative z-10">
        <div id="deals" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 lg:pt-16">
          <div class="max-w-4xl text-center mx-auto">
            <p
              class="inline-block text-lg font-medium bg-clip-text bg-linear-to-l from-orange-600 to-orange-500 text-transparent">
              Deals - Bundle up your favorites
            </p>

            <!-- Title -->
            <div class="mt-5 max-w-3xl mx-auto">
              <h1 class="block font-semibold text-gray-900 text-4xl md:text-5xl lg:text-6xl">
                “Smart shopping made easy — grab our ready-to-go packs and save more!”
              </h1>
            </div>
            <!-- End Title -->
          </div>
        </div>

        <!-- Pricing -->
        <div class="max-w-7xl px-4 py-10 sm:px-6 lg:px-8 mx-auto">

          <!-- Grid -->
          <div class="shadow-2xl">
            <div class="relative before:absolute">
              <div class="grid gap-px sm:grid-cols-2 lg:grid-cols-4 lg:items-center">
                <!-- Card -->
                <div
                  class="flex flex-col h-full text-center border border-orange-500 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
                  <div class="bg-white pt-8 pb-5 px-8 border-b border-orange-300">
                    <h4 class="font-medium text-lg text-gray-800">Quick Grab Pack</h4>
                  </div>

                  <div class=" bg-white lg:mt-px pt-2 lg:pt-0 lg:py-5 px-8">
                    <span class="mt-7 font-bold text-5xl text-gray-800">
                      <span class="font-bold text-2xl -me-2">Php</span>
                      30,000
                    </span>
                  </div>

                  <div class="h-full bg-white flex flex-col justify-center lg:mt-px pt-7 px-8">
                    <ul class="space-y-2.5 text-center text-sm">
                      <li class="text-gray-800">
                        3 pcs Canned Goods (Sardines, Corned Beef, Tuna)
                      </li>

                      <li class="text-gray-800">
                        2 kg Rice
                      </li>

                      <li class="text-gray-800">
                        1 pack Seasoning Mix
                      </li>

                      <li class="text-gray-800">
                        1 Laundry Soap Bar
                      </li>

                      <li class="text-gray-800">
                        1 Tissue Roll
                      </li>
                    </ul>

                  </div>

                  <div class="bg-white pt-2 pb-8 px-8 space-y-2">
                    <span class="inline-flex justify-center italic pt-3 text-sm text-gray-800">
                      Save up to 15% compared to individual prices!
                    </span>
                    <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:bg-gray-100 border border-orange-600 text-white focus:outline-hiddendisabled:opacity-50 disabled:pointer-events-none"
                      href="#">
                      Sign up
                    </a>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div
                  class="flex flex-col h-full text-center border border-orange-500 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
                  <div class="bg-white pt-8 pb-5 px-8 border-b border-orange-300">
                    <h4 class="font-medium text-lg text-gray-800">Smart Saver Bundle</h4>
                  </div>

                  <div class=" bg-white lg:mt-px pt-2 lg:pt-0 lg:py-5 px-8">
                    <span class="mt-7 font-bold text-5xl text-gray-800">
                      <span class="font-bold text-2xl -me-2">Php</span>
                      50,000
                    </span>
                  </div>

                  <div class="h-full bg-white flex justify-center lg:mt-px pt-7 px-8">
                    <ul class="space-y-2.5 text-center text-sm">
                      <li class="text-gray-800">
                        3 Snack Packs (Chips, Biscuits, Crackers)
                      </li>

                      <li class="text-gray-800">
                        2 Soft Drinks or Juice Packs
                      </li>

                      <li class="text-gray-800">
                        2 Chocolate Bars
                      </li>
                      <li class="text-gray-800">
                        1 Instant Noodles Pack
                      </li>
                    </ul>
                  </div>

                  <div class="bg-white pt-2 pb-8 px-8 space-y-2">
                    <span class="inline-flex justify-center italic pt-3 text-sm text-gray-800">
                      Perfect for sharing with family or friends!
                    </span>
                    <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:bg-gray-100 border border-orange-600 text-white focus:outline-hiddendisabled:opacity-50 disabled:pointer-events-none"
                      href="#">
                      Sign up
                    </a>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div
                  class="flex flex-col h-full text-center border border-orange-500 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
                  <div class="bg-white pt-8 pb-5 px-8 border-b border-orange-300">
                    <h4 class="font-medium text-lg text-gray-800">Happy Home Pack</h4>
                  </div>

                  <div class="bg-white lg:mt-px pt-2 lg:pt-0 lg:py-5 px-8">
                    <span class="mt-7 font-bold text-5xl text-gray-800">
                      <span class="font-bold text-2xl -me-2">Php</span>
                      90,000
                    </span>
                  </div>

                  <div class="h-full bg-white flex justify-center lg:mt-px pt-7 px-8">
                    <ul class="space-y-2.5 text-center text-sm">
                      <li class="text-gray-800">
                        1 Coffee Jar or 10 Sachets
                      </li>

                      <li class="text-gray-800">
                        1 Loaf Bread
                      </li>

                      <li class="text-gray-800">
                        1 Pack of Creamer
                      </li>

                      <li class="text-gray-800">
                        1 Small Jar of Peanut Butter or Jam
                      </li>
                    </ul>
                  </div>

                  <div class="bg-white pt-2 pb-8 px-8 space-y-2">
                    <span class="inline-flex justify-center italic pt-3 text-sm text-gray-800">
                      Everything you need for a quick, satisfying breakfast.
                    </span>
                    <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:bg-gray-100 border border-orange-600 text-white focus:outline-hiddendisabled:opacity-50 disabled:pointer-events-none"
                      href="#">
                      Sign up
                    </a>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div
                  class="flex flex-col h-full text-center border border-orange-500 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
                  <div class="bg-white pt-8 pb-5 px-8 border-b border-orange-300">
                    <h4 class="font-medium text-lg text-gray-800">Ultimate Value Pack</h4>
                  </div>

                  <div class="bg-white lg:mt-px pt-2 lg:pt-0 lg:py-5 px-8">
                    <span class="mt-7 font-bold text-5xl text-gray-800">
                      <span class="font-bold text-2xl -me-2">Php</span>
                      150,000
                    </span>
                  </div>

                  <div class="h-full bg-white flex justify-center lg:mt-px pt-7 px-8">
                    <ul class="space-y-2.5 text-center text-sm">
                      <li class="text-gray-800">
                        Dishwashing Liquid (500ml)
                      </li>

                      <li class="text-gray-800">
                        1 Sponge Pack
                      </li>

                      <li class="text-gray-800">
                        1 Laundry Detergent (1kg)
                      </li>

                      <li class="text-gray-800">
                        1 Bath Soap
                      </li>
                    </ul>
                  </div>

                  <div class="bg-white pt-2 pb-8 px-8 space-y-2">
                    <span class="inline-flex justify-center italic pt-3 text-sm text-gray-800">

                      Save time and money with our complete care pack.
                    </span>
                    <a class="py-3 px-4 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:bg-gray-100 border border-orange-600 text-white focus:outline-hiddendisabled:opacity-50 disabled:pointer-events-none"
                      href="#">
                      Sign up
                    </a>
                  </div>
                </div>
                <!-- End Card -->
              </div>
            </div>
          </div>
          <!-- End Grid -->
        </div>
        <!-- End Pricing -->
      </div>
    </div>
    <!-- End Hero -->
    <!-- Contact -->
    <div id="contact">
      <div class="max-w-5xl px-4 xl:px-0 py-12 lg:py-20 mx-auto">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
          <h1
            class="block font-semibold bg-clip-text bg-linear-to-l from-orange-600 to-orange-500 text-transparent text-4xl md:text-5xl lg:text-6xl md:leading-tight">
            Contact Us
          </h1>
          <p class="mt-1 text-lg text-gray-600">We’re here to help you with your orders, deals, or feedback.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 lg:gap-x-16">
          <div class="md:order-2 border-b border-orange-600 pb-10 mb-10 md:border-b-0 md:pb-0 md:mb-0">
            <form>
              <div class="space-y-4">
                <!-- Input -->
                <div class="relative">
                  <input type="text" id="hs-tac-input-name" class="peer p-3 sm:p-4 block w-full bg-white border border-blue-500 rounded-lg sm:text-sm text-white placeholder:text-transparent focus:outline-hidden focus:ring-0 focus:border-blue-600 disabled:opacity-50 disabled:pointer-events-none
              focus:pt-6
              focus:pb-2
              not-placeholder-shown:pt-6
              not-placeholder-shown:pb-2
              autofill:pt-6
              autofill:pb-2" placeholder="Name">
                  <label for="hs-tac-input-name" class="absolute top-0 start-0 p-3 sm:p-4 h-full text-gray-700 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:text-xs
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-700
                peer-not-placeholder-shown:text-xs
                peer-not-placeholder-shown:-translate-y-1.5
                peer-not-placeholder-shown:text-gray-700">Name</label>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="relative">
                  <input type="email" id="hs-tac-input-email" class="peer p-3 sm:p-4 block w-full bg-white border border-blue-500 rounded-lg sm:text-sm text-white placeholder:text-transparent focus:outline-hidden focus:ring-0 focus:border-blue-600 disabled:opacity-50 disabled:pointer-events-none
              focus:pt-6
              focus:pb-2
              not-placeholder-shown:pt-6
              not-placeholder-shown:pb-2
              autofill:pt-6
              autofill:pb-2" placeholder="Email">
                  <label for="hs-tac-input-email" class="absolute top-0 start-0 p-3 sm:p-4 h-full text-gray-700 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:text-xs
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-700
                peer-not-placeholder-shown:text-xs
                peer-not-placeholder-shown:-translate-y-1.5
                peer-not-placeholder-shown:text-gray-700">Email</label>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="relative">
                  <input type="text" id="hs-tac-input-company" class="peer p-3 sm:p-4 block w-full bg-white border border-blue-500 rounded-lg sm:text-sm text-white placeholder:text-transparent focus:outline-hidden focus:ring-0 focus:border-blue-600 disabled:opacity-50 disabled:pointer-events-none
              focus:pt-6
              focus:pb-2
              not-placeholder-shown:pt-6
              not-placeholder-shown:pb-2
              autofill:pt-6
              autofill:pb-2" placeholder="Company">
                  <label for="hs-tac-input-company" class="absolute top-0 start-0 p-3 sm:p-4 h-full text-gray-700 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:text-xs
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-700
                peer-not-placeholder-shown:text-xs
                peer-not-placeholder-shown:-translate-y-1.5
                peer-not-placeholder-shown:text-gray-700">Company</label>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="relative">
                  <input type="text" id="hs-tac-input-phone" class="peer p-3 sm:p-4 block w-full bg-white border border-blue-500 rounded-lg sm:text-sm text-white placeholder:text-transparent focus:outline-hidden focus:ring-0 focus:border-blue-600 disabled:opacity-50 disabled:pointer-events-none
              focus:pt-6
              focus:pb-2
              not-placeholder-shown:pt-6
              not-placeholder-shown:pb-2
              autofill:pt-6
              autofill:pb-2" placeholder="Phone">
                  <label for="hs-tac-input-phone" class="absolute top-0 start-0 p-3 sm:p-4 h-full text-gray-700 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:text-xs
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-700
                peer-not-placeholder-shown:text-xs
                peer-not-placeholder-shown:-translate-y-1.5
                peer-not-placeholder-shown:text-gray-700">Phone</label>
                </div>
                <!-- End Input -->

                <!-- Textarea -->
                <div class="relative">
                  <textarea id="hs-tac-message" class="peer p-3 sm:p-4 block w-full bg-white border border-blue-500 rounded-lg sm:text-sm text-white placeholder:text-transparent focus:outline-hidden focus:ring-0 focus:border-blue-600 disabled:opacity-50 disabled:pointer-events-none
              focus:pt-6
              focus:pb-2
              not-placeholder-shown:pt-6
              not-placeholder-shown:pb-2
              autofill:pt-6
              autofill:pb-2" placeholder="This is a textarea placeholder" data-hs-textarea-auto-height></textarea>
                  <label for="hs-tac-message" class="absolute top-0 start-0 p-3 sm:p-4 h-full text-gray-700 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                peer-focus:text-xs
                peer-focus:-translate-y-1.5
                peer-focus:text-gray-700
                peer-not-placeholder-shown:text-xs
                peer-not-placeholder-shown:-translate-y-1.5
                peer-not-placeholder-shown:text-gray-700">Tell us about your project</label>
                </div>
                <!-- End Textarea -->
              </div>

              <div class="mt-2">
                <span class="inline-flex items-center gap-px text-xs text-neutral-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                  </svg>
                  All fields are required
                </span>

                <p class="mt-5">
                  <button
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent text-white bg-linear-to-tl from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none cursor-pointer"
                    href="#">
                    Submit
                    <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                      <path d="m12 5 7 7-7 7" />
                    </svg>
                  </button>
                </p>
              </div>
            </form>
          </div>
          <!-- End Col -->

          <div class="space-y-6">
            <!-- Item -->
            <div
              class="py-2 px-3 flex gap-x-5 drop-shadow-lg drop-shadow-blue-400 bg-gradient-to-l from-orange-500 via-orange-300 to-orange-400 border-gray-200 shadow-2xs rounded-xl hover:shadow-md focus:outline-hidden focus:shadow-md transition">
              <svg class="shrink-0 size-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
              <div class="grow">
                <h4 class="text-gray-800 font-semibold">Our address:</h4>

                <span class="mt-1 text-gray-700 text-sm not-italic">
                  P-3, Labuay, Maigo<br>
                  Lanao del Norte, Philippines
                </span>
              </div>
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div
              class="py-2 px-3 flex gap-x-5 drop-shadow-lg drop-shadow-blue-400 bg-gradient-to-l from-orange-500 via-orange-300 to-orange-400 border-gray-200 shadow-2xs rounded-xl hover:shadow-md focus:outline-hidden focus:shadow-md transition">
              <svg class="shrink-0 size-6 text-gray-900" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round">
                <path
                  d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
                <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
              </svg>
              <div class="grow">
                <h4 class="text-gray-800 font-semibold">Email us:</h4>

                <span class="mt-1 text-gray-700 text-sm not-italic">
                  kennithigot@gmail.com
                </span>
              </div>
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div
              class="py-2 px-3 flex gap-x-5 drop-shadow-lg drop-shadow-blue-400 bg-gradient-to-l from-orange-500 via-orange-300 to-orange-400 border-gray-200 shadow-2xs rounded-xl hover:shadow-md focus:outline-hidden focus:shadow-md transition">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="shrink-0 size-6 text-gray-900">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>

              <div class="grow">
                <h4 class="text-gray-800 font-semibold">Store hour:</h4>

                <span class="mt-1 text-gray-700 text-sm not-italic">
                  Mon–Sat, 8:00 AM – 8:00 PM
                </span>
              </div>
            </div>
            <!-- End Item -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->
      </div>
    </div>
    <!-- End Contact -->
  </div>
  <!-- End Clients -->
  <div class="bg-slate-300 px-4 md:px-6 lg:px-8">
    <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
      <!-- Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-5">
        <div class="flex overflow-hidden items-center justify-center md:justify-start">
          <a href="#">
            <!-- Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Store Logo" class="h-16 w-26">
            <!-- End of Logo -->
            <div class="ms-1 sm:ms-2"> </div>
          </a>
        </div>
        <!-- End Col -->

        <ul class="text-center">
          <li
            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-900">
            <a class="inline-flex gap-x-2 text-black hover:text-orange-400 focus:outline-hidden focus:text-gray-600"
              href="#about">
              About
            </a>
          </li>
          <li
            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-900">
            <a class="inline-flex gap-x-2 text-black hover:text-orange-400 focus:outline-hidden focus:text-gray-600"
              href="#product">
              Product
            </a>
          </li>
          <li
            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-900">
            <a class="inline-flex gap-x-2 text-black hover:text-orange-400 focus:outline-hidden focus:text-gray-600"
              href="#deals">
              Deals
            </a>
          </li>
          <li
            class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-900">
            <a class="inline-flex gap-x-2 text-black hover:text-orange-400 focus:outline-hidden focus:text-gray-600"
              href="#contact">
              Contact
            </a>
          </li>
        </ul>
        <!-- End Col -->

        <!-- Social Brands -->
        <div class="flex justify-center md:justify-end md:text-end space-x-2">
          <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-white hover:bg-orange-600 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
            href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="shrink-0 size-5 text-gray-800 hover:text-white bi bi-instagram" viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
            </svg>
          </a>
          <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-white hover:bg-orange-600 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
            href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="shrink-0 size-5 text-gray-800 hover:text-white bi bi-facebook" viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg>
          </a>
          <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-white hover:bg-orange-600 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
            href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="shrink-0 size-5 text-gray-800 hover:text-white bi bi-youtube" viewBox="0 0 16 16">
              <path
                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
            </svg>
          </a>
          <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-white hover:bg-orange-600 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
            href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="shrink-0 size-5 text-gray-800 hover:text-white bi bi-tiktok" viewBox="0 0 16 16">
              <path
                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
            </svg>
          </a>
        </div>
        <!-- End Social Brands -->
      </div>
      <!-- End Grid -->
    </footer>
  </div>

</body>

</html>