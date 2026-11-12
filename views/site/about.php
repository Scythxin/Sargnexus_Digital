<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About Us - SARGNEXUS Digital';
$this->params['meta_description'] = 'Meet SARGNEXUS Digital - Your creative and performance marketing partner. We turn your digital presence into genuine customer connections.';
$this->params['fluid'] = true;
?>

<!-- 1. ABOUT HERO SECTION -->
<section class="services-hero-section position-relative text-white">
    <img src="<?= Yii::getAlias('@web/images/hero-laptop.jpg') ?>" alt="About SargNexus Digital" class="hero-bg-cover">
    <div class="hero-bg-gradient"></div>
    <div class="container custom-nav-container hero-content-layer">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb custom-breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= Url::to(['/site/index']) ?>">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">About Us</li>
            </ol>
        </nav>

        <div class="row align-items-center g-5">
            <div class="col-lg-7 z-2" data-aos="fade-right" data-aos-duration="850">
                <span class="agency-tag text-uppercase fw-bold mb-3 d-inline-block tracking-wider">
                    SARGNEXUS PRIVATE LIMITED
                </span>
                <h1 class="hero-title mb-3">
                    Meet <span class="text-gradient-purple">SargNexus Digital</span>
                </h1>
                <p class="hero-subtitle mb-4 pe-lg-4 fs-5 text-light">
                    Your creative and performance marketing partner.
                </p>
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-3 rounded-pill shadow-sm">
                        Get in Touch <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-outline-purple fw-semibold px-4 py-3 rounded-pill">
                        Our Services
                    </a>
                </div>
            </div>

            <div class="col-lg-5 position-relative text-center text-lg-end" data-aos="fade-left" data-aos-duration="850" data-aos-delay="150">
                <div class="hero-image-wrapper shadow-lg">
                    <img src="<?= Yii::getAlias('@web/images/about-team.jpg') ?>" alt="SargNexus Digital Strategy Team" class="hero-image img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. CREATIVITY MEETS STRATEGY BANNER -->
<section class="py-5 bg-white">
    <div class="container custom-nav-container">
        <div class="p-4 p-md-5 rounded-4 text-white position-relative overflow-hidden shadow-sm" style="background: linear-gradient(135deg, #0b0f19 0%, #171d31 100%); border: 1px solid rgba(255,255,255,0.08);" data-aos="zoom-in">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-8">
                    <span class="text-uppercase fw-bold tracking-wider mb-2 d-inline-block" style="color: #a78bfa; font-size: 0.85rem; letter-spacing: 0.12em;">
                        OUR CORE PHILOSOPHY
                    </span>
                    <h2 class="display-6 fw-bold mb-3">
                        CREATIVITY <span class="text-gradient-purple">MEETS STRATEGY.</span>
                    </h2>
                    <p class="text-light mb-0 fs-5 lh-base opacity-90">
                        We help businesses turn their digital presence into genuine customer connections.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-inline-flex align-items-center gap-2 p-3 rounded-pill px-4" style="background: rgba(108, 92, 231, 0.15); border: 1px solid rgba(128, 84, 255, 0.35);">
                        <i class="bi bi-bullseye text-primary fs-4"></i>
                        <span class="fw-semibold text-white small">Purpose-Driven Growth</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. WHAT WE DO (6 CAPABILITIES FROM CONTEXT) -->
<section class="py-5 bg-light-subtle">
    <div class="container custom-nav-container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag text-uppercase mb-2 d-inline-block">WHAT WE DO</span>
            <h2 class="section-title mb-3">
                Connecting Ideas with <span class="text-purple">Real Business Impact</span>
            </h2>
            <p class="section-subtitle mx-auto" style="max-width: 680px;">
                From your first social post to multi-channel advertising, we bring the right mix of content, visibility and campaign execution.
            </p>
        </div>

        <div class="row g-4">
            <!-- 01. SOCIAL PRESENCE -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="fw-bold fs-4 text-primary">01</span>
                        <div class="rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(99, 102, 241, 0.1); color: #6366f1;">
                            <i class="bi bi-instagram fs-5"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold fs-5 text-dark mb-2">SOCIAL PRESENCE</h4>
                    <p class="text-secondary small mb-0 lh-base">
                        Instagram, Facebook, posting calendars and community-ready creatives.
                    </p>
                </div>
            </div>

            <!-- 02. CONTENT STUDIO -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="fw-bold fs-4 text-primary">02</span>
                        <div class="rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(236, 72, 153, 0.1); color: #ec4899;">
                            <i class="bi bi-camera-reels fs-5"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold fs-5 text-dark mb-2">CONTENT STUDIO</h4>
                    <p class="text-secondary small mb-0 lh-base">
                        Branded designs, engaging reels, campaign concepts and on-site shoots.
                    </p>
                </div>
            </div>

            <!-- 03. PAID CAMPAIGNS -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="fw-bold fs-4 text-primary">03</span>
                        <div class="rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(59, 130, 246, 0.1); color: #3b82f6;">
                            <i class="bi bi-megaphone fs-5"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold fs-5 text-dark mb-2">PAID CAMPAIGNS</h4>
                    <p class="text-secondary small mb-0 lh-base">
                        Meta and Google campaign setup, audience planning and optimization.
                    </p>
                </div>
            </div>

            <!-- 04. LOCAL DISCOVERY -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="fw-bold fs-4 text-primary">04</span>
                        <div class="rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(16, 185, 129, 0.1); color: #10b981;">
                            <i class="bi bi-geo-alt fs-5"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold fs-5 text-dark mb-2">LOCAL DISCOVERY</h4>
                    <p class="text-secondary small mb-0 lh-base">
                        Google Business Profile care, local SEO and search visibility.
                    </p>
                </div>
            </div>

            <!-- 05. PERFORMANCE INSIGHTS -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="fw-bold fs-4 text-primary">05</span>
                        <div class="rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                            <i class="bi bi-graph-up-arrow fs-5"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold fs-5 text-dark mb-2">PERFORMANCE INSIGHTS</h4>
                    <p class="text-secondary small mb-0 lh-base">
                        Readable reports, campaign reviews and practical growth priorities.
                    </p>
                </div>
            </div>

            <!-- 06. FLEXIBLE SOLUTIONS -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 transition-hover bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="fw-bold fs-4 text-primary">06</span>
                        <div class="rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; background: rgba(139, 92, 246, 0.1); color: #8b5cf6;">
                            <i class="bi bi-sliders fs-5"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold fs-5 text-dark mb-2">FLEXIBLE SOLUTIONS</h4>
                    <p class="text-secondary small mb-0 lh-base">
                        Choose a ready-made plan or customise the services to your budget.
                    </p>
                </div>
            </div>
        </div>

        <!-- 4-Stage Pathway Banner -->
        <div class="mt-5 p-4 rounded-4 text-center shadow-sm" style="background: linear-gradient(135deg, #eef2ff 0%, #f5f3ff 100%); border: 1px solid #e0e7ff;" data-aos="fade-up">
            <h4 class="fw-bold text-dark mb-0 fs-5 letter-spacing-wide d-flex flex-wrap align-items-center justify-content-center gap-2 gap-md-4">
                <span>IDEAS</span>
                <i class="bi bi-arrow-right text-primary"></i>
                <span>CONTENT</span>
                <i class="bi bi-arrow-right text-primary"></i>
                <span>VISIBILITY</span>
                <i class="bi bi-arrow-right text-primary"></i>
                <span class="text-purple">OPPORTUNITIES</span>
            </h4>
        </div>
    </div>
</section>

<!-- 4. COMPANY & CONTACT INFORMATION SECTION -->
<section class="py-5 bg-white">
    <div class="container custom-nav-container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-tag text-uppercase mb-2 d-inline-block">ABOUT THE COMPANY</span>
                <h2 class="section-title mb-4">
                    SARGNEXUS <span class="text-purple">PRIVATE LIMITED</span>
                </h2>
                <p class="text-secondary lh-lg mb-4">
                    We are a modern digital marketing and brand development firm based in Bhubaneswar, Odisha. We partner with emerging startups, local businesses, and established enterprises to craft bespoke digital growth plans, powerful creatives, and high-ROI campaigns.
                </p>

                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-2 rounded bg-light text-primary"><i class="bi bi-geo-alt-fill fs-5"></i></div>
                        <div>
                            <span class="fw-bold text-dark d-block">Registered Office</span>
                            <span class="text-secondary small">Sreekhetra Vihar, Patrapada, Bhubaneswar, Odisha - 751019</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-2 rounded bg-light text-primary"><i class="bi bi-envelope-fill fs-5"></i></div>
                        <div>
                            <span class="fw-bold text-dark d-block">Partnership & Inquiries</span>
                            <a href="mailto:partners@sargnexus.digital" class="text-secondary small text-decoration-none">partners@sargnexus.digital</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <div class="p-2 rounded bg-light text-primary"><i class="bi bi-telephone-fill fs-5"></i></div>
                        <div>
                            <span class="fw-bold text-dark d-block">Phone Support</span>
                            <a href="tel:+918763585769" class="text-secondary small text-decoration-none">+91 8763585769</a>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-3 rounded-pill shadow-sm">
                        Request a Consultation <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="why-us-section rounded-4 p-4 p-md-5 text-white position-relative overflow-hidden shadow">
                    <img src="<?= Yii::getAlias('@web/images/why-us-boardroom.jpg') ?>" alt="Boardroom Strategy" class="why-us-bg-cover">
                    <div class="position-relative z-2">
                        <span class="agency-tag text-uppercase mb-3 d-inline-block tracking-wider">
                            SERVICE & PRICING GUIDE 2026
                        </span>
                        <h3 class="fw-bold text-white mb-3 fs-3">
                            Built for brands that want to look better, show up consistently and turn attention into opportunities.
                        </h3>
                        <p class="text-light opacity-75 small mb-4">
                            Transparent deliverables, flexible commercial arrangements, and end-to-end execution from content to conversion.
                        </p>
                        <a href="<?= Url::to(['/site/index']) ?>#pricing" class="btn btn-outline-light rounded-pill px-4 py-2 fw-semibold">
                            Explore Growth Plans <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
