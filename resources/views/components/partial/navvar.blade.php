<nav class="">
  <div class="flex flex-wrap items-center justify-between">
    <div class="flex md:space-x-9 items-center">
      <a href="{{route('index')}}" class="flex items-center">
          <img src="asset/vmalogo3.png" class="mr-3 h-6 lg:h-8" alt="Visionary Momas Logo" />
      </a>
      <div class="bg-white w-full hidden left-0  lg:w-auto absolute  lg:static top-0 lg:bg-transparent items-center justify-between lg:flex lg::w-auto md:order-1 navbar" id="navbar-cta">
        <button class="lg:hidden absolute right-4 top-3 p-1 border border-primary rounded-full close-btn"><x-gmdi-close-o class="h-5 text-primary" /></button>
        <ul class="w-full lg:w-auto flex flex-col bg-white lg:bg-transparent font-medium px-4 py-10 lg:px-0 lg:py-0 mt-4  rounded-lg  lg:flex-row md:space-x-12 lg:mt-0 lg:border-0 z-50">
          <li>
            <a href="{{route('index')}}" class="block py-2 pl-3 pr-4 var font-noto  active text-blak hover:text-primary md:p-0">Home</a>
          </li>
          <li>
            <a href="{{route('about')}}" class="block py-2 pl-3 var font-noto  pr-4 text-primary hover:text-primary md:p-0">About</a>
          </li>
          <li>
            <a href="{{route('vendor')}}" class="block py-2 pl-3 pr-4 text-blak var  font-noto hover:text-primary md:p-0">Vendors</a>
          </li>
          <li>
            <a href="{{route('term')}}" class="block py-2 pl-3 pr-4 text-blak var  font-noto hover:text-primary md:p-0" >Terms of Use</a>
          </li>
          <li>
            <a href="{{route('support')}}" class="block py-2 pl-3 pr-4 text-blak var  font-noto hover:text-primary md:p-0">Support</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="flex md:order-2 items-center space-x-4">
        <button type="button" class="text-blak hidden md:inline">Sign In</button>
        <button type="button" class="text-primary  bg-vblue hidden lg:inline  focus:outline-none font-medium rounded-full text-sm px-4 py-3 text-center hover:bg-opacity-80 ">Create Account</button>
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden">
          <x-gmdi-menu-o class="h-6 text-vblue navbar-btn" /></button>
    </div>
  </div>
</nav>
