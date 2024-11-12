{{-- @dd('$datas') --}}

<x-layout>
    <div class="max-w-screen-xl mx-auto p-4">
            
        <h3 class=" text-gray-900 text-2xl lg:text-3xl font-bold dark:text-white text-center mb-10">
            {!! $datas[0]->value !!} </h3>
        
            {{-- our product --}}
        <div class="flex flex-col  shadow-sm rounded-xl p-5 md:p-5 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 border-2 border-slate-500">
            <div class="rounded-md ">
                <h1 class=" text-gray-900 text-xl lg:text-2xl font-bold dark:text-white text-center mt-5 mb-10">
                    {!! $datas[1]->value !!} </h1>  
                <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 grid gap-4">
                    {{-- <div class="hover:shadow-lg overflow-hidden">
                        <img class="h-auto max-w-full rounded-lg group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out w-full object-cover" src="img/banner_navigation1.jpg" alt="">
                    </div> --}}
                    <div>
                        <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product"> 
                            <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                                <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/'. $images[0]->image) }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div class="row-span-2">
                        <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product">
                            <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                                <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/'. $images[1]->image) }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product">
                            <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                                <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/'. $images[2]->image) }}" alt="">
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product">
                            <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                                <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/'. $images[3]->image) }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="/product">
                            <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                                <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/'. $images[4]->image) }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <a class="group relative block rounded-lg overflow-hidden focus:outline-none" href="#">
                            <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-lg overflow-hidden">
                                <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-lg w-full object-cover" src="{{ asset('storage/img/'. $images[5]->image) }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    
        {{-- why us --}}
        <div class="grid grid-cols-2 gap-10 mt-10 mb-5">
            <div>
                <img class="w-full h-96 max-w-full rounded-2xl" src="{{ asset('storage/img/'. $images[6]->image) }}" alt="why_us" />
            </div>
            <div>
                <h2 class="card-title opacity-100 text-2xl lg:text-3xl font-bold text-black mb-5 mt-5">{!! $datas[2]->value !!}</h2>
                <p class="opacity-100 text-black">{!! $datas[3]->value !!}</p>
                <button class="rounded-full btn btn-sm btn-info text-white mt-10">Read More</button>
            </div>
        </div>
    </div>

    {{-- trusted by --}}
    <section class="bg-white dark:bg-gray-900 p-10 justify-items-center">
        <h2 class="opacity-100 text-2xl lg:text-3xl font-bold text-black mb-10 mt-5">{!! $datas[4]->value !!}</h2>
        <div class="carousel">
            <div class="carousel-item">
              <img
                src="img/pertamina_1.png"
                alt="pertamina"
                class="w-auto h-20 p-5" />
            </div>
            <div class="carousel-item">
                <img
                  src="img/pertamina_1.png"
                  alt="pertamina"
                  class="w-auto h-20 p-5" />
              </div>
              <div class="carousel-item">
                <img
                  src="img/pertamina_1.png"
                  alt="pertamina"
                  class="w-auto h-20 p-5" />
              </div>
              <div class="carousel-item">
                <img
                  src="img/pertamina_1.png"
                  alt="pertamina"
                  class="w-auto h-20 p-5" />
              </div>
              <div class="carousel-item">
                <img
                  src="img/pertamina_1.png"
                  alt="pertamina"
                  class="w-auto h-20 p-5" />
              </div>
            
            <div class="carousel-item">
                <img
                  src="img/polda_1.png"
                  alt="polda"
                  class="w-auto h-20 p-5" />
            </div>
        </div>
    </section>
    
    {{-- inquiry --}}
    <section style="background-image: url('img/bg_inquiry2.jpg')" class=" bg-white dark:bg-gray-900">
        <div class="items-center max-w-screen-xl mx-auto p-4" >
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-7">{!! $datas[5]->value !!}</h2>
            </div>
            <div class="flex justify-center">
                <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
            </div>
        </div>
    </section>
</x-layout>
    