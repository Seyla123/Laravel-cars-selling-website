<x-app-layout title="My Car">
    <x-layouts.main-layout title="My Cars">
        <table
            class="h-full w-full text-sm text-left rtl:text-right text-gray-500   bg-white  rounded-lg border-b border-gray-200">
            <thead class="text-xs text-gray-700 uppercase   ">
                <tr>
                    <th scope="col" class="px-6 py-3 border-b border-gray-200">
                        Image
                    </th>
                    <th scope="col" class="text-center px-6 py-3 border-b border-gray-200">
                        Title
                    </th>
                    <th scope="col" class="text-center px-6 py-3 border-b border-gray-200">
                        Date
                    </th>
                    <th scope="col" class="text-center px-6 py-3 border-b border-gray-200">
                        Published
                    </th>
                    <th scope="col" class="px-6 py-3 border-b border-gray-200 text-right">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr class="border-b border-gray-200">
                        <td class="px-6 py-4">
                            <img src="{{ $car->primaryImage->image_path }}" alt="{{$car->model->name}}" class="max-w-[100px]">
                        </td>
                        <td scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap ">
                            {{ $car->year }} - {{ $car->maker->name }} {{ $car->model->name }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $car->getCreatedDate() }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $car->published ? 'Yes' : 'No' }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-end justify-end space-x-2">
                                <a href="{{ route('car.edit', $car) }}" class="text-blue-500 hover:text-blue-700">
                                    <svg data-lucide="pencil" class="w-6 h-6"></svg>
                                </a>
                                <a href="{{ route('car.show', $car) }}" class="text-green-500 hover:text-green-700">
                                    <svg data-lucide="image" class="w-6 h-6"></svg>
                                </a>
                                <a href="{{ route('car.destroy', $car)  }}" class="text-red-500 hover:text-red-700">
                                    <svg data-lucide="trash-2" class="w-6 h-6"></svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{-- pagination --}}
        <div class="bg-white  flex justify-center items-center py-2 md:py-4 rounded-lg">
            <x-pagination totalPage="5" selectedPage="1" />
        </div>
    </x-layouts.main-layout>



</x-app-layout>
