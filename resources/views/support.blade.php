@extends('layout.app')
@section('body')
<section class="w-full relative bg-primary h-auto lg:h-screen px-6 lg:px-24 py-5 lg:py-7">
    <div>
        <x-partial.support />
    </div>
    <section class="mt-10  lg:my-28 relative">
        <div class="w-full flex justify-center">
            <div class="text-center w-full mb-6 lg:mt-8">
                <h1 class="title-font sm:text-5xl text-3xl mb-5 font-bold text-white font-tvsan"> Let's get in touch 
                </h1>
                <p class="leading-relaxed text-white font-noto">Reach out to us let’s talk money moves and how to help you be a better Moma.</p>
                
            </div>
        </div>
        <div class="w-full lg:absolute flex justify-center lg:translate-y-20">
          <div class="w-full lg:w-5/6 block h-auto lg:flex items-start">
           <img class="h-auto w-full lg:w-1/2" src="asset/vm1.png" alt="">
           <form action="" class="bg-white w-full lg:w-1/2 px-5 lg:px-20 py-5 lg:py-10 rounded-b-2xl  lg:rounded-r-3xl">
             <h1 class="font-tvsan font-bold text-2xl ">Send us a message</h1>
             <input type="text" placeholder="Full name" name="name" class=" outline-none border rounded-full mt-4 border-vgrey px-5 w-full py-3 block">
             <input type="email" placeholder="Email Address" name="email" class=" outline-none border rounded-full mt-4 border-vgrey w-full px-5 py-3 block">
             <input type="tel" placeholder="Full name" name="phone" class=" outline-none border rounded-full mt-4 border-vgrey px-5 w-full py-3 block">
             <textarea name="" id="" rows="4" class="border border-vgrey w-full mt-4 rounded-xl px-5 py-3">Message</textarea>
             <button class="bg-primary text-white py-3 px-5 rounded-full mt-4">Send Message</button>
           </form>
          </div>
        </div>
    </section>
</section>
<div class="hidden lg:block w-full h-44 bg-coffee"></div>

<section class="w-full element h-auto px-6 lg:px-24 py-5 lg:pb-7">
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