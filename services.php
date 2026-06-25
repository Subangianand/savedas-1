<?php
$pageTitle = "Services — Saved As Creative Agency";
$currentPage = "services";
include 'header.php';
?>

<section class="show-reel-section">
    <div class="show-reel">
        <div class="show-reel-overlay">
            <h2>SHOW REEL</h2>
        </div>
    </div>
</section>

<section class="services-list-section container mx-auto">
    <div class="services-list-grid">
        <div class="services-list-left">
            <div class="services-list-header">
                <h2>Our Services</h2>
                <h3>Where collaboration shapes every step</h3>
                <p>A one-stop creative partner, shaping every touchpoint of your brand. From concept to execution, we
                    lead with clarity, consistency, and intent.</p>
            </div>

            <div class="services-list-items">
                <div class="service-list-item active">
                    <span class="svc-num">01</span>
                    <span class="svc-name">Branding</span>
                </div>
                <div class="service-list-item">
                    <span class="svc-num">02</span>
                    <span class="svc-name">UI/UX</span>
                </div>
                <div class="service-list-item">
                    <span class="svc-num">03</span>
                    <span class="svc-name">Graphic Design</span>
                </div>
                <div class="service-list-item">
                    <span class="svc-num">04</span>
                    <span class="svc-name">SM Management</span>
                </div>
                <div class="service-list-item">
                    <span class="svc-num">05</span>
                    <span class="svc-name">Photography</span>
                </div>
                <div class="service-list-item">
                    <span class="svc-num">06</span>
                    <span class="svc-name">Videography</span>
                </div>
            </div>
        </div>

        <div class="services-list-preview">
            <div class="services-preview-card">
                <div class="services-preview-image">
                    img
                    <span class="preview-img-client">client names</span>
                </div>
                <div class="services-preview-content">
                    <p class="services-preview-text">We build brand identities as full systems, not just logos. This
                        means defining how your brand looks, feels, and communicates across colours, typography,
                        layouts, tone,
                        and usage. Everything is designed to hold consistency across social, packaging, print, and
                        physical spaces, so
                        your brand doesn't just look good in isolation, it feels recognisable everywhere</p>

                    <span class="services-preview-title">Categories</span>
                    <div class="service-categories">
                        <span class="service-category-pill">Brand Identity</span>
                        <span class="service-category-pill">Packaging</span>
                        <span class="service-category-pill">Logos</span>
                        <span class="service-category-pill">Brand Guides</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const serviceItems = document.querySelectorAll('.services-list-items .service-list-item');
        const previewClient = document.querySelector('.preview-img-client');
        const previewText = document.querySelector('.services-preview-text');
        const previewCategories = document.querySelector('.service-categories');

        // Data for each service
        const servicesData = {
            '01': {
                client: 'client names',
                text: "We build brand identities as full systems, not just logos. This means defining how your brand looks, feels, and communicates across colours, typography, layouts, tone, and usage. Everything is designed to hold consistency across social, packaging, print, and physical spaces, so your brand doesn’t just look good in isolation, it feels recognisable everywhere",
                categories: ['Brand Identity', 'Packaging', 'Logos', 'Brand Guides']
            },
            '02': {
                client: 'techflow, datasync',
                text: "From structuring user journeys to designing interfaces, we focus on clarity, ease of navigation, and visual alignment with your brand. The goal is simple: your website or product should feel intuitive to use and unmistakably yours at every touchpoint.",
                categories: ['Wireframing', 'Prototyping', 'User Research', 'Interface Design']
            },
            '03': {
                client: 'fresh foods, urban wear',
                text: "Visual storytelling through compelling art. We create stunning graphics, posters, and marketing materials that speak volumes about your brand's core values.",
                categories: ['Illustration', 'Print Design', 'Digital Assets', 'Typography']
            },
            '04': {
                client: 'lifestyle co, modern fit',
                text: "Engaging and growing your audience online. We handle content creation, scheduling, analytics, and community management across all platforms.",
                categories: ['Content Strategy', 'Community', 'Analytics', 'Campaigns']
            },
            '05': {
                client: 'elite models, nature brand',
                text: "Capturing moments perfectly through the lens. Professional photoshoots for products, events, corporate headshots, and brand campaigns.",
                categories: ['Product', 'Portrait', 'Event', 'Commercial']
            },
            '06': {
                client: 'streamerz, cinemax',
                text: "High-quality video content that tells your brand's story dynamically. From commercials to social reels and corporate documentaries.",
                categories: ['Commercials', 'Reels', 'Editing', 'Motion Graphics']
            }
        };

        let currentId = null;
        let fadeTimeout = null;
        const previewContentWrap = document.querySelector('.services-preview-content');
        const elementsToFade = [previewClient, previewContentWrap];

        function updatePreview(item) {
            // Get the number ID (01, 02, etc.) to fetch the correct data
            const id = item.querySelector('.svc-num').textContent.trim();
            if (id === currentId) return; // Prevent re-triggering for the same item

            const data = servicesData[id];
            if (!data) return;

            // Update active styling immediately
            serviceItems.forEach(el => el.classList.remove('active'));
            item.classList.add('active');
            currentId = id;

            // Clear previous timeout if user hovers quickly
            if (fadeTimeout) clearTimeout(fadeTimeout);

            // Fade out the content
            elementsToFade.forEach(el => el.classList.add('fade-out'));

            // Wait 300ms for transition, then update content and fade in
            fadeTimeout = setTimeout(() => {
                previewClient.textContent = data.client;
                previewText.textContent = data.text;

                // Update categories pills
                previewCategories.innerHTML = '';
                data.categories.forEach(cat => {
                    const span = document.createElement('span');
                    span.className = 'service-category-pill';
                    span.textContent = cat;
                    previewCategories.appendChild(span);
                });

                // Fade content back in
                elementsToFade.forEach(el => el.classList.remove('fade-out'));
            }, 300);
        }

        serviceItems.forEach(item => {
            item.addEventListener('click', () => updatePreview(item));
        });
    });
</script>

<section class="approach-section container mx-auto">
    <h2 class="approach-title">Our Approach</h2>
    <p class="approach-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>sed do eiusmod tempor
        incididunt ut labore et dolore<br>magna aliqua.</p>

    <div class="approach-steps">
        <div class="approach-step active">
            <div class="step-header">
                <span class="step-num">Step 1</span>
                <h3>Listen</h3>
            </div>
            <div class="step-content">
                <p>We start by understanding your brand uncovering nuances, gaps, and opportunities that shape
                    everything that follows.</p>
                <ul>
                    <li>What you stand for</li>
                    <li>Who you're speaking to</li>
                    <li>Where you want to go.</li>
                </ul>
            </div>
        </div>
        <div class="approach-step">
            <div class="step-header">
                <span class="step-num">Step 2</span>
                <h3>Strategize</h3>
            </div>
            <div class="step-content">
                <p>We define the vision, strategy, and creative direction that will guide the work forward.</p>
            </div>
        </div>
        <div class="approach-step">
            <div class="step-header">
                <span class="step-num">Step 3</span>
                <h3>Create</h3>
            </div>
            <div class="step-content">
                <p>We design the creative assets and experiences that bring the idea to life.</p>
            </div>
        </div>
        <div class="approach-step">
            <div class="step-header">
                <span class="step-num">Step 4</span>
                <h3>Refine</h3>
            </div>
            <div class="step-content">
                <p>We polish, test, and perfect every detail so the final output feels effortless.</p>
            </div>
        </div>
        <div class="approach-step">
            <div class="step-header">
                <span class="step-num">Step 5</span>
                <h3>Launch &<br>evolve</h3>
            </div>
            <div class="step-content">
                <p>We support the rollout and continue evolving the brand with fresh ideas.</p>
            </div>
        </div>
    </div>
</section>

<section class="large-quote container mx-auto">
    <blockquote>Lorem ipsum <br />
        dolor sit amet, conse</blockquote>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. </p>
</section>

<section class="listen-section">
    <div class="listen-card-wrap">
        <div class="listen-bg-text left">work</div>
        <div class="listen-bg-text right">img</div>

        <!-- Slider track -->
        <div class="testimonial-slider">
            <!-- Slide 1 -->
            <div class="testimonial-slide active">
                <div class="testimonial-card testimonial-card--light">
                    <div class="testimonial-top">
                        <div class="testimonial-avatar-row">
                            <div class="testimonial-avatar">
                                <div class="avatar-img">
                                    <img src="./assets/user.png" />
                                </div>
                            </div>
                            <div class="testimonial-author">
                                <strong>Sarah Johnson</strong>
                                <span>CEO, TechFlow</span>
                            </div>
                        </div>
                    </div>
                    <div class="quote-image-section">
                        <img src="./assets/quote.png" />
                    </div>
                    <div class="testimonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                    <div class="testimonial-meta">
                        <span>TechFlow Inc.</span>
                        <span>@techflow</span>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="testimonial-slide">
                <div class="testimonial-card testimonial-card--light">
                    <div class="testimonial-top">
                        <div class="testimonial-avatar-row">
                            <div class="testimonial-avatar">
                                <div class="avatar-img">
                                    <img src="./assets/user.png" />
                                </div>
                            </div>
                            <div class="testimonial-author">
                                <strong>Marcus Reid</strong>
                                <span>Founder, UrbanWear</span>
                            </div>
                        </div>
                    </div>
                    <div class="quote-image-section">
                        <img src="./assets/quote.png" />
                    </div>
                    <div class="testimonial-body">
                        <p>Working with Saved As transformed our brand identity completely. Their creative direction and
                            execution were beyond what we imagined.</p>
                    </div>
                    <div class="testimonial-meta">
                        <span>UrbanWear Co.</span>
                        <span>@urbanwear</span>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="testimonial-slide">
                <div class="testimonial-card testimonial-card--light">
                    <div class="testimonial-top">
                        <div class="testimonial-avatar-row">
                            <div class="testimonial-avatar">
                                <div class="avatar-img">
                                    <img src="./assets/user.png" />
                                </div>
                            </div>
                            <div class="testimonial-author">
                                <strong>Priya Nair</strong>
                                <span>Head of Brand, Datasync</span>
                            </div>
                        </div>
                    </div>
                    <div class="quote-image-section">
                        <img src="./assets/quote.png" />
                    </div>
                    <div class="testimonial-body">
                        <p>The team understood our vision from day one. Every deliverable felt purposeful, consistent,
                            and unmistakably us across every platform.</p>
                    </div>
                    <div class="testimonial-meta">
                        <span>Datasync Labs</span>
                        <span>@datasync</span>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="testimonial-slide">
                <div class="testimonial-card testimonial-card--light">
                    <div class="testimonial-top">
                        <div class="testimonial-avatar-row">
                            <div class="testimonial-avatar">
                                <div class="avatar-img">
                                    <img src="./assets/user.png" />
                                </div>
                            </div>
                            <div class="testimonial-author">
                                <strong>James Okafor</strong>
                                <span>Creative Director, Cinemax</span>
                            </div>
                        </div>
                    </div>
                    <div class="quote-image-section">
                        <img src="./assets/quote.png" />
                    </div>
                    <div class="testimonial-body">
                        <p>From strategy to execution, they bring clarity to every touchpoint. Our brand feels alive and
                            recognisable wherever it shows up.</p>
                    </div>
                    <div class="testimonial-meta">
                        <span>Cinemax Studios</span>
                        <span>@cinemax</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Synced scroll bar -->
    <div class="listen-scroll-indicator">
        <div class="scroll-bar" id="testimonialScrollBar">
            <div class="scroll-thumb" id="testimonialScrollThumb"></div>
        </div>
    </div>
</section>

<script>
    (function () {
        const slides = document.querySelectorAll('.testimonial-slide');
        const scrollBar = document.getElementById('testimonialScrollBar');
        const scrollThumb = document.getElementById('testimonialScrollThumb');
        const totalSlides = slides.length;
        let currentSlide = 0;
        let isDragging = false;

        // Thumb sizing with 10px padding on each side
        const padding = 10;

        function getTrackWidth() {
            return scrollBar.offsetWidth - (padding * 2);
        }

        function updateThumbSize() {
            const trackWidth = getTrackWidth();
            const thumbWidth = trackWidth / totalSlides;
            scrollThumb.style.width = thumbWidth + 'px';
        }
        updateThumbSize();

        function goToSlide(index) {
            slides[currentSlide].classList.remove('active');
            currentSlide = Math.max(0, Math.min(index, totalSlides - 1));
            slides[currentSlide].classList.add('active');
            updateThumb();
        }

        function updateThumb() {
            const trackWidth = getTrackWidth();
            const thumbWidth = trackWidth / totalSlides;
            const leftPx = padding + (currentSlide * thumbWidth);
            scrollThumb.style.left = leftPx + 'px';
        }

        // Click on scroll bar to jump to a slide
        scrollBar.addEventListener('click', function (e) {
            const rect = scrollBar.getBoundingClientRect();
            const clickX = e.clientX - rect.left - padding;
            const trackWidth = getTrackWidth();
            const ratio = clickX / trackWidth;
            const targetSlide = Math.floor(ratio * totalSlides);
            goToSlide(targetSlide);
        });

        // Drag the scroll thumb
        scrollThumb.addEventListener('mousedown', function (e) {
            isDragging = true;
            e.preventDefault();
        });

        document.addEventListener('mousemove', function (e) {
            if (!isDragging) return;
            const rect = scrollBar.getBoundingClientRect();
            const dragX = e.clientX - rect.left - padding;
            const trackWidth = getTrackWidth();
            const ratio = dragX / trackWidth;
            const targetSlide = Math.floor(ratio * totalSlides);
            goToSlide(Math.max(0, Math.min(targetSlide, totalSlides - 1)));
        });

        document.addEventListener('mouseup', function () {
            isDragging = false;
        });

        // Touch support
        scrollThumb.addEventListener('touchstart', function (e) {
            isDragging = true;
        }, { passive: true });

        document.addEventListener('touchmove', function (e) {
            if (!isDragging) return;
            const rect = scrollBar.getBoundingClientRect();
            const touch = e.touches[0];
            const dragX = touch.clientX - rect.left - padding;
            const trackWidth = getTrackWidth();
            const ratio = dragX / trackWidth;
            goToSlide(Math.floor(ratio * totalSlides));
        }, { passive: true });

        document.addEventListener('touchend', function () {
            isDragging = false;
        });

        // Initialise
        updateThumb();
    })();
</script>

<?php include 'get_in_touch.php'; ?>
<?php include 'footer.php'; ?>