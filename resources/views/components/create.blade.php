<x-layout>
    <div class="container p-5 flex flex-col items-center justify-center">
        <h1 class="text-gray-800 text-2xl">Add Contact</h1>
        <form class="flex flex-col w-1/3 px-5 py-6 space-y-3 text-white  bg-slate-400 mt-5" action="{{route('contacts.store')}}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input class="text-slate-600 px-4 py-2 rounded-sm outline-none" type="text" name="name">
            <label for="email">Email</label>
            <input class="text-slate-600 px-4 py-2 rounded-sm outline-none" type="email" name="email">
            <label for="phone">phone</label>
            <input class="text-slate-600 px-4 py-2 rounded-sm outline-none" type="text" name="phone">
            <label for="address">address</label>
            <input class="text-slate-600 px-4 py-2 rounded-sm outline-none" type="text" name="address">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">Add To Contacts</button>
        </form>
    </div>
</x-layout>