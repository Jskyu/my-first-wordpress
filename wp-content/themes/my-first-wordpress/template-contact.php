<?php
/**
 * Template Name: Contact Page
 * 연락처 페이지
 */

get_header();
?>

<div class="contact-page">
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>
            <p class="page-subtitle">문의사항이 있으시면 언제든지 연락주세요</p>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="contact-info-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <h2>메시지 보내기</h2>
                    <form class="contact-form" method="post" action="#" id="contactForm">
                        <div class="form-group">
                            <label for="name">이름 *</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="company">회사명</label>
                            <input type="text" id="company" name="company">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">이메일 *</label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">전화번호</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">문의 유형</label>
                            <select id="subject" name="subject">
                                <option value="">선택해주세요</option>
                                <option value="제품 문의">제품 문의</option>
                                <option value="기술 지원">기술 지원</option>
                                <option value="구매 문의">구매 문의</option>
                                <option value="파트너십">파트너십</option>
                                <option value="기타">기타</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">메시지 *</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="agree" required>
                                <span>개인정보 수집 및 이용에 동의합니다</span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-large">문의하기</button>
                    </form>
                </div>

                <!-- Contact Details -->
                <div class="contact-details">
                    <h2>연락처 정보</h2>

                    <div class="contact-card">
                        <h3>📞 전화번호</h3>
                        <p><a href="tel:044-860-9600">044-860-9600</a></p>
                    </div>

                    <div class="contact-card">
                        <h3>✉️ 이메일</h3>
                        <p><a href="mailto:info@mytheme.com">info@mytheme.com</a></p>
                    </div>

                    <div class="contact-card">
                        <h3>🌐 웹사이트</h3>
                        <p><a href="https://mytheme.com" target="_blank">mytheme.com</a></p>
                    </div>

                    <div class="contact-card">
                        <h3>💼 소셜 미디어</h3>
                        <div class="social-links">
                            <a href="https://kr.linkedin.com/company/mytheme" target="_blank" class="social-btn">
                                LinkedIn
                            </a>
                            <a href="#" target="_blank" class="social-btn">
                                YouTube
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <h3>🏢 본사</h3>
                        <p>대한민국</p>
                        <p><small>구체적인 주소는 직접 문의해주세요</small></p>
                    </div>

                    <div class="contact-card">
                        <h3>⏰ 업무 시간</h3>
                        <p>월 - 금: 09:00 - 18:00</p>
                        <p><small>주말 및 공휴일 휴무</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Distributors -->
    <section class="distributors-section">
        <div class="container">
            <h2 class="section-title">Global Distributors</h2>
            <p class="section-subtitle">전 세계 공인 대리점 네트워크</p>

            <div class="distributors-tabs">
                <button class="tab-btn active" data-tab="usa">United States</button>
                <button class="tab-btn" data-tab="mexico">Mexico</button>
            </div>

            <!-- USA Distributors -->
            <div class="distributors-content active" id="usa">
                <div class="distributors-grid">
                    <div class="distributor-card">
                        <h3>E-Tech Group</h3>
                        <p class="distributor-badge">2025 System Integrator of the Year</p>
                        <p>📍 8614 Jacquemin Dr, West Chester, OH 45069</p>
                        <p>📞 +1-855-202-1444</p>
                        <p>🌐 <a href="http://etechgroup.com" target="_blank">etechgroup.com</a></p>
                    </div>

                    <div class="distributor-card">
                        <h3>Cynergy Automation</h3>
                        <p>📍 11445 Warnen Rd, Maryland Heights, MO</p>
                        <p>📞 +1-636-299-4031</p>
                        <p>🌐 <a href="http://cynergyautomation.com" target="_blank">cynergyautomation.com</a></p>
                    </div>

                    <div class="distributor-card">
                        <h3>Wingman Cobot</h3>
                        <p>📍 21281 S Western Ave, Torrance, CA 90501</p>
                        <p>📞 +1-310-985-0301</p>
                        <p>🌐 <a href="http://wingmancobot.com" target="_blank">wingmancobot.com</a></p>
                    </div>

                    <div class="distributor-card">
                        <h3>Motion Ai</h3>
                        <p>📍 715C Tollgate Rd, Elgin, IL 60123</p>
                        <p>📞 +1-800-288-6628</p>
                        <p>🌐 <a href="http://ai.motion.com" target="_blank">ai.motion.com</a></p>
                    </div>

                    <div class="distributor-card">
                        <h3>Envisio Design Technologies</h3>
                        <p>📍 11310 S Kiwatani Tr, Canfield, OH 44406</p>
                        <p>📞 +1-234-414-0033</p>
                        <p>🌐 <a href="http://envisio-tech.com" target="_blank">envisio-tech.com</a></p>
                    </div>

                    <div class="distributor-card">
                        <h3>Robatech West, Inc.</h3>
                        <p>📍 150 W Providencia Ave, Burbank, CA 91502</p>
                        <p>📞 +1-888-960-6170</p>
                        <p>🌐 <a href="http://americanbinderyservice.com" target="_blank">americanbinderyservice.com</a></p>
                    </div>
                </div>
            </div>

            <!-- Mexico Distributors -->
            <div class="distributors-content" id="mexico">
                <div class="distributors-grid">
                    <div class="distributor-card">
                        <h3>Unicontrol</h3>
                        <p>📍 P.ª Aguila Azteca 19323-27, Tijuana, B.C.</p>
                        <p>📞 +52-664-778-4201</p>
                        <p>🌐 <a href="http://unicontrol.mx" target="_blank">unicontrol.mx</a></p>
                    </div>

                    <div class="distributor-card">
                        <h3>INNERMAX</h3>
                        <p>📍 A. Elizondo 1027, Apodaca, N.L.</p>
                        <p>📞 +52-812-921-1557</p>
                        <p>🌐 <a href="http://innermax.mx" target="_blank">innermax.mx</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section (Placeholder) -->
    <section class="map-section">
        <div class="map-placeholder">
            <p>🗺️ 지도</p>
            <p>실제 운영 시 Google Maps 또는 Kakao Map API를 통합할 수 있습니다</p>
        </div>
    </section>
</div>

<style>
/* Contact Page Styles */
.contact-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 5rem 0 3rem;
    text-align: center;
}

.contact-hero .page-title {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.contact-info-section {
    padding: 5rem 0;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 4rem;
}

.contact-form-wrapper h2,
.contact-details h2 {
    font-size: 2rem;
    margin-bottom: 2rem;
    color: var(--secondary-color);
}

.contact-form {
    background: white;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--secondary-color);
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 0.875rem 1rem;
    border: 2px solid var(--border-color);
    border-radius: 6px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
    font-family: inherit;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--primary-color);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
}

.checkbox-label input[type="checkbox"] {
    width: auto;
    cursor: pointer;
}

.btn-large {
    width: 100%;
    padding: 1rem;
    font-size: 1.125rem;
}

.contact-details {
    position: sticky;
    top: 100px;
    height: fit-content;
}

.contact-card {
    background: var(--light-gray);
    padding: 1.5rem;
    border-radius: 8px;
    margin-bottom: 1.5rem;
}

.contact-card h3 {
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
    color: var(--secondary-color);
}

.contact-card p {
    margin: 0.5rem 0;
}

.contact-card a {
    color: var(--primary-color);
    font-weight: 600;
}

.social-links {
    display: flex;
    gap: 0.75rem;
    margin-top: 0.75rem;
}

.social-btn {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: var(--primary-color);
    color: white !important;
    border-radius: 4px;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 600;
    transition: background 0.3s ease;
}

.social-btn:hover {
    background: #b83228;
}

.distributors-section {
    padding: 5rem 0;
    background: var(--light-gray);
}

.distributors-tabs {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin: 2rem 0;
}

.tab-btn {
    padding: 0.875rem 2rem;
    background: white;
    border: 2px solid var(--border-color);
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.tab-btn:hover,
.tab-btn.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.distributors-content {
    display: none;
}

.distributors-content.active {
    display: block;
}

.distributors-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.distributor-card {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.distributor-card h3 {
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
    color: var(--secondary-color);
}

.distributor-badge {
    display: inline-block;
    background: var(--primary-color);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 4px;
    font-size: 0.8rem;
    margin-bottom: 1rem;
}

.distributor-card p {
    margin: 0.5rem 0;
    font-size: 0.95rem;
}

.map-section {
    height: 400px;
    background: var(--light-gray);
}

.map-placeholder {
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #999;
}

.map-placeholder p:first-child {
    font-size: 3rem;
    margin-bottom: 1rem;
}

@media (max-width: 1024px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }

    .contact-details {
        position: static;
    }

    .form-row {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .contact-hero .page-title {
        font-size: 2rem;
    }

    .distributors-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Tab switching
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.distributors-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.dataset.tab;

            // Update active button
            tabBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Show corresponding content
            tabContents.forEach(content => {
                if (content.id === tabId) {
                    content.classList.add('active');
                } else {
                    content.classList.remove('active');
                }
            });
        });
    });

    // Form validation
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            alert('문의가 접수되었습니다. 감사합니다!\n\n실제 운영 시 서버로 데이터가 전송됩니다.');

            // Reset form
            this.reset();
        });
    }
});
</script>

<?php
get_footer();
