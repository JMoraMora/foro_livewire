<div>
    <select name="category_id" class="bg-slate-800 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs capitalize mb-4">
        <option value="">Seleccionar categoria</option>

        @foreach($categories as $category)
            <option value="{{ $category->id }}" @selected($category->id == old('category_id', $thread->category_id))>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <input type="text" 
        name="title"
        placeholder="Titulo"
        value="{{ old('title', $thread->title) }}"
        class="bg-slate-800 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs mb-4"    
    >

    <textarea 
        name="body" 
        rows="6" 
        placeholder="Descripcion del problema"
        class="bg-slate-800 border-1 border-slate-900 rounded-md w-full p-3 text-white/60 text-xs mb-4">{{ old('body', $thread->body) }}</textarea>
</div>
