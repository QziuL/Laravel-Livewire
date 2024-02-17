<div>
    <h1>Component Show Tweets</h1>

    {{ $message }}
    <br>
    <br>
    <input type="text" name="message" id="message" wire:model.live="message">

    <h2>Tweets</h2>
    @foreach ($tweets as $tweet)
        <p>{{ $tweet->user->name }} -- {{ $tweet->content }}</p>
    @endforeach
</div>
