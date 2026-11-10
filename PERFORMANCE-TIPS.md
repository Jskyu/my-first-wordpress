# 성능 최적화 가이드

이 문서는 WordPress 사이트의 성능을 더욱 향상시키기 위한 팁과 권장사항을 제공합니다.

## 이미 구현된 최적화

### 1. CSS 최적화
- ✅ 외부 스타일시트로 분리
- ✅ Critical CSS만 인라인
- ✅ 최소화된 CSS 크기
- ✅ CSS 변수 사용

### 2. JavaScript 최적화
- ✅ Footer에 스크립트 로드
- ✅ Defer 속성 사용
- ✅ 불필요한 jQuery 제거
- ✅ Vanilla JS 사용

### 3. 이미지 최적화
- ✅ 지연 로딩 (Lazy Loading)
- ✅ 반응형 이미지
- ✅ 적절한 이미지 크기

### 4. WordPress 최적화
- ✅ Emoji 스크립트 제거
- ✅ XML-RPC 비활성화
- ✅ Query String 제거
- ✅ 리소스 힌트 (Preconnect)

## 추가 최적화 방법

### 1. 캐싱 플러그인 설치

#### WP Super Cache (권장)
```
플러그인 > 새로 추가 > "WP Super Cache" 검색 및 설치
```

**설정**:
1. **Caching On** 활성화
2. **Recommended** 설정 선택
3. "Update Status" 클릭

#### W3 Total Cache (고급)
더 많은 옵션이 필요한 경우:
```
플러그인 > 새로 추가 > "W3 Total Cache" 검색 및 설치
```

### 2. 이미지 최적화 플러그인

#### Smush (권장)
```
플러그인 > 새로 추가 > "Smush" 검색 및 설치
```

**기능**:
- 자동 이미지 압축
- WebP 변환
- 지연 로딩 강화

#### ShortPixel
더 강력한 압축이 필요한 경우:
```
플러그인 > 새로 추가 > "ShortPixel" 검색 및 설치
```

### 3. CDN 설정

#### Cloudflare (무료)

1. **Cloudflare 계정 생성**
   - https://www.cloudflare.com 방문
   - 무료 계정 생성

2. **도메인 추가**
   - 사이트 추가
   - 네임서버 변경

3. **최적화 설정**
   - Auto Minify 활성화 (CSS, JS, HTML)
   - Brotli 압축 활성화
   - Rocket Loader 활성화

### 4. 데이터베이스 최적화

#### WP-Optimize
```
플러그인 > 새로 추가 > "WP-Optimize" 검색 및 설치
```

**정기 작업**:
- 게시물 리비전 정리
- 스팸 댓글 삭제
- 임시 데이터 정리
- 데이터베이스 테이블 최적화

### 5. Gzip 압축 활성화

#### .htaccess 설정 (Apache)
```apache
<IfModule mod_deflate.c>
    # Compress HTML, CSS, JavaScript, Text, XML and fonts
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/vnd.ms-fontobject
    AddOutputFilterByType DEFLATE application/x-font
    AddOutputFilterByType DEFLATE application/x-font-opentype
    AddOutputFilterByType DEFLATE application/x-font-otf
    AddOutputFilterByType DEFLATE application/x-font-truetype
    AddOutputFilterByType DEFLATE application/x-font-ttf
    AddOutputFilterByType DEFLATE application/x-javascript
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE font/opentype
    AddOutputFilterByType DEFLATE font/otf
    AddOutputFilterByType DEFLATE font/ttf
    AddOutputFilterByType DEFLATE image/svg+xml
    AddOutputFilterByType DEFLATE image/x-icon
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/javascript
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/xml
</IfModule>
```

### 6. 브라우저 캐싱

#### .htaccess 설정
```apache
<IfModule mod_expires.c>
    ExpiresActive On
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
    ExpiresByType text/css "access plus 1 month"
    ExpiresByType application/pdf "access plus 1 month"
    ExpiresByType application/javascript "access plus 1 month"
    ExpiresByType application/x-javascript "access plus 1 month"
    ExpiresByType application/x-shockwave-flash "access plus 1 month"
    ExpiresByType image/x-icon "access plus 1 year"
    ExpiresDefault "access plus 2 days"
</IfModule>
```

### 7. 폰트 최적화

#### Google Fonts 최적화
현재 시스템 폰트를 사용하고 있지만, Google Fonts를 추가하는 경우:

```html
<!-- Preconnect (이미 구현됨) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Font loading with display=swap -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
```

### 8. 성능 모니터링

#### Google PageSpeed Insights
```
https://pagespeed.web.dev/
```
정기적으로 사이트 성능 측정

#### GTmetrix
```
https://gtmetrix.com/
```
상세한 성능 리포트

## 성능 체크리스트

### 이미지
- [ ] 모든 이미지 압축 완료
- [ ] WebP 형식 사용 (지원하는 경우)
- [ ] 적절한 이미지 크기 (불필요하게 큰 이미지 제거)
- [ ] 지연 로딩 활성화

### 코드
- [ ] CSS/JS 파일 최소화 (Minify)
- [ ] 사용하지 않는 CSS/JS 제거
- [ ] Critical CSS 인라인
- [ ] 비동기 스크립트 로딩

### 캐싱
- [ ] 브라우저 캐싱 설정
- [ ] 서버 캐싱 (WP Super Cache)
- [ ] CDN 설정 (선택사항)

### 데이터베이스
- [ ] 정기적인 데이터베이스 최적화
- [ ] 불필요한 리비전 제거
- [ ] 자동 저장 제한

### 호스팅
- [ ] 적절한 PHP 버전 (7.4+)
- [ ] 충분한 메모리 할당
- [ ] Gzip 압축 활성화

## Docker 환경 성능 최적화

### 1. 메모리 설정 조정

`uploads.ini`에서:
```ini
memory_limit = 512M  # 필요시 증가
```

### 2. OPcache 활성화

새 파일 생성: `opcache.ini`
```ini
opcache.enable=1
opcache.memory_consumption=128
opcache.interned_strings_buffer=8
opcache.max_accelerated_files=4000
opcache.revalidate_freq=60
opcache.fast_shutdown=1
```

`docker-compose.yml`에 추가:
```yaml
volumes:
  - ./opcache.ini:/usr/local/etc/php/conf.d/opcache.ini
```

### 3. Redis 캐싱 (고급)

`docker-compose.yml`에 Redis 추가:
```yaml
redis:
  image: redis:alpine
  container_name: mytheme_redis
  networks:
    - mytheme_network
```

Redis 플러그인 설치 후 연결

## 프로덕션 환경 권장사항

### 1. HTTPS 사용
- SSL/TLS 인증서 설치
- HTTP → HTTPS 리다이렉트

### 2. 보안 헤더
```apache
Header set X-Content-Type-Options "nosniff"
Header set X-Frame-Options "SAMEORIGIN"
Header set X-XSS-Protection "1; mode=block"
```

### 3. 정기 백업
- 일일 자동 백업 설정
- 오프사이트 백업 저장

### 4. 모니터링
- Uptime 모니터링
- 성능 모니터링
- 에러 로깅

## 성능 목표

### 목표 지표
- **First Contentful Paint**: < 1.8초
- **Speed Index**: < 3.4초
- **Time to Interactive**: < 3.8초
- **Total Blocking Time**: < 200ms
- **Largest Contentful Paint**: < 2.5초
- **Cumulative Layout Shift**: < 0.1

### PageSpeed 점수
- **모바일**: 90+
- **데스크톱**: 95+

## 결론

이러한 최적화를 점진적으로 적용하면 사이트 성능을 크게 향상시킬 수 있습니다.

**우선순위**:
1. 캐싱 플러그인 설치 (즉시 효과)
2. 이미지 최적화 (큰 영향)
3. CDN 설정 (글로벌 사용자 대상)
4. 정기적인 유지보수

성능 측정 후 가장 영향이 큰 최적화부터 시작하세요!
