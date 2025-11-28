@extends('layouts.app')

@section('title', 'Minha LP')

@section('content')
    <section id="hero" class="min-h-screen flex flex-col items-center justify-center text-center">
        <h2 class="text-4xl font-bold">Bem-vindo à nossa Landing Page</h2>
        <p class="mt-4 text-gray-700 max-w-md">
            Aqui vai um texto sobre a sua empresa ou produto.
        </p>

        <a href="#contato"
           class="mt-6 inline-block bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg">
            Quero Saber Mais
        </a>
    </section>
@endsection
