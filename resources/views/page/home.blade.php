{{-- @dd('$datas') --}}

<x-layout>

    <div class="hero h-auto" id="desktop">
        <img src= "{{ asset('storage/img/Banner/'. $banners[0]->image) }}" alt="Banner" class="w-full h-[80vh]"/>
        <p class="absolute w-80 px-4 text-white right-60 bottom-50 font-semibold text-4xl">{!! $datas[30]->value !!}</p>
    </div>

    <div class="hero h-auto" id="mobile">
        <img src= "{{ asset('storage/img/Banner/'. $banners[1]->image) }}" alt="Banner"/>
        <p class="absolute px-4 text-white top-60 font-semibold text-4xl">{!! $datas[30]->value !!}</p>
    </div>

    <div class="max-w-screen-xl mx-auto p-4">
            
        <h3 class=" text-[#000000] text-2xl lg:text-3xl font-bold dark:text-white text-center mt-4 mb-2">
            {!! $datas[0]->value !!} </h3>
            <hr class="w-48 h-1 mx-auto bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700 mb-4">

            <p class="mb-4 text-black">{!! $datas[17]->value !!} </p>
    
            {{-- Card Services --}}

            <h3 class=" text-[#000000] text-2xl lg:text-3xl font-bold dark:text-white text-center mb-2">
                {!! $datas[29]->value !!} </h3>
                <hr class="w-48 h-1 mx-auto bg-[#384fd4] mb-4 border-0 rounded md:my-5 dark:bg-gray-700">

                {{-- Desktop --}}
                <section class="columns-4 mb-10" id="desktop">
                    <div class="mx-auto w-[50%]">
                        <img src="{{ asset('storage/img/GeneralImage/'. $images[12]->image) }}" alt="{{ $images[12]->name }}" class="hover:scale-105 ease-in-out duration-500 transition">
                        <p class="font-bold text-[#283891] text-2xl text-center">Equipment Installation</p>
                    </div>

                    <div class=" mx-auto w-[50%]">
                        <div class="w-full"> 
                        <img src="{{ asset('storage/img/GeneralImage/'. $images[13]->image) }}" alt="" class="hover:scale-105 ease-in-out duration-500 transition">
                    </div>
                        <p class="font-bold text-[#283891] text-2xl text-center">Maintenance</p>
                    </div>

                    <div class=" mx-auto w-[50%]">
                        <img src="{{ asset('storage/img/GeneralImage/'. $images[14]->image) }}" alt="" class="hover:scale-105 ease-in-out duration-500 transition">
                        <p class="font-bold text-[#283891] text-2xl text-center">Construction</p>
                    </div>

                    <div class=" mx-auto w-[50%]">
                        <img src="{{ asset('storage/img/GeneralImage/'. $images[15]->image) }}" alt="" class="hover:scale-105 ease-in-out duration-500 transition">
                        <p class="font-bold text-[#283891] text-2xl text-center">Hydrotest</p>
                    </div>

            </section>

            {{-- Mobile --}}
            <section class="columns-2 mb-10" id="mobile">
                <div class="mx-auto w-[50%] mb-2">
                    <img src="{{ asset('storage/img/GeneralImage/'. $images[12]->image) }}" alt="" class="rounded">
                    <p class="font-bold text-[#283891] text-l text-center">Equipment Installation</p>
                </div>

                <div class=" mx-auto w-[50%] mb-4">
                    <div class="w-full"> 
                    <img src="{{ asset('storage/img/GeneralImage/'. $images[13]->image) }}" alt="" class="rounded">
                </div>
                    <p class="font-bold text-[#283891] text-l text-center">Maintenance</p>
                </div>

                <div class=" mx-auto w-[50%] mb-5">
                    <img src="{{ asset('storage/img/GeneralImage/'. $images[14]->image) }}" alt="" class="rounded">
                    <p class="font-bold text-[#283891] text-l text-center">Construction</p>
                </div>

                <div class=" mx-auto w-[50%] mb-5">
                    <img src="{{ asset('storage/img/GeneralImage/'. $images[15]->image) }}" alt="" class="rounded">
                    <p class="font-bold text-[#283891] text-l text-center">Hydrotest</p>
                </div>

        </section>

        {{-- why us --}}
        <div class="grid grid-cols-2 gap-10 mt-10 mb-5" id="desktop">
            <div>
                <img class="w-full h-96 max-w-full rounded-2xl" src="{{ asset('storage/img/GeneralImage/'. $images[6]->image) }}" alt="why_us" />
            </div>
            <div>
                <h2 class="card-title opacity-100 text-2xl lg:text-3xl font-bold text-[#000] mb-5 mt-5">{!! $datas[2]->value !!}</h2>
                <hr class="w-48 h-1 bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700">
                <p class="opacity-100 text-black">{!! $datas[3]->value !!}</p>
                  
                  <button onclick="window.location.href='/profile'" class="btn rounded-full btn-sm relative inline-flex items-center justify-start overflow-hidden font-medium transition-all bg-[#384fd4] rounded hover:bg-[#384fd4] group py-1.5 px-2.5 mt-4">
                    <span class="w-56 h-48 rounded bg-indigo-100 absolute bottom-0 left-0 translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                    <span class="relative w-full text-left text-white transition-colors duration-300 ease-in-out group-hover:text-[#142792]">Read More</span>
                    </button>
            </div>
        </div>

        <div class="gap-10 mt-10 mb-5" id="mobile">
            <div>
                <img class="w-full h-full max-w-full rounded-2xl" src="{{ asset('storage/img/GeneralImage/'. $images[6]->image) }}" alt="why_us" />
            </div>
            <div>
                <h2 class="card-title opacity-100 text-2xl lg:text-3xl font-bold text-black mb-5 mt-5">{!! $datas[2]->value !!}</h2>
                <p class="opacity-100 text-black">{!! $datas[3]->value !!}</p>
                <button class="rounded-full btn btn-sm bg-[#384fd4] text-white mt-4 mb-4">Read More</button>
            </div>
        </div>

{{-- our product Desktop --}}
<div class="flex flex-col  shadow-sm rounded-xl p-5 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 border-2 border-slate-500" id="desktop">
    <div class="rounded-md ">
        <h1 class=" text-gray-900 text-2xl lg:text-3xl font-bold dark:text-white text-center mb-10 mt-3">
            {!! $datas[1]->value !!} </h1>  
        <div class="grid grid-cols-2 gap-4">
        <div class="col-span-2 grid gap-4">
            {{-- <div class="hover:shadow-lg overflow-hidden">
                <img class="h-auto max-w-full rounded-lg group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out w-full object-cover" src="img/banner_navigation1.jpg" alt="">
            </div> --}}
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/fuelpump"> 
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[0]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="grid gap-4">
            <div class="row-span-2">
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/stp">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[1]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/atg">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[2]->image) }}" alt="">
                    </div>
                </a>
            </div>
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/hose">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[3]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/lcp">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[4]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/halock">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[5]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div>
</div>

{{-- Our Products Mobile --}}
<div class="flex flex-col  shadow-sm rounded-xl p-5 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 border-2 border-slate-500" id="mobile">
    <div class="rounded-md ">
        <h1 class=" text-gray-900 text-xl lg:text-2xl font-bold dark:text-white text-center mt-5 mb-5">
            {!! $datas[1]->value !!} </h1>  
        <div class="gap-4">
        <div class="col-span-2 grid gap-4">
            {{-- <div class="hover:shadow-lg overflow-hidden">
                <img class="h-auto max-w-full rounded-lg group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out w-full object-cover" src="img/banner_navigation1.jpg" alt="">
            </div> --}}
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/fuelpump"> 
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[7]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="grid gap-4">
            <div class="row-span-2">
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/stp">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[1]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/atg">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[8]->image) }}" alt="">
                    </div>
                </a>
            </div>
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/hose">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[9]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/lcp">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[10]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product/halock">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/GeneralImage/'. $images[11]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div>
</div>

    {{-- trusted by --}}

    {{-- Desktop --}}
    {{-- <section class="dark:bg-gray-900 p-10 justify-items-center overflow-hidden" id="desktop">
        <h2 class="opacity-100 text-2xl lg:text-3xl font-bold text-black mb-2 mt-2">{!! $datas[4]->value !!}</h2>
        <hr class="w-48 h-1 mx-auto bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700">
        <div class="carousel carousel-end rounded-box">
            
            <div class="carousel-item cursor-grab">
                @foreach ($client as $clients)
              <img src="{{ asset('storage/img/Client/'. $clients->image) }}" alt="{{ $clients->name }}" class=" h-40 p-5" draggable="false" />
              @endforeach
            </div>
            
        </div>
    </section> --}}

    {{-- Test --}}
    <section class="dark:bg-gray-900 p-10 justify-items-center overflow-hidden" id="desktop">
    <h2 class="opacity-100 text-2xl lg:text-3xl font-bold text-black mb-2 mt-2">{!! $datas[4]->value !!}</h2>
    <hr class="w-48 h-1 mx-auto bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700">
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-32">
         <!-- Item  -->
         @foreach ($client as $clients)
        <div class="hidden duration-500 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/img/Client/'. $clients->image) }}" class="absolute h-40 p-5 block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="" draggable="false">
        </div>
        @endforeach
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/50 dark:bg-gray-800/30 group-hover:bg-black dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/50 dark:bg-gray-800/30 group-hover:bg-black dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
</section>

    {{-- Mobile --}}
    <section class="dark:bg-gray-900 p-10 justify-items-center overflow-hidden" id="mobile">
        <h2 class="opacity-100 text-2xl lg:text-3xl font-bold text-black mb-2 mt-2">{!! $datas[4]->value !!}</h2>
        <hr class="w-48 h-1 mx-auto bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700">
        <div class="carousel carousel-end rounded-box">
            
            <div class="carousel-item ">
                @foreach ($client as $clients)
              <img src="{{ asset('storage/img/Client/'. $clients->image) }}" alt="{{ $clients->name }}" class="h-32 p-5"/>
              @endforeach
            </div>

            
        </div>
    </section>

    </div>
    
    {{-- inquiry --}}
    <section style="background-image: url('{{ asset('storage/img/GeneralImage/'. $inquire[0]->image) }}')" class=" bg-white dark:bg-gray-900 h-[300px]" >
        <div class="items-center max-w-screen-xl mx-auto my-auto p-4 py-20" >
            <div>
                <h2 class="text-2xl font-bold text-[#142792] dark:text-white text-center mb-7">{!! $datas[5]->value !!}</h2>
            </div>
            <div class="flex justify-center">
                <button onclick="window.open('https://wa.wizard.id/62abfd')" class="btn rounded-full btn-m w-[120px] relative inline-flex items-center justify-start overflow-hidden font-medium transition-all bg-[#384fd4] rounded hover:bg-[#384fd4] group py-1.5 px-2.5 mt-4">
                    <span class="w-56 h-48 rounded bg-indigo-100 absolute bottom-0 left-0 translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                    <span class="relative w-full text-left text-center text-white transition-colors duration-300 ease-in-out group-hover:text-[#142792]">Inquiry</span>
                    </button>

                {{-- <button type="button" onclick="window.open('https://wa.wizard.id/62abfd')" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button> --}}
            </div>
        </div>
    </section>

</x-layout>
    