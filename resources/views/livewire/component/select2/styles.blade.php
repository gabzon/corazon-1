<div>
    <div>
        <label for="styles" class="block text-sm font-medium text-gray-700 capitalize">Styles</label>
        <div class="mt-1" wire:ignore>
            <select name="styles" id="select2-style" multiple
                class="w-full select2 @error('styles') border-red-600 @enderror">
                @foreach ($collection as $item)
                <option value="{{ $item->id }}" {{ $model->hasStyle($item->id) ? 'selected' : '' }}>
                    {{ $item->name }}
                </option>
                @endforeach
            </select>
        </div>
        @error('styles')
        <div class="text-sm text-red-600">
            {{ $message }}
        </div>
        @enderror
    </div>

    @push('scripts')
    <script>
        document.addEventListener("livewire:load", () => {
            let el = $('#select2-style');
            initSelect();
            Livewire.hook('message.processed', (message, component) => {
              initSelect()
            })
            Livewire.on('selectedStyles', values => {
              el.val(values).trigger('change.select2-styles')
            })
            el.on('change', function (e) {
              @this.set('selected', el.select2("val"))
            })
            function initSelect () {
              el.select2({
                placeholder: '{{__('Select your option')}}',
                allowClear: !el.attr('required'),
              })
            }
          })
    </script>
    @endpush
</div>