@extends('admin.layout')


@section('content')


<section class="grid w-[70vw] m-auto mt-12">
    <h2 class="text-[32px] text-[#1F5B6C]">Edit-Event</h2>
   
     <form action="{{ route('admin.update', $event->id) }}" method="POST"   enctype="multipart/form-data" class="flex gap-4 w-full rounded-md bg-white p-8">
     @csrf
    @method('PUT')
        <div class="grid mainFont gap-4">
            <div class="flex flex-wrap gap-[5vw]">
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="event_name">Name of the event</label>
                    <input id="event_name" class=" text-black font-medium  w-[281px] rounded-md p-2  border focus:outline-none border-black" name="name" type="text"  value="{{ $event->name }}">
                </div>
                <div class="grid gap-4 mainFont text-[#1F5B6C]">
            <h4>Event Image</h4>
            <label class="flex border-[2px] border-black mb-6 rounded-md w-[26rem] h-[16rem] cursor-pointer" for="image">
                <input class="hidden" id="event_img" type="file" name="image    " />
                <div class=" self-center">
                <img id="preview" alt="event">
                <input type="file" accept=".jpg, .png" id="image" class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" name="image">
                </div>
            </label>
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
                                <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endif
                            
                        @endforeach
                    </select>
                </div>
                <div class=" grid gap-2 text-[#1F5B6C]">
                      <label for="status_events_id">Estado</label>
                    <select name="status_events_id" class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" id="status_events_id" required>
                        @foreach ($status as $single_status)
                            @if ($single_status->id == $event->status_events_id)
                                <option value="{{ $single_status->id }}" selected>{{ $single_status->status_name }}</option>
                            @else
                                <option value="{{ $single_status->id }}">{{ $single_status->status_name }}</option>
                            @endif
                        @endforeach
                    </select>
            </div>
            </div>
        </div>
           
         
            <input class="ml-[50%] rounded-md  p-1 pl-2 pr-2 bg-[#FFDA58] text-white" type="submit" value={value}>
            <a class="text-white font-bold text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12 " href="{{ route('admin.show',$event->id) }}"> Back</a>
        </div>
    </form>
</section>
@endsection