<x-layout>
    {{-- section 1 about --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{!! $datas[14]->value !!}</h2>
                        <p class="mb-4 text-black">{!! $datas[15]->value !!}</p>
                    </div>
                    <div>
                        <img class="w-full rounded-md" src="img/ourteam2.jpg" alt="office content 1">
                    </div>
            </div>
        </div>
    </section>

    {{-- section 2 about --}}
    <section class="dark:bg-gray-900" style="background-color: #f3f1f1">
        <div class="max-w-screen-xl mx-auto p-4">
                <div class="grid grid-cols-2 gap-10 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div>
                        <img class="w-full rounded-md" src="img/profile.jpeg" alt="office content 1">
                    </div>
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <p class="mb-4 text-black">{!! $datas[17]->value !!}</p>
                    </div>
                </div>
        </div>
    </section>

    {{-- section 3 visi misi --}}
    <section class="bg-white dark:bg-gray-900" style="background-image: url('img/BG visi misi.jpg')">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="grid grid-cols-2 gap-20 justify-items-center mb-16 mt-10">
                <div class="justify-items-center">
                    <img src="img/vision.png" class="w-auto h-20 mb-5" alt="vission icon" />
                    <h3 class="text-gray-900 text-xl lg:text-2xl font-bold dark:text-white mb-5">{!! $datas[18]->value !!}</h3>
                    <p class="text-gray-900 dark:text-white text-center">{!! $datas[19]->value !!}</p>
                </div>
                <div class="justify-items-center">
                    <img src="img/mission.png" class="w-auto h-20 mb-5" alt="mission icon" />
                    <h3 class="text-gray-900 text-xl lg:text-2xl font-bold dark:text-white mb-5">{!! $datas[20]->value !!}</h3>
                    <p class="text-gray-900 dark:text-white text-center">{!! $datas[21]->value !!}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- section 4 director --}}
    <section class="dark:bg-gray-900" style="background-color: #f3f1f1">
        <div class="max-w-screen-xl mx-auto p-4">
                <div class="grid grid-cols-2 gap-5 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="justify-items-center">
                        <img class="w-80 rounded-md" src="img/director.jpg" alt="office content 1">
                    </div>
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{!! $datas[22]->value !!}</h2>
                        <p class="mb-4 text-black">{!! $datas[23]->value !!}
                    </div>
                </div>
        </div>
    </section>

    {{-- section 5 client --}}
    <section class="bg-white dark:bg-gray-900 p-10 justify-items-center">
        <h2 class="opacity-100 text-2xl lg:text-3xl font-bold text-black mb-10 mt-5">{!! $datas[24]->value !!}</h2>
        <div class="carousel">
            <div class="carousel-item">
              <img
                src="img/pertamina_1.png"
                alt="pertamina"
                class="w-auto h-20 p-5" />
            </div>
            <div class="carousel-item">
                <img
                  src="img/patraniaga_1.png"
                  alt="patraniaga"
                  class="w-auto h-20 p-5" />
            </div>
            <div class="carousel-item">
                <img
                  src="img/pertamina_retail_1.png"
                  alt="pertamnina_retail"
                  class="w-auto h-20 p-5" />
            </div>
            <div class="carousel-item">
                <img
                  src="img/pertamina_terminal_1.png"
                  alt="pertamina_terminal"
                  class="w-auto h-20 p-5" />
            </div>
            <div class="carousel-item">
                <img
                  src="img/pitsa_1.png"
                  alt="pitsa"
                  class="w-auto h-20 p-5" />
            </div>
            <div class="carousel-item">
                <img
                  src="img/polda_1.png"
                  alt="polda"
                  class="w-auto h-20 p-5" />
            </div>
        </div>
    </section>

    {{-- section 6 maps --}}
    <section class="bg-white dark:bg-gray-900">
        <div> 
            <iframe class="rounded-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589.6785848539195!2d106.83485005336404!3d-6.148308506706189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5ee87b39529%3A0x17db70cec35a174!2sPT.%20Ladang%20Usaha%20Jaya%20Bersama!5e0!3m2!1sen!2sid!4v1727426780001!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    {{-- section 7 inquiry --}}
    <section style="background-image: url('img/bg_inquiry2.jpg')" class=" bg-white dark:bg-gray-900">
        <div class="items-center max-w-screen-xl mx-auto p-4" >
            <div>
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-7 mt-5">{!! $datas[5]->value !!}</h2>
            </div>
            <div class="flex justify-center">
                <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Inquiry</button>
            </div>
        </div>
    </section>
</x-layout>