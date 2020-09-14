<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            TAS UI Looks
        </h2>
    </x-slot>


<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <x-jet-section-border/>
                    <x-grok::action-section>
                    <x-slot name="title">
                        Parenthetical
                    </x-slot>

                    <x-slot name="description">
                        @include('tas_sample/parenthetical/description')
                    </x-slot>

                    <x-slot name="content">
                        @include('tas_sample/parenthetical/content')
                    </x-slot>
                </x-grok::action-section>

                <x-jet-section-border/>
                    <x-grok::action-section>
                    <x-slot name="title">
                        Ordered Lists
                    </x-slot>

                    <x-slot name="description">
                        @include('tas_sample/lists/description')
                    </x-slot>

                    <x-slot name="content">
                        @include('tas_sample/lists/content')
                    </x-slot>
                </x-grok::action-section>


                <x-jet-section-border/>
                    <x-grok::action-section>
                    <x-slot name="title">
                        Links & Navigation

                    </x-slot>

                    <x-slot name="description">
                        Standard ways to show links
                    </x-slot>

                        <x-slot name="description">
                                    @include('tas_sample/links-to/description')
                                </x-slot>
                                <x-slot name="content">
                                    @include('tas_sample/links-to/content')
                                </x-slot>


                </x-grok::action-section>

                <x-jet-section-border/>
  <x-grok::action-section>
                    <x-slot name="title">
                       Labeled Values, Hints, etc.
                    </x-slot>

                    <x-slot name="description">
                        @include('tas_sample/labeled-value/description')
                    </x-slot>

                    <x-slot name="content">
                        @include('tas_sample/labeled-value/content')
                    </x-slot>
                </x-grok::action-section>
            </div>
        </div>
    </div>
</div>


</x-app-layout>
