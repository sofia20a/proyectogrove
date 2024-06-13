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
    <form action="" class="flex gap-4 w-full rounded-md bg-white p-8">
        <div class="grid mainFont gap-4">
            <div class="flex flex-wrap gap-[5vw]">
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="event_name">Name of the event</label>
                    <input id="event_name" class=" text-black font-medium  w-[281px] rounded-md p-2  border focus:outline-none border-black" name="event_name" type="text">
                </div>
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="eventDate">Date</label>
                    <select class=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="eventDate" id="event_Date">
                        <option value='1'>21/05/2024</option>
                    </select>
                </div>
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="eventHour">Hour</label>
                    <select class=" text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" name="eventHour" id="event_Hour">
                        <option value='1'>16:00</option>
                    </select>
                </div>
            </div>
            <div class="grid gap-2 text-[#1F5B6C]">
                <label for="eventDescription">Description</label>
                <textarea class=" text-black font-medium p-2 w-[47vw] h-16 rounded-md  border focus:outline-none border-black" name="eventDescription" id="1" cols="30" rows="2"></textarea>
            </div>
            <div class="flex h-[5rem] gap-[10vw]">
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="eventPriority">Status</label>
                    <select class=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="eventPriority" id="event_Priority">
                        <option value='1'>High Priority</option>
                    </select>
                </div>
                <div class="grid gap-2 text-[#1F5B6C]">
                    <label for="eventLabel">Label</label>
                    <select class=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="eventLabel" id="event_Label">
                        <option value='1'>Homework</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="grid gap-4 mainFont text-[#1F5B6C]">
            <h4>Event Image</h4>
            <label class="flex border-[2px] border-black mb-6 rounded-md w-[13rem] h-[13rem] cursor-pointer" for="event_img">
                <input class="hidden" id="event_img" type="file" name="event_img" />
                <div class=" self-center">
                    <img id="image" src="src/assets/images/calendarImage.svg" alt="Preview" />
                </div>
            </label>
            <div class=" grid gap-2 text-[#1F5B6C]">
                <label for="eventCategory">Category</label>
                <select class=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="eventCategory" id="event_Category">
                    <option value='1'>University</option>
                </select>
            </div>
            <input class="ml-[50%] rounded-md  p-1 pl-2 pr-2 bg-[#FFDA58] text-white" type="submit" value={value}>
        </div>
    </form>
</section>
@endsection