@extends('admin.layout')

@section('content')

<section class="gird w-[70vw] m-auto p-4 rounded-md bg-white gap-4 content-center mb-8 justify-between mt-12">
    <h2 class="text-[#1F5B6C] mainFont text-[24px]">Search by:</h2>
    <div class="flex flex-wrap content-center justify-evenly xxs:gap-2">
        <button class="p-10 pt-2 pb-2 bg-[#1F5B6C] rounded-md text-white">Day</button>
        <button class="p-10 pt-2 pb-2 bg-[#1F5B6C] rounded-md text-white">Week</button>
        <button class="p-10 pt-2 pb-2 bg-[#1F5B6C] rounded-md text-white">Month</button>
        <a href="{{route('admin.create')}}" class="p-10 pt-2 pb-2 bg-[#1F5B6C] rounded-md text-white">Add</a>
    </div>
</section>

<section id='container' class="flex flex-wrap m-auto w-[70vw] p-20 rounded-md bg-white gap-4 xxs:p-8 content-center justify-between">
    @foreach($events as $event)
        <a href="{{ route('admin.show',$event->id) }}" class="flex gap-2 bg-[#F8F9FB] rounded-md p-2 pl-4 pr-4 content-center items-center">
            <div class="bg-[#FBB01C] rounded-full w-10 h-10"></div>
            <div class="grid">
                <h3 class="font-bold mainFont">{{ $event->name }}</h3>
                <div class="flex opacity-50 justify-between text-[12px] gap-2">
                    <p class="flex text-center items-center">
                        <img class="h-5 w-5" src="{{ url('images/calendarIconBlack.svg') }}" alt="Calendar" />
                        {{ \Carbon\Carbon::parse($event->scheduled_at)->format('F j') }}
                    </p>
                    <p class="flex text-center items-center">
                        <img class="h-5 w-5" src="{{ url('images/clock.svg') }}" alt="Clock" />
                        {{ \Carbon\Carbon::parse($event->scheduled_at)->format('H:i') }}
                    </p>
                </div>
                <h4 class="text-[11px]">{{ $event->priority }}</h4>
            </div>
        </a>
        @endforeach
</section>

@endsection

