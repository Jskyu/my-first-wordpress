# My First WordPress Auto Setup Script
# Complete automation with proper error handling

$ErrorActionPreference = "Continue"

Write-Host "==================================" -ForegroundColor Cyan
Write-Host "My First WordPress Auto Setup" -ForegroundColor Cyan
Write-Host "==================================" -ForegroundColor Cyan
Write-Host ""

# Helper function to run wp-cli commands safely
function Run-WP {
    param([string]$Command)

    $fullCommand = "docker compose exec -T wordpress wp --allow-root $Command"
    $result = Invoke-Expression $fullCommand 2>&1

    # Filter out error records and return only string output
    $output = $result | Where-Object { $_ -is [string] } | Out-String
    return $output.Trim()
}

# Step 1: Check Docker
Write-Host "[1/10] Checking Docker..." -ForegroundColor Yellow
$containers = docker ps --filter "name=my_first_wordpress_wp" --format "{{.Names}}" 2>$null
if (-not $containers) {
    Write-Host "ERROR: Docker not running. Run: docker compose up -d" -ForegroundColor Red
    exit 1
}
Write-Host "OK: Docker running" -ForegroundColor Green

# Step 2: Verify WordPress
Write-Host ""
Write-Host "[2/10] Verifying WordPress..." -ForegroundColor Yellow
Start-Sleep -Seconds 2

$wpConfigCheck = docker compose exec -T wordpress test -f wp-config.php 2>&1
if ($LASTEXITCODE -eq 0) {
    Write-Host "OK: WordPress ready" -ForegroundColor Green
} else {
    Write-Host "ERROR: WordPress not installed. Visit http://localhost:8080" -ForegroundColor Red
    exit 1
}

# Step 3: Activate theme
Write-Host ""
Write-Host "[3/10] Activating theme..." -ForegroundColor Yellow
docker compose exec -T wordpress wp --allow-root theme activate my-first-wordpress 2>&1 | Out-Null
Write-Host "OK: Theme activated" -ForegroundColor Green

# Step 4: Create pages
Write-Host ""
Write-Host "[4/10] Creating pages..." -ForegroundColor Yellow

# Home page
$homeId = docker compose exec -T wordpress wp --allow-root post list --post_type=page --name=home --field=ID --format=csv 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }
if (-not $homeId) {
    $homeId = docker compose exec -T wordpress wp --allow-root post create --post_type=page --post_title=Home --post_status=publish --porcelain 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }
    Write-Host "  Created: Home (ID: $homeId)" -ForegroundColor Green
} else {
    Write-Host "  Found: Home (ID: $homeId)" -ForegroundColor Green
}
docker compose exec -T wordpress wp --allow-root post meta update $homeId _wp_page_template front-page-v2.php 2>&1 | Out-Null

# About page
$aboutId = docker compose exec -T wordpress wp --allow-root post list --post_type=page --name=about --field=ID --format=csv 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }
if (-not $aboutId) {
    $aboutId = docker compose exec -T wordpress wp --allow-root post create --post_type=page --post_title=About --post_status=publish --porcelain 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }
    Write-Host "  Created: About (ID: $aboutId)" -ForegroundColor Green
} else {
    Write-Host "  Found: About (ID: $aboutId)" -ForegroundColor Green
}
docker compose exec -T wordpress wp --allow-root post meta update $aboutId _wp_page_template template-about.php 2>&1 | Out-Null

# Products page
$productsId = docker compose exec -T wordpress wp --allow-root post list --post_type=page --name=products --field=ID --format=csv 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }
if (-not $productsId) {
    $productsId = docker compose exec -T wordpress wp --allow-root post create --post_type=page --post_title=Products --post_status=publish --porcelain 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }
    Write-Host "  Created: Products (ID: $productsId)" -ForegroundColor Green
} else {
    Write-Host "  Found: Products (ID: $productsId)" -ForegroundColor Green
}
docker compose exec -T wordpress wp --allow-root post meta update $productsId _wp_page_template template-products.php 2>&1 | Out-Null

# Contact page
$contactId = docker compose exec -T wordpress wp --allow-root post list --post_type=page --name=contact --field=ID --format=csv 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }
if (-not $contactId) {
    $contactId = docker compose exec -T wordpress wp --allow-root post create --post_type=page --post_title=Contact --post_status=publish --porcelain 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }
    Write-Host "  Created: Contact (ID: $contactId)" -ForegroundColor Green
} else {
    Write-Host "  Found: Contact (ID: $contactId)" -ForegroundColor Green
}
docker compose exec -T wordpress wp --allow-root post meta update $contactId _wp_page_template template-contact.php 2>&1 | Out-Null

Write-Host "OK: All pages configured" -ForegroundColor Green

# Step 5: Set homepage
Write-Host ""
Write-Host "[5/10] Configuring homepage..." -ForegroundColor Yellow
docker compose exec -T wordpress wp --allow-root option update show_on_front page 2>&1 | Out-Null
docker compose exec -T wordpress wp --allow-root option update page_on_front $homeId 2>&1 | Out-Null
Write-Host "OK: Homepage set to Home page (ID: $homeId)" -ForegroundColor Green

# Step 6: Create menu
Write-Host ""
Write-Host "[6/10] Creating menu..." -ForegroundColor Yellow

# Delete existing menu if exists
docker compose exec -T wordpress wp --allow-root menu delete main-menu 2>&1 | Out-Null

# Create new menu
docker compose exec -T wordpress wp --allow-root menu create "Main Menu" 2>&1 | Out-Null
docker compose exec -T wordpress wp --allow-root menu item add-post main-menu $homeId 2>&1 | Out-Null
docker compose exec -T wordpress wp --allow-root menu item add-post main-menu $aboutId 2>&1 | Out-Null
docker compose exec -T wordpress wp --allow-root menu item add-post main-menu $productsId 2>&1 | Out-Null
docker compose exec -T wordpress wp --allow-root menu item add-post main-menu $contactId 2>&1 | Out-Null
docker compose exec -T wordpress wp --allow-root menu location assign main-menu primary 2>&1 | Out-Null
Write-Host "OK: Menu created with 4 items" -ForegroundColor Green

# Step 7: Create categories
Write-Host ""
Write-Host "[7/10] Creating categories..." -ForegroundColor Yellow

$cats = @("Partnership:partnership", "Industry News:industry-news", "Medical Innovation:medical-innovation",
          "Technology:technology", "North America:north-america", "Exhibition:exhibition", "Products:products-cat")

foreach ($cat in $cats) {
    $parts = $cat -split ':'
    docker compose exec -T wordpress wp --allow-root term create category "$($parts[0])" --slug=$($parts[1]) 2>&1 | Out-Null
}
Write-Host "OK: Categories created" -ForegroundColor Green

# Step 8: Create blog posts
Write-Host ""
Write-Host "[8/10] Creating blog posts..." -ForegroundColor Yellow

docker compose exec -T wordpress wp --allow-root post create --post_type=post --post_title="Welcome to My First WordPress" --post_content="Welcome to my WordPress site! This is your first blog post. You can edit or delete this post to get started." --post_status=publish --post_date="2026-10-02 09:00:00" 2>&1 | Out-Null

docker compose exec -T wordpress wp --allow-root post create --post_type=post --post_title="Getting Started" --post_content="This is a sample blog post. Feel free to customize it with your own content." --post_status=publish --post_date="2026-09-17 14:30:00" 2>&1 | Out-Null

Write-Host "OK: Blog posts created" -ForegroundColor Green

# Step 9: Set permalinks
Write-Host ""
Write-Host "[9/10] Setting permalinks..." -ForegroundColor Yellow
docker compose exec -T wordpress wp --allow-root rewrite structure /%postname%/ 2>&1 | Out-Null
docker compose exec -T wordpress wp --allow-root rewrite flush 2>&1 | Out-Null
Write-Host "OK: Permalinks configured" -ForegroundColor Green

# Step 10: Site info
Write-Host ""
Write-Host "[10/10] Setting site info..." -ForegroundColor Yellow
docker compose exec -T wordpress wp --allow-root option update blogdescription "My First WordPress Site" 2>&1 | Out-Null
Write-Host "OK: Site tagline updated" -ForegroundColor Green

# Final verification
Write-Host ""
Write-Host "==================================" -ForegroundColor Green
Write-Host "Verifying setup..." -ForegroundColor Green
Write-Host "==================================" -ForegroundColor Green
Write-Host ""

$pageCount = docker compose exec -T wordpress wp --allow-root post list --post_type=page --format=count 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }
$postCount = docker compose exec -T wordpress wp --allow-root post list --post_type=post --format=count 2>&1 | Select-String -Pattern '^\d+$' | ForEach-Object { $_.Line }

Write-Host "Pages created: $pageCount" -ForegroundColor Cyan
Write-Host "Posts created: $postCount" -ForegroundColor Cyan
Write-Host "Homepage ID: $homeId" -ForegroundColor Cyan
Write-Host ""
Write-Host "==================================" -ForegroundColor Green
Write-Host "Setup Complete!" -ForegroundColor Green
Write-Host "==================================" -ForegroundColor Green
Write-Host ""
Write-Host "Visit: http://localhost:8080" -ForegroundColor White
Write-Host "Admin: http://localhost:8080/wp-admin" -ForegroundColor White
Write-Host ""
