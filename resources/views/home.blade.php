<x-layouts.app>
  <!-- ========== HEADER ========== -->
  <x-navbar />
  <!-- ========== END HEADER ========== -->

  <!-- Hero -->
  <div class="relative overflow-hidden bg-gradient-to-l from-blue-500 via-blue-300 to-blue-400">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-16">

      <div class="grid lg:grid-cols-3 items-center gap-4 py-16">
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
            <x-button.link-button href="#product" class="py-4 px-6">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>
              View Product
            </x-button.link-button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- Clients -->
  <div class="max-w-[85rem] pt-10 lg:pt-14 mx-auto bg-slate-100">
    <!-- Title -->
    <div class="w-full lg:w-2/3 mx-auto text-center my-6">
      <h2 class="text-gray-900 text-lg">Trusted by food producers, local distributors, and thousands of Filipino
        households.
      </h2>
    </div>
    <!-- End Title -->

    <div
      class="px-10 py-3 lg:py-8 flex justify-center items-center gap-x-6 sm:gap-x-12 lg:gap-x-24 bg-gradient-to-l from-orange-500 via-orange-300 to-orange-400">
      <x-partner-logo src="{{ asset('images/beer.png') }}" class="motion-translate-y-loop-25" />
      <x-partner-logo src="{{ asset('images/burger.png') }}" class="-motion-translate-y-loop-25" />
      <x-partner-logo src="{{ asset('images/coffee.png') }}" class="motion-translate-y-loop-25" />
      <x-partner-logo src="{{ asset('images/cookie.png') }}" class="-motion-translate-y-loop-25" />
      <x-partner-logo src="{{ asset('images/lemonade.png') }}" class="motion-translate-y-loop-25" />
    </div>

    <div id="about" class="pt-16">
      <!-- Hero -->
      <div class="relative overflow-hidden">

        <div class="relative z-10">
          <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
            <div class="max-w-2xl text-center mx-auto">
              <x-text-gradient class="text-xl font-medium">About us - Why Shop Here</x-text-gradient>

              <!-- Title -->
              <div class="mt-5 max-w-2xl">
                <x-heading.main-heading>“Everyday Needs, One Stop Away”</x-heading.main-heading>
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
                  <x-button.link-button>Shop Now</x-button.link-button>
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
                  <x-button.link-button>Shop Now</x-button.link-button>
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
                <x-icons.checkbadge-icon />
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
                <x-icons.checkbadge-icon />
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
                <x-icons.checkbadge-icon />
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
                <x-icons.checkbadge-icon />
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

    <div id="product" class="bg-gradient-to-l from-blue-500 via-blue-300 to-blue-400 pb-10 pt-16">
      <!-- Hero -->
      <div class="relative overflow-hidden">

        <div class="relative z-10">
          <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
            <div class="max-w-2xl text-center mx-auto">
              <p class="inline-block text-xl font-medium text-gray-900">
                Product - Shop by Category
              </p>

              <!-- Title -->
              <div class="mt-5 max-w-2xl">
                <x-heading.main-heading>
                  Discover everything you need, all in one place!
                </x-heading.main-heading>
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
          <x-card.transition-card>
            <!-- Image -->
            <x-card.image-card src="{{ asset('images/product/canned-goods.jpg') }}" alt="Canned Goods" />
            <div class="absolute top-0 p-4 z-10">
              <x-number-badge number="1" />
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
                  <x-button.link-button>
                    Buy Now
                  </x-button.link-button>
                </div>
              </div>
            </div>
          </x-card.transition-card>
          <!-- End Card -->

          <!-- Card -->
          <x-card.transition-card>
            <!-- Image -->
            <x-card.image-card src="{{ asset('images/product/snacks-biscuits.jpg') }}" alt="Biscuits and Snacks" />
            <div class="absolute top-0 p-4 z-10">
              <x-number-badge number="1" />
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
                  <x-button.link-button>
                    Buy Now
                  </x-button.link-button>
                </div>
              </div>
            </div>
          </x-card.transition-card>
          <!-- End Card -->

          <!-- Card -->
          <x-card.transition-card>
            <!-- Images -->
            <x-card.image-card src="{{ asset('images/product/drinks.jpg') }}" alt="Drinks and Beverages" />
            <div class="absolute top-0 p-4 z-10">
              <x-number-badge number="1" />
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
                  <x-button.link-button>
                    Buy Now
                  </x-button.link-button>
                </div>
              </div>
            </div>
          </x-card.transition-card>
          <!-- End Card -->


          <!-- Card -->
          <x-card.transition-card>
            <!-- Images -->
            <x-card.image-card src="{{ asset('images/product/household-essentials.jpg') }}"
              alt="Household Essentials" />
            <div class="absolute top-0 p-4 z-10">
              <x-number-badge number="1" />
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
                  <x-button.link-button>
                    Buy Now
                  </x-button.link-button>
                </div>
              </div>
            </div>
          </x-card.transition-card>
          <!-- End Card -->

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
    <div id="deals" class="relative overflow-hidden py-16">

      <div class="relative z-10">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 lg:pt-16">
          <div class="max-w-4xl text-center mx-auto">
            <x-text-gradient class="text-xl font-medium">Deals - Bundle up your favorites</x-text-gradient>

            <!-- Title -->
            <div class="mt-5 max-w-3xl mx-auto">
              <x-heading.main-heading>“Smart shopping made easy — grab our ready-to-go packs and save
                more!”</x-heading.main-heading>
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
                  <x-card.title-card>Quick Grab Pack</x-card.title-card>

                  <div class=" bg-white lg:mt-px pt-2 lg:pt-0 lg:py-5 px-8">
                    <x-card.pricetext-card>30,000</x-card.pricetext-card>
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
                    <x-button.link-button class="w-full py-3 inline-flex justify-center">
                      Sign up
                    </x-button.link-button>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div
                  class="flex flex-col h-full text-center border border-orange-500 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
                  <x-card.title-card>Smart Saver Bundle</x-card.title-card>
                  <div class=" bg-white lg:mt-px pt-2 lg:pt-0 lg:py-5 px-8">
                    <x-card.pricetext-card>50,000</x-card.pricetext-card>
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
                    <x-button.link-button class="w-full py-3 inline-flex justify-center">
                      Sign up
                    </x-button.link-button>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div
                  class="flex flex-col h-full text-center border border-orange-500 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
                  <x-card.title-card>Happy Home Pack</x-card.title-card>
                  <div class="bg-white lg:mt-px pt-2 lg:pt-0 lg:py-5 px-8">
                    <x-card.pricetext-card>90,000</x-card.pricetext-card>
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
                    <x-button.link-button class="w-full py-3 inline-flex justify-center">
                      Sign up
                    </x-button.link-button>
                  </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div
                  class="flex flex-col h-full text-center border border-orange-500 transform transition delay-100 duration-300 ease-in-out hover:-translate-y-1 hover:scale-105">
                  <x-card.title-card>Ultimate Value Pack</x-card.title-card>
                  <div class="bg-white lg:mt-px pt-2 lg:pt-0 lg:py-5 px-8">
                    <x-card.pricetext-card>150,000</x-card.pricetext-card>
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
                    <x-button.link-button class="w-full py-3 inline-flex justify-center">
                      Sign up
                    </x-button.link-button>
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
    <div id="contact" class="pt-16">
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
                  <x-input.input type="text" id="name" name="name" placeholder="Name" />
                  <x-input.input-label for="name">Name</x-input.input-label>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="relative">
                  <x-input.input type="email" id="email" name="email" placeholder="Email" />
                  <x-input.input-label for="email">Email</x-input.input-label>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="relative">
                  <x-input.input type="number" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" />
                  <x-input.input-label for="phoneNumber">Phone Number</x-input.input-label>
                </div>
                <!-- End Input -->

                <!-- Textarea -->
                <div class="relative">
                  <x-textarea.textarea id="inqury_message" name="inquiry_message"
                    placeholder="Type your message here.." />
                  <x-input.input-label for="inqury_message">Tell us about your inquiry</x-input.input-label>
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
                  <x-button.link-button>Submit
                    <svg class="shrink-0 size-4 transition group-hover:translate-x-0.5 group-focus:translate-x-0.5"
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                      <path d="m12 5 7 7-7 7" />
                    </svg>
                  </x-button.link-button>
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
    <!-- ========== Footer ========== -->
    <x-footer />
    <!-- ========== End Footer ========== -->
  </div>

</x-layouts.app>