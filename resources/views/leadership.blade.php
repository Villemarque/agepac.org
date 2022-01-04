<x-app-layout>
    <x-slot name="header">
        <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-5xl py-4 border-b">Gouvernance</h2>
    </x-slot>

    <div class="bg-white">
        <div class="mx-auto py-6 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-12">
            <div class="space-y-12">
                <x-leadership.section-heading>
                    <x-slot name="title">Notre Bureau</x-slot>
                    <x-slot name="description">Au cœur de la vie quotidienne de notre Association, les membres du Bureau sont les porte-parole de l'AGEPAC.</x-slot>
                </x-leadership.section-heading>

                <ul role="list" class="space-y-12 lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8 lg:gap-y-12 lg:space-y-0">
                    <x-leadership.card-detailed
                        name="Hugo Clarke-Wing"
                        title="Président"
                        promotion="EPL/S 2015"
                        job="CDB PixAir Survey"
                        photo="{{ asset('media/leadership/hugo.clarke-wing.jpg') }}"
                        twitter-url="https://twitter.com/HugoClarkeWing"
                        linkedin-url="https://www.linkedin.com/in/mrhugo"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Jeff Mhanna"
                        title="Vice-Président"
                        promotion="EPL/S 2017"
                        job="Instructeur Aéroclub Les Alcyons"
                        photo="{{ asset('media/leadership/hugo.clarke-wing.jpg') }}"
                        linkedin-url="https://www.linkedin.com/in/jeff-mhanna-865a351bb/"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Adrián Lucq-Bibiloni"
                        title="Secrétaire Général"
                        promotion="EPL/U 2018"
                        job="Directeur de la Gestion de Production ENAC"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                        linkedin-url="https://www.linkedin.com/in/adrian-lucq/"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Slim Khouadja"
                        title="Trésorier"
                        promotion="EPL/S 2017"
                        job="CDB PixAir Survey"
                        photo="{{ asset('media/leadership/slim.khouadja.jpg') }}"
                        linkedin-url="https://www.linkedin.com/in/slim-khouadja-9688b8154/"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Marek Mádl"
                        title="Responsable Communication"
                        promotion="CP ATPL 2015"
                        job="Instructeur Club Aéronautique d'Annemasse"
                        photo="{{ asset('media/leadership/hugo.clarke-wing.jpg') }}"
                        linkedin-url="https://www.linkedin.com/in/marekmadl/"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Félix Fouache"
                        title="Community Manager"
                        promotion="EPL/S 2017"
                        job="Instructeur Cretan Eagle Aviation"
                        photo="{{ asset('media/leadership/hugo.clarke-wing.jpg') }}"
                        linkedin-url="https://www.linkedin.com/in/felixfouache/"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Julien Thomasson"
                        title="Responsable Emploi et Réseau"
                        promotion="EPL/U 2019"
                        job="Instructeur Aéroclub Les Ailes Toulousaines"
                        photo="{{ asset('media/leadership/julien.thomasson.jpg') }}"
                        linkedin-url="https://www.linkedin.com/in/julien-thomasson-876314133/"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Tom Guedj"
                        title="Responsable adjoint Emploi et Réseau"
                        promotion="EPL/S 2019"
                        photo="{{ asset('media/leadership/julien.thomasson.jpg') }}"
                        linkedin-url="https://www.linkedin.com/in/tom-g-06b8a0123/"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Paul Viviant"
                        title="Responsable Formation"
                        promotion="EPL/S 2015"
                        photo="{{ asset('media/leadership/hugo.clarke-wing.jpg') }}"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Théophile Pellissier"
                        title="Liaison Partenaires Industriels"
                        promotion="EPL/S 2017"
                        photo="{{ asset('media/leadership/julien.thomasson.jpg') }}"
                        linkedin-url="https://www.linkedin.com/in/théophile-pellissier/"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>

                    <x-leadership.card-detailed
                        name="Morgane Maillet"
                        title="Responsable Événements"
                        promotion="EPL/S 2018"
                        photo="{{ asset('media/leadership/julien.thomasson.jpg') }}"
                        linkedin-url="https://www.linkedin.com/in/morgane-maillet-309541180/"
                    >
                        <x-slot name="description">
                            Ultricies massa malesuada viverra cras lobortis. Tempor orci hac ligula dapibus mauris sit ut eu. Eget turpis urna maecenas cras. Nisl dictum.
                        </x-slot>
                    </x-leadership.card-detailed>
                </ul>
            </div>
        </div>

        <div class="text-center mx-auto py-6 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-12">
            <div class="space-y-12">
                <x-leadership.section-heading>
                    <x-slot name="title">Notre Conseil</x-slot>
                    <x-slot name="description">Le Conseil de l'AGEPAC est constitué de Représentants de Promotions et d'Anciens Présidents. Ils votent des motions en dehors des Assemblées Générales.</x-slot>
                </x-leadership.section-heading>

                <ul role="list" class="mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6">
                    <x-leadership.card-simple
                        name="Florent Vitry"
                        title="Responsable Promotions EPL/S 2009 & antérieures"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="César Chroscik"
                        title="Responsable Promotion EPL/S 2010"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Julian Krummel"
                        title="Responsable Promotion EPL/S 2011"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Jacques Preiss"
                        title="Responsable Promotion EPL/S 2012"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Timothée Barry"
                        title="Responsable Promotion EPL/S 2014"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Théo Chamiot-Prieur"
                        title="Responsable Promotion EPL/S 2015"
                        photo="{{ asset('media/leadership/theo.chamiot-prieur.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Thomas Izarn"
                        title="Responsable Promotion EPL/S 2016"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Cédric Darchicourt"
                        title="Responsable Promotion EPL/S 2017"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Lilian Berquier"
                        title="Responsable Promotion EPL/S 2018"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Tom Guedj"
                        title="Responsable Promotion EPL/S 2019"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Jonathan Ganter"
                        title="Responsable Promotion EPL/S 2020"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="David Robert"
                        title="Responsable Promotions EPL/U & EPL/P"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Sofian Lehoucq"
                        title="Responsable Promotions Cursus Préparatoire ATPL"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Jérôme Walrave"
                        title="Ancien Président 20&#8209;20"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Simon Spriet"
                        title="Ancien Président 20&#8209;20"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Benjamin Payet"
                        title="Ancien Président 20&#8209;20"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Pierre Petaux"
                        title="Ancien Président 20&#8209;20"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Timoté Dufour"
                        title="Ancien Président 2010&#8209;2017"
                        photo="{{ asset('media/leadership/timote-dufour.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Damien Lacombe"
                        title="Ancien Président 2017&#8209;2019"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />

                    <x-leadership.card-simple
                        name="Simon Louyot"
                        title="Ancien Président 2019&#8209;2020"
                        photo="{{ asset('media/leadership/adrian-lucq-bibiloni.jpg') }}"
                    />
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>