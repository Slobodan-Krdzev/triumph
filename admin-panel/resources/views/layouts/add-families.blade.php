<x-app-layout>

    <div class="px-8 mt-10 w-8/12">

        <form action="{{ route('store-family') }}" method="POST" class="flex flex-col ">
            @csrf


            <label for="title">type:</label>
            <input type="text" name="type">

            <label for="model">Model:</label>
            <input type="text" name="mainBikeLogoImage[url]">

            <label for="model">Category:</label>
            <input type="text" name="mainBikeLogoImage[alt]">

            <label for="model">Sub Family Category:</label>
            <input type="text" name="familyPageBannerDesc">

            <label for="model">Price:</label>
            <input type="text" name="familyPageBannerVideo">

            <label for="model">Edition</label>
            <input type="text" name="topSectionInfo[image][src]">

            <label for="model">Edition</label>
            <input type="text" name="topSectionInfo[image][alt]">

            <label for="model">Edition</label>
            <input type="text" name="topSectionInfo[title]">

            <label for="model">Edition</label>
            <input type="text" name="topSectionInfo[desc1]">

            <label for="model">Edition</label>
            <input type="text" name="topSectionInfo[desc2]">

            <input type="submit" class="my-5 bg-lime-200 shadow rounded p-4" value="Submit">







        </form>

    </div>

</x-app-layout>
