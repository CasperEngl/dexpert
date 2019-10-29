@extends('layouts.app')

@section('content')
<div class="relative min-h-2xl flex items-center bg-gray-400">
    <figure class="absolute z-0 h-full w-full flex justify-center">
        <img src="{{ asset('resources/img/photos/1920/chinmay-jade-XNN9C8MG4KM-unsplash.jpg') }}" alt="" class="object-cover">
    </figure>
    <div class="absolute z-0 h-full w-full bg-gray-900 opacity-75"></div>
    <div class="relative z-10 container">
        <h1 class="text-4xl lg:text-6xl text-white uppercase font-bold max-w-4xl">Dexpert - Vi er specialister indenfor dæk, fælge og reparation af hjul</h1>
    </div>
</div>
<div class="container">
    <div class="my-32 row flex-col lg:flex-row items-center justify-center">
        <div class="my-4 col w-1/2 flex justify-center">
            <div class="lg:pr-32">
                <figure class="p-10 flex justify-center bg-white rounded-lg shadow-2xl">
                    <img src="{{ asset('resources/img/photos/1000/michelin-latitudetour-orwl-jpg-resize-x2000.jpg') }}" alt="">
                </figure>
            </div>
        </div>
        <div class="my-4 col w-full lg:w-1/2">
            <div class="markdown">
                @markdown
                ## Vores uddannede mekanikere har specialviden om dæk og fælge

                Vores mekanikere bliver løbende efteruddannet, bl.a. i kold- og varmreparation af dæk. 

                Ud over dæk, fælge og hjulreparationer laver vi alle former for autoreparationer.

                Vi fører kun dæk og fælge af meget høj kvalitet fra de førende fabrikanter på området.
                @endmarkdown
            </div>
        </div>
    </div>
</div>
<figure class="max-h-sm flex justify-center">
    <img src="{{ asset('resources/img/photos/snow.jpg') }}" alt="" class="w-full object-cover">
</figure>
<div class="container">
    <div class="my-32 row flex-col-reverse lg:flex-row items-center justify-center">
        <div class="my-4 col w-full lg:w-1/2">
            <div class="markdown">
                @markdown
                ## Miljø og sikkerhed
                Når du skifter til nye dæk fordi de gamle er slidte udfører vi en grundig undersøgelse
                af de gamle dæk. Resultatet af undersøgelsen fortæller mange ting, bl.a. om bilens undervogn
                trænger til justering (sporing), om støddæmperne er slidte. Hvis det er tilfældet tilbyder vi
                at udføre det nødvendige arbejde. Det er vigtigt for sikkerheden at bilens undervogn er i tip-top stand.
        
                Dækundersøgelsen viser også om dækket er egnet til regummiering. Ved at regummiere gamle dæk får de en ny slidbane. Det er gavnligt for miljøet. Køreegenskaberne med de regummierede dæk er fuldt på højde med fabriksnye dæk. Vi går ind for regummiering fordi det er gavnligt for miljøet, men vi regummierer kun hvis vi 100% kan stå inde for sikkerheden. Hvis vi er blot den mindste smule i tvivl, bliver dækket kasseret. Når et dæk skal kasseres sørger vi for at det gøres på en miljørigt måde.
                @endmarkdown
            </div>
        </div>
        <div class="my-4 col w-1/2 flex justify-center">
            <div class="lg:pl-32">
                <figure class="p-10 flex justify-center bg-white rounded-lg shadow-2xl">
                    <img src="{{ asset('resources/img/photos/1000/michelin-ltx-ms2-orwl-jpg-resize-x2000.jpg') }}" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>
<figure class="max-h-sm flex justify-center">
    <img src="{{ asset('resources/img/photos/service.jpg') }}" alt="" class="w-full object-cover">
</figure>
<div class="container">
    <h2 class="mt-32 mb-8 text-6xl text-gray-800 text-center font-normal">Medarbejdere</h2>
    <div class="mb-32 row-tight">
        @foreach (App\Employee::all() as $employee)
            <div class="my-1 col w-full sm:w-1/3 md:w-1/4 lg:w-1/6">
                <div class="flex flex-col items-center">
                    <figure class="mb-2 w-full">
                        <img src="{{ $employee->getFirstMediaUrl('profile', 'large') }}" alt="{{ $employee->name }}" class="w-full rounded" loading="lazy" width="500" height="500">
                    </figure>
                    <h4 class="w-full text-2xl text-gray-800 font-normal">{{ $employee->name }}</h4>
                    @if ($employee->disciplines->count())
                        <div class="my-3 w-full markdown">
                            <ul>
                                @foreach ($employee->disciplines as $discipline)
                                    <li>{{ $discipline }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection