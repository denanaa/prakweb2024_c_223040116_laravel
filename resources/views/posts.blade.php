<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post )
    <article class="py-8 max-w-screen-md border-b border-neutral-300">
        <a href="/posts/{{ $post ['slug'] }}" class="hover:underline">
            <h2 class="mb-1 text-3xl -tracking-tight font-bold text-neutral-900">{{ $post ['title'] }}</h2>
        </a>
        <div >
            By
            <a href="/authors/{{ $post->author->username }}" class="text-base text-neutral-500 hover:underline ">{{ $post->author->name }}</a> 
            in
            <a href="/categories/{{ $post->category->slug }}" class="text-base text-neutral-500 hover:underline ">{{ $post->category->name }}</a>
            | {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ Str::limit($post ['body'], 150 ) }}</p>
        <a href="/posts/{{ $post ['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
