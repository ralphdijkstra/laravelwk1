@extends('layouts.app')

@section('title', 'Pops')

@section('content')
    <div class="p-4 grid place-items-end justify-items-center gap-2">
        <div>
            <form action="../pops/{{ $id }}" method="POST">
                @csrf
                @method('GET')
                <select onchange="this.form.submit()" name="select" id="select">
                    @foreach ($pops as $pop)
                        <option @if ($pop->pop_id == $id) selected @endif value="{{ $pop->pop_id }}">
                            {{ $pop->pop_number }} {{ $pop->pop_name }} {{ $pop->variant }}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="items-end"><img width="512px" src="{{ asset('pop/' . $selectedpop->image) }}" /></div>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <tbody>
                    <tr class="bg-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Number:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->pop_number }}
                        </td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Name:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->pop_name }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Variant:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->variant }}
                        </td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Category:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->category }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Series:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->series }}
                        </td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Exclusive:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->exclusive }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Limited:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->limited }}
                        </td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Year:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->year }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Sort:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->sort }}
                        </td>
                    </tr>
                    <tr class="bg-gray-50 border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Phase:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->phase }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            Image:
                        </th>
                        <td class="py-4 px-6">
                            {{ $selectedpop->image }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex">
            <a class="mx-2" href="{{ $selectedpop->pop_id }}/edit">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
            </a>
            <form class="mx-2" action="/pops/{{ $selectedpop->pop_id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
            </form>
        </div>

    </div>
@endsection
