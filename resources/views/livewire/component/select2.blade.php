<div>
  <div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 capitalize">{{ $name }}</label>
    <div class="mt-1" wire:ignore>
      <select name="{{ $name }}" id="select2" multiple class="w-full select2 @error($name) border-red-600 @enderror">
        @foreach ($collection as $item)
        <option value="{{ $item->id }}" {{ $model->hasStyle($item->id) ?'selected':'' }}>{{ $item->name }}</option>
        @endforeach
      </select>
    </div>

    @error($name)
    <div class="text-sm text-red-600">
      {{ $message }}
    </div>
    @enderror
  </div>

  @push('scripts')
  <script>
    document.addEventListener("livewire:load", () => {
          let el = $('#select2');
          initSelect();
          Livewire.hook('message.processed', (message, component) => {
            initSelect()
          })
          Livewire.on('setSelect2', values => {
            el.val(values).trigger('change.select2')
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