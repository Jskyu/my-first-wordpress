<?php
/**
 * Template Name: Products Page
 * 제품 페이지
 */

get_header();
?>

<div class="products-page">
    <!-- Hero Section -->
    <section class="products-hero">
        <div class="container">
            <h1 class="page-title">Our Products</h1>
            <p class="page-subtitle">혁신적인 로봇 솔루션으로 비즈니스를 혁신하세요</p>
        </div>
    </section>

    <!-- Product Categories -->
    <section class="product-categories">
        <div class="container">
            <nav class="category-nav">
                <button class="category-btn active" data-category="all">All Products</button>
                <button class="category-btn" data-category="collaborative">Collaborative Robots</button>
                <button class="category-btn" data-category="mobile">Mobile Robots</button>
                <button class="category-btn" data-category="humanoid">Humanoid Robots</button>
                <button class="category-btn" data-category="quadruped">Quadruped Robots</button>
            </nav>
        </div>
    </section>

    <!-- RB Series - Collaborative Robots -->
    <section class="product-series collaborative" id="rb-series">
        <div class="container">
            <div class="series-header">
                <h2>RB Series - Collaborative Robots</h2>
                <p>5,000개 이상 배포된 고성능 협동 로봇</p>
            </div>

            <div class="products-grid">
                <!-- RB3-1200 -->
                <div class="product-card">
                    <div class="product-badge">NSF Certified</div>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/rbc-collaborative-robot-01.jpg"
                             alt="RB3-1200" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3>RB3-1200</h3>
                        <div class="product-specs">
                            <span class="spec-item">
                                <strong>Payload:</strong> 3kg
                            </span>
                            <span class="spec-item">
                                <strong>Reach:</strong> 1200mm
                            </span>
                        </div>
                        <p>컴팩트한 디자인과 우수한 성능을 갖춘 협동 로봇. 공압 내장형 옵션 제공.</p>
                        <ul class="product-features">
                            <li>식품, 음료, 실험실 환경용 NSF 인증</li>
                            <li>공압 내장형 옵션</li>
                            <li>E/U 버전 도면 제공</li>
                        </ul>
                        <a href="#" class="btn btn-outline">자세히 보기</a>
                    </div>
                </div>

                <!-- RB5-850 -->
                <div class="product-card">
                    <div class="product-badge">Best Seller</div>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/rbc-collaborative-robot-02.jpg"
                             alt="RB5-850" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3>RB5-850</h3>
                        <div class="product-specs">
                            <span class="spec-item">
                                <strong>Payload:</strong> 5kg
                            </span>
                            <span class="spec-item">
                                <strong>Reach:</strong> 850mm
                            </span>
                        </div>
                        <p>중간 페이로드에 최적화된 협동 로봇. 다양한 산업 현장에 적합.</p>
                        <ul class="product-features">
                            <li>자체 개발 핵심 부품</li>
                            <li>고성능 및 고신뢰성</li>
                            <li>다양한 애플리케이션 지원</li>
                        </ul>
                        <a href="#" class="btn btn-outline">자세히 보기</a>
                    </div>
                </div>

                <!-- RB10-1300 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/rbc-collaborative-robot-03.jpg"
                             alt="RB10-1300" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3>RB10-1300</h3>
                        <div class="product-specs">
                            <span class="spec-item">
                                <strong>Payload:</strong> 10kg
                            </span>
                            <span class="spec-item">
                                <strong>Reach:</strong> 1300mm
                            </span>
                        </div>
                        <p>고하중 작업에 적합한 협동 로봇. 제조업 자동화에 최적.</p>
                        <ul class="product-features">
                            <li>10kg 페이로드</li>
                            <li>1.3m 작업 반경</li>
                            <li>정밀 제어 시스템</li>
                        </ul>
                        <a href="#" class="btn btn-outline">자세히 보기</a>
                    </div>
                </div>

                <!-- RB20-1900 -->
                <div class="product-card">
                    <div class="product-badge">High Performance</div>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/placeholder-robot.jpg"
                             alt="RB20-1900" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3>RB20-1900</h3>
                        <div class="product-specs">
                            <span class="spec-item">
                                <strong>Payload:</strong> 20kg
                            </span>
                            <span class="spec-item">
                                <strong>Reach:</strong> 1900mm
                            </span>
                        </div>
                        <p>대형 작업물 처리에 최적화된 고성능 협동 로봇.</p>
                        <ul class="product-features">
                            <li>20kg 대형 페이로드</li>
                            <li>1.9m 긴 작업 반경</li>
                            <li>ES 버전 제공</li>
                        </ul>
                        <a href="#" class="btn btn-outline">자세히 보기</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RB-Y Series - Humanoid Robots -->
    <section class="product-series humanoid" id="rby-series">
        <div class="container">
            <div class="series-header">
                <h2>RB-Y Series - Humanoid Mobile Manipulators</h2>
                <p>듀얼 암 휴머노이드 로봇</p>
            </div>

            <div class="products-grid">
                <div class="product-card featured">
                    <div class="product-badge">New</div>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/placeholder-humanoid.jpg"
                             alt="RB-Y1" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3>RB-Y1</h3>
                        <p>인간과 유사한 형태의 듀얼 암 모바일 매니퓰레이터. 복잡한 작업 환경에서 뛰어난 유연성을 제공합니다.</p>
                        <ul class="product-features">
                            <li>듀얼 암 시스템</li>
                            <li>모바일 플랫폼 통합</li>
                            <li>AI 기반 작업 학습</li>
                            <li>제조업 특화 설계</li>
                        </ul>
                        <a href="#" class="btn btn-primary">자세히 보기</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RBM Series - Mobile Robots -->
    <section class="product-series mobile" id="rbm-series">
        <div class="container">
            <div class="series-header">
                <h2>RBM Series - Mobile Robots</h2>
                <p>자율 주행 모바일 로봇 플랫폼</p>
            </div>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/placeholder-mobile.jpg"
                             alt="RBM-D400" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3>RBM-D400</h3>
                        <div class="product-specs">
                            <span class="spec-item">
                                <strong>Type:</strong> Differential Drive
                            </span>
                            <span class="spec-item">
                                <strong>Size:</strong> D400
                            </span>
                        </div>
                        <p>컴팩트한 자율 주행 모바일 로봇. 좁은 공간에서도 효율적인 이동이 가능합니다.</p>
                        <ul class="product-features">
                            <li>자율 주행 시스템</li>
                            <li>장애물 회피</li>
                            <li>경로 최적화</li>
                        </ul>
                        <a href="#" class="btn btn-outline">자세히 보기</a>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/placeholder-mobile.jpg"
                             alt="RBM-M400" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3>RBM-M400</h3>
                        <div class="product-specs">
                            <span class="spec-item">
                                <strong>Type:</strong> Mecanum
                            </span>
                            <span class="spec-item">
                                <strong>Size:</strong> M400
                            </span>
                        </div>
                        <p>메카넘 휠 기반 전방향 이동 플랫폼. 복잡한 환경에서 뛰어난 기동성을 제공합니다.</p>
                        <ul class="product-features">
                            <li>전방향 이동</li>
                            <li>좁은 공간 작업</li>
                            <li>정밀 위치 제어</li>
                        </ul>
                        <a href="#" class="btn btn-outline">자세히 보기</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RBQ Series - Quadruped Robots -->
    <section class="product-series quadruped" id="rbq-series">
        <div class="container">
            <div class="series-header">
                <h2>RBQ Series - Quadruped Robots</h2>
                <p>사족보행 로봇 플랫폼</p>
            </div>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-badge">Innovation</div>
                    <div class="product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/placeholder-quadruped.jpg"
                             alt="RBQ-10W" loading="lazy">
                    </div>
                    <div class="product-info">
                        <h3>RBQ-10W</h3>
                        <p>험난한 지형에서도 안정적인 이동이 가능한 사족보행 로봇. 다양한 확장 모듈 지원.</p>
                        <ul class="product-features">
                            <li>사족보행 시스템</li>
                            <li>지형 적응력</li>
                            <li>확장 모듈 지원</li>
                            <li>실외 환경 작업</li>
                        </ul>
                        <a href="#" class="btn btn-outline">자세히 보기</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="products-cta">
        <div class="container">
            <h2>제품에 대해 더 알아보고 싶으신가요?</h2>
            <p>전문가와 상담하여 귀사에 가장 적합한 로봇 솔루션을 찾아보세요</p>
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">문의하기</a>
                <a href="tel:044-860-9600" class="btn btn-secondary">전화: 044-860-9600</a>
            </div>
        </div>
    </section>
</div>

<style>
/* Products Page Styles */
.products-hero {
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    color: white;
    padding: 5rem 0 3rem;
    text-align: center;
}

.products-hero .page-title {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.product-categories {
    background: white;
    padding: 2rem 0;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    position: sticky;
    top: 70px;
    z-index: 100;
}

.category-nav {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.category-btn {
    padding: 0.75rem 1.5rem;
    background: var(--light-gray);
    border: 2px solid transparent;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.category-btn:hover,
.category-btn.active {
    background: var(--primary-color);
    color: white;
}

.product-series {
    padding: 5rem 0;
}

.product-series:nth-child(even) {
    background: var(--light-gray);
}

.series-header {
    text-align: center;
    margin-bottom: 3rem;
}

.series-header h2 {
    font-size: 2.5rem;
    color: var(--secondary-color);
    margin-bottom: 0.5rem;
}

.series-header p {
    font-size: 1.125rem;
    color: #666;
}

.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 2.5rem;
}

.product-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.product-card.featured {
    grid-column: span 2;
}

.product-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--primary-color);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    font-size: 0.85rem;
    font-weight: 600;
    z-index: 10;
}

.product-image {
    height: 250px;
    overflow: hidden;
    background: var(--light-gray);
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.product-info {
    padding: 2rem;
}

.product-info h3 {
    font-size: 1.75rem;
    margin-bottom: 1rem;
    color: var(--secondary-color);
}

.product-specs {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1rem;
    flex-wrap: wrap;
}

.spec-item {
    font-size: 0.9rem;
    color: #666;
}

.spec-item strong {
    color: var(--primary-color);
}

.product-info p {
    color: #555;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.product-features {
    list-style: none;
    padding: 0;
    margin-bottom: 2rem;
}

.product-features li {
    padding: 0.5rem 0;
    padding-left: 1.5rem;
    position: relative;
    font-size: 0.95rem;
    color: #666;
}

.product-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary-color);
    font-weight: bold;
}

.products-cta {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 5rem 0;
    text-align: center;
}

.products-cta h2 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.products-cta p {
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
    .products-hero .page-title {
        font-size: 2rem;
    }

    .product-card.featured {
        grid-column: span 1;
    }

    .products-grid {
        grid-template-columns: 1fr;
    }

    .product-categories {
        position: static;
    }
}
</style>

<script>
// Category filtering
document.addEventListener('DOMContentLoaded', function() {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const productSeries = document.querySelectorAll('.product-series');

    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.dataset.category;

            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Filter products
            productSeries.forEach(series => {
                if (category === 'all') {
                    series.style.display = 'block';
                } else if (series.classList.contains(category)) {
                    series.style.display = 'block';
                } else {
                    series.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php
get_footer();
