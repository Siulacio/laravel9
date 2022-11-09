<x-layouts.app title="Crear nuevo post" meta-description="formulario para crear un nuevo blog post">

    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{ old('title') }}">
            @error('title')
                <br>
                <smal style="color: red"> {{$message}} </smal>
            @enderror
        </label><br>

        <label>
            Body <br>
            <textarea name="body">{{old('body')}}</textarea>
            @error('body')
                <br>
                <smal style="color: red"> {{$message}} </smal>
            @enderror
        </label><br>

        <button type="submit">Enviar</button>
    </form>
    <br>

    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>

