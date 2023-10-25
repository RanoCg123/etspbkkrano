<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Patient Records') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <x-auth-session-status class="mb-4" :status="session('success')" />
            <form action="/add-record" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <x-input-label for="patient" :value="__('Patient')" />
        <x-text-input id="patient" class="block mt-1 w-full" type="text" name="patient" :value="old('patient')" required />
        
    </div>

    <div class="mt-4">
        <x-input-label for="doctor" :value="__('Doctor')" />
        <x-text-input id="doctor" class="block mt-1 w-full" type="text" name="doctor" :value="old('doctor')" required />
    </div>

    <div class="mt-4">
        <x-input-label for="condition" :value="__('Condition')" />
        <x-text-input id="condition" class="block mt-1 w-full" type="text" name="condition" :value="old('condition')" required />
    </div>

    <div class="mt-4">
        <x-input-label for="temperature" :value="__('Temperature')" />
        <x-text-input id="temperature" class="block mt-1 w-full" type="number" name="temperature" :value="old('temperature')" required />
    </div>

    <div class="mt-4">
        <x-input-label for="file" :value="__('File (PDF, PNG, JPG, JPEG)')" />
        <x-text-input id="file" class="block mt-1 w-full" type="file" name="file" required />
    </div>

    <x-primary-button class="ml-3">
                {{ __('Submit') }}
            </x-primary-button>
</form>
            </div>
        </div>
    </div>
</x-app-layout>