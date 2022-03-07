<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vouchers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- component -->
        <section class="container antialiased bg-gray-100 text-gray-600 h-screen px-4">
            <div class="flex flex-col justify-center h-full">
                <!-- Table -->
                <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="mx-2 px-5 py-4 border-b border-gray-100">
                        <h2 class="mx-4 font-semibold text-gray-800">Vouchers</h2>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Name</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Type</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Number voucher</div>
                                        </th>

                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Quantity</div>
                                        </th>

                                    </tr>
                                </thead>

                             @foreach ($vouchers as $voucher)
                             <tbody class="text-sm divide-y divide-gray-100">
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">

                                            <div class="font-medium text-center text-gray-800">{{ $voucher->name }}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="font-medium text-center text-gray-800">{{ $voucher->type }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-center font-medium text-green-500">{{ $voucher->number_voucher}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-lg text-center">{{ $voucher->quantity }}</div>
                                    </td>
                                </tr>

                            </tbody>
                             @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
