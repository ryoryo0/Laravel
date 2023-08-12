@props([
    'tweets' => []
    ])

    <div class="bg-white shadow-lg mt-5 mb-5">
        <ul>
            @foreach($tweets as $tweet)
            <li class="border-b list:border-b-0 border-gray-200 p-4 flexitems-start justify-between">
                <div>
                    <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                        {{$tweet->user->name}}
                    </span>
                    <p class="text-gray-600">{!! nl2br(e($tweet->content)) !!}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>