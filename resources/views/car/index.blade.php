<x-app-layout title="My Car">
    <x-layouts.main-layout title="My Cars">
        <table class="h-full w-full text-sm text-left rtl:text-right text-gray-500   bg-white  rounded-lg border-b border-gray-200" >
            <thead class="text-xs text-gray-700 uppercase   ">
                <tr>
                    <th scope="col" class="px-6 py-3 border-b border-gray-200">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3 border-b border-gray-200">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3 border-b border-gray-200">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3 border-b border-gray-200">
                        Published
                    </th>
                    <th scope="col" class="px-6 py-3 border-b border-gray-200 text-right">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++)
                <tr class="border-b border-gray-200">
                    <td class="px-6 py-4">
                        <img src="{{ asset('assets/images/car.png')}}" alt="" class="max-w-[100px]">
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        2021 Honda Civic
                    </th>
                    <td class="px-6 py-4">
                        2024-05-12
                    </td>
                    <td class="px-6 py-4">
                        Yes
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-end justify-end space-x-2">
                            <a href="#" class="text-blue-500 hover:text-blue-700">
                                <svg data-lucide="pencil" class="w-6 h-6"></svg>
                            </a>
                            <a href="#" class="text-green-500 hover:text-green-700">
                                <svg data-lucide="image" class="w-6 h-6"></svg>
                            </a>
                            <a href="#" class="text-red-500 hover:text-red-700">
                                <svg data-lucide="trash-2" class="w-6 h-6"></svg>
                            </a>
                        </div>
                    </td>
                </tr>
                @endfor
            </tbody>

        </table>
        {{-- pagination --}}
        <div class="bg-white  flex justify-center items-center py-2 md:py-4 rounded-lg">
            <x-pagination totalPage="5" selectedPage="1"/>
        </div>
    </x-layouts.main-layout>
  


</x-app-layout>

