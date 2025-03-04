<x-layout2>
    <section>
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-rows-2 grid-flow-col gap-4">
                <div class="row-span-2">
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto w-100 rounded-lg" src="{{ asset('storage/img/Product/'. $productdesc->bannerimage) }}" alt="">
                        </div>
                        {{-- <div class="grid grid-cols-5 gap-2 items-center w-auto ">
                            <div class="border border-gray-400 bg-white rounded-md items-center">
                                <img class="h-auto w-20 rounded-lg" src="img/tatsuno1.png" alt="">
                            </div>
                            <div class="border border-gray-400 bg-white rounded-md">
                                <img class="h-auto w-20 rounded-lg" src="img/tatsuno1.png" alt="">
                            </div>
                            <div class="border border-gray-400 bg-white rounded-md">
                                <img class="h-auto w-20 rounded-lg" src="img/tatsuno1.png" alt="">
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div>
                    <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $productdesc->name !!} </h2>
                    <p class="mb-4 text-black">{!! $productdesc->desc !!} </p>
                </div>
                <div>
                    <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Technical Detail</h2>
                    <p class="mb-4 text-black">{!! $productdesc->spec !!} </p>
                </div>
            </div>
        </div>
        
    </section>

    {{-- <section>
        <div class="max-w-screen-xl mx-auto p-4">
            <h2 class="mb-10 text-3xl tracking-tight font-bold text-gray-900 dark:text-white text-center">Featured Products</h2>
            <div class="grid grid-cols-4 justify-items-center gap-4">
                <div class="card bg-white w-60 shadow-md mb-5">
                    <figure class="mt-5 mb-5">
                    <img
                        src="img/tatsuno1.png"
                        alt="tatsuno1"
                        class="w-20 h-auto" />
                    </figure>
                    <div class="card-body items-center text-center border-t-2">
                        <h2 class="card-title text-black ">Sanki 1</h2>
                    </div>
                </div>
                <div class="card bg-white w-60 shadow-md mb-5">
                    <figure class="mt-5 mb-5">
                    <img
                        src="img/tatsuno1.png"
                        alt="tatsuno1"
                        class="w-20 h-auto" />
                    </figure>
                    <div class="card-body items-center text-center border-t-2">
                        <h2 class="card-title text-black ">Sanki 1</h2>
                    </div>
                </div>
                <div class="card bg-white w-60 shadow-md mb-5">
                    <figure class="mt-5 mb-5">
                    <img
                        src="img/tatsuno1.png"
                        alt="tatsuno1"
                        class="w-20 h-auto" />
                    </figure>
                    <div class="card-body items-center text-center border-t-2">
                        <h2 class="card-title text-black ">Sanki 1</h2>
                    </div>
                </div>
                <div class="card bg-white w-60 shadow-md mb-5">
                    <figure class="mt-5 mb-5">
                    <img
                        src="img/tatsuno1.png"
                        alt="tatsuno1"
                        class="w-20 h-auto" />
                    </figure>
                    <div class="card-body items-center text-center border-t-2">
                        <h2 class="card-title text-black ">Sanki 1</h2>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section style="background-image: url('{{asset( 'img/bg_inquiry2.jpg') }}'); height:300px" class=" bg-white dark:bg-gray-900">
        <div class="items-center max-w-screen-xl mx-auto my-auto p-4 py-20" >
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-7">Interested With Our Product and Services?</h2>
            </div>
            {{-- <div class="flex justify-center">
                <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
            </div> --}}
            <div class="flex justify-center">
            <button onclick="window.open('https://wa.wizard.id/62abfd')" class="btn rounded-full btn-m w-[120px] relative inline-flex items-center justify-start overflow-hidden font-medium transition-all bg-[#384fd4] rounded hover:bg-[#384fd4] group py-1.5 px-2.5 mt-4">
                <span class="w-56 h-48 rounded bg-indigo-100 absolute bottom-0 left-0 translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                <span class="relative w-full text-left text-center text-white transition-colors duration-300 ease-in-out group-hover:text-[#142792]">Inquiry</span>
                </button>
            </div>
        </div>
    </section>
</x-layout2>