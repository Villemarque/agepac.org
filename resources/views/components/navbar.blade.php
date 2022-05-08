@props(['branding' => 'logo'])

@php($isOverlayed = $attributes->has('overlay'))

<div
    @class([
        'relative',
        'bg-white' => ! $isOverlayed,
    ])
    x-data="{ mobileMenuOpen: false }"
    @click.outside="mobileMenuOpen = false"
    @close.stop="mobileMenuOpen = false"
>
    <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-6 lg:space-x-10">
        <div>
            <a href="/" class="flex">
                <span class="sr-only">AGEPAC</span>
                @if($branding === 'logo')
                    <x-application-logo class="h-8 w-auto sm:h-10 {{ $isOverlayed ? 'text-white' : '' }}" />
                @elseif($branding === 'mark')
                    <x-application-mark class="h-8 w-auto sm:h-10 {{ $isOverlayed ? 'text-white' : '' }}" />
                @endif
            </a>
        </div>
        <div class="-mr-2 -my-2 md:hidden">
            <button
                type="button"
                @click="mobileMenuOpen = true"
                @class([
                    'rounded-md p-2 inline-flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500',
                    'text-gray-400 hover:text-gray-500 hover:bg-gray-100' => ! $isOverlayed,
                    'text-white hover:text-white/75' => $isOverlayed,
                ])
                aria-expanded="false"
            >
                <span class="sr-only">Open menu</span>
                <x-heroicon-o-menu class="h-6 w-6" />
            </button>
        </div>
        <div class="hidden md:flex-1 md:flex md:items-center md:justify-between">
            <nav class="flex space-x-6 lg:space-x-10">
                <x-flyout-menu
                    align="center"
                    flyout-classes="max-w-md"
                >
                    <x-slot
                        name="trigger"
                        class="{{ $isOverlayed ? 'text-white' : 'text-gray-500' }}"
                        active-class="{{ $isOverlayed ? 'text-white/75' : 'text-gray-900' }}"
                    >
                        <span>Être EPL</span>
                    </x-slot>

                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                        <a href="/epl/selection" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                            <x-heroicon-o-users class="shrink-0 h-6 w-6 text-wedgewood-500" />
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">
                                    La Sélection
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    Découvrez les différentes voies d’accès à la filière EPL.
                                </p>
                            </div>
                        </a>

                        <a href="/epl/training" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                            <x-heroicon-o-academic-cap class="shrink-0 h-6 w-6 text-wedgewood-500" />
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">
                                    La Formation
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    Apprenez-en plus sur le cursus EPL et les différentes phases qu’il comporte.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
{{--                        <div class="flow-root">--}}
{{--                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">--}}
{{--                                <x-heroicon-o-play class="shrink-0 h-6 w-6 text-gray-400" />--}}
{{--                                <span class="ml-3">Présentation</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}

                        <div class="flow-root">
                            <a href="https://www.enac.fr" target="_blank" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                                <x-heroicon-o-external-link class="shrink-0 h-6 w-6 text-gray-400" />
                                <span class="ml-3">Découvrir l’ENAC</span>
                            </a>
                        </div>
                    </div>
                </x-flyout-menu>

                <x-flyout-menu
                    align="center"
                    flyout-classes="max-w-md"
                >
                    <x-slot
                        name="trigger"
                        class="{{ $isOverlayed ? 'text-white' : 'text-gray-500' }}"
                        active-class="{{ $isOverlayed ? 'text-white/75' : 'text-gray-900' }}"
                    >
                        <span>Association</span>
                    </x-slot>

                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                        <a href="/association" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                            <x-heroicon-o-library class="shrink-0 h-6 w-6 text-wedgewood-500" />
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">
                                    Qui sommes-nous ?
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    Qu’est-ce que l’AGEPAC ? Découvrez notre association et ses valeurs.
                                </p>
                            </div>
                        </a>

                        <a href="/association/team" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                            <x-heroicon-o-user-group class="shrink-0 h-6 w-6 text-wedgewood-500" />
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">
                                    Notre équipe
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    Rencontrez les membres du Bureau et du Conseil de l’AGEPAC.
                                </p>
                            </div>
                        </a>
                    </div>
                </x-flyout-menu>

                <a
                    href="/contact"
                    @class([
                        'text-base font-medium',
                        'text-gray-500 hover:text-gray-900' => ! $isOverlayed,
                        'text-white hover:text-white/75' => $isOverlayed,
                    ])
                >
                    Contact
                </a>
            </nav>

            @unless($attributes->has('compact'))
                <div class="flex items-center md:ml-12">
                    <a
                        href="https://members.agepac.org"
                        @class([
                            'w-full rounded-full p-1 flex lg:hidden text-base focus:outline-none focus:ring-2 focus:ring-vermilion-400',
                            'text-vermilion-400 hover:text-vermilion-500' => ! $isOverlayed,
                            'text-white hover:text-white/75' => $isOverlayed,
                        ])
                    >
                        <x-heroicon-o-user-circle class="shrink-0 h-7 w-7" />
                    </a>
                    <a
                        href="https://members.agepac.org"
                        @class([
                            'w-full border border-transparent rounded-md py-2 px-4 hidden lg:flex items-center justify-center text-base font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-vermilion-400',
                            'text-white bg-vermilion-400 hover:bg-vermilion-500' => ! $isOverlayed,
                            'text-white bg-white bg-opacity-10 hover:bg-opacity-20' => $isOverlayed,
                        ])
                    >
                        <x-heroicon-o-user-circle class="shrink-0 h-5 w-5" />
                        <span class="hidden lg:inline ml-2">Espace Membres</span>
                    </a>
                </div>
            @endunless
        </div>
    </div>

    <div
        class="absolute z-10 top-0 inset-x-0 p-2 origin-top-right md:hidden"
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        style="display: none;"
        @click="mobileMenuOpen = false"
    >
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <x-application-logo class="h-8 w-auto" />
                    </div>
                    <div class="-mr-2">
                        <button
                            type="button"
                            @click="mobileMenuOpen = false"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                        >
                            <span class="sr-only">Close menu</span>
                            <x-heroicon-o-x class="h-6 w-6" />
                        </button>
                    </div>
                </div>
                <div class="mt-6 space-y-1">
                    <a href="/" class="block rounded-md p-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">
                        Accueil
                    </a>
                    <a href="/epl/selection" class="block rounded-md p-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">
                        La Sélection EPL
                    </a>
                    <a href="/epl/training" class="block rounded-md p-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">
                        La Formation EPL
                    </a>
                    <a href="/association" class="block rounded-md p-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">
                        Association
                    </a>
                    <a href="/contact" class="block rounded-md p-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">
                        Nous Recruter
                    </a>
                </div>
            </div>
            <div class="py-6 px-5">
                <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-700 hover:bg-red-600">
                    Faire un don
                </a>
                <p class="mt-6 text-center text-sm font-medium text-gray-500">
                    Ancien élève ? Encore en formation ?
                </p>
                <div class="mt-1 flex justify-center">
                    <a href="https://members.agepac.org" class="flex items-center px-2 text-vermilion-400 hover:text-vermilion-500">
                        <x-heroicon-o-user-circle class="shrink-0 h-5 w-5" />
                        <span class="ml-2">Espace Membres</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
