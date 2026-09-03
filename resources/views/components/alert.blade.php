@props(['type'])

@php
    $class = '';
    switch($type){
        case 'info':
        $class = 'bg-blue-500';
        break;
        case 'danger':
            $class = 'bg-red-500';
        break;
        case 'success':
            $class = 'bg-green-500';
        break;
        case 'warning':
            $class = 'bg-yellow-500';
        break;
        case 'dark':
            $class = 'bg-gray-800';
        break;
        default:
            $class = 'bg-gray-500';
        break;
    }
@endphp

<div role="alert" >
  {{-- <div class="text-white font-bold rounded-t px-4 py-2 {{ $class }}" {{ $attributes }}> --}}
    <div {{ $attributes->merge(['class' => 'text-white font-bold rounded-t px-4 py-2 '.$class]) }}>
    {{ $title ?? 'Error' }}
  </div>
  <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
    <p>{{ $slot }}</p>
    <p>{{ $attributes }}</p>
  </div>
</div>