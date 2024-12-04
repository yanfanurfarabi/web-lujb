{{-- @dd('$datas') --}}

<x-layout>

    <div class="hero h-auto" id="desktop">
        <img src= "{{ asset('storage/img/Banner/'. $banners[0]->image) }}" alt="Banner" class="w-full h-[100vh]"/>
        <p class="absolute px-4 text-white left-40 bottom-50 font-semibold text-7xl">Home</p>
    </div>

    <div class="hero h-auto" id="mobile">
        <img src= "{{ asset('storage/img/Banner/'. $banners[1]->image) }}" alt="Banner"/>
        <p class="absolute px-4 text-white bottom-50 font-semibold text-7xl">Home</p>
    </div>

    <div class="max-w-screen-xl mx-auto p-4">
            
        <h3 class=" text-[#2aa595] text-2xl lg:text-3xl font-bold dark:text-white text-center mb-10">
            {!! $datas[0]->value !!} </h3>
        
            {{-- our product Desktop --}}
        <div class="flex flex-col  shadow-sm rounded-xl p-5 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 border-2 border-slate-500" id="desktop">
            <div class="rounded-md ">
                <h1 class=" text-gray-900 text-xl lg:text-2xl font-bold dark:text-white text-center mt-5 mb-10">
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
                <h1 class=" text-gray-900 text-xl lg:text-2xl font-bold dark:text-white text-center mt-5 mb-10">
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

        {{-- why us --}}
        <div class="grid grid-cols-2 gap-10 mt-10 mb-5" id="desktop">
            <div>
                <img class="w-full h-96 max-w-full rounded-2xl" src="{{ asset('storage/img/GeneralImage/'. $images[6]->image) }}" alt="why_us" />
            </div>
            <div>
                <h2 class="card-title opacity-100 text-2xl lg:text-3xl font-bold text-[#2aa595] mb-5 mt-5">{!! $datas[2]->value !!}</h2>
                <p class="opacity-100 text-black">{!! $datas[3]->value !!}</p>
                

                  <span class="relative flex h-3 w-3 mt-6">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-[#2aa595]"></span>
                    <button onclick="window.location.href='/profile'" class="rounded-full btn btn-sm bg-[#2aa595] text-white">Read More</button>
                  </span>

            </div>
        </div>

        <div class="gap-10 mt-10 mb-5" id="mobile">
            <div>
                <img class="w-full h-full max-w-full rounded-2xl" src="{{ asset('storage/img/GeneralImage/'. $images[6]->image) }}" alt="why_us" />
            </div>
            <div>
                <h2 class="card-title opacity-100 text-2xl lg:text-3xl font-bold text-black mb-5 mt-5">{!! $datas[2]->value !!}</h2>
                <p class="opacity-100 text-black">{!! $datas[3]->value !!}</p>
                <button class="rounded-full btn btn-sm bg-green-700 text-white mt-10">Read More</button>
            </div>
        </div>

    </div>

    {{-- trusted by --}}
    <section class="bg-white dark:bg-gray-900 p-10 justify-items-center overflow-hidden">
        <h2 class="opacity-100 text-2xl lg:text-3xl font-bold text-black mb-10 mt-5">{!! $datas[4]->value !!}</h2>
        <div class="carousel carousel-end rounded-box">
            
            @foreach ($client as $clients)
            <div class="carousel-item">
              <img src="{{ asset('storage/img/Client/'. $clients->image) }}" alt="{{ $clients->name }}" class="h-40 p-5" />
            </div>
              @endforeach

            
        </div>
    </section>
    
    {{-- inquiry --}}
    <section style="background-image: url('{{ asset('storage/img/GeneralImage/'. $inquire[0]->image) }}')" class=" bg-white dark:bg-gray-900 h-[300px]" id="desktop">
        <div class="items-center max-w-screen-xl mx-auto my-auto p-4 py-20" >
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-7">{!! $datas[5]->value !!}</h2>
            </div>
            <div class="flex justify-center">
                <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
            </div>
        </div>
    </section>

    <section style="background-image: url('{{ asset('storage/img/GeneralImage/'. $inquire[0]->image) }}')" class=" bg-white dark:bg-gray-900" id="mobile">
        <div class="max-w-screen-xl mx-auto p-4" >
            <div class="gap-20 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div>
                    <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white text-center">{!! $datas[5]->value !!}</h2>
                </div>
                <div class="place-items-center grid gap-4">
                    <button type="button" class="items-center text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
                </div>
            </div>
        </div>
    </section>

</x-layout>
    