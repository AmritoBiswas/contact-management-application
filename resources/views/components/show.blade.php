<x-layout>
<div class="container mx-auto p-5">
    <h1 class="text-center text-gray-800 text-2xl">Contacts Management App</h1>
    <div class="flex  flex-col justify-center items-center mt-10">
        <div class="border p-4 m-4 bg-slate-600 text-white rounded-lg">
          <p class="text-lg font-bold">Name: {{$contact->name}}</p>
          <p>Email: {{$contact->email}}</p>
          <p>Phone: {{$contact->phone}}</p>
          <p>Address: {{$contact->address}}</p>
        </div>
    </div>
  </div>
</x-layout>