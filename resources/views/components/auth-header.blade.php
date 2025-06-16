@props(['title', 'description'])

<div class="flex w-full flex-col text-center gap-1">
    <div class="font-medium text-zinc-800 dark:text-white text-2xl">{{ $title }}</div>
    <div class="text-sm text-zinc-500 dark:text-white/70">{{ $description }}</div>
</div>
