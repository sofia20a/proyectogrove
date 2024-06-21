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

<section class="grid mt-8 w-[70vw] m-auto">
    <h2 class="text-[32px] text-[#1F5B6C]">Edit-Event</h2>
    <form action="{{ route('admin.update', $event->id) }}" class="flex gap-4 w-full rounded-md bg-white p-8">
    @csrf
    @method('PUT')
        <div class="grid mainFont gap-4">
            <div class="flex flex-wrap gap-[5vw]">
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="event_name">Name of the event</label>
                    <input id="event_name" class=" text-black font-medium  w-[281px] rounded-md p-2  border focus:outline-none border-black" name="event_name" type="text"  value="{{ old('name', $event->name) }}"
                </div>
              
            <div class="mt-2 mb-2">
                <div>
                    <label for="scheduled_at" class="block mb-2 text-sm font-medium text-[#1F5B6C]">Date:</label>
                    <input type="datetime-local" class="bg-gray-10 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-2.5" name="scheduled_at" placeholder="year-month-day" value="{{ $event->scheduled_at }}">
                </div>
            </div>
            <div class="grid gap-2 text-[#1F5B6C]">
                <label for="description">Description</label>
                <textarea class=" text-black font-medium p-2 w-[47vw] h-16 rounded-md  border focus:outline-none border-black" name="description" cols="30" rows="2" value="{{ $event->description }}"></textarea>
            </div>
            <div class="flex h-[5rem] gap-[10vw]">
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="priority">Status</label>
                    <select class=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="priority" id="event_Priority">
                        <option value='1'>High Priority</option>
                        <option value='2'>Mid Priority</option>
                        <option value='3'>Low Priority</option>
                    </select>
                </div>
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="eventLabel">Categories</label>
                    <select class=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="categories_events_id" id="event_Label">
                    @foreach ($categories as $category)
                            @if ($category->id == $event->categories_events_id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            
                        @endforeach
                    </select>
                </div>
                <div class=" grid gap-2 text-[#1F5B6C]">
                      <label for="status_events_id">Estado</label>
                    <select name="status_events_id" class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" id="status_events_id" required>
                        @foreach ($status as $single_status)
                            @if ($single_status->id == $event->status_events_id)
                                <option value="{{ $single_status->id }}" selected>{{ $single_status->name }}</option>
                            @else
                                <option value="{{ $single_status->id }}">{{ $single_status->name }}</option>
                            @endif
                        @endforeach
                    </select>
            </div>
           
            </div>
        </div>
        <input class="ml-[50%] rounded-md  p-1 pl-2 pr-2 bg-[#FFDA58] text-white" type="submit" value="Update">
        <a class="text-white font-bold text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12 " href="{{ route('admin.show' ,$event->id) }}"> Back</a>
         
           
        </div>
    </form>
</section>
@endsection