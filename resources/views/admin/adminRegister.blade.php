
@extends('admin.layout')


@section('content')
  <body class="flex mainFont bg-[#EAECEF] ">
    <div class="relative w-full h-screen" style="background-image: url('./header.svg'); background-size: cover; ">
      <div class="absolute inset-0 ml-36 mt-36">
        <span class="uppercase font-light text-4xl mt-6  text-white -tracking-[-1rem]">Grove</span>
      </div>
        <div class= "max-w-md">
          <div class="flex flex-col items-center ml-10 mt-72 "> 
            <div class="mb-4 flex flex-col">
              <label for="Name" class="text-[#76C6D1] mainFont font-medium"> Name</label>
              <input type="text" placeholder="" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]" name="name">
            </div>
            <div class="mb-4 flex flex-col">
              <label for="Username" class="text-[#76C6D1] mainFont font-medium" > Username</label>
              <input type="text" placeholder="" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]" name="username">   
            </div> 
            <div class="mb-4 flex flex-col">
              <label for="Email" class="text-[#76C6D1] mainFont font-medium"> Email</label>
              <input type="text" placeholder="" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]" name="email">   
            </div> 
            <div class="mb-4 flex flex-col">
              <label for="Password" class="text-[#76C6D1] mainFont font-medium"> Password</label>
              <input type="text" placeholder="" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]" name="password">
            </div>
            <div class="mb-4  flex flex-col">
                <button class="bg-[#FFDA58] p-1 rounded-full h-8"><a class="text-lg text-white m-6 font-bold" href="route('admin.login')">Sign-Up</a></button>
              </div>
              <div class="mb-4 flex flex-col ml-2">
                <p class="text-xs text-[#76C6D1] m-auto font-semibold"> Already have an account?  </p>
                <a class="text-xs text-[#FFDA58] m-auto font-semibold" href="route('admin.login')">Log in</a>
              </div>
          </div>
      </div>
    </div>
  </body>
  
  