<x-layout page="Edição de tarefas">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Editar tarefa</h1>
        <form method="POST" action="{{ route('tasks.edit_action') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $task->id }}">
            <x-form.text_input name="title" label="Titulo da Task" placeholder="Digite o titulo da sua task" value="{{ $task->title }}" />

            <x-form.checkbox_input name="is_done" label="Tarefa realizada?" checked="{{ $task->is_done }}" />

            <x-form.text_input type="datetime-local" name="due_date" label="Data da realização" value="{{ $task->due_date }}" />


            <x-form.select_input id="category_id" name="category_id" label="Categoria">

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $task->category_id) selected @endif>{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>

            <x-form.text_area label="Descrição da tarefa" name="description" placeholder="Digita a descrição da tarefa" value="{{ $task->description }}" />

            <x-form.form_button resetTxt="Resetar" submitTxt="Atualizar Tarefa" />
        </form>
    </section>

</x-layout>
