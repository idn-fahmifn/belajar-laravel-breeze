<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ubah data
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="container w-3/4 bg-white py-3 px-3 mx-auto rounded-sm">


            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Judul Buku
                            </th>
                            <td class="px-6 py-4">
                                :
                            </td>
                            <td class="px-6 py-4">
                                {{$data->judul}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Pengarang Buku
                            </th>
                            <td class="px-6 py-4">
                                :
                            </td>
                            <td class="px-6 py-4">
                                {{$data->pengarang}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Penerbit Buku
                            </th>
                            <td class="px-6 py-4">
                                :
                            </td>
                            <td class="px-6 py-4">
                                {{$data->penerbit}}
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
