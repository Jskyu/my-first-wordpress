# My First Worldpress 시작 스크립트
# PowerShell에서 실행하세요

Write-Host "======================================" -ForegroundColor Cyan
Write-Host "My First Worldpress 시작" -ForegroundColor Cyan
Write-Host "======================================`n" -ForegroundColor Cyan

# Docker 실행 확인
Write-Host "[1/4] Docker 상태 확인 중..." -ForegroundColor Yellow
try {
    $dockerVersion = docker --version
    Write-Host "✓ Docker 설치 확인: $dockerVersion" -ForegroundColor Green
} catch {
    Write-Host "✗ Docker를 찾을 수 없습니다." -ForegroundColor Red
    Write-Host "  Docker Desktop이 실행 중인지 확인하세요." -ForegroundColor Red
    Write-Host "  작업 표시줄에 Docker 아이콘이 녹색이어야 합니다.`n" -ForegroundColor Red

    Read-Host "Docker Desktop을 실행한 후 Enter를 눌러 계속하세요"
    exit
}

# Docker Compose 확인
Write-Host "`n[2/4] Docker Compose 확인 중..." -ForegroundColor Yellow
try {
    $composeVersion = docker compose version
    Write-Host "✓ Docker Compose 확인: $composeVersion" -ForegroundColor Green
} catch {
    Write-Host "✗ Docker Compose를 찾을 수 없습니다." -ForegroundColor Red
    exit
}

# 컨테이너 시작
Write-Host "`n[3/4] WordPress 컨테이너 시작 중..." -ForegroundColor Yellow
Write-Host "이 작업은 최초 실행 시 5-10분 소요될 수 있습니다.`n" -ForegroundColor Gray

docker compose up -d

if ($LASTEXITCODE -eq 0) {
    Write-Host "✓ 컨테이너가 성공적으로 시작되었습니다!" -ForegroundColor Green
} else {
    Write-Host "✗ 컨테이너 시작 실패" -ForegroundColor Red
    exit
}

# 컨테이너 상태 확인
Write-Host "`n[4/4] 컨테이너 상태 확인 중...`n" -ForegroundColor Yellow
docker compose ps

# 완료 메시지
Write-Host "`n======================================" -ForegroundColor Cyan
Write-Host "WordPress 준비 완료!" -ForegroundColor Green
Write-Host "======================================`n" -ForegroundColor Cyan

Write-Host "다음 URL로 접속하세요:" -ForegroundColor White
Write-Host "  • WordPress 사이트:  " -NoNewline -ForegroundColor Gray
Write-Host "http://localhost:8080" -ForegroundColor Cyan
Write-Host "  • 관리자 패널:       " -NoNewline -ForegroundColor Gray
Write-Host "http://localhost:8080/wp-admin" -ForegroundColor Cyan
Write-Host "  • phpMyAdmin:        " -NoNewline -ForegroundColor Gray
Write-Host "http://localhost:8081" -ForegroundColor Cyan

Write-Host "`n다음 단계:" -ForegroundColor Yellow
Write-Host "1. http://localhost:8080 접속" -ForegroundColor White
Write-Host "2. WordPress 설치 진행" -ForegroundColor White
Write-Host "3. 관리자 패널에서 테마 활성화`n" -ForegroundColor White

Write-Host "컨테이너를 중지하려면: " -NoNewline -ForegroundColor Gray
Write-Host "docker compose down" -ForegroundColor Cyan
Write-Host ""
