<x-app-layout title="À propos" class="bg-white">
    <!-- Header -->
    <div class="relative max-w-7xl mx-auto px-4 pb-8 sm:px-6 md:pb-12 lg:px-8 lg:pt-8">
        <div class="relative pt-36 pb-8 sm:pt-40 sm:pb-12 md:py-36 lg:py-48 px-8 bg-gradient-to-t md:bg-gradient-to-r from-universe via-transparent rounded-xl shadow-2xl overflow-hidden lg:px-16 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="absolute inset-0 opacity-80 filter saturate-120 mix-blend-multiply">
                <img
                    src="{{ asset('media/flight-group-be58.jpg') }}"
                    alt="Four EPLs posing in front of a Beechcraft Baron 58 aircraft"
                    class="w-full h-full object-cover"
                />
            </div>

            <div class="relative lg:col-span-1">
                <h1 class="text-white text-4xl font-extrabold tracking-tight sm:text-5xl">
                    Qui sommes-nous ?
                </h1>
            </div>
        </div>
    </div>

    <!-- Mission statement section -->
    <div class="relative overflow-hidden">
        <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
            <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:order-2 lg:px-0">
                <!-- Content area -->
                <div class="lg:pt-20">
                    <h2 class="text-3xl text-gray-900 font-extrabold tracking-tight sm:text-4xl">
                        Notre mission
                    </h2>

                    <div class="mt-6 text-gray-500 space-y-6">
                        <p class="text-lg">
                            L’Association Générale des Élèves Pilotes de l’Aviation Civile est une association loi 1901
                            qui, depuis 1992, regroupe les Élèves Pilotes de Ligne formés à l’École Nationale de
                            l’Aviation Civile. Sa mission est avant tout de garantir la pérennité de la filière publique
                            de formation au pilotage, mais aussi d’assurer une bonne représentativité des actuels et
                            anciens élèves dans la communauté aéronautique.
                        </p>
                        <div class="text-base leading-7">
                            <p>
                                Les buts poursuivis sont multiples :
                            </p>
                            <ul class="list-disc pl-6">
                                <li>Aider, par les moyens dont elle dispose, les EPL à accéder à un poste de navigant.</li>
                                <li>Servir d'interlocuteur privilégié dans différentes discussions et actions.</li>
                                <li>Faire interface entre les EPL sortis de formation, et les autres acteurs du monde du transport aérien.</li>
                                <li>Promouvoir et défendre la filière de formation d'État (dite filière EPL).</li>
                                <li>Proposer des activités, maintenir des contacts entre EPL.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Stats section -->
                <div class="mt-10">
                    <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                        <div class="border-t-2 border-gray-100 pt-6">
                            <dt class="text-base font-medium text-gray-500">Fondée</dt>
                            <dd class="text-3xl font-extrabold tracking-tight text-gray-900">1992</dd>
                        </div>

                        <div class="border-t-2 border-gray-100 pt-6">
                            <dt class="text-base font-medium text-gray-500">Membres actifs</dt>
                            <dd class="text-3xl font-extrabold tracking-tight text-gray-900">300</dd>
                        </div>
                    </dl>
{{--                    <div class="mt-10">--}}
{{--                        <a href="#" class="text-base font-medium text-shiraz hover:underline">--}}
{{--                            Découvrez nos actions <span aria-hidden="true">&rarr;</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="relative sm:py-16 lg:order-1 lg:py-0 mt-12 sm:mt-8">
                <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                    <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
                    <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
                        <defs>
                            <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                    </svg>
                </div>
                <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                    <!-- Testimonial card-->
                    <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                        <img
                            class="absolute inset-0 h-full w-full object-cover object-top"
                            src="{{ asset('media/leadership/hugo-clarke-wing-wide.jpg') }}"
                            alt="Hugo Clarke-Wing"
                        />
                        <div class="absolute inset-0 bg-wedgewood mix-blend-multiply opacity-60"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-cyan-700 opacity-90"></div>
                        <div class="relative px-8">
                            <blockquote class="mt-16">
                                <div class="relative text-lg font-medium text-white md:flex-grow">
                                    <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-cyan-400 opacity-50" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                        <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                    </svg>
                                    <p class="relative">
                                        L’AGEPAC — au-delà d’être une force de persuasion aux côtés de nos divers
                                        partenaires — c’est une belle bande de copains qui se retrouvent autour
                                        de leur passion commune : l’aviation sous toutes ses formes.
                                    </p>
                                </div>

                                <footer class="mt-4">
                                    <p class="text-base font-semibold text-cyan-200">Hugo Clarke-Wing, Président</p>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Values section -->
    <div class="relative mx-auto max-w-md py-12 px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl mt-8 lg:mt-16">
        <svg class="hidden lg:block absolute top-0 left-full transform -translate-x-1/2 -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/3" width="404" height="468" fill="none" viewBox="0 0 404 468" aria-hidden="true">
            <defs>
                <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="468" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)" />
        </svg>

        <div class="relative lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div class="lg:col-span-1">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Guidés par nos valeurs
                </h2>
            </div>
            <dl class="mt-10 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-8 sm:gap-y-10 lg:mt-0 lg:col-span-2">
                <div>
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-vermilion-400 text-white">
                            <x-heroicon-s-user-group class="h-6 w-6" aria-hidden="true" />
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Solidarité</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">Veniam necessitatibus reiciendis fugit explicabo dolorem nihil et omnis assumenda odit? Quisquam unde accusantium.</dd>
                </div>

                <div>
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-vermilion-400 text-white">
                            <x-heroicon-s-sparkles class="h-6 w-6" aria-hidden="true" />
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Excellence</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">Omnis, illo delectus? Libero, possimus nulla nemo tenetur adipisci repellat dolore eligendi velit doloribus mollitia.</dd>
                </div>

                <div>
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-vermilion-400 text-white">
                            <x-heroicon-s-globe class="h-6 w-6" aria-hidden="true" />
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Responsabilité</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">Consequuntur omnis dicta cumque, inventore atque ab dolores aspernatur tempora ab doloremque.</dd>
                </div>

                <div>
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-vermilion-400 text-white">
                            <x-fas-hands-helping class="h-6 w-6" aria-hidden="true" />
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Partage</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">Corporis quisquam nostrum nulla veniam recusandae temporibus aperiam officia incidunt at distinctio ratione.</dd>
                </div>
            </dl>
        </div>
    </div>

    <!-- Partners logo cloud section -->
    <div class="mt-16 md:mt-24">
        <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="lg:grid lg:grid-cols-2 lg:gap-24 lg:items-center">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
                        Engagés aux côtés de partenaires de poids
                    </h2>
                    <p class="mt-6 max-w-3xl text-lg leading-7 text-gray-500">
                        Forts d’un réseau construit au long de nos plus de 30 ans d’existence, nous travaillons main
                        dans la main avec des acteurs dessinant l’aviation dans la durée.
                    </p>
                </div>
                <div class="mt-12 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                    <div class="col-span-1 flex justify-center py-7 px-8 bg-gray-50">
                        <img
                            class="max-h-14"
                            src="{{ asset('media/logo_enac.svg') }}"
                            alt="ENAC"
                        />
                    </div>

                    <div class="col-span-1 flex justify-center py-7 px-8 bg-gray-50">
                        <img
                            class="max-h-14"
                            src="{{ asset('media/logo_snpl.svg') }}"
                            alt="SNPL"
                        />
                    </div>

                    <div class="col-span-1 flex justify-center py-7 px-8 bg-gray-50">
                        <img
                            class="max-h-14"
                            src="{{ asset('media/logo_air_france.svg') }}"
                            alt="Air France"
                        />
                    </div>

                    <div class="col-span-1 flex justify-center py-7 px-8 bg-gray-50">
                        <img
                            class="max-h-14"
                            src="{{ asset('media/logo_ffa.svg') }}"
                            alt="Fédération Française Aéronautique"
                        />
                    </div>

                    <div class="col-span-1 flex justify-center py-7 px-8 bg-gray-50">
                        <img
                            class="max-h-14"
                            src="{{ asset('media/logo_appn.png') }}"
                            alt="Mirage"
                        />
                    </div>

                    <div class="col-span-1 flex justify-center py-7 px-8 bg-gray-50">
                        <img
                            class="max-h-14"
                            src="{{ asset('media/logo_avico_plane.svg') }}"
                            alt="Avico"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA section -->
    <div class="relative overflow-hidden mt-24 sm:mt-32 pb-8 sm:py-16">
        <div aria-hidden="true" class="hidden sm:block">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 rounded-r-3xl"></div>
            <svg class="absolute top-8 left-1/2 -ml-3" width="404" height="392" fill="none" viewBox="0 0 404 392">
                <defs>
                    <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)" />
            </svg>
        </div>
        <a
            class="group block mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8"
            href="/association/team"
        >
            <div class="relative rounded-2xl px-6 py-10 bg-dandelion-500 group-hover:bg-dandelion-400 overflow-hidden shadow-xl sm:px-12 sm:py-20">
                <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                    <svg class="absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                        <path class="text-dandelion-300 text-opacity-40" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                        <path class="text-dandelion-600 text-opacity-40" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                    </svg>
                </div>
                <div class="relative">
                    <div class="sm:text-center">
                        <h2 class="text-3xl font-extrabold text-white tracking-tight sm:text-4xl">
                            Rencontrez notre équipe
                        </h2>
                    </div>
                    <div class="mt-12 lg:flex justify-center -space-y-4 md:-space-x-3 md:space-y-0">
                        <div class="sm:flex justify-center -space-y-4 sm:-space-x-3 sm:space-y-0">
                            <div class="flex justify-center -space-x-3">
                                <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                    <img
                                        class="h-full w-full object-cover"
                                        src="{{ asset('media/leadership/hugo-clarke-wing.jpg') }}"
                                        alt="Hugo Clarke-Wing"
                                    />
                                </div>
                                <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                    <img
                                        class="h-full w-full object-cover"
                                        src="{{ asset('media/leadership/jeff-mhanna.jpg') }}"
                                        alt="Jeff Mhanna"
                                    />
                                </div>
                                <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                    <img
                                        class="h-full w-full object-cover"
                                        src="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                                        alt="Adrián Lucq-Bibiloni"
                                    />
                                </div>
                            </div>
                            <div class="flex justify-center -space-x-3">
                                <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                    <img
                                        class="h-full w-full object-cover"
                                        src="{{ asset('media/leadership/slim-khouadja.jpg') }}"
                                        alt="Slim Khouadja"
                                    />
                                </div>
                                <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                    <img
                                        class="h-full w-full object-cover"
                                        src="{{ asset('media/leadership/marek-madl.jpg') }}"
                                        alt="Marek Mádl"
                                    />
                                </div>
                                <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                    <img
                                        class="h-full w-full object-cover"
                                        src="{{ asset('media/leadership/felix-fouache.jpg') }}"
                                        alt="Félix Fouache"
                                    />
                                </div>
                                <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                    <img
                                        class="h-full w-full object-cover"
                                        src="{{ asset('media/leadership/julien-thomasson.jpg') }}"
                                        alt="Julien Thomasson"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center -space-x-3">
                            <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                <img
                                    class="h-full w-full object-cover"
                                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                                    alt="Tom Guedj"
                                />
                            </div>
                            <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                <img
                                    class="h-full w-full object-cover"
                                    src="{{ asset('media/leadership/paul-viviant.jpg') }}"
                                    alt="Paul Viviant"
                                />
                            </div>
                            <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                <img
                                    class="h-full w-full object-cover"
                                    src="{{ asset('media/leadership/theophile-pellissier.jpg') }}"
                                    alt="Théophile Pellissier"
                                />
                            </div>
                            <div class="relative flex-none inline-block h-16 w-16 md:h-20 md:w-20 rounded-full overflow-hidden ring-4 ring-dandelion-500">
                                <img
                                    class="h-full w-full object-cover"
                                    src="{{ asset('media/leadership/morgane-maillet.jpg') }}"
                                    alt="Morgane Maillet"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

</x-app-layout>
