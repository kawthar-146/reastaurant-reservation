<x-app-layout >
    <x-slot name="header" >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12"  style="background-image: url('https://th.bing.com/th/id/OIP.sdzX_M7UBHbo6vX2pU1F_wHaFe?pid=ImgDet&w=201&h=148&c=7&dpr=1.3')" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 " >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
