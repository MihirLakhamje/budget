<x-layout>
    <x-slot:title>Income | SpentLog</x-slot:title>
    <x-slot:metaDescription>View and manage all your income sources in SpendLog.</x-slot:metaDescription>

    <x-slot:header>Incomes</x-slot:header>

    <section class="flex flex-col gap-2">


        <div class="my-2">
            <a href="{{ route('incomes.create') }}"
                class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none">
                Add income
            </a>
        </div>

        <x-data-table>
            <x-slot:column>
                <th scope="col" class="px-6 py-3">
                    Source
                </th>
                <th scope="col" class="px-6 py-3">
                    Amount
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </x-slot:column>

            @foreach ($incomes as $income)
                <tr>
                    <td class="px-6 py-4"> {{ $income->source }} </td>
                    <td class="px-6 py-4">&#8377; {{ short_number_format($income->income_amount) }} </td>
                    <td class="px-6 py-4 ">
                        {{ date('d-M-Y', strtotime($income->income_date)) }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2 items-center">
                            <x-link :typeoflink="'link'" href="{{ route('incomes.edit', $income->id) }}"
                                class="text-green-600 dark:text-green-500">
                                Edit
                            </x-link>
                            <span class="mx-1">|</span>
                            <form action="{{ route('incomes.delete', $income->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <x-link :typeoflink="'button'"
                                    onclick="return confirm('Are you sure? This action cannot be undone.')"
                                    class="text-red-600 dark:text-red-500">
                                    Delete
                                </x-link>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            @if($incomes->isEmpty())
                <tr class="bg-white dark:bg-gray-800 text-nowrap">
                    <td class="px-6 py-4">No income records found </td>
                    <td class="px-6 py-4"> </td>
                    <td class="px-6 py-4"> </td>
                    <td class="px-6 py-4"> </td>
                </tr>
            @endif
        </x-data-table>

        <div class="mt-4">
            {{ $incomes->links() }}
        </div>
    </section>



</x-layout>