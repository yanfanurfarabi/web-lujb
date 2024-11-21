<x-layout>
    
    <div class="hero h-auto mt-20" id="desktop">
        <img src= "{{ asset('storage/img/Banner/'. $banners[0]->image) }}" alt="Banner"/>
    </div>

    <div class="hero h-auto mt-20" id="mobile">
        <img src= "{{ asset('storage/img/Banner/'. $banners[1]->image) }}" alt="Banner"/>
    </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
             @endif

    <div class="max-w-screen-xl mx-auto p-4 mt-10 mb-10">
        <div class="flex flex-col bg-white border border-gray-200 shadow-sm rounded-xl p-10 md:p-10 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
            <div class="grid grid-cols-2 gap-10">
                <div>
                    <h1 class="card-title opacity-100 text-xl lg:text-2xl font-bold text-black mb-5">Contact</h1>
                    <p class="text-black">{!! $datas[25]->value !!}</p>
                    <iframe class="rounded-md mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589.6785848539195!2d106.83485005336404!3d-6.148308506706189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5ee87b39529%3A0x17db70cec35a174!2sPT.%20Ladang%20Usaha%20Jaya%20Bersama!5e0!3m2!1sen!2sid!4v1727426780001!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    <h1 class="card-title opacity-100 text-xl lg:text-2xl font-bold text-black mb-2 ">Leave us message</h1>
                    <span>{!! $datas[26]->value !!}</span>
                    <form action="{{ route('email.store') }}" method="POST">
                        @csrf
                        <div class="mb-5 mt-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your name" required />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required />
                    </div>

                    <div class="mb-5">
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
                        <div class="Card ">
                            <select id="subject" name="subject" class="bg-gray-50 focus:border-blue-500 focus:ring-blue-500 text-gray-500 border-gray-300 select w-full max-w">
                                <option disabled selected>Select subject</option>
                                <option>Product Inquiry</option>
                                <option>SeAfter-sales Supportrvice</option>
                              </select>
                        </div>
                        {{-- <input type="text" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required /> --}}
                    </div>

                    <div class="mb-5">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Message</label>
                        <textarea id="message" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SEND</button>
                    </form>
    
                </div>
            </div>
        </div>
    </div>

    <section style="background-image: url('{{ asset('storage/img/GeneralImage/'. $inquire[0]->image) }}')" class=" bg-white dark:bg-gray-900">
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