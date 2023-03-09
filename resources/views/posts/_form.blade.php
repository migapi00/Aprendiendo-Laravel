@csrf

<label class="text-xs text-gray-700 uppercase ">Título</label>
    @error('title')
        <div class="text-red-600 alert alert-danger">{{ $message }}</div>
    @enderror

<input type="text" name="title" class="rounded border-gray-200 w-full mb-4 focus:border-red-600 @error('title') is-invalid @enderror"
    value="{{old('title', $post->title)}}">



<label class="text-xs text-gray-700 uppercase ">Slug</label>
    @error('slug')
        <div class="text-red-600 alert alert-danger">{{ $message }}</div>
    @enderror

<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4 focus:border-red-600 @error('slug') is-invalid @enderror"
    value="{{old('slug', $post->slug)}}">




<label class="text-xs text-gray-700 uppercase">Contenido</label>
    @error('body')
        <div class="text-red-600 alert alert-danger">{{ $message }}</div>
    @enderror


<textarea name="body" rows="5" class="w-full mb-4 border-gray-200 rounded">{{ old('body',$post->body)  }}</textarea>

<div class="flex items-center justify-between">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="px-4 py-2 text-white bg-gray-800 rounded hover:bg-green-500" >
</div>
