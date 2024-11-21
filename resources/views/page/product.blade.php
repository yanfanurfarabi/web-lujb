<x-layout>
    <div class="hero h-auto mt-20" id="desktop">
        <img src= "{{ asset('storage/img/Banner/'. $banners[0]->image) }}" alt="Banner"/>
    </div>

    <div class="hero h-auto mt-20" id="mobile">
        <img src= "{{ asset('storage/img/Banner/'. $banners[1]->image) }}" alt="Banner"/>
    </div>

    <div class="container mx-auto">
        {{-- class tab active: tab-active --}}
        <div role="tablist" class="tabs tabs-boxed flex flex-wrap mt-10 mb-20 justify-center">
            <a href="/product/fuelpump" class="tab text-white flex-auto text-center">Sanki Dispensing Pump</a>
            <a href="/product/stp" class="tab text-white flex-auto text-center">Red Robe Turbine Pump</a>
            <a href="/product/atg" class="tab  text-white flex-auto text-center">Guihe ATG</a>
            <a href="/product/hose" class="tab  text-white flex-auto text-center">Dantec Composite Hose</a>
            <a href="/product/lcp" class="tab  text-white flex-auto text-center">LC Meter</a>
            <a href="/product/halock" class="tab  text-white flex-auto text-center">Halock Flexible Pipes</a>
            
            {{-- <a onclick="openTab('all_products')" class="tab tab-active text-white flex-auto text-center">All Products</a>
            <a onclick="openTab('hose_meter')" class="tab text-white flex-auto text-center">Guihe ATG</a>
            <a onclick="openTab('flexible_pipes')" class="tab text-white flex-auto text-center">Dantec Composite Hose</a>
            <a onclick="openTab('atg')" class="tab text-white flex-auto text-center">LCP Flowmeters</a>
            <a onclick="openTab('panel')" class="tab text-white flex-auto text-center">Halock Flexible Pipes</a> --}}
        </div>
     
        {{-- Tab All Products --}}

        <div class="tab-content active" id="all_products" style="display: block;">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 justify-items-center">
            
            @foreach ($products as $product)

                <div class="card bg-white w-96 shadow-xl mb-20">
                    <figure class="mt-5 mb-5">
                    <img
                        src="{{ asset('storage/img/Product/'. $product->bannerimage) }}"
                        alt="{!! $product->name !!}"
                        class="w-70 h-auto" />
                    </figure>
                    <div class="card-body items-center text-center border-t-2">
                    <h2 class="card-title font-bold text-3l text-gray-800 mb-5">{!! $product->name !!}</h2>
                    <div class="card-actions">
                        <a href="{{ route('productdesc', $product->name) }}"><button class="btn btn-info text-white">Detail</button></a>
                    </div>
                    </div>
                </div>
                
                @endforeach

    </div>
        </div>
    </div>

    <section style="background-image: url('{{ asset('storage/img/'. $inquire[0]->image) }}')" class=" bg-white dark:bg-gray-900" id="desktop">
        <div class="items-center max-w-screen-xl mx-auto p-4" >
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-7">{!! $datas[5]->value !!}</h2>
            </div>
            <div class="flex justify-center">
                <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
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

    <script>
        function openTab(tabId) {
        // Hapus class 'tab-active' dari semua tab
        document.querySelectorAll('.tab').forEach(tab => {
            tab.classList.remove('tab-active');
            tab.style.backgroundColor = ''; // Reset background
        });

        // Tambahkan class 'tab-active' ke tab yang diklik
        const activeTab = document.querySelector(`[onclick="openTab('${tabId}')"]`);
        activeTab.classList.add('tab-active');
        // activeTab.style.backgroundColor = '#ffffff'; // Style khusus untuk tab aktif

        // Sembunyikan semua konten tab
        document.querySelectorAll('.tab-content').forEach(content => {
            content.style.display = 'none';
        });

        // Tampilkan konten tab yang sesuai
        document.getElementById(tabId).style.display = 'block';
    }
    </script>
</x-layout>

