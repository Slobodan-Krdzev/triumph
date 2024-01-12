<x-app-layout>

    <div class="px-8 mt-10">

        <form action="{{ route('store-moto') }}" method="POST">
            @csrf


            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                            name</label>
                        <input type="text" id="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="John" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            name</label>
                        <input type="text" id="last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Doe" required>
                    </div>
                    <div>
                        <label for="company"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                        <input type="text" id="company"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Flowbite" required>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                            number</label>
                        <input type="tel" id="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>
                    <div>
                        <label for="website"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL</label>
                        <input type="url" id="website"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="flowbite.com" required>
                    </div>
                    <div>
                        <label for="visitors"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unique visitors (per
                            month)</label>
                        <input type="number" id="visitors"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                        address</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="john.doe@company.com" required>
                </div>
                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="•••••••••" required>
                </div>
                <div class="mb-6">
                    <label for="confirm_password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                    <input type="password" id="confirm_password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="•••••••••" required>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                            required>
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with
                        the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and
                            conditions</a>.</label>
                </div>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>




            {{-- <div class="flex flex-col">
            <!-- General Information -->
            <h1 class="text-red-700 font-extrabold bg-red-300 text-center py-3 rounded">General Information</h1>
            <label for="title">Title:</label>
            <input type="text" name="title" required>

            <label for="type">Type:</label>
            <input type="text" name="type" required>

            <label for="model">Model:</label>
            <input type="text" name="model" required>

            <label for="mainBikeLogoImage">Main Bike Logo Image:</label>
            <input type="text" name="mainBikeLogoImage" required>

            <label for="familyPageBannerDesc">Family Page Banner Description:</label>
            <input type="text" name="familyPageBannerDesc" required>

            <label for="familyPageBannerVideo">Family Page Banner Video:</label>
            <input type="text" name="familyPageBannerVideo" required>

            <label for="topSectionInfo">Top Section Info:</label>
            <input type="text" name="topSectionInfo" required>

            <label for="promo">Promo:</label>
            <input type="text" name="promo" required>

            <!-- Configuration Information -->
            <h1 class="text-red-700 font-extrabold bg-red-300 text-center py-3 rounded">Configuration Information</h1>
            <label for="configPageInfo">configPageInfo:</label>
            <input type="text" name="configPageInfo" required>

            <label for="configFamilyPageInfo">configFamilyPageInfo:</label>
            <input type="text" name="configFamilyPageInfo" required>

            <!-- Sub-Family Information -->
            <h1 class="text-red-700 font-extrabold bg-red-300 text-center py-3 rounded">Sub-Family Information</h1>
            <label for="subFamilies">Sub Families:</label>
            <input type="text" name="subFamilies" required>

            <!-- Bike Details -->
            <h1 class="text-red-700 font-extrabold bg-red-300 text-center py-3 rounded">Bike Details</h1>
            <label for="shortDesc">Short Description:</label>
            <input type="text" name="shortDesc" required>

            <label for="category">Category:</label>
            <input type="text" name="category" required>

            <label for="subFamilyCategory">Sub-Family Category:</label>
            <input type="text" name="subFamilyCategory" required>

            <label for="edition">Edition:</label>
            <input type="text" name="edition" required>

            <label for="price">Price:</label>
            <input type="number" name="price" step="0.01">

            <!-- Bike Specifications -->
            <h1 class="text-red-700 font-extrabold bg-red-300 text-center py-3 rounded">Bike Specifications</h1>
            <label for="specs[cc]">CC:</label>
            <input type="number" name="specs[cc]" step="0.01" required>

            <label for="specs[hp]">HP:</label>
            <input type="number" name="specs[hp]" step="0.01" required>

            <label for="specs[torque]">Torque:</label>
            <input type="number" name="specs[torque]" step="0.01" required>

            <label for="specs[horsePower]">Horsepower:</label>
            <input type="number" name="specs[horsePower]" step="0.01" required>

            <label for="specs[serviceInterval]">Service Interval:</label>
            <input type="text" name="specs[serviceInterval]" required>

            <label for="specs[motorType]">Motor Type:</label>
            <input type="text" name="specs[motorType]" required>

            <!-- Image Gallery -->
            <h1 class="text-red-700 font-extrabold bg-red-300 text-center py-3 rounded">Image Gallery</h1>
            <label for="gallery[modelImage][src]">Gallery Image Source:</label>
            <input type="text" name="gallery[modelImage][src]" required>

            <label for="gallery[modelImage][alt]">Gallery Image Alt:</label>
            <input type="text" name="gallery[modelImage][alt]" required>

            <!-- Short Spec Info -->
            <h1 class="text-red-700 font-extrabold bg-red-300 text-center py-3 rounded">Short Spec Info</h1>
            <label for="shortSpecInfo[info1]">Short Spec Info 1:</label>
            <input type="text" name="shortSpecInfo[info1]" required>

            <label for="shortSpecInfo[info2]">Short Spec Info 2:</label>
            <input type="text" name="shortSpecInfo[info2]" required>

            <label for="shortSpecInfo[info3]">Short Spec Info 3:</label>
            <input type="text" name="shortSpecInfo[info3]" required>

            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mt-4">Submit</button>
            </div> --}}
        </form>

    </div>

</x-app-layout>
