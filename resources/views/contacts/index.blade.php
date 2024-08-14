<x-layout>
  <div class="container mx-auto p-5">
    <h1 class="text-center text-gray-800 text-2xl">Contacts Management App</h1>
    <div class="flex justify-center mt-16 px-0 gap-x-2">
      <a href="{{ route('contacts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">Add new contact</a>
     
      <form>
          <button type="submit" value="name" name="sort" class="@if ($sort == 'name') bg-red-500 @endif bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">Sort by Name</button>

          <button type="submit" value="created_at" name="sort" class=" @if ($sort == 'created_at') bg-red-500 @endif bg-blue-500
            hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">Sort by Date</button>
          <input class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded mt-3" type="text" name="search" placeholder="Search by name or email"/>
      </form>

    </div>
     
  </div>

    <table class="table-auto w-5/6 mx-auto border-collapse border border-slate-400 text-center ">
  <thead>
    <tr>
      <th class="border border-slate-300 bg-gray-500 text-white">Name</th>
      <th class="border border-slate-300 bg-gray-500 text-white">Email</th>
      <th class="border border-slate-300 bg-gray-500 text-white">Phone</th>
      <th class="border border-slate-300 bg-gray-500 text-white">Address</th>
      <th class="border border-slate-300 bg-gray-500 text-white">View</th>
      <th class="border border-slate-300 bg-gray-500 text-white">Update</th>
      <th class="border border-slate-300 bg-gray-500 text-white">Delete</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($contacts as $contact)
        <tr>
        <td class="py-3">{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->phone}}</td>
        <td>{{$contact->address}}</td>
        <td> <a href="{{ route('contacts.show', $contact->id) }}" class="bg-blue-500 text-sm px-2 py-1 rounded-sm text-white">View</a></td>
        <td>
          <form action="{{ route('contacts.edit', $contact->id) }}" method="GET" >
                @csrf
                <button type="submit" class="bg-green-500 text-sm px-2 py-1 rounded-sm text-white">Edit</button>
          </form>
        </td>
        <td><form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-sm px-2 py-1 rounded-sm text-white">Delete</button>
           </form></td>
        </tr>
      @endforeach
    
  </tbody>
</table>
</x-layout>