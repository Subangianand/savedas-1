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

<section class="services-list-section">
    <div class="services-list-header container">
        <h2>Our Services</h2>
        <p>Where collaboration shapes every step. A one-stop creative partner shaping every touchpoint of your brand.
            From concept to execution, we lead with clarity, consistency, and intent.</p>
    </div>

    <div class="services-list-grid container">
        <div class="services-list-items">
            <div class="service-list-item active">
                <span class="svc-num">01</span>
                <span class="svc-name">Branding</span>
                <span class="svc-arrow">&#8594;</span>
            </div>
            <div class="service-list-item">
                <span class="svc-num">02</span>
                <span class="svc-name">UI/UX</span>
                <span class="svc-arrow">&#8594;</span>
            </div>
            <div class="service-list-item">
                <span class="svc-num">03</span>
                <span class="svc-name">Graphic Design</span>
                <span class="svc-arrow">&#8594;</span>
            </div>
            <div class="service-list-item">
                <span class="svc-num">04</span>
                <span class="svc-name">SM Management</span>
                <span class="svc-arrow">&#8594;</span>
            </div>
            <div class="service-list-item">
                <span class="svc-num">05</span>
                <span class="svc-name">Photography</span>
                <span class="svc-arrow">&#8594;</span>
            </div>
            <div class="service-list-item">
                <span class="svc-num">06</span>
                <span class="svc-name">Videography</span>
                <span class="svc-arrow">&#8594;</span>
            </div>
            <p class="services-list-hint">(Whenever we hover on the service items, service details will appear on the
                right.)</p>
        </div>

        <div class="services-list-preview">
            <div class="services-preview-card">
                <div class="services-preview-image">img</div>
                <div class="services-preview-content">
                    <span class="services-preview-title">Client names</span>
                    <p class="services-preview-text">We build brand identities as full systems, not just logos. This
                        means defining who your brand is, how it sounds, and how moments across every touchpoint feel
                        consistent and memorable.</p>
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

<section class="approach-section">
    <div class="container">
        <h2 class="approach-title">Our Approach</h2>
        <p class="approach-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.</p>

        <div class="approach-steps">
            <div class="approach-step">
                <span class="step-num">Step 1</span>
                <h3>Listen</h3>
                <p>We start by understanding your brand, audience, and the creative opportunity in front of you.</p>
            </div>
            <div class="approach-step">
                <span class="step-num">Step 2</span>
                <h3>Strategize</h3>
                <p>We define the vision, strategy, and creative direction that will guide the work forward.</p>
            </div>
            <div class="approach-step">
                <span class="step-num">Step 3</span>
                <h3>Create</h3>
                <p>We design the creative assets and experiences that bring the idea to life.
                </p>
            </div>
            <div class="approach-step">
                <span class="step-num">Step 4</span>
                <h3>Refine</h3>
                <p>We polish, test, and perfect every detail so the final output feels effortless.</p>
            </div>
            <div class="approach-step">
                <span class="step-num">Step 5</span>
                <h3>Launch & evolve</h3>
                <p>We support the rollout and continue evolving the brand with fresh ideas.</p>
            </div>
        </div>
    </div>
</section>

<section class="large-quote container">
    <blockquote>Our work is built to feel instantly recognizable, memorable, and grounded in purpose.</blockquote>
</section>

<section class="listen-section">
    <div class="container">
        <div class="listen-header">
            <div>
                <span class="listen-tag">work</span>
                <h2 class="listen-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <p class="listen-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>

        <div class="testimonials-grid">
            <div class="listen-card-wrap">
                <div class="listen-bg-text left">work</div>
                <div class="listen-bg-text right">img</div>
                <div class="testimonial-card testimonial-card--light">
                    <div class="testimonial-avatar">
                        <div class="avatar-img" style="background-color:#111;"></div>
                    </div>
                    <div class="testimonial-content">
                        <span class="quote-icon">“</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <div class="testimonial-author">
                            <strong>Name</strong>
                            <span>Role</span>
                        </div>
                    </div>
                    <div class="testimonial-meta">
                        <span>company name</span>
                        <span>@instagram</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'get_in_touch.php'; ?>
<?php include 'footer.php'; ?>