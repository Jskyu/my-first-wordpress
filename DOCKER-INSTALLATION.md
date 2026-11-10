# Docker Desktop 설치 가이드 (Windows)

## 시스템 요구사항

- Windows 10 64비트: Pro, Enterprise, Education (Build 16299 이상)
- Windows 11 64비트
- WSL 2 기능 활성화
- BIOS에서 가상화 활성화

## 설치 단계

### 1. Docker Desktop 다운로드

**공식 웹사이트**:
```
https://www.docker.com/products/docker-desktop/
```

1. 위 링크 접속
2. "Download for Windows" 클릭
3. `Docker Desktop Installer.exe` 다운로드

### 2. Docker Desktop 설치

1. **다운로드한 설치 파일 실행**
   - `Docker Desktop Installer.exe` 더블클릭

2. **설치 옵션 선택**
   - ✅ "Use WSL 2 instead of Hyper-V" (권장)
   - ✅ "Add shortcut to desktop"

3. **설치 진행**
   - "Ok" 클릭하여 설치 시작
   - 설치 완료까지 5-10분 소요

4. **시스템 재시작**
   - 설치 완료 후 재시작 필요할 수 있음

### 3. WSL 2 설정 (필요한 경우)

Docker Desktop이 WSL 2를 요구하는 경우:

#### PowerShell을 관리자 권한으로 실행

```powershell
# WSL 활성화
dism.exe /online /enable-feature /featurename:Microsoft-Windows-Subsystem-Linux /all /norestart

# 가상 머신 플랫폼 활성화
dism.exe /online /enable-feature /featurename:VirtualMachinePlatform /all /norestart

# 시스템 재시작
Restart-Computer
```

#### WSL 2 Linux 커널 업데이트

1. 다음 링크에서 업데이트 패키지 다운로드:
   ```
   https://aka.ms/wsl2kernel
   ```

2. 다운로드한 파일 실행 및 설치

3. WSL 2를 기본 버전으로 설정:
   ```powershell
   wsl --set-default-version 2
   ```

### 4. Docker Desktop 실행

1. **Docker Desktop 시작**
   - 시작 메뉴에서 "Docker Desktop" 실행
   - 작업 표시줄에 Docker 아이콘 나타남

2. **Docker 엔진 시작 대기**
   - 초기 실행 시 1-2분 소요
   - 아이콘이 녹색으로 변하면 준비 완료

3. **설치 확인**
   PowerShell 또는 CMD에서:
   ```bash
   docker --version
   docker compose version
   ```

   정상 출력 예시:
   ```
   Docker version 24.0.6, build ed223bc
   Docker Compose version v2.23.0
   ```

### 5. WordPress 사이트 실행

```bash
# 프로젝트 디렉토리로 이동
cd C:\workspace\front\my-first-wordpress

# Docker Compose로 WordPress 시작
docker compose up -d

# 컨테이너 상태 확인
docker compose ps
```

### 6. WordPress 접속

- **사이트**: http://localhost:8080
- **관리자**: http://localhost:8080/wp-admin
- **phpMyAdmin**: http://localhost:8081

## 문제 해결

### "WSL 2 installation is incomplete" 오류

**해결방법**:
1. WSL 2 Linux 커널 업데이트 설치 (위 3단계 참고)
2. Docker Desktop 재시작

### "Hardware assisted virtualization" 오류

**해결방법**:
1. BIOS 진입 (재시작 시 F2, F10, Del 키)
2. Virtualization Technology (VT-x/AMD-V) 활성화
3. 저장 후 재시작

### Docker Desktop이 시작되지 않음

**해결방법**:
1. 작업 관리자에서 Docker 프로세스 종료
2. Docker Desktop 재시작
3. 안 되면 재설치

### 포트 충돌 (8080 이미 사용 중)

**해결방법**:
`docker-compose.yml` 파일 수정:
```yaml
wordpress:
  ports:
    - "8090:80"  # 8080 대신 8090 사용
```

그 후:
```bash
docker compose down
docker compose up -d
```

사이트 접속: http://localhost:8090

## 추가 명령어

```bash
# 컨테이너 중지
docker compose down

# 컨테이너 재시작
docker compose restart

# 로그 확인
docker compose logs -f

# 컨테이너 완전 삭제 (데이터 포함)
docker compose down -v

# Docker Desktop 리소스 설정
# Docker Desktop > Settings > Resources
# - CPU, Memory, Disk 조정 가능
```

## Docker Desktop 대안

설치가 어려운 경우 다음 대안을 사용할 수 있습니다:

### 1. XAMPP (가장 쉬운 방법)
- WordPress를 로컬에서 실행하는 올인원 패키지
- 다운로드: https://www.apachefriends.org/

### 2. Local by Flywheel
- WordPress 전용 로컬 개발 환경
- 다운로드: https://localwp.com/

### 3. WAMP (Windows)
- Apache, MySQL, PHP 통합 패키지
- 다운로드: https://www.wampserver.com/

이 중 하나를 선택하여 wp-content/themes/my-first-wordpress 테마를 복사하면 됩니다.

## 참고 자료

- Docker 공식 문서: https://docs.docker.com/desktop/install/windows-install/
- WSL 2 설치: https://docs.microsoft.com/en-us/windows/wsl/install
- Docker 시작 가이드: https://docs.docker.com/get-started/
