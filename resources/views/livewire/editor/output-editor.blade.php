<div class="mt-3">
    <div class="flex gap-x-3 items-center mb-2 py-2">
        <p class="text-lg font-semibold text-indigo-500 align-middle">Output: </p>
        <p class="bg-gray-200 text-xs text-gray-500 font-bold py-0.5 px-2 rounded-md">{{ $result }}</p>
        <p class="bg-gray-200 text-xs text-gray-500 font-bold py-0.5 px-2 rounded-md">{{ $runTime }}</p>
    </div>
    {{--  Output  --}}
    <textarea
        class="w-full h-40 bg-slate-600 text-slate-50 p-3 text-sm focus:outline-none resize-none rounded-md"
        readonly
    >{{ $output }}
    </textarea>
</div>
