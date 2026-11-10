<?php
/**
 * Template Name: Front Page (Professional)
 * 전문적이고 현대적인 홈페이지
 */

get_header();
?>

<div class="professional-home">
    <!-- Hero Section -->
    <section class="hero-professional">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span>Leading Robotics Innovation</span>
                </div>
                <h1 class="hero-title">
                    Transforming Industries<br/>
                    Through Robotics
                </h1>
                <p class="hero-subtitle">
                    Advanced collaborative robots, mobile platforms, and humanoid solutions<br/>
                    trusted by industry leaders worldwide
                </p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">5,000+</div>
                        <div class="stat-label">Robots Deployed</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-number">24</div>
                        <div class="stat-label">Product Models</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Industries Served</div>
                    </div>
                </div>
                <div class="hero-actions">
                    <a href="#products" class="btn-pro btn-pro-primary">
                        Explore Solutions
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </a>
                    <a href="#contact" class="btn-pro btn-pro-secondary">
                        Contact Sales
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Series -->
    <section class="product-series" id="products">
        <div class="container-pro">
            <div class="section-header-pro">
                <h2 class="section-title-pro">Product Portfolio</h2>
                <p class="section-subtitle-pro">
                    Industry-leading robotic solutions designed for precision, reliability, and performance
                </p>
            </div>

            <div class="product-grid-pro">
                <!-- RB Series -->
                <div class="product-card-pro">
                    <div class="product-image-pro">
                        <div class="product-badge-pro">Best Seller</div>
                        <div class="product-placeholder">
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                <path d="M2 17l10 5 10-5"/>
                                <path d="M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                    </div>
                    <div class="product-content-pro">
                        <h3 class="product-title-pro">RB Series</h3>
                        <p class="product-category-pro">Collaborative Robots</p>
                        <p class="product-description-pro">
                            Industry-leading cobots with 3-30kg payload capacity. NSF-certified models available for food, beverage, and laboratory environments.
                        </p>
                        <ul class="product-features-pro">
                            <li>5,000+ units deployed globally</li>
                            <li>All core components in-house</li>
                            <li>99.99% reliability target</li>
                        </ul>
                        <a href="#" class="product-link-pro">
                            Learn More
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- RB-Y Series -->
                <div class="product-card-pro featured-pro">
                    <div class="product-image-pro">
                        <div class="product-badge-pro new-pro">New</div>
                        <div class="product-placeholder">
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="12" cy="8" r="3"/>
                                <path d="M12 11v3"/>
                                <rect x="8" y="14" width="8" height="7" rx="1"/>
                                <path d="M6 21v-4"/>
                                <path d="M18 21v-4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="product-content-pro">
                        <h3 class="product-title-pro">RB-Y Series</h3>
                        <p class="product-category-pro">Humanoid Mobile Manipulators</p>
                        <p class="product-description-pro">
                            Dual-arm humanoid robots with AI-powered learning capabilities. Designed for complex manufacturing environments.
                        </p>
                        <ul class="product-features-pro">
                            <li>Dual-arm configuration</li>
                            <li>Mobile platform integrated</li>
                            <li>AI-based task learning</li>
                        </ul>
                        <a href="#" class="product-link-pro">
                            Learn More
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- RBM Series -->
                <div class="product-card-pro">
                    <div class="product-image-pro">
                        <div class="product-placeholder">
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="3" y="11" width="18" height="8" rx="2"/>
                                <circle cx="7" cy="19" r="2"/>
                                <circle cx="17" cy="19" r="2"/>
                                <path d="M12 11V5"/>
                                <circle cx="12" cy="3" r="1"/>
                            </svg>
                        </div>
                    </div>
                    <div class="product-content-pro">
                        <h3 class="product-title-pro">RBM Series</h3>
                        <p class="product-category-pro">Mobile Robots</p>
                        <p class="product-description-pro">
                            Autonomous mobile platforms with differential and mecanum drive options. Perfect for warehouse and logistics automation.
                        </p>
                        <ul class="product-features-pro">
                            <li>Autonomous navigation</li>
                            <li>Obstacle avoidance</li>
                            <li>Fleet management ready</li>
                        </ul>
                        <a href="#" class="product-link-pro">
                            Learn More
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnerships -->
    <section class="partnerships-pro">
        <div class="container-pro">
            <div class="section-header-pro">
                <h2 class="section-title-pro">Trusted by Industry Leaders</h2>
                <p class="section-subtitle-pro">
                    Strategic partnerships driving innovation in robotics and automation
                </p>
            </div>

            <div class="partnership-grid-pro">
                <div class="partnership-card-pro">
                    <div class="partnership-icon-pro">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <path d="M8 21h8"/>
                            <path d="M12 17v4"/>
                        </svg>
                    </div>
                    <h3>Samsung Electronics</h3>
                    <p class="partnership-type-pro">Strategic Collaboration</p>
                    <p>Factory automation targeting 99.99% precision with Robot Foundation Model technology</p>
                </div>

                <div class="partnership-card-pro">
                    <div class="partnership-icon-pro">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                        </svg>
                    </div>
                    <h3>Samsung Medical Center</h3>
                    <p class="partnership-type-pro">Medical Innovation</p>
                    <p>ORchestra project - surgical assistant humanoid robots targeting 2029 clinical trials</p>
                </div>

                <div class="partnership-card-pro">
                    <div class="partnership-icon-pro">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M2 12h20"/>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                        </svg>
                    </div>
                    <h3>E Tech Group</h3>
                    <p class="partnership-type-pro">US Market Expansion</p>
                    <p>2025 System Integrator of the Year - authorized integrator across North America</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-pro">
        <div class="container-pro">
            <div class="cta-content-pro">
                <h2>Ready to Transform Your Operations?</h2>
                <p>Get started with our services today</p>
                <div class="cta-actions-pro">
                    <a href="#contact" class="btn-pro btn-pro-primary">Request a Demo</a>
                    <a href="tel:044-860-9600" class="btn-pro btn-pro-outline">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        044-860-9600
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
/* Professional Design System */
.professional-home {
    background: var(--white);
}

/* Hero Section */
.hero-professional {
    background: linear-gradient(180deg, var(--white) 0%, var(--light-gray) 100%);
    padding: 8rem 2rem 6rem;
    position: relative;
    overflow: hidden;
}

.hero-professional::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 50%;
    height: 100%;
    background: linear-gradient(135deg, transparent 0%, rgba(227, 30, 36, 0.03) 100%);
    pointer-events: none;
}

.hero-container {
    max-width: var(--max-width);
    margin: 0 auto;
}

.hero-content {
    max-width: 800px;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    padding: 0.5rem 1rem;
    background: rgba(227, 30, 36, 0.1);
    border-radius: 100px;
    margin-bottom: 2rem;
}

.hero-badge span {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--primary-color);
    letter-spacing: 0.025em;
    text-transform: uppercase;
}

.hero-title {
    font-size: 4rem;
    font-weight: 700;
    line-height: 1.1;
    color: var(--secondary-color);
    margin-bottom: 1.5rem;
    letter-spacing: -0.03em;
}

.hero-subtitle {
    font-size: 1.25rem;
    line-height: 1.6;
    color: var(--text-light);
    margin-bottom: 3rem;
}

.hero-stats {
    display: flex;
    align-items: center;
    gap: 2rem;
    margin-bottom: 3rem;
    padding: 2rem 0;
    border-top: 1px solid var(--border-color);
    border-bottom: 1px solid var(--border-color);
}

.stat-item {
    text-align: left;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--secondary-color);
    line-height: 1;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.875rem;
    color: var(--text-light);
    font-weight: 500;
}

.stat-divider {
    width: 1px;
    height: 40px;
    background: var(--border-color);
}

.hero-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
}

/* Professional Buttons */
.btn-pro {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.875rem 1.75rem;
    border-radius: 8px;
    font-weight: 600;
    font-size: 0.9375rem;
    text-decoration: none;
    transition: all var(--transition);
    border: 2px solid transparent;
    cursor: pointer;
}

.btn-pro-primary {
    background: var(--primary-color);
    color: var(--white);
}

.btn-pro-primary:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.btn-pro-secondary {
    background: var(--white);
    color: var(--secondary-color);
    border-color: var(--border-color);
}

.btn-pro-secondary:hover {
    border-color: var(--secondary-color);
    transform: translateY(-2px);
}

.btn-pro-outline {
    background: transparent;
    color: var(--secondary-color);
    border-color: var(--border-color);
}

.btn-pro-outline:hover {
    background: var(--light-gray);
    border-color: var(--secondary-color);
}

/* Container */
.container-pro {
    max-width: var(--max-width);
    margin: 0 auto;
    padding: 0 2rem;
}

/* Section Headers */
.section-header-pro {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 4rem;
}

.section-title-pro {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--secondary-color);
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}

.section-subtitle-pro {
    font-size: 1.125rem;
    color: var(--text-light);
    line-height: 1.6;
}

/* Product Series */
.product-series {
    padding: 8rem 0;
    background: var(--white);
}

.product-grid-pro {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.product-card-pro {
    background: var(--white);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    overflow: hidden;
    transition: all var(--transition);
}

.product-card-pro:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
    border-color: transparent;
}

.product-card-pro.featured-pro {
    border-color: var(--primary-color);
    position: relative;
}

.product-image-pro {
    position: relative;
    height: 280px;
    background: var(--light-gray);
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-placeholder {
    color: var(--text-light);
}

.product-placeholder svg {
    opacity: 0.3;
}

.product-badge-pro {
    position: absolute;
    top: 1rem;
    right: 1rem;
    padding: 0.5rem 1rem;
    background: var(--white);
    border-radius: 100px;
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--secondary-color);
    box-shadow: var(--shadow-md);
}

.product-badge-pro.new-pro {
    background: var(--primary-color);
    color: var(--white);
}

.product-content-pro {
    padding: 2rem;
}

.product-title-pro {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--secondary-color);
    margin-bottom: 0.25rem;
}

.product-category-pro {
    font-size: 0.875rem;
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.product-description-pro {
    color: var(--text-light);
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.product-features-pro {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem 0;
}

.product-features-pro li {
    padding: 0.5rem 0;
    padding-left: 1.5rem;
    position: relative;
    font-size: 0.9375rem;
    color: var(--text-color);
}

.product-features-pro li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0.875rem;
    width: 6px;
    height: 6px;
    background: var(--primary-color);
    border-radius: 50%;
}

.product-link-pro {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-color);
    font-weight: 600;
    font-size: 0.9375rem;
    text-decoration: none;
    transition: gap var(--transition);
}

.product-link-pro:hover {
    gap: 0.75rem;
}

/* Partnerships */
.partnerships-pro {
    padding: 8rem 0;
    background: var(--light-gray);
}

.partnership-grid-pro {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
}

.partnership-card-pro {
    background: var(--white);
    padding: 2.5rem;
    border-radius: 12px;
    border: 1px solid var(--border-color);
    transition: all var(--transition);
}

.partnership-card-pro:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
    border-color: transparent;
}

.partnership-icon-pro {
    width: 64px;
    height: 64px;
    background: var(--light-gray);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    color: var(--primary-color);
}

.partnership-card-pro h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary-color);
    margin-bottom: 0.5rem;
}

.partnership-type-pro {
    font-size: 0.875rem;
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.partnership-card-pro p:last-child {
    color: var(--text-light);
    line-height: 1.6;
    margin: 0;
}

/* CTA */
.cta-pro {
    padding: 6rem 0;
    background: var(--secondary-color);
    color: var(--white);
}

.cta-content-pro {
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

.cta-content-pro h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    letter-spacing: -0.02em;
}

.cta-content-pro p {
    font-size: 1.125rem;
    opacity: 0.8;
    margin-bottom: 2rem;
}

.cta-actions-pro {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-pro .btn-pro-primary {
    background: var(--white);
    color: var(--secondary-color);
}

.cta-pro .btn-pro-primary:hover {
    background: var(--light-gray);
}

.cta-pro .btn-pro-outline {
    color: var(--white);
    border-color: rgba(255, 255, 255, 0.3);
}

.cta-pro .btn-pro-outline:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: var(--white);
}

/* Responsive */
@media (max-width: 768px) {
    .hero-professional {
        padding: 4rem 1.5rem 3rem;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1.125rem;
    }

    .hero-stats {
        flex-direction: column;
        align-items: flex-start;
        gap: 1.5rem;
    }

    .stat-divider {
        display: none;
    }

    .section-title-pro {
        font-size: 2rem;
    }

    .product-grid-pro {
        grid-template-columns: 1fr;
    }

    .cta-content-pro h2 {
        font-size: 2rem;
    }
}
</style>

<?php
get_footer();
