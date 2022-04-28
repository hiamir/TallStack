<div class="p-0">
    <section class="min-h-screen bg-gray-50" x-data="{ sideBar: false }">

    {{$slot}}
    <!-- Sidebar Backdrop -->
        <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar"
             x-cloak></div>
    </section>
</div>
