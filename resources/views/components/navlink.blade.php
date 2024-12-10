
@props(['active' => false])
<a id="navlink-id" {{ $attributes->merge(['class' => $active ? 'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-[#fffc14] md:p-0 md:dark:text-blue-500' : 'block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#fffc14] md:p-0 md:dark:hover:text-[#fffc14] dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700']) }}>
    {{ $slot }}
</a>

<script>
    window.addEventListener("scroll", function(){
      var nav = document.querySelector("#navlink-id");
      nav.classList.toggle("text-black", window.scrollY > 0);
    })
  </script>