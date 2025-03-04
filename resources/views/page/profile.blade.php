<x-layout>

    <div class="hero h-auto" id="desktop">
        <img src= "{{ asset('storage/img/Banner/'. $banners[0]->image) }}" alt="Banner"/>
        <p class="absolute w-80 px-4 py-6 text-white bg-[#229e89] rounded-2xl right-60 bottom-50 font-semibold text-4xl">{!! $datas[33]->value !!}</p>
    </div>

    <div class="hero h-auto" id="mobile">
        <img src= "{{ asset('storage/img/Banner/'. $banners[1]->image) }}" alt="Banner"/>
        <p class="absolute w-80 px-4 text-white top-60 font-semibold text-4xl">{!! $datas[33]->value !!}</p>
    </div>

    {{-- section 1 about --}}
    <section class="bg-white dark:bg-gray-900" id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-8 lg:px-6">
                    <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-3xl tracking-tight font-semibold text-[#229e89] dark:text-white">{!! $datas[14]->value !!}</h2>
                        {{-- <hr class="w-48 h-1 bg-[#229e89] border-0 rounded mt-2 mb-4 dark:bg-gray-700"> --}}
                        <p class="mb-4 text-black">{!! $datas[15]->value !!}</p>
                    </div>
                    <div>
                        <img class="w-full rounded-3xl shadow-lg" src="{{ asset('storage/img/GeneralImage/'. $images[0]->image) }}" alt="office content 1">
                    </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" id="mobile">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[14]->value !!}</h2>
                        {{-- <hr class="w-48 h-1 bg-[#229e89] border-0 rounded mt-2 mb-4 dark:bg-gray-700"> --}}
                        <p class="mb-4 font-normal text-black">{!! $datas[15]->value !!}</p>
                    </div>
                    <div>
                        <img class="w-full rounded-3xl" src="{{ asset('storage/img/GeneralImage/'. $images[0]->image) }}" alt="office content 1">
                    </div>
            </div>
        </div>
    </section>

    {{-- section 2 about --}}
    <section class="dark:bg-gray-900" style="background-color: #f3f1f1" id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
                <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div>
                        <img class="w-full rounded-3xl shadow-lg" src="{{ asset('storage/img/GeneralImage/'. $images[1]->image) }}" alt="office content 1">
                    </div>
                    <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                        <p class="mb-4 text-black">{!! $datas[17]->value !!}</p>
                    </div>
                </div>
        </div>
    </section>

    <section class="dark:bg-gray-900" style="background-color: #f3f1f1" id="mobile">
        <div class="max-w-screen-xl mx-auto p-4">
                <div class="gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div>
                        <img class="w-full rounded-md shadow-lg" src="{{ asset('storage/img/GeneralImage/'. $images[1]->image) }}" alt="office content 1">
                    </div>
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <p class="mt-4 font-normal text-black">{!! $datas[17]->value !!}</p>
                    </div>
                </div>
        </div>
    </section>

    {{-- section 3 visi misi --}}
    <section class="bg-white dark:bg-gray-900" style="background-image: url('{{ asset('storage/img/GeneralImage/'. $images[5]->image) }}')" id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-20 justify-items-center mb-16 mt-10">
                <div class="justify-items-center">
                    <img src="{{ asset('storage/img/GeneralImage/'. $images[3]->image) }}" class="w-auto h-20 mb-5" alt="vission icon" />
                    <h3 class="text-[#229e89] text-xl lg:text-2xl font-semibold dark:text-white mb-5">{!! $datas[18]->value !!}</h3>
                    <p class="font-medium text-gray-900 dark:text-white text-center">{!! $datas[19]->value !!}</p>
                </div>
                <div class="justify-items-center">
                    <img src="{{ asset('storage/img/GeneralImage/'. $images[4]->image) }}" class="w-auto h-20 mb-5" alt="mission icon" />
                    <h3 class="text-[#229e89] text-xl lg:text-2xl font-semibold dark:text-white mb-5">{!! $datas[20]->value !!}</h3>
                    <p class="font-medium text-gray-900 dark:text-white text-center">{!! $datas[21]->value !!}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" style="background-image: url('{{ asset('storage/img/GeneralImage/'. $images[5]->image) }}')" id="mobile">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="gap-20 justify-items-center mb-16 mt-10">
                <div class="justify-items-center">
                    <img src="{{ asset('storage/img/GeneralImage/'. $images[3]->image) }}" class="w-auto h-20 mb-5 shadow-md" alt="vission icon" />
                    <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white mb-5">{!! $datas[18]->value !!}</h3>
                    <p class="text-gray-900 dark:text-white text-center">{!! $datas[19]->value !!}</p>
                </div>
                <div class="justify-items-center mt-4">
                    <img src="{{ asset('storage/img/GeneralImage/'. $images[4]->image) }}" class="w-auto h-20 mb-5 shadow-md" alt="mission icon" />
                    <h3 class="text-gray-900 text-xl lg:text-2xl font-semibold dark:text-white mb-5">{!! $datas[20]->value !!}</h3>
                    <p class="text-gray-900 dark:text-white text-center">{!! $datas[21]->value !!}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- section 4 director --}}

    <section class="bg-white dark:bg-gray-900" id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div>
                    <img class="w-96 rounded-3xl shadow-2lg" src="{{ asset('storage/img/GeneralImage/'. $images[2]->image) }}" alt="office content 1">
                </div>
                    <div class="font-regular text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-3xl tracking-tight font-semibold text-[#229e89] dark:text-white">{!! $datas[22]->value !!}</h2>
                        {{-- <hr class="w-48 h-1 bg-[#229e89] border-0 rounded md:my-5 dark:bg-gray-700"> --}}
                        <p class="mb-4 text-black">{!! $datas[23]->value !!}</p>
                    </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" id="mobile">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div>
                    <img class="w-full rounded-md shadow-md" src="{{ asset('storage/img/GeneralImage/'. $images[2]->image) }}" alt="office content 1">
                </div>
                    <div class="font-regular text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mt-4 mb-4 text-3xl tracking-tight font-bold text-[#229e89] dark:text-white">{!! $datas[22]->value !!}</h2>
                        {{-- <hr class="w-48 h-1 bg-[#229e89] border-0 rounded md:my-5 dark:bg-gray-700"> --}}
                        <p class="mb-4 font-normal text-black">{!! $datas[23]->value !!}</p>
                    </div>
            </div>
        </div>
    </section>

    {{-- section 5 client --}}

        <section class="dark:bg-white p-4 justify-items-center overflow-hidden mx-auto w-[80%]">
            <h2 class="opacity-100 text-2xl lg:text-3xl font-semibold text-[#229e89] mb-2 mt-2">{!! $datas[4]->value !!}</h2>
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

    {{-- <section class="bg-white dark:bg-gray-900  p-10 justify-items-center overflow-hidden" id="desktop">
        <h2 class="opacity-100 text-2xl lg:text-3xl font-semibold text-[#229e89] mb-2 mt-5">{!! $datas[24]->value !!}</h2>
        <div class="carousel carousel-center max-w-screen-xl mx-auto">

            @foreach ($client as $clients)
            <div class="carousel-item">
              <img src="{{asset('storage/img/Client/'. $clients->image)}}" alt="{{ $clients->name}}" class="w-auto h-40 p-5" />
            </div>
                
            @endforeach

        </div>
    </section> --}}

    {{-- <section class="bg-white dark:bg-gray-900 p-10 justify-items-center overflow-hidden" id="mobile">
        <h2 class="opacity-100 text-2xl lg:text-3xl font-bold text-black mb-10 mt-5">{!! $datas[24]->value !!}</h2>
        <div class="carousel w-96">

            @foreach ($client as $clients)
            <div class="carousel-item">
              <img src="{{asset('storage/img/Client/'. $clients->image)}}" alt="{{ $clients->name}}" class="w-auto h-40 p-5" />
            </div>
                
            @endforeach

        </div>
    </section> --}}



    {{-- section 6 maps --}}
    <section class="bg-white dark:bg-gray-900">
        <div> 
            <iframe class="rounded-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589.6785848539195!2d106.83485005336404!3d-6.148308506706189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5ee87b39529%3A0x17db70cec35a174!2sPT.%20Ladang%20Usaha%20Jaya%20Bersama!5e0!3m2!1sen!2sid!4v1727426780001!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    {{-- inquiry --}}
    <section style="background-image: url('{{ asset('storage/img/GeneralImage/'. $inquire[0]->image) }}')" class=" bg-white dark:bg-gray-900 h-[300px]" >
        <div class="items-center max-w-screen-xl mx-auto my-auto p-4 py-20" >
            <div>
                <h2 class="text-2xl font-semibold text-[#229e89] dark:text-white text-center mb-7">{!! $datas[5]->value !!}</h2>
            </div>
            <div class="flex justify-center">
                <button onclick="window.open('https://wa.wizard.id/62abfd')" class="btn rounded-full btn-m w-[120px] relative inline-flex items-center justify-start overflow-hidden font-medium transition-all bg-[#229e89] rounded hover:bg-[#229e89] group py-1.5 px-2.5 mt-4">
                    <span class="w-56 h-48 rounded bg-indigo-100 absolute bottom-0 left-0 translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                    <span class="relative w-full text-left text-center text-white transition-colors duration-300 ease-in-out group-hover:text-[#229e89]">Inquiry</span>
                    </button>

                {{-- <button type="button" onclick="window.open('https://wa.wizard.id/62abfd')" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button> --}}
            </div>
        </div>
    </section>

</x-layout>