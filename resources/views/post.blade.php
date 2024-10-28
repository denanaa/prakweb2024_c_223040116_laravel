<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md border-b border-neutral-300">
            <h2 class="mb-1 text-3xl -tracking-tight font-bold text-neutral-900">{{ $post ['title'] }}</h2>
            <div>
            By
            <a href="/authors/{{ $post->author->username }}" class="text-base text-neutral-500 hover:underline ">{{ $post->author->name }}</a> 
            in
            <a href="/categories/{{ $post->category->slug }}" class="text-base text-neutral-500 hover:underline ">{{ $post->category->name }}</a>
            | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post ['body'] }}</p>
        <a href="/posts/" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>