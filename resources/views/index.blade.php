@extends('layout.app')
@section('body')
<section class="w-full relative bg-primary h-auto lg:h-screen px-6 lg:px-24 py-5 lg:py-7">
    <div>
        <x-partial.nav />
    </div>
    <section class="mt-8  lg:mt-24">
        <div class="flex lg:flex-row flex-col items-center">
            <div class="lg:flex-grow lg:w-1/2 lg:pr-24  flex flex-col lg:items-start lg:text-left mb-10 lg:mb-0 items-center ">
                <h1 class="title-font sm:text-5xl text-3xl font-bold text-white "> Connect with Moms of <br class="hidden lg:inline"> like-minds and common <br class="hidden lg:inline"> interests across the globe. 
                </h1>
                <p class="lg:text-xl text-white font-noto mt-8">Find other mothers, connect,  share moments <br class="hidden lg:inline"> and share experiences together.</p>
                
                <div class="w-full lg:w-auto flex justify-center mt-8 lg:mt-12">
                    <a href="#" class="w-full lg:w-auto flex items-center group justify-center text-center text-secondary bg-vblue border-0 py-3 px-6 focus:outline-none hover:bg-opacity-80 rounded-full text-lg font-medium">Start connecting today <x-gmdi-arrow-forward  class="h-5 ml-2 group-hover:translate-x-2"/></a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-1/2 w-full">
                <img class="object-cover object-center rounded w-full lg:w-auto" alt="Image of mother carrying a child" src="asset/hero.png">
            </div>
        </div>
    </section>
</section>

<section class="w-full bg-coffee h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="flex py-8 lg:py-24 lg:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-1/2 w-full mb-10 lg:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="asset/moma.png">
    </div>
    <div class="lg:flex-grow lg:w-1/2 lg:pl-36 flex flex-col items-start lg:text-left">
      <h1 class="font-tvsan sm:text-5xl text-3xl mb-4 font-bold text-black tracking-wide">Share moments and <br class="hidden lg:inline"> experiences.</h1>
      <p class="mb-8 sm:text-2xl text-base tracking-wide font-noto">Share all the glorious moments of motherhood and <br class="hidden lg:inline"> experiences to help upcoming mothers.</p>
      <div class="w-full lg:w-auto flex items-center justify-between lg:justify-start sm:space-x-4">
          <button><img src="asset/googleplay.png" class="h-10 lg:h-12" alt=" Google playstore logo"></button>
          <button><img src="asset/appstore.png" class="h-10 lg:h-12" alt="App store icon"></button>
      </div>
    </div>
  </div>
</section>

<section class="w-full bg-white h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="flex py-8 lg:py-24 lg:flex-row flex-col items-center">
      <div class="lg:flex-grow lg:w-1/2 lg:pr-24 flex flex-col items-start lg:text-left mb-16 lg:mb-0">
        <h1 class="font-tvsan sm:text-5xl text-3xl mb-4 font-bold text-black  tracking-wide">Plan a future for your <br class="hidden lg:inline"> child, start building <br class="hidden lg:inline"> their portfolio.</h1>
        <p class="mb-8 sm:text-2xl text-base tracking-wide font-noto">VMomas is the preferred accountability partner for <br class="hidden lg:inline"> building a stable financial future for memebers' children.
        <div class="w-full lg:w-auto flex items-center justify-between lg:justify-start sm:space-x-4">
          <button><img src="asset/googleplay.png" class="h-10 lg:h-12" alt=" Google playstore logo"></button>
          <button><img src="asset/appstore.png" class="h-10 lg:h-12" alt="App store icon"></button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-1/2 w-full">
          <img class="object-cover object-center rounded" alt="image of a mother and daughter" src="asset/screenshot.png">
      </div>
  </div>
</section>

<section class="w-full bg-coffee h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="flex py-8 lg:py-24 lg:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-1/2 w-full mb-10 lg:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="asset/deal.png">
    </div>
    <div class="lg:flex-grow lg:w-1/2 lg:pl-36  flex flex-col items-start lg:text-left">
      <h1 class="font-tvsan sm:text-5xl text-3xl mb-4 font-bold text-black tracking-wide">Access Exclusive  <br class="hidden lg:inline">  Member Deals!</h1>
      <p class="mb-8 sm:text-2xl text-base tracking-wide font-noto">VMomas members have access to exclusive member <br class="hidden lg:inline"> -discounts on parenting goods and services from <br class="hidden lg:inline"> vendors from across the globe </p>
      <div class="w-full lg:w-auto flex items-center justify-between lg:justify-start sm:space-x-4">
          <button><img src="asset/googleplay.png" class="h-10 lg:h-12" alt=" Google playstore logo"></button>
          <button><img src="asset/appstore.png" class="h-10 lg:h-12" alt="App store icon"></button>
      </div>
    </div>
  </div>
</section>

<section class="w-full bg-white h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="flex py-8 lg:py-24 lg:flex-row flex-col items-center">
      <div class="lg:flex-grow lg:w-1/2 lg:pr-24  flex flex-col items-start lg:text-left mb-16 lg:mb-0">
        <h1 class="sm:text-5xl text-3xl mb-4 font-bold text-black tracking-wide font-tvsan">Leverage Infinite  <br class="hidden lg:inline">  Support Towards <br class="hidden lg:inline"> Intentional Parenting.</h1>
        <p class="mb-6 sm:text-2xl text-base tracking-wide font-noto">Members utilize the numerous resources and tools <br class="hidden lg:inline"> available for support towards raising  well-rounded <br class="hidden lg:inline"> humans.</p>
        <p class="mb-8 sm:text-2xl text-base tracking-wide font-noto">Happy Moms, Thriving Children....</p>
        <div class="w-full lg:w-auto flex items-center justify-between lg:justify-start sm:space-x-4">
          <button><img src="asset/googleplay.png" class="h-10 lg:h-12" alt=" Google playstore logo"></button>
          <button><img src="asset/appstore.png" class="h-10 lg:h-12" alt="App store icon"></button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-1/2 w-full">
          <img class="object-cover object-center rounded" alt="image of a mother and daughter" src="asset/parent.png">
      </div>
  </div>
</section>
<x-partial.freq />
<x-partial.footer />
@endsection