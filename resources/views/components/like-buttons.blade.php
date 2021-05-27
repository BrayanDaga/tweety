<div class="flex">

    @if ($tweet->isLikedBy(current_user()))


    <form wire:submit.prevent="unlike({{$tweet->id}})">

            <button type="submit"
                    class="text-xs"
            >
            <i class="fas fa-heart text-blue-500"></i>   {{ $tweet->likesCount() }}

        </button>
    </form>



    @else

    <form wire:submit.prevent="like({{$tweet->id}})"
        >

      <button type="submit"
              class="text-xs"
      >
      <i class="fas fa-heart text-gray-500"></i>   {{ $tweet->likesCount() }}
      </button>
</form>
    @endif



</div>
