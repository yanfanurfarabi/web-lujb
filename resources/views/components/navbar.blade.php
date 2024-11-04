
<nav class=" dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600" style="background-color: #FFFDFB">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img class="h-12 w-15" src="img/logo-lujb.png" alt="lujb">
    </a>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <x-navlink href="/" :active="request() ->is('/')">Home</x-navlink>
        </li>
        <li>
          <x-navlink href="/product" :active="request() ->is('product')">Product</x-navlink>
        </li>
        <li>
          <x-navlink href="/services" :active="request() ->is('services')">Services</x-navlink>
        </li>
        <li>
          <x-navlink href="/profile" :active="request() ->is('profile')">About Us</x-navlink>
        </li>
        <li>
          <x-navlink href="/contact" :active="request() ->is('contact')">Contact Us</x-navlink>
        </li>
      </ul>
    </div>
    </div>
  </nav>