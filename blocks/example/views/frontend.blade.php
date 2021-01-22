@if($slot)
<div class="{{ $block_class }}">
    <div class="{{ $classes }}">
        <div class="bg-primary hover:bg-secondary p-4 rounded text-white">
            {{ $slot }}
        </div>
    </div>
</div>
@endif