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

<section className="flex flex-wrap mt-12 bg-white gap-4 rounded-md p-8 w-[75vw] m-auto">
    <div className="grid gap-4">
        <h1 className="mainFont font-semibold text-[48px]">Listening Test</h1>
        <p className="w-[40vw] mt-4 xs:content-center">aermpetbhetbhtebhwtbhwtbwtbhxfgbnsrgthnert</p>
        <div className="flex gap-8 mt-[6rem]">
            <a  href="#" className="text-white font-bold text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12">Edit</a>
            <a  href="#" className="text-white font-bold text-[24px] p-2 pl-12 pr-12 bg-[#FBB01C]  rounded-md mb-12 ">Delete</a>
        </div>
    </div>
</section>

@endsection