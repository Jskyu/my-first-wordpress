# WordPress 비밀번호 찾기 및 초기화 가이드

WordPress 비밀번호를 잊어버렸거나 찾을 수 없을 때 사용할 수 있는 여러 방법을 소개합니다.

## 방법 1: 완전 초기화 (가장 쉬움) ⭐

모든 데이터를 삭제하고 처음부터 다시 시작합니다.

### PowerShell에서 실행

```powershell
cd C:\workspace\front\my-first-wordpress
.\RESET-WORDPRESS.ps1
```

또는:

```powershell
powershell -ExecutionPolicy Bypass -File .\RESET-WORDPRESS.ps1
```

### 수동으로 초기화

```powershell
# 1. 모든 컨테이너와 데이터 삭제
docker compose down -v

# 2. 다시 시작
docker compose up -d

# 3. http://localhost:8080 접속하여 재설치
```

---

## 방법 2: phpMyAdmin으로 비밀번호 변경

데이터를 유지하면서 비밀번호만 변경합니다.

### 단계

1. **phpMyAdmin 접속**
   - URL: http://localhost:8081
   - 사용자: `root`
   - 비밀번호: `rootpassword`

2. **wordpress 데이터베이스 선택**
   - 왼쪽 메뉴에서 "wordpress" 클릭

3. **wp_users 테이블 열기**
   - "wp_users" 테이블 클릭
   - "Browse" (찾아보기) 탭 클릭

4. **사용자 찾기**
   - 관리자 계정 행에서 "Edit" (편집) 클릭

5. **비밀번호 변경**
   ```
   user_pass 필드:
   - Function: MD5 선택
   - Value: 새로운비밀번호 입력 (예: admin123)
   ```

6. **저장**
   - "Go" 버튼 클릭

7. **로그인 시도**
   - http://localhost:8080/wp-admin
   - 변경한 비밀번호로 로그인

---

## 방법 3: WP-CLI로 비밀번호 리셋

Docker 컨테이너 내부에서 WordPress CLI를 사용합니다.

### PowerShell에서 실행

```powershell
# 컨테이너 내부 접속
docker compose exec wordpress bash
```

컨테이너 안에서:

```bash
# 사용자 목록 확인
wp user list

# 비밀번호 변경 (admin을 실제 사용자명으로 변경)
wp user update admin --user_pass=새로운비밀번호

# 또는 랜덤 비밀번호 생성
wp user update admin --user_pass=$(openssl rand -base64 12)

# 종료
exit
```

---

## 방법 4: 비밀번호 재설정 이메일 (로컬에서는 작동 안 함)

로컬 환경에서는 이메일이 전송되지 않으므로, 프로덕션 환경에서만 사용 가능합니다.

---

## 빠른 참조

### 완전 초기화 (한 줄 명령어)

```powershell
docker compose down -v && docker compose up -d
```

### phpMyAdmin 접속 정보

- URL: http://localhost:8081
- 사용자: root
- 비밀번호: rootpassword

### 기본 WordPress 관리자 URL

- http://localhost:8080/wp-admin

---

## 비밀번호 관리 팁

### 강력한 비밀번호 생성

```
예시: Rb@2024!SecurePass
```

권장 사항:
- 최소 12자 이상
- 대문자, 소문자, 숫자, 특수문자 포함
- 추측하기 어려운 조합

### 비밀번호 저장

다음 중 하나를 사용하세요:
- 브라우저의 비밀번호 관리자
- 1Password, LastPass 등의 비밀번호 관리 앱
- 안전한 메모장 (암호화된 파일)

---

## 문제 해결

### "Error establishing database connection"

**원인**: 데이터베이스가 아직 준비되지 않음

**해결**:
```powershell
# 컨테이너 재시작
docker compose restart

# 30초 대기 후 재접속
```

### phpMyAdmin 접속 불가

**해결**:
```powershell
# phpMyAdmin 컨테이너 확인
docker compose ps

# 재시작
docker compose restart phpmyadmin
```

### WP-CLI 명령어 작동 안 함

**확인**:
```bash
# WordPress가 설치되었는지 확인
wp core is-installed

# 없다면 설치 필요
```

---

## 자주 묻는 질문

### Q: 초기화하면 테마도 삭제되나요?

**A**: 아니요. `wp-content/themes/my-first-wordpress` 테마는 그대로 유지됩니다.
컨테이너를 다시 시작하면 테마가 자동으로 인식됩니다.

### Q: 초기화 후 데이터 복구 가능한가요?

**A**: `docker compose down -v`를 실행하면 모든 데이터가 영구 삭제됩니다.
백업이 없으면 복구할 수 없습니다.

### Q: 백업은 어떻게 하나요?

**A**:
```powershell
# 데이터베이스 백업
docker compose exec db mysqldump -u wordpress -pwordpress wordpress > backup.sql

# 복원
docker compose exec -T db mysql -u wordpress -pwordpress wordpress < backup.sql
```

---

## 다음에는 이렇게 하세요

1. **비밀번호를 안전한 곳에 저장**
   - 비밀번호 관리 앱 사용

2. **정기적인 백업**
   - 주 1회 데이터베이스 백업

3. **강력한 비밀번호 사용**
   - 최소 12자 이상
   - 복잡한 조합

4. **2단계 인증 플러그인 설치** (선택사항)
   - Wordfence
   - Two-Factor Authentication

---

**지금 바로 초기화하려면**:

```powershell
cd C:\workspace\front\my-first-wordpress
.\RESET-WORDPRESS.ps1
```
