<div>
    <form wire:submit.prevent="createPoll" class="flex flex-col gap-4">
        <label>Poll Title</label>
        <input type="text" wire:model.live="title"/>

        @error('title')
            <div class="text-red-500"> {{ $message }}</div>
        @enderror

        <div class="mb-4">
            <button wire:click.prevent="addOption" class="btn mb-4">Add Option</button>
        <div>


        <div>
            @foreach ( $options as $index => $option )
                <div class="mb-4">
                    <label>Option {{ $index + 1 }}</label>
                    <div class = "flex-col mb-2 gap-2">
                        <input type="text" wire:model= "options.{{$index}}"/>
                        <button class = "btn mb-4" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    <div>
                    @error("options.{$index}")
                        <div class="text-red-500"> {{ $message }}</div>
                    @enderror
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn">
            Create Poll
        </button>
    </form>
</div>
