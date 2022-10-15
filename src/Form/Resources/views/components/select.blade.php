<label for="{{ $key }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">{{ $label }}</label>
<select wire:model.defer="order.status" id="{{ $key }}"
        class="mb-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    <option>{{ $label }}</option>
    @foreach($options as $option)
        <option value="{{ $option->value }}"
                @if($selected == $option->value) selected @endif>{{ $option->label }}</option>
    @endforeach
</select>
