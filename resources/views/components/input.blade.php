<label
        for="{{$title}}"
        class="relative block rounded-md border  border-black shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
        >
        <input
        type="text"
        id="{{$title}}"
        class="peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0"
        placeholder="{{$title}}"
        />

        <span
        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 p-0.5 bg-white text-lg text-black transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs"
        >
                                    
        {{$title}}
        </span>
</label>