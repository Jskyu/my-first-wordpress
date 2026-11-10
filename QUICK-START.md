# WordPress 빠른 시작 가이드

## 🚀 자동 설정 (5분 완성)

### 1단계: Docker 시작

```powershell
cd C:\workspace\front\my-first-wordpress
docker compose up -d
```

### 2단계: WordPress 기본 설치

1. http://localhost:8080 접속
2. 언어: **한국어** 선택
3. 사이트 정보 입력:
   - 사이트 제목: My First WordPress
   - 사용자명: admin
   - 비밀번호: (강력한 비밀번호 설정)
   - 이메일: your-email@example.com
4. **WordPress 설치** 클릭
5. 로그인

### 3단계: 자동 설정 스크립트 실행

```powershell
.\setup-auto.ps1
```

**이 스크립트가 자동으로 설정:**
- ✅ My First WordPress 테마 활성화
- ✅ 4개 페이지 생성 (Home, About, Products, Contact)
- ✅ 메인 메뉴 생성 및 설정
- ✅ 샘플 블로그 포스트 생성
- ✅ 카테고리 생성
- ✅ 홈페이지 설정
- ✅ 고유주소 설정

### 완료! 🎉

http://localhost:8080 에서 완성된 사이트를 확인하세요!

---

## 📋 수동 설정

### 1. Docker 시작

```powershell
cd C:\workspace\front\my-first-wordpress
docker compose up -d
```

### 2. WordPress 설치

http://localhost:8080 접속 후 설치 진행

### 3. 테마 활성화

1. http://localhost:8080/wp-admin 로그인
2. **외모** > **테마**
3. **My First WordPress** 테마 활성화

### 4. 메뉴 설정

1. **외모** > **메뉴**
2. 새 메뉴 생성
3. 페이지 추가 후 **Primary Menu** 위치에 할당

---

## 문제 해결

### Docker Desktop이 실행되지 않음

1. 시작 메뉴에서 "Docker Desktop" 실행
2. 작업 표시줄의 Docker 아이콘 확인
3. 다시 시도

### 포트 8080이 사용 중

`docker-compose.yml` 파일에서 포트 변경:
```yaml
wordpress:
  ports:
    - "8090:80"  # 원하는 포트로 변경
```

### 컨테이너 재시작

```powershell
docker compose down
docker compose up -d
```

---

## 유용한 명령어

```powershell
# 컨테이너 중지
docker compose down

# 컨테이너 재시작
docker compose restart

# 로그 확인
docker compose logs -f

# 모든 데이터 삭제 (주의!)
docker compose down -v
```

---

## 접속 URL

| 서비스 | URL | 용도 |
|--------|-----|------|
| WordPress 사이트 | http://localhost:8080 | 메인 사이트 |
| 관리자 패널 | http://localhost:8080/wp-admin | 사이트 관리 |
| phpMyAdmin | http://localhost:8081 | 데이터베이스 관리 |

---

## 기본 계정 정보

### MySQL (phpMyAdmin)
- **사용자**: root
- **비밀번호**: rootpassword

### WordPress
- 설치 시 직접 설정
