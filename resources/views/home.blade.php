<x-layout>
    <x-slot:judul>{{ $judul }}</x-slot:judul>
    <h3 class="text-xl">Ini adalah halaman utama</h3>
    @foreach ($post as $dh)
    <article class="py-8 max-w-screen-sm border-b border-gray-300">
        <h2 class="mb-2 text-2xl tracking-tighter text-red-300 font-bold">Si Jungking</h2>
        <h4>{{ $dh['author'] }}</h4>
        <p class=" m-3">{{ Str::limit($dh['isi'], 100) }}</p>
        <a href="/{{ $dh['slug'] }}" class=" font-medium text-sky-600 hover:underline">Read more &raquo;</a>
    </article>
    @endforeach
</x-layout>
