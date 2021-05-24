<div class="flex">

    @if ($tweet->isLikedBy(current_user()))



    <form method="POST"
          action="/tweets/{{ $tweet->id }}/like"
    >
        @csrf
        @method('DELETE')



            <button type="submit"
                    class="text-xs"
            >
            <i class="fas fa-heart text-blue-500"></i>   {{ $tweet->likesCount() }}

        </button>
    </form>



    @else

    <form method="POST"
    action="/tweets/{{ $tweet->id }}/like"
>
  @csrf


      <button type="submit"
              class="text-xs"
      >
      <i class="fas fa-heart text-gray-500"></i>   {{ $tweet->likesCount() }}
      </button>
</form>
    @endif



</div>
