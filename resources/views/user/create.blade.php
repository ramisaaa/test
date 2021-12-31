<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="relative rounded-xl overflow-auto">
            <div class="px-4 py-8 sm:px-8">
                <form method="post" action="{{route('users.store')}}">
                    @csrf
                    <label>Name:
                        <input  name="name" type="text">
                    </label>
                    <label>Email:
                        <input name="email" type="email">
                    </label>
                    <label>Mobile:
                        <input name="mobile" type="text">
                    </label>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
