@extends('layouts.app')

@section('title', 'BladeHub - home')

@section('content')
    <div class="flex flex-col items-center justify-center text-center min-h-screen ">
        <div class="max-w-4xl px-4 mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight">
                Encontre as melhores barbearias
            </h1>
            <p class="text-xl text-gray-300 mt-6 mb-8 max-w-2xl mx-auto">
                Descubra as melhores barbearias e serviços de beleza na sua região.
            </p>
            <button onclick="document.getElementById('barbearias').scrollIntoView({ behavior: 'smooth' });"
                class="bg-[#d19f68] hover:bg-[#c08c55] text-white px-8 py-3 rounded-lg text-lg font-semibold transition-colors duration-300">
                <span>Ver barbearias</span>
                <ion-icon name="chevron-down-outline"></ion-icon>
            </button>
        </div>
    </div>

   

    <div id="barbearias" class="mt-12"> 
        @include('components.search-bar')
        <h2 class="text-3xl font-bold text-center my-12">Barbearias Disponíveis</h2>

        <div id="barbearia-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($barbearias as $barbearia)
                <x-barbearia-card :barbearia="$barbearia" />
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/update_search.js')
@endpush