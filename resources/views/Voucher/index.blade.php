<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vouchers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <!-- component -->
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class=" align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 w-full">
                            <thead class="bg-gray-50">
                                <tr class="py-6">
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Number voucher</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs text-green font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                </tr>
                            </thead>

                            @foreach ($vouchers as $voucher)
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{$voucher->name}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$voucher->type}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                       {{$voucher->number_voucher}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center text-green-500">{{$voucher->quantity}}</td>

                                </tr>
                            </tbody>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
