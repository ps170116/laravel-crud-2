
<x-app-layout>
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h1 class="text-3xl font-semibold">{{ $book->title }}</h1>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Author</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $book->author->name }}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Published Date</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $book->release_date }}</dd>
                </div>
                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">Description</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{ $book->description }}</dd>
                </div>
            </dl>
        </div>
    </div>
</div>
</x-app-layout>
