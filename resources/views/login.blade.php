<x-layout page="Login">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Cadastre-se
        </a>
    </x-slot:btn>
    Tela de Login

    <a href="{{route('home')}}">
        Ir p/ Home
    </a>
</x-layout>