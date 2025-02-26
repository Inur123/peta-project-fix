<footer class="bg-black text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <img src="{{ asset('images/navigasi.svg') }}" alt="Peta Project"
                    style="width: auto; height: 180px; margin-bottom: 0rem" />
            </div>
            <div>
                <h3 class="text-lg font-bold mb-4">Kategori</h3>
                <ul class="text-sm space-y-2">
                    <li><a href="{{ route('berita.index') }}" class="hover:text-red-600">Berita</a></li>
                    <li><a href="{{ route('opini.index') }}" class="hover:text-red-600">Opini</a></li>
                    <li><a href="{{ route('podcast.index') }}" class="hover:text-red-600">Podcast</a></li>
                </ul>
            </div>
            <div>

                <h3 class="text-lg font-bold mb-4">Lokasi</h3>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4178.985994834728!2d111.47038739999999!3d-7.838570099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e799fb93a60f1eb%3A0xc881df8a35de923a!2sAhmad%20Segut%2C%20S.H.%20%26%20Partners!5e1!3m2!1sid!2sid!4v1739457143630!5m2!1sid!2sid"
                    class="w-full rounded-lg" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="grid-cols-1">
                <h3 class="text-lg font-bold mb-4" >Ikuti Kami</h3>
                <div class="flex space-x-4">
                    {{-- facebook --}}
                    <a href="https://www.facebook.com/profile.php?id=61558734704633" class="text-white hover:text-red-600" target="_blank">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    {{-- tiktok --}}
                    <a href="https://www.tiktok.com/@petaproject?_t=ZS-8tsm5pToCRu&_r=1" class="text-white hover:text-red-600" target="_blank">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M16.75 5.31a4.91 4.91 0 0 0 3.57 1.48v3.12a8.53 8.53 0 0 1-4.97-1.56v6.82a6.56 6.56 0 1 1-6.56-6.56c.25 0 .5 0 .75.04v3.17a3.4 3.4 0 0 0-.75-.08 3.45 3.45 0 1 0 3.45 3.45V2.5h3.2a5 5 0 0 0 1.31 2.81z"></path>
                        </svg>
                    </a>
                    {{-- instagram --}}
                    <a href="https://www.instagram.com/petaprojectt?igsh=MWV6OG00NGhwejRiOA==" target="_blank" class="text-white hover:text-red-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    {{-- youtube --}}
                    <a href="https://www.youtube.com/@petaproject" target="_blank"  class="text-white hover:text-red-600">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M10 15.5V8.5l6 3.5-6 3.5zm9-11.5H5c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-11c0-1.1-.9-2-2-2z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="bg-black pt-10 pb-5">
    <div class="flex items-center">
        <div class="border-t border-4 border-[#be2c13] flex-grow"></div>
        <div class="px-3 text-white text-l">
            <span> © {{ date('Y') }} Peta Project | All Rights Reserved.</span>
        </div>

        <div class="border-t border-4 border-[#be2c13] flex-grow"></div>
    </div>
</footer>
