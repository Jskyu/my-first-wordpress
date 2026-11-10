# My First WordPress - 개선된 WordPress 사이트

최적화된 WordPress 테마입니다.

## 📊 원본 사이트 분석 결과

### 발견된 문제점

1. **성능 이슈**
   - 200KB 이상의 인라인 CSS
   - 최적화되지 않은 이미지 로딩
   - 불필요한 JavaScript 리소스

2. **UX 문제**
   - 복잡한 다단계 메가메뉴
   - 직관적이지 않은 네비게이션
   - 느린 페이지 로딩

3. **모바일 최적화 부족**
   - 기본 반응형만 구현
   - 터치 타겟 최적화 미흡

4. **SEO 개선 필요**
   - Open Graph 태그 부족
   - 모바일 우선 인덱싱 미준비

## ✨ 개선 사항

### 1. 성능 최적화
- ✅ 최소화된 CSS (인라인 제거)
- ✅ 이미지 지연 로딩 (Lazy Loading)
- ✅ JavaScript 비동기/지연 로딩
- ✅ 불필요한 WordPress 스크립트 제거 (Emoji, XML-RPC)
- ✅ 리소스 힌트 (Preconnect)

### 2. 단순하고 직관적인 UX
- ✅ 간소화된 단일 레벨 네비게이션
- ✅ 명확한 메뉴 구조
- ✅ 빠른 페이지 로딩
- ✅ 접근성 개선 (Skip Links, ARIA 속성)

### 3. 완벽한 반응형 디자인
- ✅ 모바일 우선 접근
- ✅ 최적화된 터치 타겟 (44x44px 이상)
- ✅ 부드러운 모바일 메뉴 애니메이션
- ✅ 다양한 화면 크기 지원 (모바일/태블릿/데스크톱)

### 4. SEO 최적화
- ✅ Open Graph 메타 태그
- ✅ Twitter Card 지원
- ✅ Schema.org 구조화된 데이터
- ✅ 시맨틱 HTML5 마크업
- ✅ 최적화된 페이지 타이틀 및 메타 설명

### 5. 보안 강화
- ✅ WordPress 버전 숨김
- ✅ 로그인 에러 메시지 일반화
- ✅ XML-RPC 비활성화

## 🚀 설치 방법

### 필수 요구사항
- Docker & Docker Compose
- 최소 2GB RAM
- 1GB 여유 디스크 공간

### 1. Docker 환경 시작

```bash
# 프로젝트 디렉토리로 이동
cd C:\workspace\front\my-first-wordpress

# Docker Compose 실행
docker-compose up -d
```

### 2. WordPress 설치

브라우저에서 `http://localhost:8080` 접속 후:

1. 언어 선택: **한국어**
2. 사이트 제목: **My First WordPress**
3. 관리자 계정 정보 입력
4. 설치 완료

### 3. 테마 활성화

1. WordPress 관리자 패널 로그인 (`http://localhost:8080/wp-admin`)
2. **외모** > **테마** 메뉴로 이동
3. **My First WordPress** 테마 활성화

### 4. 메뉴 설정

1. **외모** > **메뉴**로 이동
2. 새 메뉴 생성
3. 메뉴 위치를 "Primary Menu"로 설정
4. 페이지 추가 및 저장

### 5. 기타 도구

- **phpMyAdmin**: `http://localhost:8081` (데이터베이스 관리)
  - 사용자명: `root`
  - 비밀번호: `rootpassword`

- **WordPressAdmin**: 
  - 사용자명: `admin`
  - 비밀번호: `sj#U@psidK*qPKEPs!`

## 📁 프로젝트 구조

```
my-first-wordpress/
├── docker-compose.yml          # Docker 설정
├── uploads.ini                 # PHP 업로드 설정
├── wp-content/
│   └── themes/
│       └── my-first-wordpress/
│           ├── style.css       # 메인 스타일시트
│           ├── functions.php   # 테마 기능
│           ├── header.php      # 헤더 템플릿
│           ├── footer.php      # 푸터 템플릿
│           ├── index.php       # 블로그 목록
│           ├── front-page.php  # 홈페이지
│           ├── single.php      # 단일 포스트
│           ├── page.php        # 페이지 템플릿
│           └── assets/
│               ├── css/        # 추가 스타일
│               ├── js/
│               │   └── main.js # 메인 JavaScript
│               └── images/     # 이미지 에셋
```

## 🎨 테마 특징

### 디자인
- 모던하고 깔끔한 인터페이스
- 카드 기반 레이아웃
- 부드러운 애니메이션 효과

### 성능
- Google PageSpeed 최적화
- Critical CSS 인라인
- 비동기 리소스 로딩
- 최소화된 HTTP 요청

### 기능
- 반응형 디자인
- 모바일 메뉴
- 부드러운 스크롤
- 지연 로딩 이미지
- SEO 친화적
- 접근성 준수 (WCAG 2.1)

## 🔧 커스터마이징

### 테마 커스터마이저
WordPress 관리자 > **외모** > **사용자 정의하기**에서:

- 사이트 로고 업로드
- 색상 변경
- 연락처 정보 설정
- 메뉴 구성

### CSS 변수
`style.css`의 `:root` 섹션에서 색상 및 스타일 변경:

```css
:root {
  --primary-color: #dc3d31;
  --secondary-color: #2c3e50;
  --text-color: #333333;
  --max-width: 1200px;
}
```

## 📊 성능 비교

| 항목 | 원본 사이트 | 개선된 사이트 |
|------|------------|--------------|
| CSS 크기 | 200KB+ (인라인) | ~30KB (외부) |
| 초기 로딩 | 느림 | 빠름 |
| 모바일 점수 | - | 최적화됨 |
| SEO 준비 | 부분적 | 완전 |
| 접근성 | 기본 | 향상됨 |

## 🛠️ Docker 명령어

```bash
# 컨테이너 시작
docker-compose up -d

# 컨테이너 중지
docker-compose down

# 로그 확인
docker-compose logs -f

# 컨테이너 재시작
docker-compose restart

# 데이터 완전 삭제 (주의!)
docker-compose down -v
```

## 📝 권장 플러그인

테마 기능을 확장하기 위한 권장 플러그인:

1. **Yoast SEO** - 고급 SEO 기능
2. **WP Super Cache** - 페이지 캐싱
3. **Smush** - 이미지 최적화
4. **Contact Form 7** - 문의 양식
5. **WooCommerce** - 전자상거래 (필요시)

## 🐛 문제 해결

### 테마가 보이지 않을 때
```bash
# wp-content 권한 확인
docker-compose exec wordpress chown -R www-data:www-data /var/www/html/wp-content
```

### 이미지 업로드 실패
`uploads.ini` 파일의 `upload_max_filesize` 값을 늘리고 컨테이너 재시작

### 데이터베이스 연결 오류
```bash
# DB 컨테이너 상태 확인
docker-compose ps
docker-compose logs db
```

## 🤝 기여

개선 사항이나 버그 리포트는 이슈로 등록해주세요.

## 📞 지원

문제가 발생하면 다음을 확인하세요:
1. Docker가 실행 중인지 확인
2. 포트 8080, 8081이 사용 가능한지 확인
3. 로그 확인: `docker-compose logs`

---

**제작**: My First WordPress 프로젝트
**날짜**: 2026-11-09
**버전**: 1.0.0
