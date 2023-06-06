@extends('layout.app')
@section('body')
<section class="w-full relative bg-purplebg h-auto lg:h-screen px-6 lg:px-24 py-5 lg:py-7">
    <div>
        <x-partial.navvar />
    </div>
    <section class="mt-10  lg:my-28 relative">
        <div class="w-full flex justify-center">
            <div class="text-center w-full mb-6">
                <h1 class="title-font sm:text-5xl text-3xl mb-5 font-bold text-blak font-tvsan"> We care, we are here, we are Momas! 
                </h1>
                <p class="leading-relaxed text-blak font-noto">Find other mothers, connect,  share moments and share experiences together.</p>
                
            </div>
        </div>
        
        <img class="object-cover object-center rounded w-full lg:absolute -top-2/6 lg:my-8" alt="hero" src="asset/vm.png">
        
    </section>
</section>

<section class="w-full bg-coffee h-auto px-6 lg:px-24 py-5 lg:pb-7 lg:pt-64">
  <div class="w-full block lg:flex py-8 lg:py-24 items-center">
      <div class="lg:flex-grow lg:w-1/2 lg:pr-24 flex flex-col items-start lg:text-left mb-10 lg:mb-0">
        <h1 class="font-tvsan sm:text-5xl text-3xl mb-4 font-bold text-black leading-relaxed text-center tracking-wide">About VMomas</h1>
        <p class="leading-relaxed sm:text-2xl text-base tracking-wide">Hear what some mothers have to say about us and how we have been able to shape their lives and experiences. Hear what some mothers have to say about us and how we have been able to shape their lives and experiences.
        </p>
        <p class="leading-relaxed sm:text-2xl text-base tracking-wide mt-4"> Hear what some mothers have to say about us and how we have been able to shape their lives and experiences. Hear what some mothers have to say about us and how we have been able to shape their lives and experiences.
        </p>
        <p class="leading-relaxed sm:text-2xl text-base tracking-wide mt-4">Hear what some mothers have to say about us and how we have been able to shape their lives and experiences.
        </p>
      </div>
      <div class="lg:w-3/5 w-full lg:mt-16">
          <img class="object-cover object-center rounded" alt="image of a mother and daughter" src="asset/vm2.png">
      </div>
  </div>
</section>
<section class="w-full bg-coffee h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="w-full py-8 lg:py-24 block lg:flex lg:items-center lg:justify-between">
      <div class="lg:flex-grow lg:w-1/3 flex flex-col items-start lg:text-left mb-10 lg:mb-0">
          <div class="w-full">
            <h1 class="font-tvsan sm:text-5xl text-3xl mb-4 font-bold text-black leading-relaxed tracking-wide">What we have <br class="hidden lg:inline"> achieved so far.</h1>
            <p class="leading-relaxed sm:text-2xl text-base tracking-wide">Hear what some mothers have to say about us and how we have been able to shape their lives and experiences. Hear what some mothers have to say about us and how we have been able to shape their lives and experiences.
            </p>
            <p class="leading-relaxed sm:text-2xl text-base tracking-wide mt-4"> Hear what some mothers have to say about us and how we have been able to shape their lives and experiences. Hear what some mothers have to say about us and how we have been able to shape their lives and experiences.
            </p>
            <p class="leading-relaxed sm:text-2xl text-base tracking-wide mt-4">Hear what some mothers have to say about us and how we have been able to shape their lives and experiences.
            </p>
          </div>
      </div>
      <div class="lg:w-1/2 w-full block lg:flex justify-end lg:mt-12">
          <div class="w-full lg:w-4/5 grid grid-cols-2 gap-5">
            <div class="border border-vgrey rounded-xl text-center w-40 h-40 p-4 flex flex-col justify-center items-center">
              <h3 class="font-tvsan font-thin text-5xl">120k</h3>
              <p class="font-tvsan text-lg font-semibold ">Momas</p>
            </div>

            <div class="border border-vgrey rounded-xl text-center w-40 h-40 p-4 flex flex-col justify-center items-center">
              <h3 class="font-tvsan font-thin text-5xl">1.2M</h3>
              <p class="font-tvsan text-lg font-semibold ">Resources</p>
            </div>

            <div class="border border-vgrey rounded-xl text-center w-40 h-40 p-4 flex flex-col justify-center items-center">
              <h3 class="font-tvsan font-thin text-5xl">12k</h3>
              <p class="font-tvsan text-lg font-semibold ">Rooms</p>
            </div>

            <div class="border border-vgrey rounded-xl text-center w-40 h-40 p-4 flex flex-col justify-center items-center">
              <h3 class="font-tvsan font-thin text-5xl">120+</h3>
              <p class="font-tvsan text-lg font-semibold ">Moments</p>
            </div>
          </div>
      </div>
  </div>
</section>
<section class="w-full element h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="w-full flex py-8 lg:py-24 flex-col items-start justify-center">
    <div class="mb-12">
      <h1 class="font-tvsan sm:text-5xl text-3xl mb-4 font-bold text-black leading-relaxed tracking-wide">Why people choose VMomas?</h1>
      <p class="leading-relaxed sm:text-2xl text-base tracking-wide">Hear what our Visionary Momas have to say about the VMomas app</p>
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
              <p class="leading-relaxed mb-6 font-noto">I love the numerous benefits within the Vmomas app,  but my favorite is the Moma Planner. It helps me stay organized with my parenting responsibilities</p>
              <div class="inline-flex items-center">
                <span class="flex-grow flex flex-col">
                  <span class="title-font font-medium text-gray-900">Helen Gabriel</span>
                  <span class="text-gray-500 text-sm">Moma with 3 kids</span>
                </span>
              </div>
          </div>
        </div>
      </div>
       
      <div class="lg:hidden flex justify-center items-center space-x-2 mt-5 w-full">
          <button class="w-8 h-1 bg-vgrey rounded-full active pag"></button>
          <button class="w-8 h-1 bg-vgrey rounded-full pag"></button>
          <button class="w-8 h-1 bg-vgrey rounded-full pag"></button>
      </div>

      <div class="bg-primary hidden lg:flex items-center justify-center h-[303px] w-[151px]">
        <button class="hover:-translate-x-2"><x-gmdi-arrow-circle-right-o class="h-12 text-white" /></button>
      </div>
    </div>
  </div>
</section>

<section class="w-full bg-pattern bg-primary h-auto px-6 lg:px-24 py-5 lg:py-7">
  <div class="flex py-8 lg:py-24 lg:flex-row flex-col items-center">
      <div class="lg:flex-grow lg:w-1/2 lg:pr-24 flex flex-col items-start lg:text-left mb-16 lg:mb-0 text-white">
        <h1 class="font-tvsan sm:text-5xl text-3xl mb-8 font-bold leading-relaxed tracking-wide">Excited to join a unique <br class="hidden lg:inline"> community of loving <br class="hidden lg:inline">  mothers?</h1>
        <p class="mb-9 leading-relaxed sm:text-2xl text-base tracking-wide font-noto">Let’s make the experience as simple as possible for you. find, connect and share experiences.</p>
        <div class="w-full lg:w-auto flex items-center justify-between lg:justify-start sm:space-x-4">
          <button><img src="asset/googleplay.png" class="h-10 lg:h-12" alt=" Google playstore logo"></button>
          <button><img src="asset/appstore.png" class="h-10 lg:h-12" alt="App store icon"></button>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-1/2 w-full">
          <img class="object-cover object-center rounded" alt="image of a mother and daughter" src="asset/grid.png">
      </div>
  </div>
</section>
<x-partial.footer />
@endsection