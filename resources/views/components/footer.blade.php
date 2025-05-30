@if(App::getLocale() === 'en')
    <footer class="py-3 px-5" style="background-color: var(--primary-color); color: var(--white)">
        <div class="row">
            <div class="col col-md-2 mb-3">
                <h5>Navigation:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', [''])) }}" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Home</a></li>
                    <li class="nav-item mb-2"><a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', ['news'])) }}" class="text-decoration-none  text-[#EBEBEB] hover:text-black">News</a></li>
                    <li class="nav-item mb-2"><a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', ['media'])) }}" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Media Directory</a></li>
                </ul>
            </div>

            <div class="col col-md-2 mb-3">
                <h5>Legal:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none  text-[#EBEBEB] hover:text-black">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Privacy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Accessibility</a></li>
                </ul>
            </div>

            <div class="col col-md-2 mb-3">
                <h5>Contact:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="mailto:cv-als@spec.it" class="text-decoration-none  text-[#EBEBEB] hover:text-black">cv-als@pec.it</a></li>
                    <li class="nav-item mb-2"><a href="mailto:gerdsteger@hotmail.com" class="text-decoration-none  text-[#EBEBEB] hover:text-black">gerdsteger@hotmail.com</a></li>
                    <li class="nav-item mb-2"><a href="tel:+39 3284534583" class="text-decoration-none  text-[#EBEBEB] hover:text-black">+39 3284534583</a></li>
                    <li class="nav-item mb-2"><a href="" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Rienzstr. 21 39040 Olang</a></li>
                </ul>
            </div>
            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Subscribe to our newsletter</h5>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                        <button class="px-2 rounded-md py-[0.55rem] bg-[#1E1E1E] text-[#EBEBEB] hover:bg-[#0B3B8E] transition-colors duration-200" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="flex justify-content-between text-[#EBEBEB] text-decoration-none py-2 my-4 border-top">
            <p>©️ 2025 CV-ALS, All rights reserved.</p>
            <div class="flex gap-1">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a class="text-decoration-none text-[#EBEBEB] hover:text-black" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ strtoupper($localeCode) }}
                    </a>
                @endforeach
            </div>
        </div>
    </footer>

@elseif(App::getLocale()=== 'de')
    <footer class="py-3 px-5" style="background-color: var(--primary-color); color: var(--white)">
        <div class="row">
            <div class="col col-md-2 mb-3">
                <h5>Navigation:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', [''])) }}" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Home</a></li>
                    <li class="nav-item mb-2"><a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', ['news'])) }}" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Neuigkeiten</a></li>
                    <li class="nav-item mb-2"><a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', ['media'])) }}" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Medienverzeichnis</a></li>
                </ul>
            </div>

            <div class="col col-md-2 mb-3">
                <h5>Rechtliches:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none  text-[#EBEBEB] hover:text-black">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Datenschutz</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Barrierefreiheit</a></li>
                </ul>
            </div>

            <div class="col col-md-2 mb-3">
                <h5>Kontakt:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="mailto:cv-als@spec.it" class="text-decoration-none  text-[#EBEBEB] hover:text-black">cv-als@pec.it</a></li>
                    <li class="nav-item mb-2"><a href="mailto:gerdsteger@hotmail.com" class="text-decoration-none  text-[#EBEBEB] hover:text-black">gerdsteger@hotmail.com</a></li>
                    <li class="nav-item mb-2"><a href="tel:+39 3284534583" class="text-decoration-none  text-[#EBEBEB] hover:text-black">+39 3284534583</a></li>
                    <li class="nav-item mb-2"><a href="" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Rienzstr. 21 39040 Olang</a></li>
                </ul>
            </div>
            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Newsletter abonnieren</h5>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">E-Mail Adresse</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="E-Mail Adresse">
                        <button class="px-2 rounded-md py-[0.55rem] bg-[#1E1E1E] text-[#EBEBEB] hover:bg-[#0B3B8E] transition-colors duration-200" type="button">Abonnieren</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="flex justify-content-between text-[#EBEBEB] text-decoration-none py-2 my-4 border-top">
            <p>©️ 2025 CV-ALS, Alle Rechte vorbehalten.</p>
            <div class="flex gap-1">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a class="text-decoration-none text-[#EBEBEB] hover:text-black" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ strtoupper($localeCode) }}
                    </a>
                @endforeach
            </div>
        </div>
    </footer>

@else
    <footer class="py-3 px-5" style="background-color: var(--primary-color); color: var(--white)">
        <div class="row">
            <div class="col col-md-2 mb-3">
                <h5>Navigazione:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', [''])) }}" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Home</a></li>
                    <li class="nav-item mb-2"><a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', ['news'])) }}" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Novità</a></li>
                    <li class="nav-item mb-2"><a href="{{ LaravelLocalization::localizeUrl(route('frontend.page', ['media'])) }}" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Archivio media</a></li>
                </ul>
            </div>

            <div class="col col-md-2 mb-3">
                <h5>Legale:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none  text-[#EBEBEB] hover:text-black">FAQ</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Privacy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Accessibilità</a></li>
                </ul>
            </div>

            <div class="col col-md-2 mb-3">
                <h5>Contatti:</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="mailto:cv-als@spec.it" class="text-decoration-none  text-[#EBEBEB] hover:text-black">cv-als@pec.it</a></li>
                    <li class="nav-item mb-2"><a href="mailto:gerdsteger@hotmail.com" class="text-decoration-none  text-[#EBEBEB] hover:text-black">gerdsteger@hotmail.com</a></li>
                    <li class="nav-item mb-2"><a href="tel:+39 3284534583" class="text-decoration-none  text-[#EBEBEB] hover:text-black">+39 3284534583</a></li>
                    <li class="nav-item mb-2"><a href="" class="text-decoration-none  text-[#EBEBEB] hover:text-black">Rienzstr. 21 39040 Olang</a></li>
                </ul>
            </div>
            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Iscriviti alla newsletter</h5>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Indirizzo email</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Indirizzo email">
                        <button class="px-2 rounded-md py-[0.55rem] bg-[#1E1E1E] text-[#EBEBEB] hover:bg-[#0B3B8E] transition-colors duration-200" type="button">Iscriviti</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="flex justify-content-between text-[#EBEBEB] text-decoration-none py-2 my-4 border-top">
            <p>©️ 2025 CV-ALS, Tutti i diritti riservati.</p>
            <div class="flex gap-1">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a class="text-decoration-none text-[#EBEBEB] hover:text-black" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ strtoupper($localeCode) }}
                    </a>
                @endforeach
            </div>
        </div>
    </footer>
@endif
