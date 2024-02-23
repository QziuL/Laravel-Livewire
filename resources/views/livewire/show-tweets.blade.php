<div>
    <h1  class="text-4xl py-6 font-bold h-24 inline-block">Tweets</h1>
    <a href="{{ route('upload.photo') }}" class="bg-cyan-400 text-white p-2 rounded">Alterar foto</a>

    <form method="post" wire:submit.prevent="create" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-8 mt-8">
        <label class="block text-gray-700 text-sm font-bold mb-4" for="username">
            Tweet
        </label>
        <textarea name="content" id="content" rows="5" placeholder="O que está pensando?" wire:model="content" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline 
                @error('content') border-red-500 @enderror">
        </textarea>
        @error('content') 
            <p>
                <span class="text-red-500">{{ $message }}</span>
            </p> 
        @enderror
        <button type="submit" class="bg-blue-900 text-white p-2 pl-6 pr-6 rounded">Criar Tweet</button>
    </form>

    @foreach ($tweets as $tweet)
        <div class="m-8 bg-white shadow-md rounded p-4">
            <div class="w-1/8 pl-3 text-center">
                @if ($tweet->user->photo)
                    <img src="{{ url("storage/{$tweet->user->photo}") }}" alt="image user {{ $tweet->user->name }}" class="rounded-full h-8 w-8">
                @else
                    <img src="{{ url('img/user-no-image.png') }}" alt="no image user {{ $tweet->user->name }}" class="rounded-full h-8 w-8">
                @endif
                {{-- <span>{{ $tweet->user->name }}</span> --}}
            </div>
            <div class="w-7/8 pl-3 inline-block align-text-middle">
                {{ $tweet->content }} 
                <span class="ml-3.5">
                    (
                    @if ($tweet->likes->count())
                        <a href="#" wire:click.prevent="unlike({{ $tweet->id }})" class="text-red-500">🩷</a>
                    @else
                        <a href="#" wire:click.prevent="like({{ $tweet->id }})" class="text-teal-500">♡</a>
                    @endif
                    )
                </span>
            </div>
        </div>
    @endforeach

    <div class="py-12">
        {{ $tweets->links() }}
    </div>

    
</div>
