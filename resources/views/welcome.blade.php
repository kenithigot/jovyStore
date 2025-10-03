<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jovy Store</title>

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-400">

  <!-- ========== HEADER ========== -->
  <header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-5 bg-slate-100">
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
            class="hs-collapse-toggle size-9.5 flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
            id="hs-pro-hcail-collapse" aria-expanded="false" aria-controls="hs-pro-hcail" aria-label="Toggle navigation"
            data-hs-collapse="#hs-pro-hcail">
            <svg class="hs-collapse-open:hidden shrink-0 size-4 text-orange-500" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden shrink-0 size-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
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
          <div>
            <a class="inline-block text-black hover:text-orange-400 hover:border-b-2 hover:border-yellow-400 focus:outline-hidden focus:text-gray-600"
              href="#" aria-current="page">Home</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-orange-400 hover:border-b-2 hover:border-yellow-400 focus:outline-hidden focus:text-gray-600"
              href="#" href="#">About</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-orange-400 hover:border-b-2 hover:border-yellow-400 focus:outline-hidden focus:text-gray-600"
              href="#" href="#">Product</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-orange-400 hover:border-b-2 hover:border-yellow-400 focus:outline-hidden focus:text-gray-600"
              href="#" href="#">Contact</a>
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- Hero -->
  <div class="relative overflow-hidden">
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
          <h1 class="block text-gray-900 text-4xl md:text-5xl lg:text-6xl italic">
            Your Neighborhood Mini Market – Fresh, Affordable, Convenient.
          </h1>

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
  <div class="max-w-[85rem] py-10 lg:py-14 mx-auto bg-slate-100">
    <div class="pb-16">
      <!-- Title -->
      <div class="w-full lg:w-2/3 mx-auto text-center my-6">
        <h2 class="text-gray-900">Trusted by food producers, local distributors, and thousands of Filipino households.
        </h2>
      </div>
      <!-- End Title -->

      <div class="">
        <div
          class="px-10 py-3 lg:py-8 flex justify-center gap-x-6 sm:gap-x-12 lg:gap-x-24 bg-linear-to-tl from-red-500 to-yellow-500">
          <img src="{{ asset('images/beer.png') }}"
            class="py-3 lg:p-2 w-12 h-auto md:w-20 lg:w-28 mx-auto sm:mx-0 motion-translate-y-loop-25 drop-shadow-2xl drop-shadow-slate-500/50">
          <img src="{{ asset('images/burger.png') }}"
            class="py-3 lg:p-2 w-12 h-auto md:w-20 lg:w-28 mx-auto sm:mx-0 -motion-translate-y-loop-25 drop-shadow-2xl drop-shadow-slate-500/50">
          <img src="{{ asset('images/coffee.png') }}"
            class="py-3 lg:p-2 w-12 h-auto md:w-20 lg:w-28 mx-auto sm:mx-0 motion-translate-y-loop-25 drop-shadow-2xl drop-shadow-slate-500/50">
          <img src="{{ asset('images/cookie.png') }}"
            class="py-3 lg:p-2 w-12 h-auto md:w-20 lg:w-28 mx-auto sm:mx-0 -motion-translate-y-loop-25 drop-shadow-2xl drop-shadow-slate-500/50">
          <img src="{{ asset('images/lemonade.png') }}"
            class="py-3 lg:p-2 w-12 h-auto md:w-20 lg:w-28 mx-auto sm:mx-0 motion-translate-y-loop-25 drop-shadow-2xl drop-shadow-slate-500/50">
        </div>
      </div>
    </div>

    <div>
      <img src="{{ asset('images/about-banner.png') }}" alt="">
    </div>
  </div>
  <!-- End Clients -->
</body>

</html>