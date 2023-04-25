@props(['options', 'name'])

<select name="{{ $name }}" {!! $attributes->merge([
    'class' =>
        'w-full rounded-md border-theme-gray-4 bg-theme-gray-3 text-white shadow-sm focus:border-blue-700 focus:ring-blue-700',
]) !!}>
  @foreach ($options as $option)
    <option value="{{ $option->id }}">{{ $option->name }}</option>
  @endforeach
</select>
