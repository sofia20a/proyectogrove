@extends('admin.layout')

@section('content')
<header class="pt-10 lg:px-48 xxs:px-10  mb-4 flex flex-col lg:flex-row gap-10 items-center justify-between xxs:ml-2 xxs:items-start">
    <div class="rounded-md ">
        <input type="text" placeholder="Search..." class="w-[445px] xxs:w-[245px] rounded-full  px-4 py-2  border focus:outline-none border-black" />
    </div>
    <div class="bg-white p-2 rounded-full flex gap-4 xxs:w-[320px] xxs:self-center xxs:gap-2 w-96 items-center ">
        <h2 class="text-[#1F5B6C] text-xl ml-1">Task overload:</h2>
        <img class="w-7 h-7" src="{{url('images/SadFace.svg')}}" alt="sadface" />
        <img class="w-7 h-7" src="{{url('images/neutralface.svg')}}" alt="neutralface" />
        <img class="w-7 h-7" src="{{url('images/happyFace.svg')}}" alt="happyface" />
    </div>
    <div class="bg-white p-2 rounded-full flex gap-4 xxs:w-[320px] xxs:self-center xxs:gap-2 w-96 items-center ">
        <h2 class="text-[#1F5B6C] text-xl ml-1">Task Streak:</h2>
        <h2 class="text-[#1F5B6C] text-xl">9 task completed</h2>
    </div>
</header>

<section class="flex flex-wrap mt-12 bg-white gap-4 rounded-md p-8 w-[75vw] m-auto">
    <div class="grid gap-4">
    <h1 class="text-2xl font-bold">{{ $event->name }}</h1>
    <p class="mt-2">{{ $event->description }}</p>

        <div className="flex gap-8 mt-[6rem]">
            <a  href="{{ route('admin.edit', $event->id) }}" class="text-white font-bold text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12">Edit</a>
            <a class="text-white font-bold text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12 " href="{{ route('admin.index') }}"> Back</a>
          
            @csrf
            @method('DELETE')
            <button  class="text-white font-bold text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12 ">Delete</button>
            
        </div>
    </div>
</section>
