<div>
    <form>
        <label>Poll Title</label>
        <input type="text" wire:model.live="title"/>
        Current title: {{ $title }}

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
                </div>

            @endforeach
        </div>
    </form>
</div>
