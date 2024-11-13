<x-layout>
    {{-- section 1 maintenence --}}
    <section>
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="justify-items-center">
                    <img class="h-auto w-96 rounded-md" src="{{ asset('storage/img/'. $images[7]->image) }}" alt="office content 1">
                </div>
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[6]->value !!}</h2>
                    <p class="mb-4 text-black">{!! $datas[7]->value !!}
                        </p>
                </div>
            </div>
        </div>
    </section>

    {{-- section 2 construction --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="bg-auto bg-center" style="background-image: url('{{ asset('storage/img/'. $images[13]->image) }}')"></div>
        <div class="max-w-screen-xl mx-auto p-40">
            <h2 class="text-3xl tracking-tight font-bold text-gray-900 dark:text-white text-center mb-5">{!! $datas[8]->value !!}</h2>
            <p class="text-center text-black">{!! $datas[9]->value !!}</p>
        </div>
    </section>

    {{-- section 3 equipment --}}
    <section>
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[10]->value !!}</h2>
                        <p class="mb-4 text-black">{!! $datas[11]->value !!}</p>
                    </div>
                    <div class="justify-items-center">
                        <img class="w-96 rounded-md" src="{{ asset('storage/img/'. $images[8]->image) }}" alt="equipment_install">
                    </div>
            </div>
        </div>
    </section>

    {{-- section 4 hydrostatic --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="justify-items-center">
                    <img class="w-full rounded-md" src="{{ asset('storage/img/'. $images[9]->image) }}" alt="hydrostatic_test">
                </div>
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-3xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $datas[12]->value !!}</h2>
                    <p class="mb-4 text-black">{!! $datas[13]->value !!}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- section 5 interest --}}
    <section style="background-image: url('{{ asset('storage/img/'. $images[14]->image) }}')" class=" bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl mx-auto p-4" >
            <div class="grid grid-cols-2 gap-20 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div>
                    <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white text-right">{!! $datas[5]->value !!}</h2>
                </div>
                <div class="justify-items-center">
                    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
                </div>
            </div>
        </div>
    </section>
</x-layout>