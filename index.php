<?php
$pageTitle = "Saved As - Creative Agency";
$currentPage = "index";
include 'header.php';
?>

<section class="hero container mx-auto">
    <div class="hero-left">
        <h1>Brands are visible.<br>But not always memorable</h1>
    </div>
    <div class="hero-right">
        <!-- <p class="hero-desc">There's so much noise in the space where brands try to build their voices. We have a
                simple strategy for you to cut through the noise and hold your ground.</p>
            <p class="hero-tag">Creative Agency &#8599;</p> -->
    </div>
</section>

<section class="show-reel-section">
    <div class="show-reel">
        <video autoplay loop muted playsinline class="show-reel-video">
            <source src="./assets/showreel.mp4" type="video/mp4">
        </video>
    </div>
</section>

<section class="marquee-section">
    <div class="marquee-content">
        <span>4Degree</span>
        <span>The Indian Craft</span>
        <span>Old Mercara Foods</span>
        <span>Create Homes</span>
        <span>Residency Towers</span>
        <span>XTM Athletics</span>
        <!-- Duplicated for seamless scrolling -->
        <span>4Degree</span>
        <span>The Indian Craft</span>
        <span>Old Mercara Foods</span>
        <span>Create Homes</span>
        <span>Residency Towers</span>
        <span>XTM Athletics</span>
    </div>
</section>

<section class="recently-saved" id="works">
    <div class="section-header container mx-auto">
        <h2 class="underlined-title">Recently saved</h2>
        <a href="#" class="view-all">View all</a>
    </div>

    <div class="portfolio-content">
        <div class="portfolio-carousel" id="portfolio-carousel">
            <div class="portfolio-card">
                <img src="./assets/saved-image-1.png" alt="XTM Athletics" class="card-bg">
                <div class="portfolio-info">
                    <span class="portfolio-title">XTM Athletics</span>
                    <span class="portfolio-num"></span>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="./assets/saved-image-2.png" alt="Old Mercara" class="card-bg">
                <div class="portfolio-info">
                    <span class="portfolio-title">Old Mercara</span>
                    <span class="portfolio-num"></span>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="./assets/saved-image-3.png" class="card-bg">
                <div class="portfolio-info">
                    <span class="portfolio-title">4 Degrees</span>
                    <span class="portfolio-num"></span>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="./assets/saved-image-1.png" alt="Ezaar" class="card-bg">
                <div class="portfolio-info">
                    <span class="portfolio-title">Ezaar</span>
                    <span class="portfolio-num"></span>
                </div>
            </div>
            <div class="portfolio-card">
                <img src="./assets/saved-image-2.png" alt="The Dosa Story" class="card-bg">
                <div class="portfolio-info">
                    <span class="portfolio-title">The Dosa Story</span>
                    <span class="portfolio-num"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-footer container">
        <div class="portfolio-scrollbar-wrapper">
            <div class="custom-scrollbar-container">
                <div class="custom-track">
                    <div class="custom-thumb" id="portfolio-thumb"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services" id="services">
    <div class="section-header container mx-auto">
        <h2>Services</h2>
        <a href="#" class="view-all">View all</a>
    </div>

    <div class="services-content" id="services-content">
        <div class="services-carousel" id="services-carousel">
            <!-- Card 1 -->
            <div class="service-card" data-index="0" data-title="Branding"
                data-desc="Building memorable identities and stories. We create comprehensive branding packages that perfectly capture your company's essence.">
                <img src="./assets/service-image-1.png" alt="Branding" class="card-bg">
                <div class="service-card-content">
                    <h4>Branding</h4>
                    <p class="service-card-desc">Building memorable identities.</p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="service-card active" data-index="1" data-title="UI/UX"
                data-desc="From structuring user journeys to designing interfaces, we focus on clarity, ease of navigation, and visual alignment with your brand. The goal is simple: your website or product should feel intuitive to use and unmistakably yours at every touchpoint.">
                <img src="./assets/service-image-2.png" alt="UI/UX" class="card-bg">
                <div class="service-card-content">
                    <h4>UI/UX</h4>
                    <p class="service-card-desc">We design digital experiences with both logic and aesthetics in
                        mind.</p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="service-card" data-index="2" data-title="Graphic Design"
                data-desc="Visual storytelling through compelling art. We create stunning graphics, posters, and marketing materials that speak volumes about your brand's core values.">
                <img src="./assets/service-image-3.png" alt="Graphic Design" class="card-bg">
                <div class="service-card-content">
                    <h4>Graphic Design</h4>
                    <p class="service-card-desc">Visual storytelling through compelling art.</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="service-card" data-index="3" data-title="Social Media Management"
                data-desc="Engaging and growing your audience online. We handle content creation, scheduling, analytics, and community management across all platforms.">
                <img src="./assets/service-image-4.png" alt="Social Media Management" class="card-bg">
                <div class="service-card-content">
                    <h4>Social Media Management</h4>
                    <p class="service-card-desc">Engaging and growing your audience online.</p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="service-card" data-index="4" data-title="Photography"
                data-desc="Capturing moments perfectly through the lens. Professional photoshoots for products, events, corporate headshots, and brand campaigns.">
                <img src="./assets/service-image-5.png" alt="Photography" class="card-bg">
                <div class="service-card-content">
                    <h4>Photography</h4>
                    <p class="service-card-desc">Capturing moments perfectly through the lens.</p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="service-card" data-index="5" data-title="Video Production"
                data-desc="High-quality video content that tells your brand's story dynamically. From commercials to social reels.">
                <img src="./assets/service-image-1.png" alt="Video Production" class="card-bg">
                <div class="service-card-content">
                    <h4>Video Production</h4>
                    <p class="service-card-desc">Dynamic visual storytelling.</p>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="service-card" data-index="6" data-title="Web Development"
                data-desc="Custom, responsive, and blazing fast websites built with modern technologies tailored exactly to your needs.">
                <img src="./assets/service-image-2.png" alt="Web Development" class="card-bg">
                <div class="service-card-content">
                    <h4>Web Development</h4>
                    <p class="service-card-desc">Building digital foundations.</p>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="service-card" data-index="7" data-title="Copywriting"
                data-desc="Words that sell, persuade, and build trust. We write copy that perfectly matches your brand's voice.">
                <img src="./assets/service-image-3.png" alt="Copywriting" class="card-bg">
                <div class="service-card-content">
                    <h4>Copywriting</h4>
                    <p class="service-card-desc">Words that persuade and convert.</p>
                </div>
            </div>
            <!-- Card 9 -->
            <div class="service-card" data-index="8" data-title="SEO Optimization"
                data-desc="Data-driven strategies to improve your search rankings and bring organic traffic straight to your door.">
                <img src="./assets/service-image-4.png" alt="SEO Optimization" class="card-bg">
                <div class="service-card-content">
                    <h4>SEO Optimization</h4>
                    <p class="service-card-desc">Rank higher, reach further.</p>
                </div>
            </div>
            <!-- Card 10 -->
            <div class="service-card" data-index="9" data-title="3D Animation"
                data-desc="Immersive 3D visuals and animations that bring your most ambitious concepts into breathtaking reality.">
                <img src="./assets/service-image-5.png" alt="3D Animation" class="card-bg">
                <div class="service-card-content">
                    <h4>3D Animation</h4>
                    <p class="service-card-desc">Bringing concepts to reality.</p>
                </div>
            </div>
        </div>

        <div class="services-info-panel" id="services-info-panel">
            <div class="service-desc-block">
                <h3><span id="panel-title">UI/UX</span> <span class="light-text"></span></h3>
                <p id="panel-desc">From structuring user journeys to designing interfaces, we focus on clarity, ease
                    of navigation, and visual alignment with your brand. The goal is simple: your website or product
                    should feel intuitive to use and unmistakably yours at every touchpoint.</p>
            </div>
        </div>
    </div>

    <div class="services-scrollbar-wrapper">
        <div class="custom-scrollbar-container">
            <div class="custom-track">
                <div class="custom-thumb" id="panel-thumb"></div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll('.service-card');
        const infoPanel = document.getElementById('services-info-panel');
        const panelTitle = document.getElementById('panel-title');
        const panelDesc = document.getElementById('panel-desc');
        const panelThumb = document.getElementById('panel-thumb');
        const servicesContent = document.getElementById('services-content');

        function updatePanelPosition() {
            const activeCard = document.querySelector('.service-card.active');
            if (!activeCard) return;

            const index = parseInt(activeCard.dataset.index);

            // Position panel dynamically based on active card
            const cardRect = activeCard.getBoundingClientRect();
            const containerRect = servicesContent.getBoundingClientRect();

            // Relative left/right coordinates
            const relativeLeft = cardRect.right - containerRect.left;
            const relativeRight = containerRect.right - cardRect.left;

            // Determine if card is physically on the left or right half of the screen
            const cardCenter = cardRect.left + cardRect.width / 2;
            const containerCenter = containerRect.left + containerRect.width / 2;

            // If card is on the left half of the screen, show panel on its right
            if (cardCenter < containerCenter) {
                infoPanel.style.left = `${relativeLeft + 20}px`;
                infoPanel.style.right = 'auto';
            }
            // If card is on the right half of the screen, show panel on its left
            else {
                infoPanel.style.right = `${relativeRight + 20}px`;
                infoPanel.style.left = 'auto';
            }
        }

        function updatePanel(card) {
            cards.forEach(c => c.classList.remove('active'));
            card.classList.add('active');

            panelTitle.textContent = card.dataset.title;
            panelDesc.textContent = card.dataset.desc;

            // Allow CSS transition to start, then calculate bounds
            requestAnimationFrame(() => {
                updatePanelPosition();
            });
        }

        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                updatePanel(card);
            });
        });

        // Update positions during transitions for smoothness
        setInterval(updatePanelPosition, 20);

        // Initialize with the 3rd card to perfectly demonstrate "3 full center, 2 half edges"
        const carousel = document.getElementById('services-carousel');
        const initialCard = cards[2];
        updatePanel(initialCard);

        // Scroll to center initially
        setTimeout(() => {
            if (carousel) {
                const cardCenter = initialCard.offsetLeft + initialCard.offsetWidth / 2;
                carousel.scrollLeft = cardCenter - carousel.offsetWidth / 2;
            }
        }, 100);

        // Interactive Custom Scrollbar Logic
        function updateScrollThumb() {
            const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;
            if (maxScrollLeft > 0) {
                const scrollFraction = carousel.scrollLeft / maxScrollLeft;
                // Max translate is track width (130) - thumb width (45) - 6px padding = 79px
                panelThumb.style.transform = `translateX(${scrollFraction * 79}px)`;
            }
        }

        carousel.addEventListener('scroll', updateScrollThumb);

        // Make thumb draggable
        let isDragging = false;
        let startX;
        let startScrollLeft;

        panelThumb.addEventListener('mousedown', (e) => {
            isDragging = true;
            startX = e.pageX;
            startScrollLeft = carousel.scrollLeft;
            panelThumb.style.transition = 'none'; // Smooth drag
            document.body.style.userSelect = 'none'; // Prevent text selection while dragging
        });

        window.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            const x = e.pageX;
            const walk = x - startX;

            // Calculate scroll distance based on drag proportion
            const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;
            const scrollWalk = (walk / 79) * maxScrollLeft;

            carousel.scrollLeft = startScrollLeft + scrollWalk;
        });

        window.addEventListener('mouseup', () => {
            isDragging = false;
            panelThumb.style.transition = 'transform 0.1s linear';
            document.body.style.userSelect = '';
        });

        // Portfolio Scrollbar Logic
        const pCarousel = document.getElementById('portfolio-carousel');
        const pThumb = document.getElementById('portfolio-thumb');

        if (pCarousel && pThumb) {
            function updatePScrollThumb() {
                const maxScrollLeft = pCarousel.scrollWidth - pCarousel.clientWidth;
                if (maxScrollLeft > 0) {
                    const scrollFraction = pCarousel.scrollLeft / maxScrollLeft;
                    pThumb.style.transform = `translateX(${scrollFraction * 79}px)`;
                }
            }

            pCarousel.addEventListener('scroll', updatePScrollThumb);

            let pIsDragging = false;
            let pStartX;
            let pStartScrollLeft;

            pThumb.addEventListener('mousedown', (e) => {
                pIsDragging = true;
                pStartX = e.pageX;
                pStartScrollLeft = pCarousel.scrollLeft;
                pThumb.style.transition = 'none';
                document.body.style.userSelect = 'none';
            });

            window.addEventListener('mousemove', (e) => {
                if (!pIsDragging) return;
                const walk = e.pageX - pStartX;
                const maxScrollLeft = pCarousel.scrollWidth - pCarousel.clientWidth;
                const scrollWalk = (walk / 79) * maxScrollLeft;
                pCarousel.scrollLeft = pStartScrollLeft + scrollWalk;
            });

            window.addEventListener('mouseup', () => {
                pIsDragging = false;
                if (pThumb) pThumb.style.transition = 'transform 0.1s linear';
                document.body.style.userSelect = '';
            });
        }
    });
</script>


<section class="manifesto container mx-auto">
    <h2>Story Led, Design First,<br>Detail Driven</h2>
    <p class="manifesto-subtitle">Trusted by over <strong>60+ clients</strong> in a year</p>
</section>

<section class="split-images">
    <img src="./assets/led-design-2.jpg" style="height: 718px;" alt="Packaging Box" class="split-img">
    <img src="./assets/led-design-1.jpg" style="height: 718px;" alt="Cinnamon Rolls" class="split-img">
</section>

<section class="about container mx-auto" id="about">
    <div class="about-header">
        <h2>About</h2>
        <p class="about-subtitle">Barkha and Subangi, the<br>duo behind Saved As.</p>
    </div>

    <div class="about-content">
        <div class="about-image-wrapper">
            <img src="./assets/about.png" alt="Barkha and Subangi" class="founders-img">
        </div>

        <div class="about-text">
            <h3>Our Story</h3>
            <p>Saved As started with conversations. The kind that goes over late, mixing random ideas, custom
                observations, fine art, design, and everything in between.</p>
            <p>Founded by Barkha and Subangi, who bring together creative direction and design thinking. Saved As
                comes that same energy forward, now shaped with clarity, experience, and a strong shared point of
                view.</p>
            <a href="about.php" class="meet-team">Meet the team <span class="arrow-circle"><svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                        <path d="M1 7H15M9 13L15 7L9 1" stroke="black" style="stroke:black;stroke-opacity:1;"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></span></a>
        </div>
    </div>
</section>

<?php include 'get_in_touch.php'; ?>
<?php include 'footer.php'; ?>