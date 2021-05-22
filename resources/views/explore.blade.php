<x-app>
    <div>
        @foreach ($users as $user)
            <a href="#" class="flex items-center mb-5">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
            </button>
        @else
            <span class="inline-flex rounded-md">
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition mr-2 "  width="40"
                height="40">
                    {{ $user->name  }}

                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </span>
        @endif
                <div>
                    <h4 class="font-bold">{{ '@' . $user->username }}</h4>
                </div>
            </a>
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>
