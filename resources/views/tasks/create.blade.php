<x-layout page="Criação de Tarefas">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Criar tarefa</h1>
        <form method="POST" action="{{ route('task.create_action') }}">
            @csrf

            <x-form.text_input name="title" label="Titulo da Task" placeholder="Digite o titulo da sua task" />

            <x-form.text_input type="datetime-local" name="due_date" label="Data da realização" />

            <x-form.select_input name="category_id" label="Categoria">
            
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach

            </x-form.select_input>

            <x-form.text_area label="Descrição da tarefa" name="description" placeholder="Digita a descrição da tarefa" />

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa" />
        </form>
    </section>

</x-layout>
