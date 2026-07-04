<!-- Floating Search Button (visible on all screens when scrolled, like scroll-to-top) -->
<div id="floatingSearchWrapper"
     class="fixed bottom-40 right-6 z-50 hidden">

    <button id="searchToggleBtn"
            class="w-12 h-12 flex items-center justify-center hidden
                   bg-white text-red-500 rounded-full shadow-lg active:scale-95 border border-red-500">

        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
</div>




<!-- Search Modal -->
<!-- Search Modal -->
<div id="searchModal"
     class="fixed inset-0 bg-black/40 backdrop-blur-sm z-[60] hidden
             items-center justify-center p-4">

    <div class="bg-white w-full max-w-md rounded-xl shadow-2xl p-5 relative overflow-visible">

        <button id="closeSearchModal"
                class="absolute top-3 right-3 text-gray-500 hover:text-red-500">
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>

        <h2 class="text-lg font-semibold mb-4 text-gray-700">Search</h2>

        <div class="relative">
            <div class="flex items-center border rounded-lg overflow-hidden">
                <input id="mobile-live-search" type="text"
                       placeholder="Type to search..."
                       class="flex-1 px-4 py-2 outline-none text-sm">

                <button class="px-4 text-red-500">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>

            <div id="mobile-search-results"
                 class="absolute top-full left-0 w-full bg-white border rounded-lg shadow-lg mt-2 hidden max-h-72 overflow-y-auto z-[70]">
            </div>
        </div>
    </div>
</div>




<!-- Scroll To Top Floating Wrapper + Social -->
<div id="scrollTopWrapper"
     class="fixed lg:bottom-10 bottom-22 right-6 z-50 flex flex-col items-center gap-3 hidden">

    <!-- Scroll to top button -->
    <button id="scrollTopBtn"
            class="w-12 h-12 flex items-center justify-center
                   bg-red-500 text-white rounded-full shadow-lg
                   hover:bg-red-600 hover:scale-110 relative">

        <svg class="absolute inset-0 w-full h-full -rotate-90 pointer-events-none"
             viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="46" fill="none" stroke="#fecaca" stroke-width="6"/>
            <circle id="progressRing" cx="50" cy="50" r="46"
                    fill="none" stroke="red" stroke-width="6"
                    stroke-dasharray="289" stroke-dashoffset="289"
                    stroke-linecap="round"/>
        </svg>

        <span class="relative z-10">
            <i class="fa-solid fa-arrow-up"></i>
        </span>
    </button>

    <!-- Social toggle + panel (moved from welcome) -->
    <div class="relative flex flex-col items-center text-sm text-red-500 font-semibold">
        
        <img id="socialToggle"
             src="{{ asset('assets/icons/social-icons.png') }}"
             alt="Social Icons"
             class="cursor-pointer w-14 h-14 object-contain
                    transition-transform duration-300 ease-out shadow-xl rounded-full mt-1" />
                    <p class="mt-1 text-gray-700 font-semibold">Follow us</p>
        <!-- LEFT SLIDE PANEL -->
        <div id="socialDropdown"
             class="absolute right-full mr-4 top-14 -translate-y-1/2
                    rounded-full px-4 py-2
                    flex items-center gap-4
                    opacity-0 translate-x-6 scale-95
                    pointer-events-none
                    transition-all duration-500 ease-out border border-gray-200 bg-white">

            <a href="https://www.facebook.com/nanohospitalss/"
               target="_blank"
               class="w-8 h-8 flex items-center justify-center
                      rounded-full bg-gray-200
                      hover:bg-gray-300 hover:scale-110
                      transition duration-300">
                <i class="fa-brands fa-facebook-f text-gray-700 text-lg"></i>
            </a>

            <a href="https://www.instagram.com/nanohospitals/?hl=en"
               target="_blank"
               class="w-8 h-8 flex items-center justify-center
                      rounded-full bg-gray-200
                      hover:bg-gray-300 hover:scale-110
                      transition duration-300">
                <i class="fa-brands fa-instagram text-gray-700 text-lg"></i>
            </a>

            <a href="https://youtube.com/@nanohospitals"
               target="_blank"
               class="w-8 h-8 flex items-center justify-center
                      rounded-full bg-gray-200
                      hover:bg-gray-300 hover:scale-110
                      transition duration-300">
                <i class="fa-brands fa-youtube text-gray-700 text-lg"></i>
            </a>

            <a href="https://linkedin.com/company/nanohospitals"
               target="_blank"
               class="w-8 h-8 flex items-center justify-center
                      rounded-full bg-gray-200
                      hover:bg-gray-300 hover:scale-110
                      transition duration-300">
                <i class="fa-brands fa-linkedin-in text-gray-700 text-lg"></i>
            </a>

            <a href="https://x.com/HospitalsNano"
               target="_blank"
               class="w-8 h-8 flex items-center justify-center
                      rounded-full bg-gray-200
                      hover:bg-gray-300 hover:scale-110
                      transition duration-300">
                <i class="fa-brands fa-x-twitter text-gray-700 text-lg"></i>
            </a>
        </div>
    </div>
</div>

@once
@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

    // ---------- MOBILE SEARCH MODAL ----------
    const searchBtn = document.getElementById("searchToggleBtn");
    const searchModal = document.getElementById("searchModal");
    const closeSearchModal = document.getElementById("closeSearchModal");
    const floatingSearchWrapper = document.getElementById("floatingSearchWrapper");

    if (searchBtn && searchModal) {
        const openModal = () => {
            searchModal.classList.remove("hidden");
            searchModal.classList.add("flex");
            document.getElementById("mobile-live-search").focus();
        };

        const closeModal = () => {
            searchModal.classList.add("hidden");
            searchModal.classList.remove("flex");
            document.getElementById("mobile-search-results").classList.add("hidden");
        };

        // Expose for other components (e.g., floating-contact)
        window.openSearchModal = openModal;

        searchBtn.addEventListener("click", openModal);
        closeSearchModal.addEventListener("click", closeModal);
        searchModal.addEventListener("click", e => { if (e.target === searchModal) closeModal(); });
        document.addEventListener("keydown", e => { if (e.key === "Escape") closeModal(); });

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                floatingSearchWrapper.classList.remove("hidden");
            } else {
                floatingSearchWrapper.classList.add("hidden");
            }
        });
    }

    // ---------- MOBILE LIVE SEARCH ----------
    const mobileInput = document.getElementById("mobile-live-search");
    const mobileResultsBox = document.getElementById("mobile-search-results");
    let timeout = null;

    if (mobileInput && mobileResultsBox) {
        mobileInput.addEventListener("input", () => {
            clearTimeout(timeout);
            const query = mobileInput.value.trim();

            if (query.length < 2) {
                mobileResultsBox.innerHTML = "";
                mobileResultsBox.classList.add("hidden");
                return;
            }

            mobileResultsBox.innerHTML = `<div class="px-4 py-3 text-sm text-gray-400">Searching...</div>`;
            mobileResultsBox.classList.remove("hidden");

            timeout = setTimeout(() => {
                fetch(`/search/live?q=${encodeURIComponent(query)}`)
                    .then(res => res.json())
                    .then(data => {
                        let html = "";

                        const buildSection = (items, label) => {
                            if (!items || items.length === 0) return "";
                            return `
                                <div class="px-4 py-2 text-xs font-semibold text-gray-400 uppercase">${label}</div>
                                ${items.map(item => `
                                    <a href="${item.url}" class="block px-4 py-2 text-sm hover:bg-gray-100 transition">
                                        ${item.title}
                                        ${label === "Doctors" ? `<div class="text-xs text-gray-500">${[item.speciality, item.location].filter(Boolean).join(" | ")}</div>` : ""}
                                    </a>
                                `).join("")}
                            `;
                        };

                        html += buildSection(data.doctors, "Doctors");
                        html += buildSection(data.specialities, "Specialities");
                        html += buildSection(data.procedures, "Procedures");
                        html += buildSection(data.conditions, "Conditions");
                        html += buildSection(data.health_packages, "Health Packages");
                        html += buildSection(data.health_facilities, "Health Facilities");  

                        if (!html) {
                            html = `<div class="px-4 py-3 text-sm text-gray-500">No results found</div>`;
                        }

                        mobileResultsBox.innerHTML = html;
                    })
                    .catch(() => {
                        mobileResultsBox.innerHTML = `<div class="px-4 py-3 text-sm text-red-500">Error loading results</div>`;
                    });
            }, 300);
        });

        document.addEventListener("click", (e) => {
            if (!e.target.closest("#mobile-live-search") && !e.target.closest("#mobile-search-results")) {
                mobileResultsBox.classList.add("hidden");
            }
        });
    }

    // ---------- SCROLL TO TOP ----------
    const wrapper = document.getElementById("scrollTopWrapper");
    const progressRing = document.getElementById("progressRing");

    if (wrapper && progressRing) {
        const radius = 46;
        const circumference = 2 * Math.PI * radius;

        window.addEventListener("scroll", () => {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;

            if (scrollTop > 300) wrapper.classList.remove("hidden");
            else wrapper.classList.add("hidden");

            const progress = docHeight ? scrollTop / docHeight : 0;
            progressRing.style.strokeDashoffset = circumference - progress * circumference;
        });

        wrapper.addEventListener("click", (e) => {
            // Only trigger scroll when clicking the button, not social icons
            if (e.target.closest("#scrollTopBtn")) {
                window.scrollTo({ top: 0, behavior: "smooth" });
            }
        });
    }

    // ---------- SOCIAL TOGGLE (moved from welcome) ----------
    const socialToggle = document.getElementById("socialToggle");
    const socialDropdown = document.getElementById("socialDropdown");
    let socialOpen = false;

    if (socialToggle && socialDropdown) {
        socialToggle.addEventListener("click", (e) => {
            e.stopPropagation();
            socialOpen = !socialOpen;

            if (socialOpen) {
                socialDropdown.classList.remove("pointer-events-none", "opacity-0");
                socialDropdown.classList.add("opacity-100");
                socialDropdown.style.transform = "translateY(-50%) translateX(0)";
                socialToggle.style.transform = "rotate(15deg)";
            } else {
                socialDropdown.classList.add("pointer-events-none", "opacity-0");
                socialDropdown.classList.remove("opacity-100");
                socialDropdown.style.transform = "translateY(-50%) translateX(1.5rem)";
                socialToggle.style.transform = "rotate(0deg)";
            }
        });

        document.addEventListener("click", () => {
            if (!socialOpen) return;
            socialOpen = false;
            socialDropdown.classList.add("pointer-events-none", "opacity-0");
            socialDropdown.classList.remove("opacity-100");
            socialDropdown.style.transform = "translateY(-50%) translateX(1.5rem)";
            socialToggle.style.transform = "rotate(0deg)";
        });
    }

});
</script>
@endpush
@endonce
