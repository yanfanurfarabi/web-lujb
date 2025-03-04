
@props(['active' => false])
<a id="navlink-id" {{ $attributes->merge(['class' => $active ? 'font-bold block py-2 px-3 text-black bg-white rounded md:bg-transparent md:text-[#229e89] md:p-0 md:dark:text-blue-500' : 'block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#229e89] md:p-0 md:dark:hover:text-[#229e89] dark:text-black dark:hover:bg-black dark:hover:text-black md:dark:hover:bg-transparent dark:border-black']) }}>
    {{ $slot }}
</a>

<script>
    window.addEventListener("scroll", function(){
      var nav = document.querySelector("#navlink-id");
      nav.classList.toggle("text-black", window.scrollY > 0);
    })
  </script>