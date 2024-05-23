<x-layout>
    <x-slot:judul>{{ $judul }}</x-slot:judul>
    <h3 class="text-xl">Ini adalah halaman utama</h3>

    <article class="py-8 max-w-screen-sm border-b">
        <h2 class="mb-2 text-2xl tracking-tighter text-red-300 font-bold">Si Jungking</h2>
        <h4>{{ $post['author'] }}</h4>
        <p class=" m-3">{{ $post['isi'] }}</p>
        <a href="/" class=" font-medium text-sky-600 hover:underline">&laquo; Back To Post</a>
    </article>
</x-layout>
