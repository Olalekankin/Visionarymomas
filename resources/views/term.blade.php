@extends('layout.app')
@section('body')
<section class="w-full relative bg-primary h-auto lg:h-screen px-6 lg:px-24 py-5 lg:py-7">
    <div>
        <x-partial.term />
    </div>
    <section class="mt-10  lg:my-28 relative">
        <div class="w-full flex justify-center">
            <div class="text-center w-full mb-6 lg:mt-8">
                <h1 class="title-font sm:text-5xl text-3xl mb-5 font-bold text-white font-tvsan"> Term of Use
                </h1>
            </div>
        </div>
        <div class="w-full lg:absolute flex justify-center lg:translate-y-10">
          <div class="w-full lg:w-5/6 block h-auto relative bg-white rounded-2xl z-30">
           <img class="absolute hidden lg:inline -top-8 -left-10 z-0" src="asset/red.png" alt="star shape">
           <img class="absolute hidden lg:inline -bottom-8 -right-30 z-0" src="asset/cream.png" alt="star shape">
            <article class="w-full px-5 lg:px-24 py-8 lg:py-16 leading-10 block lg:flex lg:space-x-5 relative z-30">
             <nav class="hidden lg:inline w-1/6">
              <h1 class="text-lg font-semibold font-noto text-black">Introduction</h1>
              <ul class="space-y-4 text-sm text-tgrey">
               <li><a href="#info" class="hover:text-primary">Information collection and user</a></li>
               <li><a href="#data" class="hover:text-primary">Types of data collected</a></li>
               <li><a href="#legal" class="hover:text-primary">Legal requirements</a></li>
               <li><a href="#external" class="hover:text-primary">External sites</a></li>
               <li><a href="#children" class="hover:text-primary">Children's policy</a></li>
               <li><a href="#client" class="hover:text-primary">Client's liability</a></li>
               <li><a href="#contact" class="hover:text-primary">Contact us</a></li>
              </ul>
             </nav>
             <div class="w-full lg:w-5/6 lg:overflow-y-scroll lg:h-[720px] overflow-y-hidden px-5 scroll">
              <div class="text-base font-noto text-tgrey" id="info">
               <h1 class="font-bold text-black">Introduction</h1>
               <p class="mt-3">Visionarymomas™, VMomas™  (herein referred to as “VMomas”, “us”, “we” or “our”) operates this website (“the Service”). We strive to maintain the highest standards of integrity in all our operations. Likewise, we are dedicated to protecting our customers’ and online visitors’ privacy on our service</p>

               <p class="mt-3">This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data. We use your data to provide and improve the Service. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms of Use, accessible.</p>

               <p class="mt-3">We recognize that your privacy is important. This document outlines the types of personal information we receive and collect when you use the service, as well as some of the steps we take to safeguard information. We hope this will help you make an informed decision about sharing personal information with us.</p>
              </div>
              <div class="text-base font-noto text-tgrey mt-5" id="data">
               <h1 class="font-bold text-black">Information collection and user</h1>
               <p class="mt-3">We collect different types of information from the visitors to our website voluntarily. The collection of the information is to provide and improve our service to you and such information includes but is not limited to:</p>

               <ul class="space-y-2 mt-3">
                 <li>Email address</li>
                 <li>First name and Last name</li> 
                 <li>Phone number</li>
                 <li>Full address</li> 
                 <li>Cookies Usage Data</li>
               </ul>
               <p class="mt-3">
                This information is collected when you request information from us, when you provide it to us, when we obtain same from third parties, when we open and operate an account for you and when you sign up to join our mailing list. The information collected is internally reviewed, used to improve the content of our website, notify our visitors of updates, and respond to visitor inquiries.
                </p>
               <p class="mt-3">
                Once information is reviewed, it is discarded or stored in our files. If we make material changes in the collection of personally identifiable information we will inform you by placing a notice on our site. Personal information received from any visitor will be used only for internal purposes and will not be sold or provided to third parties.
               </p>
              </div>
              <div class="text-base font-noto text-tgrey mt-4" id="data">
               <h1 class="font-bold text-black">Types of data collected</h1>
               <p class="mt-3">
                Personal Data </p> 
               <p>
               While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (“Personal Data”).
               </p>
              </div>
              <div class="text-base font-noto text-tgrey mt-4" id="legal">
               <h1 class="font-bold text-black">Usage Data</h1>
               <p class="mt-3">
                We may also collect information on how the Service is accessed and used (“Usage Data”). This Usage Data may include information such as your computer's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.
               </p> 
              </div>
             </div>
            </article>
           
          </div>
        </div>
    </section>
</section>
<div class="hidden lg:block w-full h-[500px] bg-coffee"></div>

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