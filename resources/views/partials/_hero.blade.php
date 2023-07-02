 <div class="bg-danger shadow-sm col-sm py-5">

     <h2 class="text-center text-white">LARA<span class="text-dark">GIGS</span></h2>
     <p class="text-center text-white">Find or post Laravel jobs & projects</p>

     @guest
         <div class="mx-auto d-flex">
             <a href="{{ route('register') }}" class="btn btn-outline-light mx-auto">SIGN UP TO LIST A GIG</a>
         </div>
     @endguest

 </div>
