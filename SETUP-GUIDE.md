# WordPress 설치 가이드

WordPress 사이트를 설정하는 간단한 가이드입니다.

## 1단계: Docker 환경 시작

### Windows에서

```bash
cd C:\workspace\front\my-first-wordpress
docker-compose up -d
```

### 컨테이너 확인
```bash
docker-compose ps
```

모든 서비스가 "Up" 상태여야 합니다.

## 2단계: WordPress 설치

1. 브라우저에서 `http://localhost:8080` 접속
2. 언어 선택: **한국어**
3. 사이트 정보 입력:
   - 사이트 제목: **My First WordPress**
   - 사용자명: admin
   - 비밀번호: (강력한 비밀번호 설정)
   - 이메일: your-email@example.com
4. "WordPress 설치" 클릭

## 3단계: 테마 활성화

1. http://localhost:8080/wp-admin 로그인
2. **외모** > **테마**
3. **My First WordPress** 테마 활성화

## 4단계: 기본 페이지 생성

자동 설정 스크립트 사용:
```powershell
.\setup-auto.ps1
```

또는 수동으로:
1. **페이지** > **새 페이지 추가**
2. Home, About, Products, Contact 페이지 생성
3. **설정** > **읽기**에서 홈페이지를 "Home"으로 설정

## 5단계: 메뉴 설정

1. **외모** > **메뉴**
2. 새 메뉴 생성
3. 페이지들을 메뉴에 추가
4. **Primary Menu** 위치에 할당

## 도구

- **WordPress 관리자**: http://localhost:8080/wp-admin
- **phpMyAdmin**: http://localhost:8081
  - 사용자명: root
  - 비밀번호: rootpassword

## Docker 명령어

```bash
# 시작
docker-compose up -d

# 중지
docker-compose down

# 로그 확인
docker-compose logs -f

# 재시작
docker-compose restart
```

## 문제 해결

### 테마가 보이지 않을 때
```bash
docker-compose exec wordpress chown -R www-data:www-data /var/www/html/wp-content
docker-compose restart wordpress
```

### 고유주소(Permalink) 오류
1. **설정** > **고유주소**
2. "글 이름" 선택
3. 저장

## 완료!

WordPress 사이트 설정이 완료되었습니다. 이제 콘텐츠를 추가하고 사이트를 커스터마이징할 수 있습니다.
