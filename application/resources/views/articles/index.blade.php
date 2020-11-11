<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }} <small>({{ $articles->count() }})</small>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-wrap">
                    <form class="px-6 py-4 w-full" action="{{ url('search') }}" method="get">
                        <div class="md:flex md:items-center">
                            <input
                                type="text"
                                name="q"
                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                placeholder="Search..."
                                value="{{ request('q') }}"
                            />
                        </div>
                    </form>
                    @forelse ($articles as $article)
                        <article class="px-6 py-4 w-full overflow-hidden shadow">
                            <div class="font-bold text-xl mb-2">{{ $article->title }}</div>
                            <p class="text-gray-700 text-base">{{ $article->body }}</p>
                            <div class="pt-4 pb-2">
                                @foreach ($article->tags as $tag)
                                    <span
                                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $tag}}</span>
                                @endforeach
                            </div>
                        </article>
                    @empty
                        <p>No articles found</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
