<x-layout>

    <div class="hero h-auto" id="desktop">
        <img src= "{{ asset('storage/img/Banner/'. $banners[0]->image) }}" alt="Banner"/>
    </div>

    <div class="hero h-auto" id="mobile">
        <img src= "{{ asset('storage/img/Banner/'. $banners[1]->image) }}" alt="Banner"/>
    </div>
    
    <section class="bg-white dark:bg-gray-900" >
        <div class="max-w-screen-xl mx-auto p-10">
            {{-- <h2 class="text-3xl tracking-tight font-bold text-[#229e89] dark:text-white text-center mb-5">{!! $datas[27]->value !!}</h2> --}}
            <p class="text-left text-black">{!! $datas[28]->value !!}
            </p>
                  <button onclick="window.open('https://forms.gle/W1hE5k7cQrsgGV3j8')" class="btn rounded-full btn-m w-[160px] relative inline-flex items-center justify-start overflow-hidden font-medium transition-all bg-[#229e89] rounded hover:bg-[#229e89] group py-1.5 px-2.5 mt-4">
                    <span class="w-56 h-48 rounded bg-indigo-100 absolute bottom-0 left-0 translate-x-full ease-out duration-500 transition-all translate-y-full mb-9 ml-9 group-hover:ml-0 group-hover:mb-32 group-hover:translate-x-0"></span>
                    <span class="relative w-full text-left text-center text-white transition-colors duration-300 ease-in-out group-hover:text-[#229e89]">Make A Complaint</span>
                    </button>

        </div>

    </section>

</x-layout>