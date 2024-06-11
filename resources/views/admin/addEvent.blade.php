@extends('admin.layout')


@section('content')
<header className="pt-10 lg:px-48 xxs:px-10  mb-4 flex flex-col lg:flex-row gap-10 items-center justify-between xxs:ml-2 xxs:items-start">
    <div className="rounded-md ">
        <input type="text" placeholder="Search..." className="w-[445px] xxs:w-[245px] rounded-full  px-4 py-2  border focus:outline-none border-black" />
    </div>
    <div className="bg-white p-2 rounded-full flex gap-9 xxs:w-[320px] xxs:self-center xxs:gap-4 w-96 items-center ">
        <h2 className="text-[#1F5B6C] text-xl ml-1">Task overload:</h2>
        <img className="w-8 h-8" src="src/assets/images/SadFace.svg " alt="sadface" />
        <img className="w-8 h-8" src="src/assets/images/neutralface.svg " alt="neutralface" />
        <img className="w-8 h-8" src="src/assets/images/happyFace.svg" alt="happyface" />
    </div>
    <div className="bg-white p-2 rounded-full flex gap-9 xxs:w-[320px] xxs:self-center xxs:gap-4 w-96 items-center ">
        <h2 className="text-[#1F5B6C] text-xl ml-1">Task Streak:</h2>
        <h2 className="text-[#1F5B6C] text-xl"> 9 task completed</h2>
    </div>
</header>

<section className="grid mt-8 w-[70vw] m-auto">
    <h2 className="text-[32px] text-[#1F5B6C]">Add-Event</h2>
    <form action="" className="flex gap-4 w-full rounded-md bg-white p-8">
        <div className="grid mainFont gap-4">
            <div className="flex flex-wrap gap-[5vw]">
                <div className="grid gap-2 text-[#1F5B6C]">
                    <label htmlFor="event_name">Name of the event</label>
                    <input id="event_name" className=" text-black font-medium  w-[281px] rounded-md p-2  border focus:outline-none border-black" name="event_name" type="text">
                </div>
                <div className="grid gap-2 text-[#1F5B6C]">
                    <label htmlFor="eventDate">Date</label>
                    <select className=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="eventDate" id="event_Date">
                        <option value='1'>21/05/2024</option>
                    </select>
                </div>
                <div className="grid gap-2 text-[#1F5B6C]">
                    <label htmlFor="eventHour">Hour</label>
                    <select className=" text-black font-medium rounded-md p-1 pr-12 border focus:outline-none border-black" name="eventHour" id="event_Hour">
                        <option value='1'>16:00</option>
                    </select>
                </div>
            </div>
            <div className="grid gap-2 text-[#1F5B6C]">
                <label htmlFor="eventDescription">Description</label>
                <textarea className=" text-black font-medium p-2 w-[47vw] h-16 rounded-md  border focus:outline-none border-black" name="eventDescription" id="1" cols="30" rows="2"></textarea>
            </div>
            <div className="flex h-[5rem] gap-[10vw]">
                <div className="grid gap-2 text-[#1F5B6C]">
                    <label htmlFor="eventPriority">Status</label>
                    <select className=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="eventPriority" id="event_Priority">
                        <option value='1'>High Priority</option>
                    </select>
                </div>
                <div className="grid gap-2 text-[#1F5B6C]">
                    <label htmlFor="eventLabel">Label</label>
                    <select className=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="eventLabel" id="event_Label">
                        <option value='1'>Homework</option>
                    </select>
                </div>
            </div>
        </div>
        <div className="grid gap-4 mainFont text-[#1F5B6C]">
            <h4>Event Image</h4>
            <label className="flex border-[2px] border-black mb-6 rounded-md w-[13rem] h-[13rem] cursor-pointer" htmlFor="event_img">
                <input className="hidden" id="event_img" type="file" name="event_img" />
                <div className=" self-center">
                    <img id="image" src="src/assets/images/calendarImage.svg" alt="Preview" />
                </div>
            </label>
            <div className=" grid gap-2 text-[#1F5B6C]">
                <label htmlFor="eventCategory">Category</label>
                <select className=" text-black font-medium rounded-md p-1 pr-12  border focus:outline-none border-black" name="eventCategory" id="event_Category">
                    <option value='1'>University</option>
                </select>
            </div>
            <input className="ml-[50%] rounded-md  p-1 pl-2 pr-2 bg-[#FFDA58] text-white" type="submit" value={value} >
        </div>
    </form>
</section>
@endsection