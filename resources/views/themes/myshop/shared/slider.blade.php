<div class="container menu-wrapper fixed-top d-none d-lg block">
   <div class="menu d-flex justify-content-center align-items-center">
      <a href="" class="nav-link active">Home</a>
      <a href="" class="nav-link ">Best Seller</a>
      <a href="" class="nav-link ">New Arrival</a>
      <a href="" class="nav-link ">Blog</a>
   </div>
</div>

   {{-- Header --}}
   <section class="header">
      <div class="container">
         <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
            <div class="carousel-indicators">
               <button class="active" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="{{ asset('themes/myshop/assets/img/slide1.jpg') }}" class="d-block w-100" alt="slide 1">
               </div>
               <div class="carousel-item">
                  <img src="{{ asset('themes/myshop/assets/img/slide2.jpg') }}" class="d-block w-100" alt="slide 2">
               </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
            </button>
         </div>
      </div>
   </section>