<div>
    <h1>Foto de perfil</h1>

    <form method="post" wire:submit.prevent="savePhoto">
        <input type="file" name="photo" id="photo" wire:model="photo">
        @error('photo')
            <span style="background-color: rgb(255, 0, 0); colrgb(0, 0, 0)hite;">
                {{ $message }}
            </span>
        @enderror
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</div>
