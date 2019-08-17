@extends( 'layouts.layout' )

@section( 'body' )
<div class="mt-20 sm:flex sm:justify-center sm:justify-start">
 <div class="relative w-full sm:w-1/2 h-32 p-6 text-center sm:text-right">
  <div class="mars"></div>
 </div>

 <div class="w-full sm:w-1/2 p-6">
  <span class="inline-block w-10">
   @include( 'svg.spacehead' )

  </span>

  <h1 class="font-black font-brand text-5xl">
   <span class="block">Andrea</span>
   <span class="block">Giuseppe</span>
  </h1>

  <p class="py-2"><a href="https://twitter.com/andrea_gius" target="_blank" class="text-agp-red">@andrea_gius</a></p>

  <p class="py-1 text-agp-red">
   <a href="tel:+393920460819" class="flex items-center">
    <span class="w-10 mr-2">
     @include( 'svg.phone' )
    </span>
  
    {{ __( 'Call Me' ) }}
   </a>
  </p>

  <p class="py-2 font-thin text-xl">{{ __( 'Interstellar Full-Stack Web Developer' ) }}</p>

 </div>
</div>

@endsection
