<x-layout>

    <div class="hero h-auto" id="desktop">
        <img src= "{{ asset('storage/img/Banner/'. $banners[0]->image) }}" alt="Banner"/>
        <p class="absolute w-80 px-4 text-white right-60 bottom-50 font-semibold text-4xl">{!! $datas[32]->value !!}</p>
    </div>

    <div class="hero h-auto" id="mobile">
        <img src= "{{ asset('storage/img/Banner/'. $banners[1]->image) }}" alt="Banner"/>
        <p class="absolute w-80 px-4 text-white top-60 font-semibold text-4xl">{!! $datas[32]->value !!}</p>
    </div>
  
    {{-- section 1 maintenence --}}
    <section id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="justify-items-center">
                    <img class="h-auto w-96 rounded-md shadow-lg" src="{{ asset('storage/img/GeneralImage/'. $images[0]->image) }}" alt="office content 1">
                </div>
                <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[6]->value !!}</h2>
                    <hr class="w-48 h-1 bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700 mb-4">
                    <p class="mb-4 text-black">{!! $datas[7]->value !!}
                        </p>
                </div>
            </div>
        </div>
    </section>

    <section id="mobile">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="justify-items-center">
                    <img class="h-auto w-96 rounded-md shadow-lg" src="{{ asset('storage/img/GeneralImage/'. $images[0]->image) }}" alt="office content 1">
                </div>
                <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[6]->value !!}</h2>
                    <hr class="w-48 h-1 bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700 mb-4">
                    <p class="mb-4 text-black">{!! $datas[7]->value !!}
                        </p>
                </div>
            </div>
        </div>
    </section>

    {{-- section 2 construction --}}
    <section class="bg-white dark:bg-gray-900" style="background-image: url('{{ asset('storage/img/GeneralImage/'. $images[3]->image) }}')" id="desktop">
        <div class="max-w-screen-xl mx-auto p-40">
            <h2 class="text-3xl tracking-tight font-bold text-gray-900 dark:text-white text-center mb-2">{!! $datas[8]->value !!}</h2>
            <hr class="w-48 h-1 mx-auto bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700 mb-4">
            <p class="text-center text-black">{!! $datas[9]->value !!}</p>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" style="background-image: url('{{ asset('storage/img/GeneralImage/'. $images[3]->image) }}')" id="mobile">
        <div class="max-w-screen-xl mx-auto p-8">
            <h2 class="text-3xl tracking-tight font-bold text-gray-900 dark:text-white text-center mb-2">{!! $datas[8]->value !!}</h2>
            <hr class="w-48 h-1 mx-auto bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700 mb-4">
            <p class="text-center text-black">{!! $datas[9]->value !!}</p>
        </div>
    </section>

    {{-- section 3 equipment --}}
    <section id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[10]->value !!}</h2>
                        <hr class="w-48 h-1 bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700 mb-4">
                        <p class="mb-4 text-black">{!! $datas[11]->value !!}</p>
                    </div>
                    <div class="justify-items-center">
                        <img class="w-96 rounded-md shadow-lg" src="{{ asset('storage/img/GeneralImage/'. $images[1]->image) }}" alt="equipment_install">
                    </div>
            </div>
        </div>
    </section>

    <section id="mobile">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="sgap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[10]->value !!}</h2>
                        <hr class="w-48 h-1 bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700 mb-4">
                        <p class="mb-4 text-black">{!! $datas[11]->value !!}</p>
                    </div>
                    <div class="justify-items-center">
                        <img class="w-96 rounded-md shadow-lg" src="{{ asset('storage/img/GeneralImage/'. $images[1]->image) }}" alt="equipment_install">
                    </div>
            </div>
        </div>
    </section>

    {{-- section 4 hydrostatic --}}
    <section class="bg-white dark:bg-gray-900" id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="justify-items-center">
                    <img class="w-full rounded-md shadow-lg" src="{{ asset('storage/img/GeneralImage/'. $images[2]->image) }}" alt="hydrostatic_test">
                </div>
                <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[12]->value !!}</h2>
                    <hr class="w-48 h-1 bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700 mb-4">
                    <p class="mb-4 text-black">{!! $datas[13]->value !!}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" id="mobile">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="justify-items-center">
                    <img class="w-full rounded-md shadow-lg" src="{{ asset('storage/img/GeneralImage/'. $images[2]->image) }}" alt="hydrostatic_test">
                </div>
                <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[12]->value !!}</h2>
                    <hr class="w-48 h-1 bg-[#384fd4] border-0 rounded md:my-5 dark:bg-gray-700 mb-4">
                    <p class="mb-4 text-black">{!! $datas[13]->value !!}</p>
                </div>
            </div>
        </div>
    </section>

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