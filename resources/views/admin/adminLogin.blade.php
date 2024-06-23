
@extends('admin.layout')


@section('content')
  
  <body class="flex mainFont bg-[#EAECEF] ">
    <div class= " style= background-image: url('public\images\header.svg'); background-size: cover; ">
      <div class=" inset-0 ml-36 mt-36">
        <span class="uppercase font-light text-4xl mt-6  text-white -tracking-[-1rem]">Grove</span>
      </div>
        <div class= "max-w-md ">
          <div class="flex flex-col items-center ml-10 mt-80"> 
            <div class="mb-4 flex flex-col">
           
              <label for="Username" class="text-[#76C6D1] mainFont font-medium" > Username</label>
              <input type="text" placeholder="" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none   border-[#76C6D1]" name="username">   
            </div> 
            <div class="mb-4 flex flex-col">
              <label for="Password" class="text-[#76C6D1] mainFont font-medium"> Password</label>
              <input type="text" placeholder="" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]" name="password">
            </div>
            <div class="mb-4  flex flex-col">
                <button class="bg-[#FFDA58] p-1 rounded-full h-8"><a class="text-lg text-white m-6 font-bold" href="route('admin.index')">Log-In</a></button>
              </div>
              <div class="mb-4 flex flex-col ml-2">
                <a href="route('admin.forgotPassword')" class="text-xs text-[#76C6D1] m-auto font-semibold"> Did you forget your password? </a>
                <p class="m-auto font-normal text-[#76C6D1]"> Do you not have an account?  <a class="text-xs text-[#FFDA58] m-auto font-semibold" href="route('admin.register')"> Sign up</a></p>
              </div>
          </div>
        
      </div>
    </div>
  </body>
  
  