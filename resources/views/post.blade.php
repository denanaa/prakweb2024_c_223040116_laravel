<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md border-b border-neutral-300">
            <h2 class="mb-1 text-3xl -tracking-tight font-bold text-neutral-900">{{ $post ['title'] }}</h2>
        <div class="text-base text-neutral-500">
        <a href="#">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post ['body'] }}</p>
        <a href="/posts/" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>