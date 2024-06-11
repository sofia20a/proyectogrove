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

<section class="gird w-[70vw] m-auto p-4 rounded-md bg-white gap-4 content-center mb-8 justify-between">
    <h2 class="text-[#1F5B6C] mainFont text-[24px]">Search by:</h2>
    <div class="flex content-center justify-evenly">
        <Btn styles="p-10 pt-2 pb-2 bg-[#1F5B6C] rounded-md text-white" content="Day" />
        <Btn styles="p-10 pt-2 pb-2 bg-[#1F5B6C] rounded-md text-white" content="Week" />
        <Btn styles="p-10 pt-2 pb-2 bg-[#1F5B6C] rounded-md text-white" content="Month" />
        <Btn styles="p-10 pt-2 pb-2 bg-[#1F5B6C] rounded-md text-white" content="Add" />
    </div>
</section>

<section id='container' className="flex flex-wrap m-auto w-[70vw] p-20 rounded-md bg-white gap-4 xxs:p-8 content-center justify-between">
    <a href='#' id={2} className="flex gap-2 bg-[#F8F9FB] rounded-md p-2 pl-4 pr-4 content-center items-center">
        <div className="bg-[#FBB01C] rounded-full w-10 h-10"></div>
        <div classNames="grid">
            <h3 className="font-bold mainFont">Listening Test</h3>
            <div className="flex opacity-50 justify-between text-[12px] gap-2">
                <p className="flex text-center items-center"><img className="h-5 w-5" src="src/assets/images/calendarIconBlack.svg" alt="Calendar" />March 15</p>
                <p className="flex text-center items-center"><img className="h-5 w-5" src="src/assets/images/clock.svg" alt="Clock" />16:00</p>
            </div>
            <h4 className="text-[11px]">High Priority</h4>
        </div>
    </a>
</section>

@endsection