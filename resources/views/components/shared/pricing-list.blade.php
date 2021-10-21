<div>
    @if (!$model->is_free && $model->prices()->count() > 0)
    <div class="mt-4">
        <h3 class="text-lg font-bold text-gray-900">Pricing</h3>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                @if ($type == 'Event')
                                <tr>
                                    <th></th>
                                    <th></th>
                                    @if ($price1)
                                    <th class="py-1 text-right text-xs font-medium text-gray-500 uppercase">Early
                                        bird 1</th>
                                    @endif
                                    @if ($price2)
                                    <th class="py-1 text-right text-xs font-medium text-gray-500 uppercase">
                                        Early bird 2</th>
                                    @endif
                                    @if ($price3)
                                    <th class="py-1 text-right text-xs font-medium text-gray-500 uppercase">
                                        Early bird 3</th>
                                    @endif
                                    @if ($price4)
                                    <th class="py-1 text-right text-xs font-medium text-gray-500 uppercase">
                                        Early bird 4</th>
                                    @endif
                                </tr>
                                @endif
                                <tr>
                                    <th scope="col" class="">

                                    </th>
                                    <th scope="col"
                                        class="py-1 text-right text-xs font-medium text-gray-500 uppercase tracking-wider mx-3">
                                        Price
                                    </th>
                                    @if ($price1)
                                    <th scope="col"
                                        class="pl-3 py-1 text-right text-xs font-medium text-gray-500 tracking-wider mx-3">
                                        @if ($type == 'Event')
                                        <span class="whitespace-nowrap block">until</span>
                                        <span class="whitespace-nowrap block">
                                            {{ \Carbon\Carbon::parse($deadline1)->format('M d, Y') }}
                                        </span>
                                        <span class="whitespace-nowrap block">
                                            @if (\Carbon\Carbon::parse($deadline1)->format('H:i') != '00:00')
                                            @ {{ \Carbon\Carbon::parse($deadline1)->format('H:i') }}
                                            @endif
                                        </span>
                                        @endif
                                        @if ($type == 'Organization')
                                        <span class="whitespace-nowrap block uppercase">{{ $label1 }}</span>
                                        @endif
                                    </th>
                                    @endif
                                    @if ($price2)
                                    <th scope="col" class="pl-3 py-1 text-right text-xs font-medium text-gray-500">
                                        @if ($type == 'Event')
                                        <span class="whitespace-nowrap block">until</span>
                                        <span class="whitespace-nowrap block">
                                            {{ \Carbon\Carbon::parse($deadline2)->format('M d, Y') }}
                                        </span>
                                        <span class="whitespace-nowrap block">
                                            @if (\Carbon\Carbon::parse($deadline2)->format('H:i') != '00:00')
                                            @ {{ \Carbon\Carbon::parse($deadline2)->format('H:i') }}
                                            @endif
                                        </span>
                                        @endif
                                        @if ($type == 'Organization')
                                        <span class="whitespace-nowrap block uppercase">{{ $label2 }}</span>
                                        @endif
                                    </th>
                                    @endif
                                    @if ($price3)
                                    <th scope="col" class="pl-3 py-1 text-right text-xs font-medium text-gray-500">
                                        @if ($type == 'Event')
                                        <span class="whitespace-nowrap block">until</span>
                                        <span class="whitespace-nowrap block">
                                            {{ \Carbon\Carbon::parse($deadline3)->format('M d, Y') }}
                                        </span>
                                        <span class="whitespace-nowrap block">
                                            @if (\Carbon\Carbon::parse($deadline3)->format('H:i') != '00:00')
                                            @ {{ \Carbon\Carbon::parse($deadline3)->format('H:i') }}
                                            @endif
                                        </span>
                                        @endif
                                        @if ($type == 'Organization')
                                        <span class="whitespace-nowrap block uppercase">{{ $label3 }}</span>
                                        @endif
                                    </th>
                                    @endif
                                    @if ($price4)
                                    <th scope="col" class="pl-3 py-1 text-right text-xs font-medium text-gray-500">
                                        @if ($type == 'Event')
                                        <span class="whitespace-nowrap block">until</span>
                                        <span class="whitespace-nowrap block">
                                            {{ \Carbon\Carbon::parse($deadline4)->format('M d, Y') }}
                                        </span>
                                        <span class="whitespace-nowrap block">
                                            @if (\Carbon\Carbon::parse($deadline4)->format('H:i') != '00:00')
                                            @ {{ \Carbon\Carbon::parse($deadline4)->format('H:i') }}
                                            @endif
                                        </span>
                                        @endif
                                        @if ($type == 'Organization')
                                        <span class="whitespace-nowrap block uppercase">{{ $label4 }}</span>
                                        @endif
                                    </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($prices as $price)
                                <tr>
                                    <td class="py-2 text-sm font-medium text-gray-700">
                                        {{ $price->label }}
                                        @if ($price->description)
                                        <span class="text-sm font-light block">{{$price->description}}</span>
                                        @endif
                                    </td>
                                    <td class="py-2 whitespace-nowrap text-right text-sm font-medium uppercase mx-3">
                                        {{ $price->currency }} {{ abs($price->amount) }}
                                    </td>
                                    @if ($price1)
                                    <td class="py-2 whitespace-nowrap text-right text-sm text-gray-500 mx-3">
                                        @if ($price->amount2)
                                        {{ $price->currency }} {{ abs($price->amount2) }}
                                        @endif
                                    </td>
                                    @endif
                                    @if ($price2)
                                    <td class="py-2 whitespace-nowrap text-right text-sm text-gray-500">
                                        @if ($price->amount3)
                                        {{ $price->currency }} {{ abs($price->amount3) }}
                                        @endif
                                    </td>
                                    @endif
                                    @if ($price3)
                                    <td class="py-2 whitespace-nowrap text-right text-sm text-gray-500">
                                        @if ($price->amount4)
                                        {{ $price->currency }} {{ abs($price->amount4) }}
                                        @endif
                                    </td>
                                    @endif
                                    @if ($price4)
                                    <td class="py-2 whitespace-nowrap text-right text-sm text-gray-500">
                                        @if ($price->amount5)
                                        {{ $price->currency }} {{ abs($price->amount5) }}
                                        @endif
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>