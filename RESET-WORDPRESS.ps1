# WordPress 완전 초기화 스크립트
# 모든 데이터베이스와 WordPress 설정이 삭제됩니다

Write-Host "======================================" -ForegroundColor Red
Write-Host "WordPress 완전 초기화" -ForegroundColor Red
Write-Host "======================================`n" -ForegroundColor Red

Write-Host "경고: 이 작업은 다음을 삭제합니다:" -ForegroundColor Yellow
Write-Host "  • 모든 WordPress 데이터" -ForegroundColor Yellow
Write-Host "  • 모든 데이터베이스 내용" -ForegroundColor Yellow
Write-Host "  • 업로드한 이미지 및 파일" -ForegroundColor Yellow
Write-Host "  • 모든 설정 및 사용자 계정`n" -ForegroundColor Yellow

$confirm = Read-Host "계속하시겠습니까? (yes/no)"

if ($confirm -ne "yes") {
    Write-Host "`n작업이 취소되었습니다." -ForegroundColor Green
    exit
}

Write-Host "`n[1/3] 컨테이너 중지 및 삭제 중..." -ForegroundColor Cyan
docker compose down -v

if ($LASTEXITCODE -eq 0) {
    Write-Host "✓ 컨테이너가 삭제되었습니다." -ForegroundColor Green
} else {
    Write-Host "✗ 컨테이너 삭제 실패" -ForegroundColor Red
}

Write-Host "`n[2/3] WordPress 파일 정리 중..." -ForegroundColor Cyan

# wp-content 내부의 WordPress 생성 파일들 삭제 (테마 제외)
$pathsToClean = @(
    "wp-content\uploads",
    "wp-content\cache",
    "wp-content\plugins\akismet",
    "wp-content\plugins\hello.php"
)

foreach ($path in $pathsToClean) {
    if (Test-Path $path) {
        Remove-Item -Path $path -Recurse -Force -ErrorAction SilentlyContinue
        Write-Host "  ✓ 삭제됨: $path" -ForegroundColor Gray
    }
}

Write-Host "✓ WordPress 파일 정리 완료" -ForegroundColor Green

Write-Host "`n[3/3] 새로운 WordPress 시작 중..." -ForegroundColor Cyan
docker compose up -d

if ($LASTEXITCODE -eq 0) {
    Write-Host "✓ WordPress가 초기화되었습니다!" -ForegroundColor Green
} else {
    Write-Host "✗ WordPress 시작 실패" -ForegroundColor Red
    exit
}

Write-Host "`n컨테이너 상태:" -ForegroundColor Yellow
docker compose ps

Write-Host "`n======================================" -ForegroundColor Green
Write-Host "초기화 완료!" -ForegroundColor Green
Write-Host "======================================`n" -ForegroundColor Green

Write-Host "이제 다음 URL로 접속하여 WordPress를 새로 설치하세요:" -ForegroundColor White
Write-Host "  http://localhost:8080`n" -ForegroundColor Cyan

Write-Host "설치 시 권장 정보:" -ForegroundColor Yellow
Write-Host "  사이트 제목: My First Worldpress" -ForegroundColor Gray
Write-Host "  사용자명: admin" -ForegroundColor Gray
Write-Host "  비밀번호: [강력한 비밀번호를 설정하세요]" -ForegroundColor Gray
Write-Host "  이메일: [실제 이메일 주소]`n" -ForegroundColor Gray

Write-Host "설치 후 할 일:" -ForegroundColor Yellow
Write-Host "1. 외모 > 테마 > 테마 활성화" -ForegroundColor White
Write-Host "2. 외모 > 메뉴 > 메뉴 생성 및 설정" -ForegroundColor White
Write-Host "3. 설정 > 고유주소 > '글 이름' 선택`n" -ForegroundColor White
