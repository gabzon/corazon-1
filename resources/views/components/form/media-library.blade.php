<div class="w-full">
    <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-1">
        {{ $label ?? 'Thumbnail' }}
    </label>
    <div x-data="{changeThumb:false}">
        @if (isset($model))
        @if ($model->getMedia($collection)->last() != null)
        <div x-show="!changeThumb">
            <img src="{{ $model->getMedia($collection)->last()->getUrl() }}" alt="" class="w-36 object-cover rounded-md"
                lazy="loading">
            <button type="button" @click="changeThumb=true"
                class="text-sm text-indigo-700 hover:text-indigo-500">Change</button>
        </div>
        <div class="mt-1" x-show="changeThumb">
            <x-media-library-attachment name="{{ $name }}" rules="mimes:jpeg,png,gif" />
            <button type="button" @click="changeThumb=false"
                class="text-sm text-indigo-700 hover:text-indigo-500">Cancel</button>
        </div>
        @else
        <x-media-library-attachment name="{{ $name }}" rules="mimes:jpeg,png,gif" />
        @if ($desc)
        <p class="text-sm truncate text-gray-500 mt-2">{{ $desc }}</p>
        @endif
        @endif
        @else
        <x-media-library-attachment name="{{ $name }}" rules="mimes:jpeg,png,gif" />
        @endif
    </div>
</div>