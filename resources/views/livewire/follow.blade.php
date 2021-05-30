<div>
    @auth
    @unless (current_user()->is($user))
            <button wire:click="store"
                    class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
            >
                {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
            </button>
    @endunless
@endauth
</div>
