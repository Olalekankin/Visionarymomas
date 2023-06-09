@extends('layout.app')
@section('body')
<section class="w-full relative bg-purplebg h-auto lg:h-screen px-6 lg:px-24 py-5 lg:py-7">
    <div>
        <x-partial.navvar />
    </div>
    <section class="mt-10  lg:my-28 lg:relative">
        <div class="w-full flex justify-center">
            <div class="text-center w-full mb-6">
                <h1 class="title-font sm:text-5xl text-3xl mb-5 font-bold text-blak font-tvsan"> We care, we are here, we are Momas! 
                </h1>
                <p class="text-blak font-noto">Find other mothers, connect,  share moments and share experiences together.</p>
                
            </div>
        </div>
        
        <img class="object-cover object-center rounded w-full lg:absolute -top-2/6 lg:mb-8" alt="hero" src="asset/vm.png">
        
    </section>
</section>

<section class="w-full bg-coffee h-auto px-6 lg:px-24 py-5 lg:pb-7 lg:pt-56">
  <div class="w-full block lg:flex py-8 lg:pt-24 items-center">
      <div class="lg:flex-grow lg:w-1/2 lg:pr-24 flex flex-col items-start lg:text-left mb-10 lg:mb-0">
        <h1 class="font-tvsan sm:text-5xl text-3xl mb-6 font-bold text-black text-center tracking-wide">About VMomas</h1>
        <p class="sm:text-2xl text-base tracking-wide">VMomas is a proprietary technology of Opulence Capital Investments Ltd. The objective of the solution is to create a platform that supports moms on their parenting journey, to achieve a happy mom & a thriving child.
        </p>
      </div>
      <div class="lg:w-3/5 w-full lg:mt-16">
          <img class="object-cover object-center rounded" alt="image of a mother and daughter" src="asset/vm2.png">
      </div>
  </div>
</section>

<section class="w-full bg-coffee h-auto px-6 lg:px-24 py-5 lg:pt-10 lg:pb-20">
  <div class="w-full block lg:flex lg:justify-between lg:items-center">
      <div class="lg:w-1/2 lg:pr-24 mb-10 lg:mb-0">
       <x-gmdi-format-quote-o class="h-12 lg:h-20 text-vorange mb-5 lg:mb-9 rotate-180"/>
        <p class="text-2xl sm:text-4xl tracking-wide font-bold font-tvsan text-blak">Hear what these visionary moms have to say about how they leverage the VMomas platform as a great parenting and support tool.
        </p>
      </div>
      <div class="lg:w-3/5 w-full lg:mt-16">
        <div class="relative">
          <video src="" controls muted poster="asset/poster.png" class="relative z-20"></video>
          <img src="asset/red.png" alt="" class="hidden lg:inline absolute z-0 right-12 -bottom-10">
        </div>  
        <div class="hidden lg:flex space-x-3 mt-4 flex-wrap">
          <video src="" controls muted poster="asset/poster1.png"></video>
          <video src="" controls muted poster="asset/poster2.png"></video>
          <video src="" controls muted poster="asset/poster3.png"></video>
        </div>
      </div>
  </div>
</section>
<x-partial.freq />
<x-partial.footer />
@endsection