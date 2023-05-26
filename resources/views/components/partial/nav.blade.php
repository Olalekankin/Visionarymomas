{{-- Navbar --}}

<nav class="">
  <div class="flex flex-wrap items-center justify-between">
    <div class="flex md:space-x-9 items-center">
      <a href="{{route('index')}}" class="flex items-center">
          <img src="asset/vmalogo.png" class="mr-3 h-6 lg:h-8" alt="Visionary Momas Logo" />
      </a>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 text-white  rounded-lg  md:flex-row md:space-x-12 md:mt-0 md:border-0">
          <li>
            <a href="#" class="block py-2 pl-3 pr-4  md:bg-transparent md:p-0 " aria-current="page">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 hover:bg-gray-100 md:hover:bg-transparent md:p-0">Moments</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 hover:bg-gray-100 md:hover:bg-transparent md:p-0" >Saver</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 hover:bg-gray-100 md:hover:bg-transparent md:p-0">Our App</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="flex md:order-2 items-center space-x-4">
        <button type="button" class="text-white hidden md:inline">Sign In</button>
        <button type="button" class="text-secondary  bg-vblue hidden lg:inline  focus:outline-none font-medium rounded-full text-sm px-4 py-3 text-center hover:bg-opacity-80 ">Create Account</button>
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden">
          <x-gmdi-menu-o class="h-6 text-white" /></button>
    </div>
  </div>
</nav>
