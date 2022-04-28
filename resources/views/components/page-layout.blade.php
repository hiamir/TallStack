@props(['active_role'])
<div class="p-0">
    <section class="min-h-screen bg-gray-50" x-data="{ sideBar: false }">
        <livewire:layouts.side-menu :active_role="$active_role"/>
        <div class="ml-0 transition md:ml-60">
            <main>
                <livewire:layouts.header :active_role="$active_role"/>
                <div class="pt-8 max-w-7xl mx-auto sm:px-6 lg:px-8 md:ml-20">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mx">
                        <div class="p-6 bg-white border-b border-gray-200">
                            {{$content}}
                        </div>
                    </div>
                </div>
            </main>
        </div>

    <!-- Sidebar Backdrop -->
        <div class="fixed inset-0 z-10 w-screen h-screen bg-black bg-opacity-25 md:hidden" x-show.transition="sideBar"
             x-cloak></div>
    </section>
</div>
