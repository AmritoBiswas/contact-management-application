<x-layout>
    <div class="container p-5 flex justify-center items-center flex-col">
        <h1 class="text-center text-gray-800 text-2xl">Update Contacts</h1>
        <form class="w-1/3 flex flex-col bg-slate-400 px-5 py-6 mt-5 space-y-3 text-white rounded-lg" action="{{route('contacts.update',$contact->id)}}" method="POST">
        @method('PUT')
            @csrf
            <label for="name">Name</label>
            <input class="text-slate-700 placeholder:text-slate-600 px-3 py-2 rounded-sm outline-none" type="text" name="name" value="{{ old('name', $contact->name) }}">
            <label for="email">Email</label>
            <input class="text-slate-700 placeholder:text-slate-600 px-3 py-2 rounded-sm outline-none" type="email" name="email" value="{{ old('email', $contact->email) }}">
            <label for="phone">phone</label>
            <input class="text-slate-700 placeholder:text-slate-600 px-3 py-2 rounded-sm outline-none" type="text" name="phone" value="{{ old('phone', $contact->phone) }}">
            <label for="address">address</label>
            <input class="text-slate-700 placeholder:text-slate-600 px-3 py-2 rounded-sm outline-none" type="text" name="address" value="{{ old('address', $contact->address) }}">
            <button type="submit" class="text-sm bg-green-600 px-3 py-2 hover:bg-green-700 duration-200">Update the Contact</button>
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="margin-top: 20px;">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-sm bg-red-600 px-3 py-2 hover:bg-red-700 duration-200">Delete Contact</button>
        </form>
        </form>
        
        
    </div>
</x-layout>