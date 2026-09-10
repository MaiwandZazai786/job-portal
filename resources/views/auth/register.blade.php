<x-layout>
    <x-slot:heading>
        Register User
    </x-slot:heading>
    <form method="POST" action="/register" class=" space-y-6">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">FirstName<span class="text-red-500">*</span></x-form-label>
                        <div class="mt-2">
                            <x-form-input id="first_name" name="first_name" placeholder="John" required />
                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Last Name<span class="text-red-500">*</span></x-form-label>
                        <div class="mt-2">
                            <x-form-input id="last_name" name="last_name" placeholder="Doe" required />
                            <x-form-error name="last_name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email<span class="text-red-500">*</span></x-form-label>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" type="email" placeholder="john@example.com"
                                required />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password<span class="text-red-500">*</span></x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" name="password" type="password" placeholder="Password"
                                required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmatiion">Confirm Password<span
                                class="text-red-500">*</span></x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password_confirmatiion" name="password_confirmatiion" type="password"
                                placeholder="Confirm Password" required />
                            <x-form-error name="password_confirmatiion" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/"
                class="text-sm/6 font-semibold text-gray-900 hover:text-gray-600    hover:cursor-pointer">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
