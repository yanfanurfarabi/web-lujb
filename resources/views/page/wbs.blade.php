<x-layout>

    <div class="hero h-auto mt-20" id="desktop">
        <img src= "{{ asset('storage/img/Banner/'. $banners[0]->image) }}" alt="Banner"/>
    </div>

    <div class="hero h-auto mt-20" id="mobile">
        <img src= "{{ asset('storage/img/Banner/'. $banners[1]->image) }}" alt="Banner"/>
    </div>
    
    <section class="bg-white dark:bg-gray-900" >
        <div class="max-w-screen-xl mx-auto p-10">
            <h2 class="text-3xl tracking-tight font-bold text-gray-900 dark:text-white text-center mb-5">{!! $datas[27]->value !!}</h2>
            <p class="text-left text-black">{!! $datas[28]->value !!}
            </p>
                <button type="button" onclick="window.location.href='https://forms.gle/W1hE5k7cQrsgGV3j8'" class="mt-6 py-3 px-4 inline-flex items-center gap-x-2 text-sm
                font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Make A Complaint
                  </button>
        </div>

    </section>

</x-layout>