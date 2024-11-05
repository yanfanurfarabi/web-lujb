

<x-layout>
    <div class="container mx-auto">
        <div role="tablist" class="tabs tabs-boxed mt-10 mb-20">
            {{-- class tab active: tab-active --}}
            <a role="tab" class="tab text-white">Fuel Pump</a>
            <a role="tab" class="tab text-white">Hose</a>
            <a role="tab" class="tab text-white">Hose Meter</a>
            <a role="tab" class="tab text-white">Flexible Pipes</a>
            <a role="tab" class="tab text-white">ATG</a>
            <a role="tab" class="tab text-white">Panel</a>
        </div>
     
        {{-- Product --}}
        <div class="grid grid-cols-3 gap-4">
            <div class="card bg-white w-96 shadow-xl mb-20">
                <figure class="mt-5 mb-5">
                <img
                    src="img/tatsuno1.png"
                    alt="tatsuno1"
                    class="w-60 h-auto" />
                </figure>
                <div class="card-body items-center text-center border-t-2">
                <h2 class="card-title text-black mb-5">Sanki 1</h2>
                <div class="card-actions">
                    <button class="btn btn-info">Detail</button>
                </div>
                </div>
            </div>
            <div class="card bg-white w-96 shadow-xl mb-20">
                <figure class="mt-5 mb-5">
                <img
                    src="img/tatsuno1.png"
                    alt="tatsuno1"
                    class="w-60 h-auto" />
                </figure>
                <div class="card-body items-center text-center border-t-2">
                <h2 class="card-title text-black mb-5">Sanki 1</h2>
                <div class="card-actions">
                    <button class="btn btn-info">Detail</button>
                </div>
                </div>
            </div>
            <div class="card bg-white w-96 shadow-xl mb-20">
                <figure class="mt-5 mb-5">
                <img
                    src="img/tatsuno1.png"
                    alt="tatsuno1"
                    class="w-60 h-auto" />
                </figure>
                <div class="card-body items-center text-center border-t-2">
                <h2 class="card-title text-black mb-5">Sanki 1</h2>
                <div class="card-actions">
                    <button class="btn btn-info">Detail</button>
                </div>
                </div>
            </div>
            <div class="card bg-white w-96 shadow-xl mb-20">
                <figure class="mt-5 mb-5">
                <img
                    src="img/tatsuno1.png"
                    alt="tatsuno1"
                    class="w-60 h-auto" />
                </figure>
                <div class="card-body items-center text-center border-t-2">
                <h2 class="card-title text-black mb-5">Sanki 1</h2>
                <div class="card-actions">
                    <button class="btn btn-info">Detail</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <section style="background-image: url('img/bg_inquiry2.jpg')" class=" bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl mx-auto p-4" >
            <div class="grid grid-cols-2 gap-20 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div>
                    <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white text-right">Interested with our product and services?</h2>
                </div>
                <div class="justify-items-center">
                    <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
                </div>
            </div>
        </div>
    </section>
    </x-layout>