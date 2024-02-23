<div>
    <h1  class="text-2xl py-6 font-bold h-24">Tweets</h1>
    <a href="{{ route('upload.photo') }}">Alterar foto</a>

    <br>
    <br>

    <div>
        <form method="post" wire:submit.prevent="create">
            @csrf
            <input type="text" name="content" id="content" wire:model="content">
            @error('content')
                <br>
                {{ $message }}
                <br>
            @enderror
            <button type="submit">Enviar Tweet</button>
        </form>
    </div>
    
    <br>

    <h2>Tweets</h2>
    @foreach ($tweets as $tweet)
        <div class="flex m-8 bg-white shadow-md rounded p-4">
            <div class="w-1/8 pl-3 text-center">
                @if ($tweet->user->photo)
                    <img src="{{ url("storage/{$tweet->user->photo}") }}" alt="image user {{ $tweet->user->name }}" class="rounded-full h-8 w-8">
                @else
                    <img src="{{ url('img/user-no-image.png') }}" alt="no image user {{ $tweet->user->name }}" class="rounded-full h-8 w-8">
                @endif
                <span>{{ $tweet->user->name }}</span>
            </div>
            <div>
                {{ $tweet->content }} 
                @if ($tweet->likes->count() > 0)
                    <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
                @else
                    <a href="#" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
                @endif
            </div>
        </div>
    @endforeach

    <br>
    <hr>

    {{ $tweets->links() }}
</div>
