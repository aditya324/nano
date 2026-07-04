const onReady = (callback) => {
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", callback);
        return;
    }
    callback();
};

onReady(() => {
    const branchBtn = document.getElementById("hospitalDropdownBtn");
    const branchMenu = document.getElementById("hospitalDropdownMenu");

    if (branchBtn && branchMenu) {
        branchBtn.addEventListener("click", () => {
            branchMenu.classList.toggle("hidden");
        });

        document.addEventListener("click", (event) => {
            if (!branchBtn.contains(event.target) && !branchMenu.contains(event.target)) {
                branchMenu.classList.add("hidden");
            }
        });
    }

    const openBtn = document.getElementById("openMobileMenu");
    const closeBtn = document.getElementById("closeMobileMenu");
    const mobileMenu = document.getElementById("mobileMenuOverlay");

    if (openBtn && closeBtn && mobileMenu) {
        openBtn.addEventListener("click", () => {
            mobileMenu.classList.remove("hidden");
            document.body.style.overflow = "hidden";
        });

        closeBtn.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
            document.body.style.overflow = "";
        });
    }

    const mobileHealthCornerToggle = document.getElementById("mobileHealthCornerToggle");
    const mobileHealthCornerMenu = document.getElementById("mobileHealthCornerMenu");
    const mobileHealthCornerChevron = document.getElementById("mobileHealthCornerChevron");

    if (mobileHealthCornerToggle && mobileHealthCornerMenu) {
        mobileHealthCornerToggle.addEventListener("click", () => {
            const isHidden = mobileHealthCornerMenu.classList.contains("hidden");
            mobileHealthCornerMenu.classList.toggle("hidden");
            if (mobileHealthCornerChevron) {
                mobileHealthCornerChevron.classList.toggle("rotate-180", isHidden);
            }
        });
    }

    const mobileHospitalToggle = document.getElementById("mobileHospitalToggle");
    const mobileHospitalMenu = document.getElementById("mobileHospitalMenu");
    const mobileHospitalChevron = document.getElementById("mobileHospitalChevron");

    if (mobileHospitalToggle && mobileHospitalMenu) {
        mobileHospitalToggle.addEventListener("click", () => {
            const isHidden = mobileHospitalMenu.classList.contains("hidden");
            mobileHospitalMenu.classList.toggle("hidden");
            if (mobileHospitalChevron) {
                mobileHospitalChevron.classList.toggle("rotate-180", isHidden);
            }
        });
    }

    const mobileLocationSelect = document.getElementById("mobileLocationSelect");
    if (mobileLocationSelect) {
        mobileLocationSelect.addEventListener("change", function changeLocation() {
            if (this.value) {
                window.location.href = this.value;
            }
        });
    }

    const hamInput = document.getElementById("hamburger-live-search");
    const hamResults = document.getElementById("hamburger-search-results");
    let hamTimeout = null;

    if (hamInput && hamResults) {
        hamInput.addEventListener("input", () => {
            clearTimeout(hamTimeout);
            const query = hamInput.value.trim();

            if (query.length < 2) {
                hamResults.innerHTML = "";
                hamResults.classList.add("hidden");
                return;
            }

            hamResults.innerHTML = '<div class="px-4 py-3 text-sm text-gray-400">Searching...</div>';
            hamResults.classList.remove("hidden");

            hamTimeout = setTimeout(() => {
                fetch(`/search/live?q=${encodeURIComponent(query)}`)
                    .then((res) => res.json())
                    .then((data) => {
                        let html = "";

                        const buildSection = (items, label) => {
                            if (!items || items.length === 0) return "";
                            return `
                                <div class="px-4 py-2 text-xs font-semibold text-gray-400 uppercase">${label}</div>
                                ${items
                                    .map(
                                        (item) => `
                                    <a href="${item.url}" class="block px-4 py-2 text-sm hover:bg-gray-100 transition">
                                        ${item.title}
                                        ${
                                            label === "Doctors"
                                                ? `<div class="text-xs text-gray-500">${[
                                                      item.speciality,
                                                      item.location,
                                                  ]
                                                      .filter(Boolean)
                                                      .join(" | ")}</div>`
                                                : ""
                                        }
                                    </a>
                                `
                                    )
                                    .join("")}
                            `;
                        };

                        html += buildSection(data.doctors, "Doctors");
                        html += buildSection(data.specialities, "Specialities");
                        html += buildSection(data.procedures, "Procedures");
                        html += buildSection(data.conditions, "Conditions");
                        html += buildSection(data.health_packages, "Health Packages");
                        html += buildSection(data.health_facilities, "Health Facilities");

                        if (!html) {
                            html = '<div class="px-4 py-3 text-sm text-gray-500">No results found</div>';
                        }

                        hamResults.innerHTML = html;
                    })
                    .catch(() => {
                        hamResults.innerHTML =
                            '<div class="px-4 py-3 text-sm text-red-500">Error loading results</div>';
                    });
            }, 300);
        });

        document.addEventListener("click", (event) => {
            if (
                !event.target.closest("#hamburger-live-search") &&
                !event.target.closest("#hamburger-search-results")
            ) {
                hamResults.classList.add("hidden");
            }
        });
    }

    const contactModal = document.getElementById("contactModal");
    const scriptData = document.getElementById("header-script-data");
    const callIcon = scriptData?.dataset.callIcon || "";
    const whatsappIcon = scriptData?.dataset.whatsappIcon || "";

    if (contactModal) {
        window.openContact = (type) => {
            contactModal.classList.remove("hidden");
            contactModal.classList.add("flex");

            if (type === "call") {
                setItem(
                    "Uttarahalli Number",
                    "+91 87672 00300",
                    "tel:+918767200300",
                    callIcon,
                    "Hulimavu Number",
                    "+91 89295 00500",
                    "tel:+918929500500"
                );
            }

            if (type === "whatsapp") {
                setItem(
                    "Uttarahalli WhatsApp",
                    "+91 87672 00300",
                    "https://wa.me/918767200300?text=Hi",
                    whatsappIcon,
                    "Hulimavu WhatsApp",
                    "+91 89295 00500",
                    "https://wa.me/918929500500?text=Hi"
                );
            }
        };

        const setItem = (l1, v1, h1, i, l2, v2, h2) => {
            const label1 = document.getElementById("label1");
            const value1 = document.getElementById("value1");
            const item1 = document.getElementById("item1");
            const icon1 = document.getElementById("icon1");
            const label2 = document.getElementById("label2");
            const value2 = document.getElementById("value2");
            const item2 = document.getElementById("item2");
            const icon2 = document.getElementById("icon2");

            if (label1) label1.innerText = l1;
            if (value1) value1.innerText = v1;
            if (item1) item1.href = h1;
            if (icon1 && i) icon1.src = i;
            if (label2) label2.innerText = l2;
            if (value2) value2.innerText = v2;
            if (item2) item2.href = h2;
            if (icon2 && i) icon2.src = i;
        };

        contactModal.addEventListener("click", (event) => {
            if (event.target === contactModal) {
                contactModal.classList.add("hidden");
                contactModal.classList.remove("flex");
            }
        });
    }

    const css = `
nav li.special .mega .col-middle::-webkit-scrollbar { width: 4px !important; }
nav li.special .mega .col-middle::-webkit-scrollbar-track { background: transparent !important; }
nav li.special .mega .col-middle::-webkit-scrollbar-thumb { background: #222 !important; border-radius: 10px !important; }
nav li.special .mega .col-middle::-webkit-scrollbar-thumb:hover { background: #000 !important; }
nav li.special .mega .col-middle { scrollbar-width: thin !important; scrollbar-color: #222 transparent !important; overflow-y: auto !important; }
.mega .col-middle::-webkit-scrollbar { width: 4px !important; }
.mega .col-middle::-webkit-scrollbar-track { background: transparent !important; }
.mega .col-middle::-webkit-scrollbar-thumb { background: #222 !important; border-radius: 10px !important; }
.mega .col-middle { scrollbar-width: thin !important; scrollbar-color: #222 transparent !important; overflow-y: auto !important; }
`;

    if (!document.head.querySelector('style[data-injected="mega-scrollbar-fix"]')) {
        const style = document.createElement("style");
        style.setAttribute("data-injected", "mega-scrollbar-fix");
        style.appendChild(document.createTextNode(css));
        document.head.appendChild(style);
    }

    const closeDelayMs = 400;
    const desktopMegaMq = window.matchMedia("(min-width: 768px)");
    document.querySelectorAll("nav li.special").forEach((li) => {
        let closeTimer = null;

        li.addEventListener("mouseenter", () => {
            if (!desktopMegaMq.matches) return;
            if (closeTimer) {
                clearTimeout(closeTimer);
                closeTimer = null;
            }
            li.classList.add("mega-hover-persist");
        });

        li.addEventListener("mouseleave", () => {
            if (!desktopMegaMq.matches) {
                li.classList.remove("mega-hover-persist");
                return;
            }
            closeTimer = setTimeout(() => {
                li.classList.remove("mega-hover-persist");
                closeTimer = null;
            }, closeDelayMs);
        });
    });

    document.querySelectorAll(".condition-col .view-more").forEach((btn) => {
        btn.addEventListener("click", function expandConditionList() {
            const column = this.closest(".condition-col");
            if (column) {
                column.classList.add("expanded");
            }
        });
    });

    const facilityMenu = document.querySelector(".facility-menu");
    const facilityToggle = document.getElementById("facilityToggle");
    const facilityMega = document.getElementById("facilityMegaMenu");
    if (facilityMenu && facilityToggle && facilityMega) {
        facilityToggle.addEventListener("click", (event) => {
            event.preventDefault();
            event.stopPropagation();
            const isOpen = facilityMenu.classList.toggle("open");
            facilityMega.setAttribute("aria-hidden", String(!isOpen));
        });

        document.addEventListener("click", (event) => {
            if (!facilityMenu.contains(event.target)) {
                facilityMenu.classList.remove("open");
                facilityMega.setAttribute("aria-hidden", "true");
            }
        });

        document.addEventListener("keydown", (event) => {
            if (event.key === "Escape") {
                facilityMenu.classList.remove("open");
                facilityMega.setAttribute("aria-hidden", "true");
            }
        });
    }
});
