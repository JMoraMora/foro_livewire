<div class="max-w-7xl mx-auto px-4 sm:px6 lg:px-8 flex gap-10 py-12">
    <div class="w-64">
        <a href="#" class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-blod text-xs text-center rounded-md">
            Preguntar
        </a>

        <ul>
            @foreach ($categories as $category)
                <li class="mb-2">
                    <a href="#" wire:click.prevent="filterByCategory({{ $category->id }})" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                        <span class="w-2 h-2 rounded-full" style="background-color: {{ $category->color }};"></span>
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
            <li>
                <a href="#" wire:click.prevent="filterByCategory('')" class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs capitalize">
                    <span class="w-2 h-2 rounded-full" style="background-color: #000;"></span>
                    Text Results
                </a>
            </li>
        </ul>
    </div>
    <div class="w-full">
        <form class="mb-4">
            <input 
                type="text" 
                placeholder="// ..." 
                class="bg-slate-800 border-0 rounded-md w-1/3 p-3 text-white/60 text-xs"
                wire:model.live="search"
            >
        </form>

        @foreach ($threads as $thread)
            <div class="rounded-md bg-gradient-to-r from-slate-800 to-slate-900 hover:to-slate-800 mb-4">
                <div class="p-4 flex gap-4">
                    <div>
                        <img src="{{ $thread->user->avatar() }}" alt="{{ $thread->user->name }}" class="rounded-md">
                    </div>
                    <div class="w-full">
                        <h2 class="mb-4 flex items-start justify-between">
                            <a href="#" class="text-xl font-semibold text-white/90">
                                {{ $thread->title }}
                            </a>
                            <span class="rounded-full text-xs py-2 px-4 capitalize" style="color: {{ $thread->category->color }}; border: 1px solid {{ $thread->category->color }}">
                                {{ $thread->category->name }}
                            </span>
                        </h2>
                        <p class="flex items-center justify-between w-full text-xs">
                            <span class="text-blue-600 font-semibold">
                                {{ $thread->user->name }}
                                <span class="text-white/90">{{ $thread->created_at->diffForHumans() }}</span>
                            </span>
                            <span class="text-slate-700">
                                {{ $thread->replies_count }} Reply
                                <a href="#" class="hover:text-white">Editar</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
