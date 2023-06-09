@extends('layout.app')
@section('body')
<section class="w-full relative bg-primary h-auto lg:h-screen lg:px-24 pt-5 lg:py-7">
    <div class="px-6 lg:px-0">
        <x-partial.support />
    </div>
    <section class="mt-10  lg:my-28 lg:relative">
        <div class="w-full flex justify-center mb-6  lg:mt-12">
            <div class="text-center w-full">
                <h1 class="title-font sm:text-5xl text-3xl mb-5 font-bold text-white font-tvsan"> Let's get in touch 
                </h1>    
            </div>
        </div>
        <div class="w-full lg:absolute flex justify-center lg:translate-y-24">
          <div class="w-full lg:w-5/6 block lg:relative lg:rounded-2xl">
           <img class="absolute hidden lg:inline -top-12 -left-10 lg:z-10" src="asset/red.png" alt="star shape">
           <img class="absolute hidden lg:inline -right-16 -bottom-6 lg:z-0" src="asset/cream.png" alt="star shape">
          <div class="w-full block h-auto lg:flex items-start">
           <img class="h-auto w-full lg:w-1/2 lg:z-0" src="asset/vm1.png" alt="">
           @if(Session::has('message_sent'))
              <div class="bg-green-400 text-white">
                {{Session::get('message_sent')}}
              </div>
           @endif
           <form action="{{route('contact.send')}}" method="POST" enctype="multipart/form-data" class="bg-white w-full lg:w-1/2 px-5 lg:px-20 py-5 lg:py-10 lg:rounded-r-3xl lg:z-30">
            @csrf
             <h1 class="font-tvsan font-bold text-2xl text-center lg:text-left ">Send us a message</h1>
             <input type="text" placeholder="Full name" name="name" class=" outline-none focus:border-primary border rounded-full mt-4 border-vgrey px-5 w-full py-2.5 block">
             <input type="email" placeholder="Email Address" name="email" class=" outline-none focus:border-primary border rounded-full mt-4 border-vgrey w-full px-5 py-2.5 block">
             <input type="tel" placeholder="Phone Number" name="phone" class=" outline-none border focus:border-primary rounded-full mt-4 border-vgrey px-5 w-full py-2.5 block">
             <textarea name="" id="" rows="4" class="border border-vgrey w-full mt-4 rounded-xl px-5 focus:border-primary outline-none py-2.5">Message</textarea>
             <button type="submit" class="bg-primary text-white py-3 px-5 rounded-full mt-6 w-full lg:w-auto">Send Message</button>
           </form>
          </div>
        </div>
        </div>
    </section>
</section>
<div class="hidden lg:block w-full h-44 bg-coffee"></div>
<x-partial.freq />
<x-partial.footer />
@endsection