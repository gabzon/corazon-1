<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Work Status</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Update your current working status to benefit from differents discounts.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-2">
                                <x-form.select wire:model="user.work_status" name="user.work_status" label="Work Status"
                                    :options="['working','student', 'unemployed', 'retired']" />
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <x-form.text-input wire:model="user.address" name="user.address" label="Address" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <x-form.date-input wire:model="user.unemployement_expiry_date"
                                    name="user.unemployement_expiry_date" label="Expiry date" />
                            </div>

                            <div class="col-span-6 lg:col-span-2">
                                <x-form.text-input wire:model="user.work_status_verified"
                                    name="user.work_status_verified" label="Verified" />
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <div class="inline-flex items-center">
                            <x-form.submit />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>