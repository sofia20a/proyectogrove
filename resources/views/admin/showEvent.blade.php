@extends('admin.layout')

@section('content')

<section class="flex flex-wrap mt-12 bg-white gap-4 rounded-md p-8 w-[75vw] m-auto">
    <div class="grid gap-4">
    <h1 class="text-2xl font-bold">{{ $event->name }}</h1>
    <p class="mt-2">{{ $event->description }}</p>
    <div class="flex gap-8">
    <div class="flex opacity-50 text-md gap-5">
                    <p class="flex text-center items-center">
                        <img class="h-8 w-8" src="{{ url('images/calendarIconBlack.svg') }}" alt="Calendar" />
                        {{ \Carbon\Carbon::parse($event->scheduled_at)->format('F j') }}
                    </p>
                    <p class="flex text-center items-center">
                        <img class="h-8 w-8" src="{{ url('images/clock.svg') }}" alt="Clock" />
                        {{ \Carbon\Carbon::parse($event->scheduled_at)->format('H:i') }}
                    </p>
                </div>
                <h4 class="text-lg font-medium">{{ $event->priority }}</h4>
            </div>
    <img src="{{ url($event->image_event)}}" alt="">
        <div className="flex gap-8 mt-[6rem]">
        <form action="{{ route('admin.destroy', $event->id) }}" method="POST">
            <a  href="{{ route('admin.edit', $event->id) }}" class="text-white font-medium text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12">Edit</a>
            <a class="text-white font-medium text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12 " href="{{ route('admin.index') }}"> Back</a>
          
            @csrf
            @method('DELETE')
           
            <button  class="text-white font-medium text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12 ">Delete</button>
            </form>
        </div>
    </div>
</section>
