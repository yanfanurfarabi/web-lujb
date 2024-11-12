<x-layout2>
    <section>
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-rows-2 grid-flow-col gap-4">
                <div class="row-span-2">
                    <div class="grid gap-4">
                        <div>
                            <img class="h-auto w-100 rounded-lg" src="{{ asset('storage/img/'. $product->bannerimage) }}" alt="">
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
                    <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">{!! $product->name !!} </h2>
                    <p class="mb-4 text-black">{!! $product->desc !!} </p>
                </div>
                <div>
                    <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Technical Detail</h2>
                    <p class="mb-4 text-black">{!! $product->spec !!} </p>
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
        <div class="items-center max-w-screen-xl mx-auto p-4" >
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-7">Interested With Our Product and Services?</h2>
            </div>
            <div class="flex justify-center">
                <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
            </div>
        </div>
    </section>
</x-layout2>