@extends('admin.layout')

@section('content')

  <div class=" bg-[url('../../public/images/header.svg')] bg-cover">
    <div class=" inset-0 pl-36 pt-36">
      <span class="uppercase font-light text-4xl mt-6  text-white -tracking-[-1rem]">Grove</span>
    </div>

    @if ($errors->any())
    <div class="text-white">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <div class="max-w-md ">
      <div class="flex flex-col items-center ml-10 mt-80">
        <form class="max-w-[360px] mx-auto" action="{{ route('admin.check') }}" method="POST">
          @csrf
          <div class="mb-4 flex flex-col">
            <label for="email" class="text-[#76C6D1] mainFont font-medium">Email</label>
            <input id="email" type="text" placeholder="" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none   border-[#76C6D1]" name="email">
          </div>
          <div class="mb-4 flex flex-col">
            <label for="password" class="text-[#76C6D1] mainFont font-medium"> Password</label>
            <input id="password" type="text" placeholder="" class="w-[200px] rounded-full px-4 py-1 border focus:outline-none border-[#76C6D1]" name="password">
          </div>
          <div class="mb-4  flex flex-col">
            <button type="submit" class="bg-[#FFDA58] p-1 rounded-full h-8 text-lg text-white m-6 font-bold">Log-In</button>
          </div>
        </form>
        <div class="mb-4 flex flex-col ml-2">
          <a href="route('admin.forgotPassword')" class="text-xs text-[#76C6D1] m-auto font-semibold"> Did you forget your password? </a>
          <p class="m-auto font-normal text-[#76C6D1]"> Do you not have an account? <a class="text-xs text-[#FFDA58] m-auto font-semibold" href="route('admin.register')"> Sign up</a></p>
        </div>
      </div>
    </div>