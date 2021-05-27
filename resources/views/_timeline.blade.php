<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
        {{-- @include('_tweet') --}}
        @livewire('tweets', ['tweet' => $tweet], key($tweet->id))
    @empty
        <p class="p-4">No tweets yet.</p>
    @endforelse

    {{ $tweets->links() }}
</div>
