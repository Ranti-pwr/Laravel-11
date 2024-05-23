@props(['active' => false])
{{-- memberikan kondisi jika kita mimiliki properti unutuk komponen ini --}}
<a {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
aria-current="{{ $active ? 'page' : false }}"> {{ $slot }}</a>
<!-- jika berada di halaman "/" maka warna current  jika tidak Default-->
