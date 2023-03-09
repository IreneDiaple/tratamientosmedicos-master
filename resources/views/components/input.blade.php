@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-logo2 focus:outline-none focus:shadow-outline-logo1 dark:text-gray-300 dark:focus:shadow-outline-gray form-input']) !!}>