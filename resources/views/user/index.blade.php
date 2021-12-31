<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="relative rounded-xl overflow-auto mb-10">
            <div class="m">
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
                    <button type="submit">Sumbit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="relative rounded-xl overflow-auto">
            <div class="px-4 py-8 sm:px-8">
                <table class="border-separate w-full border border-gray-400 dark:border-gray-500 bg-white dark:bg-gray-800 text-sm shadow-sm">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="w-1/2 border p-2">Name</th>
                        <th class="w-1/2 border p-2">Email</th>
                        <th class="w-1/2 border p-2">Mobile</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr class="bg-sky-500">
                        <td class="border p-2 bg-red">
                            {{$user->name}}</td>
                        <td class="border p-2">
                            {{$user->email}}</td>
                        <td class="border p-2">
                            {{$user->mobile}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
