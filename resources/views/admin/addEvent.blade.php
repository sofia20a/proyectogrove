@extends('admin.layout')


@section('content')


<section class="grid mt-12 w-[70vw] m-auto">
    <h2 class="text-[32px] text-[#1F5B6C]">Add-Event</h2>
    
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
    <form action="{{ route('admin.store') }}"  enctype="multipart/form-data" method="POST" class="flex gap-4 w-full rounded-md bg-white p-8">
        @csrf
        <div class="grid mainFont gap-4">
            <div class="flex flex-wrap gap-[5vw]">
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="event_name">Name of the event</label>
                    <input id="name" class=" text-black font-medium  w-[281px] rounded-md p-2  border focus:outline-none border-black" name="name"  type="text">
                </div>      
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="eventDate">Date</label>
                    <input class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" type="date" name="eventDate" id="event_Date">
                </div>
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="eventHour">Hour</label>
                    <input class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" type="time" name="eventHour" id="event_Hour">
                </div>
            </div>
            <div class="grid gap-2 text-[#1F5B6C]">
                <label for="description">Description</label>
                <textarea class=" text-black font-medium p-2 w-[47vw] h-16 rounded-md  border focus:outline-none border-black" name="description" id="description" cols="30" rows="2"></textarea>
            </div>
            <div class="flex h-[5rem] gap-[10vw]">
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="priority">Status</label>
                    <select class=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="priority" id="event_Priority">
                        <option value='High Priority'>High Priority</option>
                        <option value='Mid Priority'>Mid Priority</option>
                        <option value='Low Priority'>Low Priority</option>
                    </select>
                </div>
                <div class="grid gap-2 text-[#1F5B6C]">
                <label for="categories_events_id">Categorías</label>
                    <select name="categories_events_id" class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" id="categories_events_id" >

                        @foreach ($categories as $category)
                             <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                 
                        @endforeach
                     
                    </select>
                </div>
            </div>
        </div>
        <div class="grid gap-4 mainFont text-[#1F5B6C]">
        
            <h4>Event Image</h4>
            <label class="flex border-[2px] border-black mb-6 rounded-md w-[26rem] h-[16rem] cursor-pointer" for="image">
               
                <div class=" self-center">
                <img id="preview" src="{{ url('images/placeholder.jpg') }}" alt="event">
                <input type="file" accept=".jpg, .png" id="image" class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" name="image">
                </div>
            </label>
            <div class="mt-2 mb-2">
            </div>
            <div class=" grid gap-2 text-[#1F5B6C]">
            <label for="status_events_id">Estado</label>
                    <select name="status_events_id" class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" id="status_events_id" required>
                        @foreach ($status as $stat)
                            <option value="{{ $stat->id }}">{{ $stat->status_name }}</option>
                        @endforeach
                    </select>
            </div>
            <input class="ml-[50%] rounded-md  p-1 pl-2 pr-2 bg-[#FFDA58] text-white" type="submit" value="Add" >
        </div>
    </form>
</section>

@endsection