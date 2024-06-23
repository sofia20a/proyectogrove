
@extends('admin.layout')


@section('content')
  <body class="flex mainFont bg-[#EAECEF] ">
    <div class="relative w-full h-screen" style="background-image: url('./header.svg'); background-size: cover; ">
      <div class=" inset-0 ml-36 ">
        <span class="uppercase font-light text-4xl mb-32  text-white -tracking-[-1rem]">Grove</span>
      </div>
        <div class= "max-w-md">
          <div class="flex flex-col items-center ml-10 mt-72">
                <form action="{{ route('singup.store') }}" method="POST">
                    @csrf
                    <div class="mb-4 flex flex-col">
                        <label for="name" class="text-[#76C6D1] mainFont font-medium">Name</label>
                        <input type="text" id="name" name="name" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]" required>
                        
                  
                    </div>
                    <div class="mb-4 flex flex-col">
                        <label for="username" class="text-[#76C6D1] mainFont font-medium">Username</label>
                        <input type="text" id="username" name="username" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]">
                    </div>
                    <div class="mb-4 flex flex-col">
                        <label for="email" class="text-[#76C6D1] mainFont font-medium">Email</label>
                        <input type="text" id="email" name="email" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]">
                    </div>
                    <div class="mb-4 flex flex-col">
                        <label for="password" class="text-[#76C6D1] mainFont font-medium">Password</label>
                        <input type="text" id="password" name="password" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]">
                    </div>
                    <div class="mb-4 flex flex-col">
                        <button type="submit" class="bg-[#FFDA58] p-1 rounded-full h-8">
                            <span class="text-lg text-white m-6 font-bold">Sign-Up</span>
                        </button>
                    </div>
                </form>
              <div class="mb-4 flex flex-col ml-2">
                <p class="text-xs text-[#76C6D1] m-auto font-semibold"> Already have an account?  </p>
                <a class="text-xs text-[#FFDA58] m-auto font-semibold" href="route('admin.login')">Log in</a>
              </div>
          </div>
      </div>
    </div>
  </body>
  
  