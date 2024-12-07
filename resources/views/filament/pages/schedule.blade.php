<x-filament::page>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="w-full border-collapse border border-gray-200">
            <!-- Table Head -->
            <thead>
                <!-- First Row: Days -->
                <tr style="background-color: #f1f5f9;"> <!-- bg-gray-100 -->
                    <th rowspan="2" class="border border-gray-300 px-4 py-2 text-left font-medium">inst</th>
                    <th colspan="4" class="border border-gray-300 px-4 py-2 text-center font-medium border-r-2" style="border-right: 2px solid blue;">Saturday</th>
                    <th colspan="4" class="border border-gray-300 px-4 py-2 text-center font-medium border-r-2" style="border-right: 2px solid blue;">Sunday</th>
                    <th colspan="4" class="border border-gray-300 px-4 py-2 text-center font-medium">Monday</th>
                </tr>
                <!-- Second Row: Time Slots -->
                <tr style="background-color: #f1f5f9;"> <!-- bg-gray-100 -->
                    <th class="border border-gray-300 px-4 py-2 text-center">10</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">12</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">3</th>
                    <th class="border border-gray-300 px-4 py-2 text-center" style="border-right: 2px solid blue;">6</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">10</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">12</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">3</th>
                    <th class="border border-gray-300 px-4 py-2 text-center" style="border-right: 2px solid blue;">6</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">10</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">12</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">3</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">6</th>
                </tr>
            </thead>
            <!-- Table Body -->
            <tbody>
                <!-- Row for Kareem -->
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-left">Kareem</td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2" style="border-right: 2px solid blue;"></td>
                    <td class="border border-gray-300 px-4 py-2">Add<br>15/2</td>
                    <td class="border border-gray-300 px-4 py-2" x-on:click="$dispatch('open-modal' , {id : 'testModal'})">Single <br>15/2</td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2" style="border-right: 2px solid blue;"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-left">Magdy</td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2" style="border-right: 2px solid blue;"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2" style="border-right: 2px solid blue;"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2">Add<br>15/2</td>
                    <td class="border border-gray-300 px-4 py-2" x-on:click="$dispatch('open-modal' , {id : 'testModal'})">Single <br>15/2</td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-left">Assim</td>
                    <td class="border border-gray-300 px-4 py-2">Add<br>15/2</td>
                    <td class="border border-gray-300 px-4 py-2" x-on:click="$dispatch('open-modal' , {id : 'testModal'})">Single <br>15/2</td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2" style="border-right: 2px solid blue;"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2" style="border-right: 2px solid blue;"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                    <td class="border border-gray-300 px-4 py-2"></td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- modal --}}
    <x-filament::modal id="testModal">

        <x-slot name="header">dddd</x-slot>
    </x-filament::modal>

</x-filament::page>

