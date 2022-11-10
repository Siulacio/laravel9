<label>
    Title <br>
    <input name="title" type="text" value="{{ old('title', $post->title) }}">
    @error('title')
    <br>
    <smal style="color: red"> {{$message}} </smal>
    @enderror
</label><br>

<label>
    Body <br>
    <textarea name="body">{{old('body', $post->body)}}</textarea>
    @error('body')
    <br>
    <smal style="color: red"> {{$message}} </smal>
    @enderror
</label><br>
