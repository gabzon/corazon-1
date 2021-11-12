<div>
  <div>
    <label for="organizations" class="block text-sm font-medium text-gray-700 capitalize">Organizations</label>

    <div class="mt-1" wire:ignore>
      <select name="organizations" id="select2-organization" multiple
        class="w-full select2 @error('organizations') border-red-600 @enderror">
        @foreach ($collection as $item)
        <option value="{{ $item->id }}" {{ $model->hasOrganization($item->id) ? 'selected' : '' }}>
          {{ $item->name }}
        </option>
        @endforeach
      </select>
    </div>
    @error('organizations')
    <div class="text-sm text-red-600">
      {{ $message }}
    </div>
    @enderror
  </div>

  @push('scripts')
  <script>
    document.addEventListener("livewire:load", () => {
        let el = $('#select2-organization');
        initSelect();
        Livewire.hook('message.processed', (message, component) => {
          initSelect()
        })
        Livewire.on('selectedOrganizations', values => {
          el.val(values).trigger('change.select2-organizations')
        })
        el.on('change', function (e) {
          @this.set('selected', el.select2("val"))
        })
        function initSelect () {
          el.select2({
            placeholder: '{{__('Choose organizations')}}',
            allowClear: !el.attr('required'),
          })
        }
      })
  </script>
  @endpush
</div>