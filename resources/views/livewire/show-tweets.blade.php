<div style="background-color: whitesmoke; width: 28%; margin: auto; text-align: center; padding: 5px; border-radius: 8px;">
    <h1>Component Show Tweets</h1>

    {{ $content }}
    <br>
    <br>

    <div style="background-color: rgb(48, 140, 177); padding: 10px; width: 70%; margin:auto; border-radius: 10px;">
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
        <p>{{ $tweet->user->name }} -- {{ $tweet->content }}</p>
    @endforeach
</div>
