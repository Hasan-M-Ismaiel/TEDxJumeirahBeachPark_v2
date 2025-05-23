@props(['post'])

<article
    {{ $attributes->merge(['class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}>
    <div class="py-6 px-5 h-full flex flex-col">
        <div>
            <img src="{{ asset($post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl">
        </div>
        
        <div class="mt-6 flex flex-col justify-between flex-1">
            <header>
                <div class="space-x-2">

                </div>

                <div class="mt-4">
                    <h1 class="text-3xl clamp one-line">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>
                    <h1>
                        <a href="/posts/ar/{{$post->slug}}">
                            اقرأ بالعربي
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-4 space-y-4">
                {!! $post->excerpt !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="/images/Tedx-Theme.svg" width="15%" alt="theme">
                    <div class="ml-3">
                        <h5 class="font-bold">

                        </h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{ $post->slug }}"
                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read...</a>
                </div>
            </footer>
        </div>
    </div>
</article>