<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-splade-link href="{{ route('users.create') }}" class="p-4 bg-blue-500 text-white hover:bg-blue-700 rounded-md">Create User</x-splade-link>
            <x-splade-table :for="$users" pagination-scroll="preserve">
              <x-splade-cell actions as="$users">
                <x-splade-link href="{{ route('users.edit', $users) }}" class="p-2 bg-blue-500 text-white hover:bg-blue-700 rounded">Edit</x-splade-link>
                <x-splade-form 
                actions="{{ route('users.destroy' , $users)}}" 
                method="delete"
                confirm="Delete user"
                confirm-text="Are you sure you want to delete user?"
                confirm-button="Yes, delete this user!"
                cancel-button="No, i want to stay!"
                >
                    <x-splade-button class="bg-red-500 text-white rounded-md">Delete</x-splade-button>
                </x-splade-form>
              </x-splade-cell>
            </x-splade-table>
          </div>

</x-app-layout>