<div class="container">

   {{-- CARPUSEL --}}
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ url('assets/slider/slider1.png') }}" class="d-block w-100 " alt="...">
          </div>
              <div class="carousel-item">
                  <img src="{{ url('assets/slider/slider2.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                  <img src="{{ url('assets/slider/slider3.png') }}" class="d-block w-100 " alt="...">
              </div>
      </div>
  </div>

   {{-- PILIH LIGA  --}}
   <section class="pilih-liga mt-4">
      <h3><strong>Pilih Course Category</strong></h3>
      <div class="row mt-4">
         @foreach($ligas as $liga)
         <div class="col">
            <a href="{{ route('products.liga', $liga->id) }}">
               <div class="card shadow">
                  <div class="card-body text-center">
                     <img src="{{ url('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                     <div class="col-md-12 mt-3">
                        <h5><strong>{{ $liga->nama }}</strong> </h5>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   {{-- BEST PRODUCT  --}}
   <section class="products mt-5 mb-5">
      <h3>
         <strong>Our Top Course </strong>
         <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua </a>
      </h3>
      <div class="row mt-4">
         @foreach($products as $product)
         <div class="col-md-3">
            <div class="card">
               <div class="card-body text-center">
                  <img src="{{ url('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                  <div class="row mt-2">
                     <div class="col-md-12">
                        
                        <h5><strong>{{ $product->nama }}</strong> </h5>
                        <h5>Rp. {{ number_format($product->harga) }}</h5>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <a href="{{ route('products.detail', $product->id) }}" class="btn btn-primary btn-block"><i class="fas fa-eye"></i> Detail Course</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>
</div>