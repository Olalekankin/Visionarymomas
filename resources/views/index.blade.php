@extends('layout.app')
@section('body')
<section class="w-full relative bg-primary h-auto lg:h-screen px-6 lg:px-24 py-5 lg:py-7">
    <div>
        <x-partial.nav />
    </div>
    <section class="mt-8  lg:mt-24">
        <div class="flex lg:flex-row flex-col items-center">
            <div class="lg:flex-grow lg:w-1/2 lg:pr-24 lg:pr-16 flex flex-col lg:items-start lg:text-left mb-10 lg:mb-0 items-center ">
                <h1 class="title-font sm:text-5xl text-3xl mb-4 font-bold text-white font-tvsan"> Connect with Moms of <br class="hidden lg:inline"> like minds and <br class="hidden lg:inline"> common interests across the globe. 
                </h1>
                <p class="mb-8 leading-relaxed text-white font-noto">Find other mothers, connect,  share moments and share experiences together.</p>
                
                <div class="w-full lg:w-auto flex justify-center">
                    <button class="w-full lg:w-auto flex items-center group justify-center text-center text-secondary bg-vblue border-0 py-3 px-6 focus:outline-none hover:bg-opacity-80 rounded-full text-lg font-medium">Start connecting today <x-gmdi-arrow-forward  class="h-5 ml-2 group-hover:translate-x-2"/></button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full lg:w-1/2 w-full">
                <img class="object-cover object-center rounded w-full lg:w-auto" alt="hero" src="asset/hero.png">
            </div>
        </div>
    </section>
</section>

<section class="w-full bg-coffee h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="flex py-8 lg:py-16 lg:py-24 lg:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full lg:w-1/2 w-full mb-10 lg:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="asset/moma.png">
    </div>
    <div class="lg:flex-grow lg:w-1/2 lg:pl-36 lg:pl-24 flex flex-col items-start lg:text-left">
      <h1 class="font-tvsan sm:text-5xl text-3xl mb-4 font-bold text-black leading-relaxed tracking-wide">Share moments and <br class="hidden lg:inline"> experiences.</h1>
      <p class="mb-8 leading-relaxed sm:text-2xl text-base tracking-wide">Share all the glorious moments of motherhood <br class="hidden lg:inline"> and experiences to help upcoming mothers.</p>
      <div class="w-full lg:w-auto flex items-center justify-between lg:justify-start sm:space-x-4">
          <button><img src="asset/googleplay.png" class="h-10 lg:h-12" alt=" Google playstore logo"></button>
          <button><img src="asset/appstore.png" class="h-10 lg:h-12" alt="App store icon"></button>
      </div>
    </div>
  </div>
</section>

<section class="w-full bg-white h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="flex py-8 lg:py-16 lg:py-24 lg:flex-row flex-col items-center">
      <div class="lg:flex-grow lg:w-1/2 lg:pr-24 lg:pr-16 flex flex-col items-start lg:text-left mb-16 lg:mb-0">
        <h1 class="font-tvsan sm:text-5xl text-3xl mb-4 font-bold text-black leading-relaxed tracking-wide">Plan a future for your <br class="hidden lg:inline"> child, start building <br class="hidden lg:inline"> their portfolio.</h1>
        <p class="mb-8 leading-relaxed sm:text-2xl text-base tracking-wide">Share all the glorious moments of motherhood <br class="hidden lg:inline"> and experiences to help upcoming mothers.</p>
        <div class="w-full lg:w-auto flex items-center justify-between lg:justify-start sm:space-x-4">
          <button><img src="asset/googleplay.png" class="h-10 lg:h-12" alt=" Google playstore logo"></button>
          <button><img src="asset/appstore.png" class="h-10 lg:h-12" alt="App store icon"></button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full lg:w-1/2 w-full">
          <img class="object-cover object-center rounded" alt="image of a mother and daughter" src="asset/screenshot.png">
      </div>
  </div>
</section>

<section class="w-full element h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="w-full flex py-8 lg:py-16 lg:py-24 flex-col items-start justify-center">
    <div class="mb-12">
      <h1 class="font-tvsan mb-6 sm:text-5xl text-3xl mb-4 font-bold text-black leading-relaxed tracking-wide">Why people choose VMomas?</h1>
      <p class="leading-relaxed sm:text-2xl text-base tracking-wide">Hear what some mothers have to say about us and how we have <br class=""> been able to shape their lives and experiences.</p>
    </div>
    <div class="w-full flex flex-wrap lg:space-x-10">
      <div class="bg-primary hidden lg:flex items-center justify-center h-[303px] w-[151px]">
        <button class="hover:translate-x-2"><x-gmdi-arrow-circle-left-o class="h-12 text-white" /></button>
      </div>

      <div class="lg:w-4/6 block lg:flex">
        <div class="w-full lg:w-1/3 rounded lg:rounded-0 lg:rounded-l">
          <img src="asset/testimonial1.png" class="w-full lg:w-full h-[303px]" alt="Image of Helen Gabriel">
        </div>
        <div class="bg-white block lg:flex lg:items-center p-8 rounded lg:rounded-r w-full lg:w-2/3">
          <div class="w-full">
            <x-gmdi-format-quote-r  class="h-6 md:h-8 rotate-180 text-primary lg:w-10"/>
              <p class="leading-relaxed mb-6">Our platform provides a variety of study tools, including flashcards, quizzes, and study guides, to help you retain information and perform better in your law courses.</p>
              <div class="inline-flex items-center">
                <span class="flex-grow flex flex-col">
                  <span class="title-font font-medium text-gray-900">Helen Gabriel</span>
                  <span class="text-gray-500 text-sm">LSU President</span>
                </span>
              </div>
          </div>
        </div>
      </div>
       

      <div class="bg-primary hidden lg:flex items-center justify-center h-[303px] w-[151px]">
        <button class="hover:-translate-x-2"><x-gmdi-arrow-circle-right-o class="h-12 text-white" /></button>
      </div>
    </div>
  </div>
</section>

<section class="w-full bg-pattern bg-primary h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="flex py-8 lg:py-16 lg:py-24 lg:flex-row flex-col items-center">
      <div class="lg:flex-grow lg:w-1/2 lg:pr-24 lg:pr-16 flex flex-col items-start lg:text-left mb-16 lg:mb-0 text-white">
        <h1 class="font-tvsan sm:text-5xl text-3xl mb-8 font-bold leading-relaxed tracking-wide">Excited to join a unique <br class="hidden lg:inline"> community of loving <br class="hidden lg:inline">  mothers?</h1>
        <p class="mb-9 leading-relaxed sm:text-2xl text-base tracking-wide">Let’s make the experience as simple as possible for you. find, connect and share experiences.</p>
        <div class="w-full lg:w-auto flex items-center justify-between lg:justify-start sm:space-x-4">
          <button><img src="asset/googleplay.png" class="h-10 lg:h-12" alt=" Google playstore logo"></button>
          <button><img src="asset/appstore.png" class="h-10 lg:h-12" alt="App store icon"></button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full lg:w-1/2 w-full">
          <img class="object-cover object-center rounded" alt="image of a mother and daughter" src="asset/grid.png">
      </div>
  </div>
</section>
<x-partial.footer />
@endsection