# WordPress 자동 설정 스크립트
# WORDPRESS-SETUP.md의 모든 단계를 자동으로 실행합니다

Write-Host "==================================" -ForegroundColor Cyan
Write-Host "My First Worldpress 자동 설정" -ForegroundColor Cyan
Write-Host "==================================" -ForegroundColor Cyan
Write-Host ""

# Docker 컨테이너가 실행 중인지 확인
Write-Host "[1/10] Docker 컨테이너 확인 중..." -ForegroundColor Yellow
$containers = docker ps --filter "name=my_first_worldpress_wp" --format "{{.Names}}"
if (-not $containers) {
    Write-Host "❌ Docker 컨테이너가 실행되지 않았습니다." -ForegroundColor Red
    Write-Host "먼저 'docker compose up -d'를 실행하세요." -ForegroundColor Red
    exit 1
}
Write-Host "✓ Docker 컨테이너 실행 중" -ForegroundColor Green
Start-Sleep -Seconds 2

# WordPress 설치 확인
Write-Host ""
Write-Host "[2/10] WordPress 설치 확인 중..." -ForegroundColor Yellow
$wpInstalled = docker compose exec -T wordpress wp core is-installed 2>$null
if ($LASTEXITCODE -ne 0) {
    Write-Host "❌ WordPress가 설치되지 않았습니다." -ForegroundColor Red
    Write-Host "먼저 http://localhost:8080 에서 WordPress를 설치하세요." -ForegroundColor Red
    exit 1
}
Write-Host "✓ WordPress 설치됨" -ForegroundColor Green

# 테마 활성화
Write-Host ""
Write-Host "[3/10] 테마 활성화 중..." -ForegroundColor Yellow
docker compose exec -T wordpress wp theme activate my-first-wordpress
Write-Host "✓ My First WordPress 테마 활성화됨" -ForegroundColor Green

# 페이지 생성
Write-Host ""
Write-Host "[4/10] 페이지 생성 중..." -ForegroundColor Yellow

# Home 페이지
$homeId = docker compose exec -T wordpress wp post create --post_type=page --post_title="Home" --post_status=publish --porcelain
docker compose exec -T wordpress wp post meta update $homeId _wp_page_template "front-page-v2.php"
Write-Host "  ✓ Home 페이지 생성 (Professional 템플릿)" -ForegroundColor Green

# About 페이지
$aboutId = docker compose exec -T wordpress wp post create --post_type=page --post_title="About" --post_status=publish --porcelain
docker compose exec -T wordpress wp post meta update $aboutId _wp_page_template "template-about.php"
Write-Host "  ✓ About 페이지 생성" -ForegroundColor Green

# Products 페이지
$productsId = docker compose exec -T wordpress wp post create --post_type=page --post_title="Products" --post_status=publish --porcelain
docker compose exec -T wordpress wp post meta update $productsId _wp_page_template "template-products.php"
Write-Host "  ✓ Products 페이지 생성" -ForegroundColor Green

# Contact 페이지
$contactId = docker compose exec -T wordpress wp post create --post_type=page --post_title="Contact" --post_status=publish --porcelain
docker compose exec -T wordpress wp post meta update $contactId _wp_page_template "template-contact.php"
Write-Host "  ✓ Contact 페이지 생성" -ForegroundColor Green

# 홈페이지 설정
Write-Host ""
Write-Host "[5/10] 홈페이지 설정 중..." -ForegroundColor Yellow
docker compose exec -T wordpress wp option update show_on_front "page"
docker compose exec -T wordpress wp option update page_on_front $homeId
Write-Host "✓ 홈페이지가 Home 페이지로 설정됨" -ForegroundColor Green

# 메뉴 생성
Write-Host ""
Write-Host "[6/10] 메뉴 생성 중..." -ForegroundColor Yellow
docker compose exec -T wordpress wp menu create "Main Menu"
docker compose exec -T wordpress wp menu item add-post main-menu $homeId
docker compose exec -T wordpress wp menu item add-post main-menu $aboutId
docker compose exec -T wordpress wp menu item add-post main-menu $productsId
docker compose exec -T wordpress wp menu item add-post main-menu $contactId
docker compose exec -T wordpress wp menu location assign main-menu primary
Write-Host "✓ 메인 메뉴 생성 및 설정됨" -ForegroundColor Green

# 카테고리 생성
Write-Host ""
Write-Host "[7/10] 카테고리 생성 중..." -ForegroundColor Yellow
docker compose exec -T wordpress wp term create category "파트너십" --slug=partnership
docker compose exec -T wordpress wp term create category "산업 뉴스" --slug=industry-news
docker compose exec -T wordpress wp term create category "의료 혁신" --slug=medical-innovation
docker compose exec -T wordpress wp term create category "기술" --slug=technology
docker compose exec -T wordpress wp term create category "북미 시장" --slug=north-america
docker compose exec -T wordpress wp term create category "전시회" --slug=exhibition
docker compose exec -T wordpress wp term create category "제품" --slug=products
Write-Host "✓ 7개 카테고리 생성됨" -ForegroundColor Green

# 블로그 포스트 생성
Write-Host ""
Write-Host "[8/10] 블로그 포스트 생성 중..." -ForegroundColor Yellow

# 포스트 1: 삼성전자 파트너십
$post1Content = @"
레인보우 로보틱스가 삼성전자와 함께 공장 자동화를 위한 야심찬 로드맵을 발표했습니다.

## 주요 협력 내용

삼성전자는 99.99% 정밀도를 목표로 하는 차세대 공장 자동화 시스템 개발을 위해 레인보우 로보틱스의 협동 로봇 기술을 적극 도입하고 있습니다.

### Robot Foundation Model (RFM) 기술

양사는 로봇 기반 모델(Robot Foundation Model) 기술을 공동 개발하고 있으며, 이를 통해 로봇이 더욱 지능적으로 작업을 수행할 수 있게 됩니다.

## 기대 효과

- 생산성 향상
- 품질 일관성 개선
- 작업자 안전성 증대
- 유연한 생산 라인 구축

이번 협력은 한국 로봇 산업의 글로벌 경쟁력을 한층 높이는 계기가 될 것으로 기대됩니다.
"@

docker compose exec -T wordpress wp post create --post_type=post --post_title="삼성전자와 레인보우 로보틱스의 로봇 상용화 로드맵" --post_content="$post1Content" --post_status=publish --post_date="2026-10-02 09:00:00" --post_category="파트너십,산업 뉴스"
Write-Host "  ✓ 포스트 1: 삼성전자 파트너십" -ForegroundColor Green

# 포스트 2: 의료 혁신
$post2Content = @"
레인보우 로보틱스가 삼성서울병원과 함께 추진 중인 'ORchestra' 프로젝트가 주목받고 있습니다.

## ORchestra 프로젝트

수술실에서 의료진을 보조하는 휴머노이드 로봇 개발 프로젝트로, 2029년 임상 시험을 목표로 하고 있습니다.

### 주요 기능

- 수술 도구 전달
- 수술 부위 조명
- 환자 모니터링 보조
- 수술실 환경 관리

## 기술적 도전과제

휴머노이드 로봇이 수술실이라는 고도로 복잡하고 민감한 환경에서 작동하기 위해서는:

1. 정밀성: 의료 기기 취급 시 밀리미터 단위의 정확도
2. 안전성: 환자 및 의료진과의 안전한 상호작용
3. 위생: 수술실 청정도 유지
4. 신뢰성: 24시간 무중단 작동 가능

## 미래 전망

성공적으로 개발될 경우, 의료 인력 부족 문제 해결과 수술 효율성 향상에 크게 기여할 것으로 기대됩니다.
"@

docker compose exec -T wordpress wp post create --post_type=post --post_title="'가위 주세요': 수술실에 진입하는 휴머노이드 로봇" --post_content="$post2Content" --post_status=publish --post_date="2026-09-17 14:30:00" --post_category="의료 혁신,기술"
Write-Host "  ✓ 포스트 2: 의료 혁신" -ForegroundColor Green

# 포스트 3: E Tech 파트너십
$post3Content = @"
E Tech Group이 레인보우 로보틱스의 공식 통합업체(System Integrator)로 선정되었습니다.

## E Tech Group 소개

E Tech Group은 2025년 올해의 시스템 통합업체(System Integrator of the Year)로 선정된 북미 지역의 선도적인 자동화 솔루션 제공업체입니다.

### 협력 범위

- 북미 전역에서 RB 시리즈 협동 로봇 판매 및 통합
- 기술 지원 및 유지보수 서비스
- 산업별 맞춤형 솔루션 개발
- 교육 및 트레이닝 프로그램 제공

## 북미 시장 확대

이번 파트너십을 통해 레인보우 로보틱스는:

1. 북미 시장 접근성 대폭 향상
2. 현지화된 고객 지원 서비스 제공
3. 빠른 배송 및 설치 가능
4. 다양한 산업 분야로 확장

## 고객 혜택

- 빠른 기술 지원
- 현지 언어 서비스
- 산업별 전문 컨설팅
- 통합 솔루션 제공

E Tech Group과의 협력은 레인보우 로보틱스의 글로벌 시장 확대 전략의 핵심 요소입니다.
"@

docker compose exec -T wordpress wp post create --post_type=post --post_title="E Tech Group, 레인보우 로보틱스 공인 통합업체로 선정" --post_content="$post3Content" --post_status=publish --post_date="2026-09-28 10:00:00" --post_category="파트너십,북미 시장"
Write-Host "  ✓ 포스트 3: E Tech 파트너십" -ForegroundColor Green

# 포스트 4: 전시회
$post4Content = @"
2026년 6월 미국 디트로이트에서 열린 Automate 2026 전시회에서 레인보우 로보틱스가 다양한 혁신 제품을 선보였습니다.

## 전시 제품

### RB 시리즈 협동 로봇

5,000대 이상 전 세계에 공급된 검증된 협동 로봇 시리즈를 전시했습니다.

주요 특징:
- 3kg부터 30kg까지 다양한 페이로드
- NSF 인증 모델 (식품, 음료, 실험실용)
- 99.99% 신뢰성 목표
- 모든 핵심 부품 자체 생산

### RB-Y 시리즈 휴머노이드

AI 기반 학습 능력을 갖춘 차세대 휴머노이드 로봇:
- 듀얼 암 구성
- 모바일 플랫폼 통합
- 복잡한 제조 환경 대응

### RBM 모바일 로봇

자율 주행 모바일 플랫폼:
- 차동 및 메카넘 드라이브 옵션
- 장애물 회피 기능
- 플릿 관리 시스템 지원

## 방문객 반응

전시회 참가자들은 특히 RB 시리즈의 정밀성과 신뢰성, 그리고 NSF 인증 모델에 큰 관심을 보였습니다.

많은 제조업체들이 현장에서 데모 요청 및 상담을 진행했으며, 북미 시장에서의 관심이 매우 높은 것으로 확인되었습니다.

## 향후 계획

레인보우 로보틱스는 2026년 하반기에도 다양한 글로벌 전시회에 참가하여 혁신 제품을 선보일 예정입니다.
"@

docker compose exec -T wordpress wp post create --post_type=post --post_title="Automate 2026에서 선보인 레인보우 로보틱스의 혁신" --post_content="$post4Content" --post_status=publish --post_date="2026-06-04 11:00:00" --post_category="전시회,제품"
Write-Host "  ✓ 포스트 4: 전시회" -ForegroundColor Green

# 고유주소 설정
Write-Host ""
Write-Host "[9/10] 고유주소(Permalink) 설정 중..." -ForegroundColor Yellow
docker compose exec -T wordpress wp rewrite structure "/%postname%/"
docker compose exec -T wordpress wp rewrite flush
Write-Host "✓ 고유주소가 '글 이름'으로 설정됨" -ForegroundColor Green

# 사이트 정보 설정
Write-Host ""
Write-Host "[10/10] 사이트 정보 설정 중..." -ForegroundColor Yellow
docker compose exec -T wordpress wp option update blogdescription "휴머노이드 기반 로봇 플랫폼 전문기업"
Write-Host "✓ 사이트 태그라인 설정됨" -ForegroundColor Green

# 완료
Write-Host ""
Write-Host "==================================" -ForegroundColor Green
Write-Host "✓ 모든 설정이 완료되었습니다!" -ForegroundColor Green
Write-Host "==================================" -ForegroundColor Green
Write-Host ""
Write-Host "다음 URL에서 사이트를 확인하세요:" -ForegroundColor Cyan
Write-Host "  홈페이지: http://localhost:8080" -ForegroundColor White
Write-Host "  관리자: http://localhost:8080/wp-admin" -ForegroundColor White
Write-Host ""
Write-Host "생성된 내용:" -ForegroundColor Yellow
Write-Host "  ✓ 4개 페이지 (Home, About, Products, Contact)" -ForegroundColor White
Write-Host "  ✓ 메인 메뉴 설정" -ForegroundColor White
Write-Host "  ✓ 4개 블로그 포스트" -ForegroundColor White
Write-Host "  ✓ 7개 카테고리" -ForegroundColor White
Write-Host "  ✓ 홈페이지 설정 (Professional 템플릿)" -ForegroundColor White
Write-Host "  ✓ 고유주소 설정" -ForegroundColor White
Write-Host ""
