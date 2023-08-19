@if($myTweet)
<details class="tweet-option relative text-gray-500">
    <summary>
        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18">
            <path d="M5 1A1 1 0 105 3 1 1 0 005 1zm0 6A1 1 0 105 9 1 1 0 005 7zm0 6A1 1 0 105 15 1 1 0 005 13z"/>
        </svg>
    </summary>
    <div class="bg-white rounded shadow-md absolute right-0 w-24 z-20 pt-1 pd-1">
        <div> 
            <a href="{{route('tweet.update.index',['tweetId' => $tweetId])}}" class="flex items-center pt-1 pd-1 pl-3 pr-3 hover:bg-gray-100 text-center">
                <span class="pl-5">編集</span>
            </a>
        </div>
        <div>
            <form action="{{route('tweet.delete',['tweetId' => $tweetId])}}" method="post" onclick="return confirm('削除してもよろしいですか？');">
                @method('DELETE')
                @csrf
                <button type="submit" class="flex items-center w-full pt-1 pd-1 pl-3 pr-3 hover:bg-gray-100">
                    <span class="pl-5">削除</span>
                </button>
            </form>
        </div>
    </div>
</details>
@endif

@once
@push('css')
<style>
    .tweet-option{
        position: relative;
        right: 0;
        top: 0;
    }

    .tweet-option > summary{
        cursor: pointer;
        list-style: none;
    }

    .tweet-option > summary::before{
        display: block;
    }

    .tweet-option[open] > summary::before{
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 10;
        display: block;
        content: "";
    }
</style>
@endpush
@endonce