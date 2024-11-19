
  <nav class="dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600" style="background-color: #FFFDFB">
    <div class="max-w-[70%] flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img class="h-12 w-15" src="{{asset( 'img/logo-lujb.png') }}" alt="lujb">
        </a>
        
        <!-- Hamburger button for mobile -->
        <button data-collapse-toggle="navbar-sticky" type="button" class="md:hidden inline-flex items-center p-2 w-10 h-10 text-sm text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 17 14">
                <path fill-rule="evenodd" d="M2.25 2.25C2.66421 2.25 3 2.58579 3 3C3 3.41421 2.66421 3.75 2.25 3.75H14.25C14.6642 3.75 15 3.41421 15 3C15 2.58579 14.6642 2.25 14.25 2.25H2.25ZM2.25 7.25C2.66421 7.25 3 7.58579 3 8C3 8.41421 2.66421 8.75 2.25 8.75H14.25C14.6642 8.75 15 8.41421 15 8C15 7.58579 14.6642 7.25 14.25 7.25H2.25ZM2.25 12.25C2.66421 12.25 3 12.5858 3 13C3 13.4142 2.66421 13.75 2.25 13.75H14.25C14.6642 13.75 15 13.4142 15 13C15 12.5858 14.6642 12.25 14.25 12.25H2.25Z" clip-rule="evenodd"></path>
            </svg>
        </button>
        
        <!-- Navbar links (default hidden on small screens) -->
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <x-navlink href="/" :active="request()->is('/')">Home</x-navlink>
                </li>
                <li>
                    {{-- <x-navlink href="/product" :active="request()->is('product')">Product</x-navlink> --}}

                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Product <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                      </svg></button>
                      
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                          
                          <li>
                            <a href="/product/fuelpump" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sanki Dispensing Pump</a>
                          </li>
                          <li>
                            <a href="/product/stp" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Red Robe Turbine Pump</a>
                          </li>
                          <li>
                            <a href="/product/atg" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Guihe ATG</a>
                          </li>
                          <li>
                            <a href="/product/hose" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dantec Composite Hose</a>
                          </li>
                          <li>
                            <a href="/product/lcp" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LC Meter</a>
                          </li>
                          <li>
                            <a href="/product/halock" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Halock Composite Hose</a>
                          </li>
                        </ul>
                </li>
                <li>
                    <x-navlink href="/services" :active="request()->is('services')">Services</x-navlink>
                </li>
                <li>
                    <x-navlink href="/profile" :active="request()->is('profile')">About Us</x-navlink>
                </li>
                <li>
                    <x-navlink href="/contact" :active="request()->is('contact')">Contact Us</x-navlink>
                </li>
                <li>
                  <x-navlink href="/wbs" :active="request()->is('wbs')">Whistleblower</x-navlink>
              </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Optional: Add Flowbite script to handle hamburger menu toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hamburgerButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
        const navbar = document.getElementById('navbar-sticky');

        hamburgerButton.addEventListener('click', function () {
            const expanded = hamburgerButton.getAttribute('aria-expanded') === 'true' || false;
            hamburgerButton.setAttribute('aria-expanded', !expanded);
            navbar.classList.toggle('hidden', expanded);
        });
    });
</script>