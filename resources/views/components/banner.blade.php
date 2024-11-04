<div
  class="hero h-auto mt-20">
  <img src= "{{ 
  request()->is('product') ? asset('img/banner_product.jpg') : 
  (request()->is('contact') ? asset('img/banner_contact.jpg') : 
  (request()->is('profile') ? asset('img/banner_profile.jpg') : 
  (request()->is('services') ? asset('img/banner_services.jpg') :  
  asset('img/banner_product.jpg'))))
  }}" 
    alt="Banner"
  />
  </div>
</div>