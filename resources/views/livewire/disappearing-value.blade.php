<div>
    <textarea wire:model.lazy.dirty="foo" class="m-4 border rounded {{ $saved === 'foo' ? 'border-2 border-red-500' : 'border-teal-500' }}" rows="3"></textarea>
    <textarea wire:model.lazy.dirty="bar" class="m-4 border rounded {{ $saved === 'bar' ? 'border-2 border-red-500' : 'border-teal-500' }}"  rows="3"></textarea>
</div>
