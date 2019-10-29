@extends('layouts.app')

@section('content')
<div class="my-16 container">
    <h1 class="my-8 text-6xl text-gray-800 text-center font-normal">Medlemskab</h1>
    <div class="row mb-24">
        <div class="my-3 col w-full lg:w-1/2">
            <div class="my-8 p-6 h-full bg-white shadow-lg rounded-lg">
                <div class="mb-4 row justify-between">
                    <div class="mb-2 col">
                        <h2 class="leading-normal text-3xl text-gray-800 font-normal">Hej {{ auth()->user()->name }}</h2>
                    </div>
                    <div class="mb-2 col">
                        <div class="row-tight">
                            <div class="my-1 col">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
            
                                    <button type="submit" class="btn btn-lg btn-primary">Log ud</button>
                                </form>
                            </div>
                            @if (auth()->user()->subscription)
                                <div class="my-1 col">
                                    <form action="{{ route('subscription.unsubscribe') }}" method="POST">
                                        @csrf
                
                                        <button type="submit" class="btn btn-lg inline-flex items-center border-2 bg-transparent text-white border-gray-400 text-gray-600 font-light">Afbestil abonnement</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @if (auth()->user()->subscription)
                <div class="markdown">
                    @markdown
                    Dit nuværende abonnement er **{{ auth()->user()->subscription->name }}**  og du betaler **{{ auth()->user()->subscription->real_price_formatted }} kr.**  om måneden.
                    @endmarkdown
                </div>
                @endif
                <form action="{{ route('subscription.store') }}" method="POST" class="my-8">
                    @csrf
                    @method('POST')
        
                    <label for="subscription" class="mb-6 block">
                        <span class="mb-2 block text-gray-700">Vælg abonnement</span>
                        <select name="subscription" id="subscription" class="field">
                            @foreach (\App\Subscription::all() as $subscription)
                                <option
                                    value="{{ $subscription->id }}"
                                    @if (auth()->user()->subscription)
                                        @if (auth()->user()->subscription->is($subscription))
                                            selected
                                        @endif
                                    @endif
                        >
                            {{ $subscription->name }} {{ $subscription->real_price_formatted }} kr./måneden
                            @if (! auth()->user()->member)
                                {{ isset(auth()->user()->subscription) ? '' : '+ 25 kr. gebyr' }}
                            @endif
                        </option>
                            @endforeach
                        </select>
                    </label>
                    @if (auth()->user()->subscription)
                        <button type="submit" class="btn btn-primary">Skift abonnement</button>
                    @else
                        <div class="row-tight items-center">
                            <div class="my-2 col">
                                <button type="submit" class="btn btn-primary">Bestil abonnement</button>
                            </div>
                            @if (auth()->user()->member)
                                <div class="my-2 col">
                                    <p class="max-w-xs text-gray-500 italic text-sm">Fordi du allerede er medlem, så sparer du gebyret ved at bestille et abonnement igen</p>
                                </div>
                            @endif
                        </div>
                    @endif
                </form>
                <div class="markdown">
                    @markdown
                    ## Betingelser
                    For at kunne tegne abonnement kræves der at man er oprettet som medlem hos Dexpert.
                    Medlemsskabet er gratis, dog opkræves et mindre gebyr ved oprettelsen af medlemsskab.
        
                    Gebyret er normalt 25 kr.
        
                    I forbindelse med lanceringen af det nye koncept er oprettelsen gratis resten af 2019.
                    @endmarkdown
                </div>
            </div>
        </div>
        <div class="my-3 col w-full lg:w-1/2">
            <div class="my-8 p-6 h-full bg-white shadow-lg rounded-lg">
                <div class="markdown">
                    @markdown
                    ## Abonnementstyper og priser
        
                    <table class="my-6 table-fixed">
                        <thead>
                            <tr>
                                <th class="px-2 py-1 border-2 break-all">Abonnement</th>
                                <th class="px-2 py-1 border-2 break-all">Pris/måned</th>
                                <th class="px-2 py-1 border-2 break-all">Beskrivelse</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (App\Subscription::all() as $subscription)
                                <tr>
                                    <td class="px-2 py-1 border-2">{{ $subscription->name }}</td>
                                    <td class="px-2 py-1 border-2">{{ $subscription->real_price_formatted }} kr.</td>
                                    <td class="px-2 py-1 border-2">{{ $subscription->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
        
                    Priserne i tabellen ovenfor er pris pr måned. Alle priser er incl. moms.
        
                    Dexpert forbeholder sig ret til at ændre priser med 3 måneders varsel.
        
                    En abonnementsaftale kan til enhver tid ændres eller opsiges med 30 dages varsel.
                    Medlemskab af Dexpert kan til enhver tid opsiges, dog ikke mens en abonnementsaftale er i kraft.
                    @endmarkdown
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
