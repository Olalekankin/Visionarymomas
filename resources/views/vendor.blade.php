@extends('layout.app')
@section('body')
<section class="w-full relative bg-coffee  px-6 lg:px-24 py-5 lg:py-7">
    <div>
        <x-partial.vendor />
    </div>
    <section class="mt-8  lg:mt-24">
        <div class="w-full block lg:flex lg:items-center lg:justify-between">
          <div class="w-full lg:flex-grow lg:w-1/3  flex flex-col lg:items-start lg:text-left mb-16 lg:mb-0">
              <h1 class="text-left sm:text-5xl text-3xl font-bold text-blak font-tvsan">
                Do you sell Items used by Ladies, Children or Babies?
              </h1>
              <p class="leading-relaxed text-blak font-noto mt-6  lg:text-lg">
                Are you a service provider in the personal development and wellness space? Do you have any offering that is valuable to a mom and her child?
              </p>
              <p class="leading-relaxed text-blak font-noto mt-4  lg:text-lg"> Would you like the opportunity to showcase your products to millions of moms from across the globe?
              </p>
              <p class="leading-relaxed text-blak font-noto mt-4  lg:text-lg">To become a Vmomas Global Vendor Partner (GVP) from anywhere on the globe to place your product infront of a global community of  moms.</p>
              
              <div class="w-full lg:w-auto flex justify-center mt-8 lg:mt-12">
                  <button id="" class="open-button w-full lg:w-auto flex items-center group justify-center text-center text-secondary bg-vblue border-0 py-3 px-6 focus:outline-none hover:bg-opacity-80 rounded-full text-lg font-medium">Become a Vendor <x-gmdi-arrow-forward  class="h-5 ml-2 group-hover:translate-x-2"/></button>
              </div>
          </div>
          <div class="lg:w-2/3 w-full flex justify-end">
              <img class="object-cover w-full lg:w-auto " alt="Image of mother carrying a child" src="asset/mentor.png">
          </div>
        </div>
    </section>
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
<dialog class="modal relative top-0 lg:static p-5 w-full lg:max-w-md" id="modal">
  <div class="slide hidden active slide">
    <div class="flex items-center justify-between">
      <h2 class="font-semibold text-base font-tvsan">Become a Vendor</h2>
      <button class="close-button"><x-gmdi-close-o class="h-5  text-primary" /></button>
    </div>
    <div class="mt-3">
      <div>
        <p class="text-xs font-noto hidden vendor active mb-2 vendor">Vendor's details</p>
        <p class="text-xs font-noto hidden product  mb-2 product">Product details</p>
        <p class="text-xs font-noto hidden image mb-2 image">Images</p>
      </div>
      <div class="flex justify-center space-x-5 w-full">
          <button class="bg-vgrey w-1/3 h-2 rounded-full vendor-pag active"></button>
          <button class="bg-vgrey w-1/3 h-2 rounded-full product-pag"></button>
          <button class="bg-vgrey w-1/3 h-2 rounded-full image-pag"></button>
      </div>
    </div>
    <form action="" class="w-full mt-5">
      <div class="w-full vendor hidden active ">
        <div class="mb-3 w-full">
          <label for="business" class="text-xs mb-2 font-semibold block">Business</label>
          <input type="text"  name="business" placeholder="Business" class="w-full outline-none focus:border-primary rounded-xl border border-vgrey py-2 px-3">
        </div>
        <div class="mb-3">
          <label for="country" class="text-xs mb-2 font-semibold block">Country</label>
          <select id="countries" class="border outline-none w-full border-vgrey text-vgrey text-sm rounded-xl focus:border-primary  py-2 px-3">
              <option selected>Choose a country</option>
              <option value="US">United States</option>
              <option value="CA">Canada</option>
              <option value="FR">France</option>
              <option value="DE">Germany</option>
            </select>
        </div>
        <div class="mb-3">
          <label for="State/Province" class="text-xs font-semibold block">Business</label>
          <input type="text" name="State/Province" placeholder="State/Province" class="block rounded-xl w-full outline-none focus:border-primary border border-vgrey py-2 px-3">
        </div>
        <div class="mb-3">
          <label for="zipcode" class="text-xs mb-2 font-semibold block">Zipcode</label>
          <input type="text" name="zipcode" placeholder="zipcode" class="block rounded-xl w-full outline-none focus:border-primary border border-vgrey py-2 px-3">
        </div>
        <div class="mb-3">
          <label for="email" class="text-xs mb-2 font-semibold block">Email</label>
          <input type="email" name="" placeholder="Email" class="block rounded-xl w-full outline-none focus:border-primary border border-vgrey py-2 px-3">
        </div>
        <div class="mb-3">
          <label for="phone" class="text-xs mb-2 font-semibold block">Phone</label>
          <div class="flex w-full space-x-4">
            <select name="" id="" class="w-2/6 rounded-xl outline-none focus:border-primary border border-vgrey py-2 px-3 pr-3">
              <option selected>+234</option>
              <option value="">+233</option>
              <option value="">+1</option>
              <option value="">+44</option>
              <option value="">+204</option>
            </select>
            <input type="tel" placeholder="08130312056" class="w-4/6 rounded-xl outline-none focus:border-primary border border-vgrey py-2 px-3">
          </div>

        </div>
      </div>

      <div class="w-full product hidden">
        <div class="mb-3 w-full">
          <label for="business" class="text-xs mb-2 font-semibold block">Product/Niche</label>
           <select id="countries" class="border outline-none w-full border-vgrey text-vgrey text-sm rounded-xl focus:outline-primary  py-2 px-3">
              <option selected>Commodity</option>
              <option value="">Services</option>
              <option value="">Care</option>
              <option value="">Education</option>
            </select>
        </div>
        <div class="mb-3">
          <label for="product-name" class="text-xs mb-2 font-semibold block">Product name</label>
          <input type="text" name="product-name" placeholder="Baby Formular" class="block rounded-xl w-full outline-none focus:border-primary border border-vgrey py-2 px-3">
        </div>
        <div class="mb-3">
          <label for="product-description" class="text-xs font-semibold block mb-2">Product description</label>
          <textarea name=" product-desciption" class="block rounded-xl w-full outline-none focus:border-primary border border-vgrey py-2 px-3">Describe your product</textarea>
        </div>
        <div class="mb-3">
          <label for="regular-price" class="text-xs mb-2 font-semibold block">Regular Price</label>
          <input type="number" name="regular-price" placeholder="$0" class="block rounded-xl w-full outline-none focus:border-primary border border-vgrey py-2 px-3">
        </div>
        <div class="mb-3">
          <label for="offer" class="text-xs mb-2 font-semibold block">Vmomas Exclusive Offer</label>
          <input type="number" name="" placeholder="$0" class="block rounded-xl w-full outline-none focus:border-primary border border-vgrey py-2 px-3">
        </div>
        <div class="mb-3">
          <label for="Contact-person" class="text-xs mb-2 font-semibold block">Contact Person</label>
          <input type="text" name="Contact-person" placeholder="Contact Person Name" class="bloc rounded-xl w-full outline-none focus:border-primary border border-vgrey py-2 px-3">
        </div>
        <div class="mb-3">
          <label for="business-role" class="text-xs font-semibold block mb-2">Role in Business</label>
          <input type="text" name="business-role" placeholder="Manager" class="block rounded-xl w-full outline-none focus:border-primary border border-vgrey py-2 px-3">
        </div>
      </div>

      <div class="w-full image hidden">
        <div class="w-full border-dashed border-2 border-lightgrey mt-4 p-4 flex flex-col items-center upload-area">
          <img src="asset/file.png" class="" alt="upload file">
          <p class="text-blak">Drag and drop a image here or</p>
          <div class="my-4">
            <button type="button" class="bg-purpbg lg:w-64 rounded-xl px-8 py-2 flex justify-center items-center space-x-2" id="upload-btn">
              <img src="asset/upload.png" alt="upload icon">
              <p class="text-primary">upload</p>
              <input type="image" name="image" id="file-input" class="hidden">
            </button>
          </div>
          <p class="font-noto font-light leading-relaxed">Maximum file size is 500mb</p>
        </div>
        <div class="mt-4">
          <p>Images Uploaded</p>
          <div class="hidden w-full lg:flex items-center mt-3 space-x-4">
            <div class="relative border border-lightgrey rounded-lg h-24 w-24 image-upload">
              <button class="absolute -top-2 -right-2 del"><img src="asset/delete.png" alt="delete icon" ></button>
            </div>
            <div class="relative border border-lightgrey rounded-lg h-24 w-24 image-upload">
              <button class="absolute -top-2 -right-2 del"><img src="asset/delete.png" alt="delete icon" ></button>
            </div>
            <div class="relative border border-lightgrey rounded-lg h-24 w-24 image-upload">
              <button class="absolute -top-2 -right-2 del"><img src="asset/delete.png" alt="delete icon" ></button>
            </div>
            <div class="relative border border-lightgrey rounded-lg h-24 w-24 image-upload">
              <button class="absolute -top-2 -right-2 del"><img src="asset/delete.png" alt="delete icon" ></button>
            </div>
          </div>
        </div>

        <div class="mt-5">
          <button type="submit" class="w-full rounded-full py-2 text-center bg-primary text-white btns hidden">Next</button>
        </div>
      </div>
    </form>
    <div class="mt-5">
      <button type="button" class="w-full rounded-full py-2 text-center bg-primary text-white" id="next">Next</button>
    </div>
  </div>
  <div class="w-full lg:max-w-sm relative hidden done">
    <button id="" class="close-button absolute -right-6 -top-6 exit"><x-gmdi-close-o class="h-5  text-primary" /></button>
    <div class="mt-4 flex flex-col items-center w-full">
       <img src="asset/done.png" alt="successful button">
       <h3 class="font-tvsan font-bold text-center mt-4">Vendor request successful!</h3>
       <p class="font-noto text-center mt-3">Your request to be a vendor has been submitted, we will get back to you as soon as possible.</p>
    </div>
    <div class="mt-5">
      <button class="w-full rounded-full py-2 text-center bg-primary text-white exit">Done</button>
    </div>
  </div>
</dialog>
@endsection