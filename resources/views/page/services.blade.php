<x-layout>

    <div class="hero h-auto mt-20" id="desktop">
        <img src= "{{ asset('storage/img/'. $banners[0]->image) }}" alt="Banner"/>
    </div>

    <div class="hero h-auto mt-20" id="mobile">
        <img src= "{{ asset('storage/img/'. $banners[1]->image) }}" alt="Banner"/>
    </div>
  
    {{-- section 1 maintenence --}}
    <section id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="justify-items-center">
                    <img class="h-auto w-96 rounded-md" src="{{ asset('storage/img/'. $images[0]->image) }}" alt="office content 1">
                </div>
                <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[6]->value !!}</h2>
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
                    <img class="h-auto w-96 rounded-md" src="{{ asset('storage/img/'. $images[0]->image) }}" alt="office content 1">
                </div>
                <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[6]->value !!}</h2>
                    <p class="mb-4 text-black">{!! $datas[7]->value !!}
                        </p>
                </div>
            </div>
        </div>
    </section>

    {{-- section 2 construction --}}
    <section class="bg-white dark:bg-gray-900" style="background-image: url('{{ asset('storage/img/'. $images[3]->image) }}')" id="desktop">
        <div class="max-w-screen-xl mx-auto p-40">
            <h2 class="text-3xl tracking-tight font-bold text-gray-900 dark:text-white text-center mb-5">{!! $datas[8]->value !!}</h2>
            <p class="text-center text-black">{!! $datas[9]->value !!}</p>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" style="background-image: url('{{ asset('storage/img/'. $images[3]->image) }}')" id="mobile">
        <div class="max-w-screen-xl mx-auto p-8">
            <h2 class="text-3xl tracking-tight font-bold text-gray-900 dark:text-white text-center mb-5">{!! $datas[8]->value !!}</h2>
            <p class="text-center text-black">{!! $datas[9]->value !!}</p>
        </div>
    </section>

    {{-- section 3 equipment --}}
    <section id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[10]->value !!}</h2>
                        <p class="mb-4 text-black">{!! $datas[11]->value !!}</p>
                    </div>
                    <div class="justify-items-center">
                        <img class="w-96 rounded-md" src="{{ asset('storage/img/'. $images[1]->image) }}" alt="equipment_install">
                    </div>
            </div>
        </div>
    </section>

    <section id="mobile">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="sgap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[10]->value !!}</h2>
                        <p class="mb-4 text-black">{!! $datas[11]->value !!}</p>
                    </div>
                    <div class="justify-items-center">
                        <img class="w-96 rounded-md" src="{{ asset('storage/img/'. $images[1]->image) }}" alt="equipment_install">
                    </div>
            </div>
        </div>
    </section>

    {{-- section 4 hydrostatic --}}
    <section class="bg-white dark:bg-gray-900" id="desktop">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="justify-items-center">
                    <img class="w-full rounded-md" src="{{ asset('storage/img/'. $images[2]->image) }}" alt="hydrostatic_test">
                </div>
                <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[12]->value !!}</h2>
                    <p class="mb-4 text-black">{!! $datas[13]->value !!}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900" id="mobile">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="justify-items-center">
                    <img class="w-full rounded-md" src="{{ asset('storage/img/'. $images[2]->image) }}" alt="hydrostatic_test">
                </div>
                <div class="font-reguler text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[12]->value !!}</h2>
                    <p class="mb-4 text-black">{!! $datas[13]->value !!}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- section 5 interest --}}
    <section style="background-image: url('{{ asset('storage/img/'. $inquire[0]->image) }}')" class=" bg-white dark:bg-gray-900" id="desktop">
        <div class="max-w-screen-xl mx-auto p-4" >
            <div class="grid grid-cols-2 gap-20 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div>
                    <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white text-right">{!! $datas[5]->value !!}</h2>
                </div>
                <div class="place-items-center grid gap-4">
                    <button type="button" class="items-center text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url('{{ asset('storage/img/'. $inquire[0]->image) }}')" class=" bg-white dark:bg-gray-900" id="mobile">
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