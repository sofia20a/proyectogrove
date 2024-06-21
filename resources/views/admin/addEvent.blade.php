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
    <form action="{{ route('admin.store') }}"  method="POST" class="flex gap-4 w-full rounded-md bg-white p-8">
        <div class="grid mainFont gap-4">
            <div class="flex flex-wrap gap-[5vw]">
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="event_name">Name of the event</label>
                    <input id="event_name" class=" text-black font-medium  w-[281px] rounded-md p-2  border focus:outline-none border-black" name="name"  type="text">
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
                <textarea class=" text-black font-medium p-2 w-[47vw] h-16 rounded-md  border focus:outline-none border-black" name="description" id="event_Description" cols="30" rows="2"></textarea>
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
                <label for="categories_events_id">Categorías</label>
                    <select name="categories_events_id" class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" id="categories_events_id" >
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="grid gap-4 mainFont text-[#1F5B6C]">
        
            <div class=" grid gap-2 text-[#1F5B6C]">
            <label for="status_events_id">Estado</label>
                    <select name="status_events_id" class="text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" id="status_events_id" required>
                        @foreach ($status as $stat)
                            <option value="{{ $stat->id }}">{{ $stat->name }}</option>
                        @endforeach
                    </select>
            </div>
            <input class="ml-[50%] rounded-md  p-1 pl-2 pr-2 bg-[#FFDA58] text-white" type="submit" value={value} >
        </div>
    </form>
</section>

@endsection