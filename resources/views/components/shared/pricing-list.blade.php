<div>
    @if (!$model->is_free && $model->prices()->count() > 0)
    <div>
        <h3 class="font-medium text-gray-900">Pricing</h3>

        <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
            @foreach ($model->prices as $price)
            <div class="py-3 flex justify-between text-sm font-medium">
                <dt class="text-gray-600 items-center">
                    {{ $price->label }}
                    @if ($price->description)
                    <span class="text-sm font-light block">{{$price->description}}</span>
                    @endif
                </dt>
                <dd class="text-gray-900 uppercase whitespace-nowrap">{{ $price->currency }} {{ abs($price->amount) }}
                </dd>
            </div>
            @endforeach
        </dl>
    </div>
    @endif
</div>