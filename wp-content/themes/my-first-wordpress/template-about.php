<?php
/**
 * Template Name: About Page
 * 회사 소개 페이지
 */

get_header();
?>

<div class="about-page">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1 class="page-title"><?php bloginfo('name'); ?></h1>
            <p class="page-subtitle"><?php bloginfo('description'); ?></p>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="company-overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-content">
                    <h2>About Us</h2>
                    <p>Welcome to our website. We are dedicated to providing quality services to our clients.</p>
                    <p>Our team is committed to excellence and innovation in everything we do.</p>

                    <div class="company-stats">
                        <div class="stat-item">
                            <h3>5,000+</h3>
                            <p>글로벌 배포 로봇</p>
                        </div>
                        <div class="stat-item">
                            <h3>15+</h3>
                            <p>산업 애플리케이션</p>
                        </div>
                        <div class="stat-item">
                            <h3>24</h3>
                            <p>제품 모델</p>
                        </div>
                    </div>
                </div>

                <div class="overview-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/rbc-collaborative-robot-01.jpg"
                         alt="About Us" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="core-values">
        <div class="container">
            <h2 class="section-title">Our Values</h2>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">🎯</div>
                    <h3>Innovation</h3>
                    <p>모든 핵심 부품을 자체 개발하여 혁신적인 로봇 솔루션을 제공합니다.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">🔒</div>
                    <h3>Reliability</h3>
                    <p>99.99% 성공률을 목표로 하는 고품질 제품을 생산합니다.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">🌍</div>
                    <h3>Global Reach</h3>
                    <p>북미 12개 대리점을 포함한 글로벌 네트워크를 구축하고 있습니다.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">🤝</div>
                    <h3>Partnership</h3>
                    <p>삼성전자, SFA 등 글로벌 파트너와 협력하여 성장하고 있습니다.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology -->
    <section class="technology-section">
        <div class="container">
            <h2 class="section-title">Core Technologies</h2>

            <div class="tech-grid">
                <div class="tech-item">
                    <h3>Collaborative Robotics</h3>
                    <p>인간과 안전하게 협업할 수 있는 협동 로봇 기술</p>
                    <ul>
                        <li>NSF 인증 모델 (식품, 음료, 실험실 환경)</li>
                        <li>3kg~30kg 다양한 페이로드 옵션</li>
                        <li>730mm~1900mm 작업 반경</li>
                    </ul>
                </div>

                <div class="tech-item">
                    <h3>Mobile Manipulation</h3>
                    <p>자율 주행과 정밀 조작을 결합한 모바일 매니퓰레이터</p>
                    <ul>
                        <li>Differential Drive 및 Mecanum 타입</li>
                        <li>듀얼 암 휴머노이드 로봇</li>
                        <li>복합 생산 환경 대응</li>
                    </ul>
                </div>

                <div class="tech-item">
                    <h3>AI Integration</h3>
                    <p>AI와 로봇 기술의 융합</p>
                    <ul>
                        <li>Robot Foundation Model</li>
                        <li>World Model 기술</li>
                        <li>비디오 분석 학습</li>
                    </ul>
                </div>

                <div class="tech-item">
                    <h3>Precision Control</h3>
                    <p>밀리미터 단위의 정밀 제어</p>
                    <ul>
                        <li>자체 개발 제어 시스템</li>
                        <li>실시간 피드백</li>
                        <li>고신뢰성 작동</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnerships -->
    <section class="partnerships-section">
        <div class="container">
            <h2 class="section-title">Strategic Partnerships</h2>

            <div class="partners-grid">
                <div class="partner-card">
                    <h3>Samsung Electronics</h3>
                    <p class="partner-type">전략적 협력</p>
                    <p>공장 자동화 및 가정용 로봇 개발 협력. 100개 이상의 제조 시설 자동화를 목표로 하고 있습니다.</p>
                    <span class="partner-date">2026</span>
                </div>

                <div class="partner-card">
                    <h3>Samsung Medical Center</h3>
                    <p class="partner-type">의료 혁신</p>
                    <p>ORchestra 프로젝트를 통한 수술 보조 휴머노이드 로봇 개발. 2029년 임상 시험 목표.</p>
                    <span class="partner-date">2026</span>
                </div>

                <div class="partner-card">
                    <h3>E Tech Group</h3>
                    <p class="partner-type">미국 시장 확대</p>
                    <p>2025 System Integrator of the Year. 미국 시장 공인 통합업체로 NSF 인증 모델 공급.</p>
                    <span class="partner-date">2026</span>
                </div>

                <div class="partner-card">
                    <h3>SFA Engineering</h3>
                    <p class="partner-type">AI 자율 제조</p>
                    <p>AI 자율 제조 협력 MOU 체결. 무인 공장 운영 타임라인 가속화.</p>
                    <span class="partner-date">2026</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Presence -->
    <section class="global-presence">
        <div class="container">
            <h2 class="section-title">Global Presence</h2>
            <p class="section-subtitle">전 세계 12개 이상의 대리점 네트워크</p>

            <div class="regions-grid">
                <div class="region-card">
                    <h3>🇺🇸 United States</h3>
                    <p>10개 주요 대리점</p>
                    <ul>
                        <li>E-Tech Group (Ohio)</li>
                        <li>Cynergy Automation (Missouri)</li>
                        <li>Wingman Cobot (California)</li>
                        <li>Motion Ai (Illinois)</li>
                        <li>그 외 6개 지역</li>
                    </ul>
                </div>

                <div class="region-card">
                    <h3>🇲🇽 Mexico</h3>
                    <p>2개 대리점</p>
                    <ul>
                        <li>Unicontrol (Tijuana)</li>
                        <li>INNERMAX (Apodaca)</li>
                    </ul>
                </div>

                <div class="region-card">
                    <h3>🇰🇷 Korea</h3>
                    <p>본사 및 연구소</p>
                    <ul>
                        <li>대전 본사</li>
                        <li>R&D 센터</li>
                        <li>제조 시설</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="contact-cta">
        <div class="container">
            <h2>함께 미래를 만들어가세요</h2>
            <p>Learn more about our services and solutions</p>
            <div class="cta-buttons">
                <a href="<?php echo home_url('/products'); ?>" class="btn btn-primary">제품 보기</a>
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-secondary">문의하기</a>
            </div>
        </div>
    </section>
</div>

<style>
/* About Page Styles */
.about-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 6rem 0 4rem;
    text-align: center;
}

.about-hero .page-title {
    font-size: 3.5rem;
    margin-bottom: 1rem;
}

.about-hero .page-subtitle {
    font-size: 1.5rem;
    opacity: 0.95;
}

.company-overview {
    padding: 5rem 0;
}

.overview-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.overview-content h2 {
    font-size: 2rem;
    margin-bottom: 1.5rem;
    color: var(--secondary-color);
}

.overview-content p {
    font-size: 1.125rem;
    line-height: 1.8;
    margin-bottom: 1rem;
    color: #555;
}

.company-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 3rem;
}

.stat-item {
    text-align: center;
}

.stat-item h3 {
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.stat-item p {
    font-size: 0.9rem;
    color: #666;
}

.overview-image img {
    width: 100%;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.core-values {
    padding: 5rem 0;
    background: var(--light-gray);
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.value-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.value-card:hover {
    transform: translateY(-10px);
}

.value-icon {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.value-card h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

.technology-section {
    padding: 5rem 0;
}

.tech-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2.5rem;
    margin-top: 3rem;
}

.tech-item {
    padding: 2rem;
    border-left: 4px solid var(--primary-color);
    background: var(--light-gray);
}

.tech-item h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

.tech-item p {
    margin-bottom: 1rem;
    color: #666;
}

.tech-item ul {
    list-style: none;
    padding: 0;
}

.tech-item li {
    padding: 0.5rem 0;
    padding-left: 1.5rem;
    position: relative;
}

.tech-item li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary-color);
    font-weight: bold;
}

.partnerships-section {
    padding: 5rem 0;
    background: var(--light-gray);
}

.partners-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.partner-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

.partner-card h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: var(--secondary-color);
}

.partner-type {
    color: var(--primary-color);
    font-weight: 600;
    font-size: 0.9rem;
    margin-bottom: 1rem;
}

.partner-date {
    display: inline-block;
    background: var(--light-gray);
    padding: 0.25rem 0.75rem;
    border-radius: 4px;
    font-size: 0.85rem;
    margin-top: 1rem;
}

.global-presence {
    padding: 5rem 0;
}

.regions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.region-card {
    padding: 2rem;
    background: var(--light-gray);
    border-radius: 12px;
}

.region-card h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.region-card p {
    color: #666;
    margin-bottom: 1rem;
}

.region-card ul {
    list-style: none;
    padding: 0;
}

.region-card li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #e0e0e0;
}

.region-card li:last-child {
    border-bottom: none;
}

.contact-cta {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 5rem 0;
    text-align: center;
}

.contact-cta h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.contact-cta p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.95;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

@media (max-width: 768px) {
    .about-hero .page-title {
        font-size: 2.5rem;
    }

    .overview-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .company-stats {
        grid-template-columns: 1fr;
    }

    .contact-cta h2 {
        font-size: 2rem;
    }
}
</style>

<?php
get_footer();
