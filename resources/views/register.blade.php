<x-layout page="Registro">
    <x-slot:btn>
        <a href="{{ route('login') }}" class="btn btn-primary">
            Já possui conta? Faça o login.
        </a>
    </x-slot:btn>

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Cadastro</h1>

        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{ route('user.register_action') }}">
            @csrf

            <x-form.text_input name="name" label="Seu Nome" placeholder="Nome" />

            <x-form.text_input type="email" name="email" label="Seu e-mail" placeholder="Email" />

            <x-form.text_input type="password" name="password" label="Sua senha" placeholder="Senha" />

            <x-form.text_input type="password" name="password_confirmation" label="Confirme sua senha" placeholder="Senha" />


            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se" />
        </form>
    </section>

</x-layout>
