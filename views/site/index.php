<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'SARGNEXUS Digital - Grow Your Business Online';
$this->params['meta_description'] = 'We help businesses get noticed, reach the right people, and turn online attention into real customers.';
$this->params['fluid'] = true; // Full-width section styling
?>

<!-- 1. HERO SECTION -->
<section class="hero-section text-white">
    <img src="<?= Yii::getAlias('@web/images/hero-laptop.jpg') ?>" alt="Digital Marketing Growth" class="hero-bg-cover">
    <div class="hero-bg-gradient"></div>
    <div class="container custom-nav-container hero-content-layer">
        <div class="row align-items-center g-5">
            <!-- Left Hero Content -->
            <div class="col-lg-6 z-2" data-aos="fade-right" data-aos-duration="900">
                <span class="agency-tag text-uppercase fw-bold mb-3 d-inline-block tracking-wider">
                    DIGITAL MARKETING AGENCY
                </span>
                <h1 class="hero-title mb-4">
                    Grow Your<br>
                    Business <span class="text-gradient-purple">Online.</span>
                </h1>
                <p class="hero-subtitle mb-4 pe-lg-4">
                    Built for brands that want to look better, show up consistently and turn attention into opportunities. We help businesses get noticed, reach the right people, and turn online attention into real customers.
                </p>
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-3 rounded-pill">
                        Get a Free Quote <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-outline-purple fw-semibold px-4 py-3 rounded-pill">
                        Explore Services
                    </a>
                </div>
            </div>

            <!-- Right Hero Image: Showcase Laptop with Glowing Card & Handwritten Badge -->
            <div class="col-lg-6 position-relative text-center text-lg-end" data-aos="fade-left" data-aos-duration="900" data-aos-delay="200">
                <div class="hero-badge-corner d-none d-lg-block">
                    <span class="handwritten-badge">
                        Your<br>Growth<br>Partner
                    </span>
                    <span class="curved-arrow"></span>
                </div>
                <div class="hero-image-wrapper shadow-lg">
                    <img src="<?= Yii::getAlias('@web/images/hero-laptop.jpg') ?>" alt="Digital Marketing Growth Dashboard" class="hero-image img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. ABOUT SARGNEXUS DIGITAL  section SECTION -->
<section id="about" class="about-section py-5 my-lg-4">
    <div class="container custom-nav-container">
        <div class="row align-items-center g-5">
            <!-- Left About Text & Stats -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                <span class="section-tag text-uppercase mb-2 d-inline-block">
                    ABOUT SARGNEXUS DIGITAL
                </span>
                <h2 class="section-title mb-3">
                    Creativity Meets<br>
                    <span class="text-purple">Strategy.</span>
                </h2>
                <p class="section-subtitle mb-2">
                    We help businesses turn their digital presence into genuine customer connections.
                </p>
                <p class="text-secondary small mb-4">
                    From your first social post to multi-channel advertising, we bring the right mix of content, visibility, and campaign execution.
                </p>
                <div class="mb-5">
                    <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-dark-navy px-4 py-2 rounded-pill fw-semibold">
                        Our Approach <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>

                <!-- Stats Bar -->
                <div class="row g-3 border-top pt-4">
                    <div class="col-6 col-sm-3 stat-item">
                        <h3 class="fw-bold mb-0">50+</h3>
                        <small class="text-secondary">Businesses Reached</small>
                    </div>
                    <div class="col-6 col-sm-3 stat-item">
                        <h3 class="fw-bold mb-0">100+</h3>
                        <small class="text-secondary">Projects Completed</small>
                    </div>
                    <div class="col-6 col-sm-3 stat-item">
                        <h3 class="fw-bold mb-0">8+</h3>
                        <small class="text-secondary">Digital Services</small>
                    </div>
                    <div class="col-6 col-sm-3 stat-item">
                        <h3 class="fw-bold mb-0">24/7</h3>
                        <small class="text-secondary">Support</small>
                    </div>
                </div>
            </div>

            <!-- Right Composite Image with Badges -->
            <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="850">
                <div class="about-composite-wrapper position-relative px-lg-3">
                    <!-- Top floating badge -->
                    <div class="floating-info-card card-top-left d-none d-sm-block">
                        <span class="fw-bold text-dark d-block">Strategy</span>
                        <span class="text-secondary small">Plan the right approach for your business.</span>
                    </div>

                    <div class="about-main-image-box">
                        <img src="<?= Yii::getAlias('@web/images/about-team.jpg') ?>" alt="Sargnexus Digital Strategy Team Collaboration" class="about-main-image img-fluid">
                    </div>

                    <!-- Bottom floating badges -->
                    <div class="floating-info-card card-bottom-left">
                        <span class="fw-bold text-dark d-block">Create</span>
                        <span class="text-secondary small">Engaging content that people remember.</span>
                    </div>
                    <div class="floating-info-card card-bottom-right d-none d-sm-block">
                        <span class="fw-bold text-dark d-block">Grow</span>
                        <span class="text-secondary small">Turn attention into real customers.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICES SECTION -->
<section id="services" class="services-section py-5">
    <div class="container custom-nav-container">
        <!-- Section Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5" data-aos="fade-up">
            <div>
                <span class="section-tag text-uppercase mb-2 d-inline-block">OUR SERVICES</span>
                <h2 class="section-title mb-0">
                    Everything You Need to <span class="text-purple">Grow Online.</span>
                </h2>
            </div>
            <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-outline-secondary rounded-pill px-4 py-2 mt-3 mt-md-0 fw-semibold text-nowrap">
                View All Services <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <!-- 7 Services Grid matching Services Page -->
        <div class="row g-4 justify-content-center">
            <!-- 1. Social Media Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-marketing.jpg') ?>" alt="Social Media Marketing">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Social Media Marketing</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0">Grow your audience and brand reach across key social platforms.</p>
                    </div>
                </div>
            </div>

            <!-- 2. Influencer Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-influencer.jpg') ?>" alt="Influencer Marketing">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Digital Marketing Strategy</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0">We create digital strategies that help businesses reach more customers..</p>
                    </div>
                </div>
            </div>

            <!-- 3. Performance Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-advertising.jpg') ?>" alt="Performance Marketing">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Content Creation </h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0">We create engaging content to promote your brand and attract customers.</p>
                    </div>
                </div>
            </div>

            <!-- 4. Campaigns & BTL Activities -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-campaigns-btl.jpg') ?>" alt="Campaigns & BTL Activities">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Meta Ads</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0"> We run targeted Facebook and Instagram ads to reach the right audience.</p>
                    </div>
                </div>
            </div>

            <!-- 5. Photoshoot & Video Shoot -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-photoshoot.jpg') ?>" alt="Photoshoot & Video Shoot">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Google Ads</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0"> We run Google Ads to increase your online visibility and get more customers.</p>
                    </div>
                </div>
            </div>

            <!-- 6. Branding -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
                <div class="service-card h-100">
                    <div class="service-card-img-wrapper">
                        <img src="<?= Yii::getAlias('@web/images/service-branding.jpg') ?>" alt="Branding">
                    </div>
                    <div class="service-card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h5 class="fw-bold mb-0 fs-6">Social Media Handling</h5>
                            <span class="service-plus-btn"><i class="bi bi-plus-lg"></i></span>
                        </div>
                        <p class="text-secondary small mb-0">We manage your social media with regular posts and audience engagement.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4. WHY CHOOSE US (DARK CINEMATIC SECTION) -->
<section class="why-us-section py-5 my-4 position-relative">
    <img src="<?= Yii::getAlias('@web/images/why-us-boardroom.jpg') ?>" alt="Boardroom Strategy" class="why-us-bg-cover">
    <div class="container custom-nav-container position-relative z-2 py-4">
        <div class="mb-5">
            <span class="agency-tag text-uppercase mb-2 d-inline-block tracking-wider">WHY CHOOSE US</span>
            <h2 class="hero-title fs-1 mb-0">
                Why Businesses Choose<br>
                SARGNEXUS <span class="text-gradient-purple">Digital.</span>
            </h2>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="why-feature-card">
                    <div class="why-feature-icon mb-3">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2 fs-6">Simple Strategy</h5>
                    <p class="text-secondary small mb-0">We keep marketing clear and easy to understand.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="why-feature-card">
                    <div class="why-feature-icon mb-3">
                        <i class="bi bi-people"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2 fs-6">Right Audience</h5>
                    <p class="text-secondary small mb-0">We focus on reaching people who are most likely to become customers.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="why-feature-card">
                    <div class="why-feature-icon mb-3">
                        <i class="bi bi-bar-chart-line"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2 fs-6">Creative + Data</h5>
                    <p class="text-secondary small mb-0">We combine creative ideas with real performance data.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="why-feature-card">
                    <div class="why-feature-icon mb-3">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2 fs-6">Focused on Growth</h5>
                    <p class="text-secondary small mb-0">We don't just chase likes. We focus on visibility, leads and business growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pricingFeatures = [
    ['Creative posts', ['7', '10', '15', '20']],
    ['Short-form reels', ['5', '10', '15', '20']],
    ['Social stories', ['8', '10', '15', '20']],
    ['Facebook & Instagram', ['Yes', 'Yes', 'Yes', 'Yes']],
    ['Content schedule', ['Yes', 'Yes', 'Yes', 'Yes']],
    ['Captions & hashtags', ['Yes', 'Yes', 'Yes', 'Yes']],
    ['On-site shoots (Bhubaneswar)', ['1', '3', '5', '7']],
    ['Google Business Profile', ['—', 'Basic', 'Enhanced', 'Advanced']],
    ['Local SEO', ['—', 'Basic', 'Basic', 'Advanced']],
    ['Meta Ads management', ['—', 'Basic', 'Full', 'Full']],
    ['Google Ads management', ['—', 'Yes', 'Yes', 'Yes']],
    ['YouTube management', ['—', 'Yes', 'Yes', 'Yes']],
    ['Retargeting setup', ['—', '—', 'Yes', 'Yes']],
    ['Performance report', ['Basic', 'Standard', 'Detailed', 'Detailed']],
    ['Strategy meetings', ['—', '1', '2', '3']],
];
$pricingPlans = [
    [
        'name' => 'IGNITE',
        'badge' => 'TRIAL PACK',
        'badge_class' => 'trial-pack-pill',
        'price' => '5,999',
        'tagline' => 'Build your digital presence.',
        'description' => 'For new brands, local shops and small businesses getting started.',
    ],
    [
        'name' => 'SPARK',
        'badge' => '',
        'badge_class' => '',
        'price' => '8,999',
        'tagline' => 'Grow your visibility.',
        'description' => 'For brands ready to post more consistently and test paid reach.',
    ],
    [
        'name' => 'MOMENTUM',
        'badge' => 'Most Popular',
        'badge_class' => 'most-popular-pill',
        'price' => '14,999',
        'tagline' => 'Expand your reach.',
        'description' => 'For businesses aiming to expand their reach and attract enquiries.',
        'featured' => true,
    ],
    [
        'name' => 'VELOCITY',
        'badge' => '',
        'badge_class' => '',
        'price' => '24,999',
        'tagline' => 'Scale your brand.',
        'description' => 'For established brands seeking a coordinated multi-channel presence.',
    ],
];

$standaloneServices = [
    ['name' => 'Social Media Profile Setup & Branding', 'price' => '₹1,999', 'billing' => 'one-time', 'icon' => 'bi-person-badge', 'description' => 'Professional setup and branding for your social media presence.'],
    ['name' => 'Social Media Creative Design', 'price' => '₹399', 'billing' => 'per creative', 'icon' => 'bi-palette', 'description' => 'Custom post designs created to match your brand and campaign goals.'],
    ['name' => 'Short-Form Video Editing', 'price' => '₹799', 'billing' => 'per reel', 'icon' => 'bi-camera-reels', 'description' => 'Edited, engaging short-form videos designed for reels and social campaigns.'],
    ['name' => 'Google Business Profile Setup', 'price' => '₹2,499', 'billing' => 'one-time', 'icon' => 'bi-google', 'description' => 'Create and optimize your local business profile for greater visibility.'],
    ['name' => 'Google Business Profile Care', 'price' => '₹2,999', 'billing' => 'per month', 'icon' => 'bi-shield-check', 'description' => 'Routine updates, optimization and profile management to keep you visible.'],
    ['name' => 'Meta Campaign Management', 'price' => '₹4,999', 'billing' => 'per month', 'icon' => 'bi-megaphone', 'description' => 'Strategy, setup, monitoring and optimization for Meta ad campaigns.'],
    ['name' => 'Google Ads Campaign Management', 'price' => '₹5,999', 'billing' => 'per month', 'icon' => 'bi-search', 'description' => 'Search and campaign management to generate leads and improve conversion.'],
    ['name' => 'Local SEO Support', 'price' => '₹5,999', 'billing' => 'per month', 'icon' => 'bi-geo-alt', 'description' => 'Keyword-focused optimization to strengthen local search visibility.'],
    ['name' => 'Marketing Strategy Consultation', 'price' => '₹1,499', 'billing' => 'per session', 'icon' => 'bi-lightbulb', 'description' => 'Expert guidance to plan your growth roadmap and digital priorities.'],
];
?>

<!-- 5. PRICING SECTION -->
<section id="pricing" class="pricing-section py-5">
    <div class="container custom-nav-container">
        <!-- Section Title & Subtitle -->
        <div class="text-center mb-5 position-relative" data-aos="fade-up">
            <span class="section-tag text-uppercase mb-2 d-inline-block">PRICING</span>
            <h2 class="section-title mb-2">
                Digital <span class="text-purple">Growth Plans</span>
            </h2>
            <p class="section-subtitle mb-0">
                Built for brands that want to look better, show up consistently and turn attention into opportunities.
            </p>
            <div class="position-absolute end-0 top-0 d-none d-lg-block">
                <span class="handwritten-badge fs-5">More Tools<br>More Growth &rarr;</span>
            </div>
        </div>

        <!-- Monthly pricing plans -->
        <div class="row g-4 align-items-stretch">
            <?php foreach ($pricingPlans as $planIndex => $plan): ?>
                <?php $isFeatured = !empty($plan['featured']); ?>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="<?= ($planIndex + 1) * 100 ?>">
                    <div class="pricing-card <?= $isFeatured ? 'featured-card' : '' ?> h-100">
                        <?php if (!empty($plan['badge'])): ?>
                            <span class="<?= !empty($plan['badge_class']) ? $plan['badge_class'] : 'most-popular-pill' ?>">
                                <?= Html::encode($plan['badge']) ?>
                            </span>
                        <?php endif; ?>
                        <div>
                            <div class="pricing-plan-badge text-uppercase mb-1"><?= Html::encode($plan['name']) ?></div>
                            <div class="text-primary small fw-semibold mb-2"><?= Html::encode($plan['tagline']) ?></div>
                            <div class="d-flex align-items-baseline gap-1 mb-1">
                                <span class="pricing-price">&#8377;<?= Html::encode($plan['price']) ?></span>
                                <span class="pricing-period">/ month</span>
                            </div>
                            <p class="text-secondary small mb-4"><?= Html::encode($plan['description']) ?></p>

                            <ul class="pricing-features-list">
                                <?php foreach ($pricingFeatures as [$featureName, $planValues]): ?>
                                    <?php $featureValue = $planValues[$planIndex]; ?>
                                    <?php $isIncluded = $featureValue !== '—'; ?>
                                    <li class="<?= $isIncluded ? '' : 'disabled-feature' ?>">
                                        <i class="bi <?= $isIncluded ? 'bi-check-lg text-success fs-5' : 'bi-lock text-muted fs-6' ?>"></i>
                                        <span><?= Html::encode($featureName) ?>: <?= Html::encode($featureValue) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <a href="<?= Url::to(['/site/quote']) ?>" class="btn <?= $isFeatured ? 'btn-purple-gradient text-white' : 'btn-outline-secondary' ?> w-100 rounded-pill py-2 fw-semibold mt-3">
                            Choose <?= Html::encode(ucfirst(strtolower($plan['name']))) ?> &rarr;
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <p class="text-secondary small text-center mt-4 mb-0">
            All fees are proposed monthly service charges. Advertising spend is billed separately. On-site shoots are valid within Bhubaneswar city limits only.
        </p>
    </div>
</section>



<!-- 6. STANDALONE SERVICES SECTION -->
<?php
$standaloneTypeMap = [
    'one-time'     => ['group' => 'one-time', 'theme' => 'green',  'label' => 'One-time'],
    'per creative' => ['group' => 'per-item', 'theme' => 'pink',   'label' => 'Per creative'],
    'per reel'     => ['group' => 'per-item', 'theme' => 'pink',   'label' => 'Per reel'],
    'per month'    => ['group' => 'monthly',  'theme' => 'blue',   'label' => 'Monthly'],
    'per session'  => ['group' => 'per-item', 'theme' => 'amber',  'label' => 'Per session'],
];
$standaloneFilters = [
    'all'      => ['label' => 'All Services',  'icon' => 'bi-grid'],
    'one-time' => ['label' => 'One-time',      'icon' => 'bi-lightning-charge'],
    'monthly'  => ['label' => 'Monthly',       'icon' => 'bi-arrow-repeat'],
    'per-item' => ['label' => 'Pay per Item',  'icon' => 'bi-bag-check'],
];
$standaloneCounts = ['all' => count($standaloneServices), 'one-time' => 0, 'monthly' => 0, 'per-item' => 0];
foreach ($standaloneServices as $s) {
    $g = $standaloneTypeMap[strtolower($s['billing'])]['group'] ?? null;
    if ($g) {
        $standaloneCounts[$g]++;
    }
}
?>
<section id="standalone-services" class="standalone-services-section py-5">
    <span class="standalone-blob standalone-blob-1" aria-hidden="true"></span>
    <span class="standalone-blob standalone-blob-2" aria-hidden="true"></span>

    <div class="container custom-nav-container position-relative">
        <div class="text-center mb-4" data-aos="fade-up">
            <span class="section-tag text-uppercase mb-2 d-inline-block">STANDALONE SERVICES</span>
            <h2 class="section-title mb-2">
                Pick the Services You Need,<br>
                <span class="text-purple">Without a Full Monthly Plan.</span>
            </h2>
            <p class="section-subtitle mb-0">
                You can book individual services when you need support, expertise or an extra boost.
            </p>
        </div>

        <!-- Highlights strip -->
        <div class="standalone-highlights d-flex flex-wrap justify-content-center gap-2 gap-md-4 mb-4" data-aos="fade-up" data-aos-delay="50">
            <span><i class="bi bi-check-circle-fill"></i> No long-term contract</span>
            <span><i class="bi bi-check-circle-fill"></i> Transparent pricing</span>
            <span><i class="bi bi-check-circle-fill"></i> Quick turnaround</span>
        </div>

        <!-- Filter pills -->
        <div class="standalone-filters d-flex flex-wrap justify-content-center gap-2 mb-5" role="tablist" data-aos="fade-up" data-aos-delay="100">
            <?php foreach ($standaloneFilters as $filterKey => $filter): ?>
                <button type="button"
                        class="standalone-filter-btn <?= $filterKey === 'all' ? 'active' : '' ?>"
                        data-filter="<?= $filterKey ?>"
                        role="tab"
                        aria-selected="<?= $filterKey === 'all' ? 'true' : 'false' ?>">
                    <i class="bi <?= $filter['icon'] ?>"></i>
                    <?= Html::encode($filter['label']) ?>
                    <span class="standalone-filter-count"><?= $standaloneCounts[$filterKey] ?></span>
                </button>
            <?php endforeach; ?>
        </div>

        <div class="row g-4 standalone-grid">
            <?php foreach ($standaloneServices as $serviceIndex => $service): ?>
                <?php
                    $type = $standaloneTypeMap[strtolower($service['billing'])] ?? ['group' => 'other', 'theme' => 'purple', 'label' => $service['billing']];
                ?>
                <div class="col-lg-4 col-md-6 standalone-item" data-group="<?= $type['group'] ?>" data-aos="fade-up" data-aos-delay="<?= ($serviceIndex % 3 + 1) * 100 ?>">
                    <div class="standalone-service-card theme-<?= $type['theme'] ?> h-100 d-flex flex-column">
                        <span class="standalone-card-number" aria-hidden="true"><?= str_pad($serviceIndex + 1, 2, '0', STR_PAD_LEFT) ?></span>

                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="standalone-icon-circle">
                                <i class="bi <?= Html::encode($service['icon']) ?>"></i>
                            </div>
                            <span class="standalone-service-tag">
                                <span class="standalone-tag-dot"></span>
                                <?= Html::encode($type['label']) ?>
                            </span>
                        </div>

                        <h3 class="standalone-service-name mb-2"><?= Html::encode($service['name']) ?></h3>
                        <p class="standalone-service-description mb-4 flex-grow-1"><?= Html::encode($service['description']) ?></p>

                        <div class="standalone-card-footer d-flex justify-content-between align-items-end mt-auto">
                            <div>
                                <span class="standalone-price-label">Starting at</span>
                                <div class="d-flex align-items-baseline gap-1">
                                    <span class="standalone-service-price"><?= Html::encode($service['price']) ?></span>
                                    <span class="standalone-price-unit">/ <?= Html::encode($service['billing']) ?></span>
                                </div>
                            </div>
                            <a href="<?= Url::to(['/site/quote']) ?>" class="standalone-arrow-btn" aria-label="Book <?= Html::encode($service['name']) ?>" title="Book this service">
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- CTA Banner -->
        <div class="standalone-cta-banner mt-5" data-aos="zoom-in">
            <div class="row align-items-center g-4 position-relative">
                <div class="col-lg-8 text-center text-lg-start">
                    <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                        <div class="standalone-cta-icon"><i class="bi bi-stars"></i></div>
                        <div>
                            <h3 class="standalone-cta-title mb-1">Need a combination of services?</h3>
                            <p class="standalone-cta-text mb-0">Mix &amp; match what you need and we'll craft a custom plan that fits your goals and budget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column flex-sm-row justify-content-center justify-content-lg-end gap-2">
                    <a href="#custom-plan" class="btn btn-light rounded-pill px-4 py-2 fw-semibold standalone-cta-primary">
                        Build Your Plan <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-outline-light rounded-pill px-4 py-2 fw-semibold">
                        Get a Quote
                    </a>
                </div>
            </div>
        </div>

        <p class="text-secondary small text-center mt-4 mb-0">
            <i class="bi bi-info-circle me-1"></i>
            Prices are indicative and depend on scope, duration, creative complexity and service requirements.
        </p>
    </div>
</section>
<?php
$this->registerJs(<<<JS
(function () {
    var section = document.getElementById('standalone-services');
    if (!section) return;
    var buttons = section.querySelectorAll('.standalone-filter-btn');
    var items = section.querySelectorAll('.standalone-item');
    buttons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var filter = btn.getAttribute('data-filter');
            buttons.forEach(function (b) {
                b.classList.toggle('active', b === btn);
                b.setAttribute('aria-selected', b === btn ? 'true' : 'false');
            });
            items.forEach(function (item) {
                var show = filter === 'all' || item.getAttribute('data-group') === filter;
                if (show) {
                    item.classList.remove('is-hidden');
                    item.classList.remove('is-filtered-in');
                    void item.offsetWidth;
                    item.classList.add('is-filtered-in');
                } else {
                    item.classList.add('is-hidden');
                }
            });
        });
    });
})();
JS
);
?>

<!-- 7. BUILD YOUR OWN CUSTOM MARKETING PLAN SECTION (PAGE 7) -->
<section id="custom-plan" class="custom-plan-section py-5">
    <div class="container custom-nav-container">
        <div class="custom-plan-container p-4 p-md-5">
            <?php
                // GET forms drop the query string of their action URL, so when pretty URLs are
                // disabled (index.php?r=site/quote) the route must be sent as hidden fields.
                $customPlanAction = Url::to(['/site/quote']);
                parse_str((string) parse_url($customPlanAction, PHP_URL_QUERY), $customPlanParams);
            ?>
            <form method="get" action="<?= Html::encode(strtok($customPlanAction, '?')) ?>" id="custom-plan-form">
            <?php foreach ($customPlanParams as $paramName => $paramValue): ?>
                <?= Html::hiddenInput($paramName, $paramValue) ?>
            <?php endforeach; ?>
            <div class="row g-4 align-items-center">
                <!-- Checklist column -->
                <div class="col-lg-5">
                    <span class="section-tag text-uppercase mb-1 d-inline-block">YOUR BRAND. YOUR PLAN.</span>
                    <h3 class="fw-bold mb-2 fs-4">CUSTOMISED DIGITAL MARKETING</h3>
                    <p class="text-secondary small mb-2">
                        Not every business needs the same marketing package.
                    </p>
                    <p class="text-dark small fw-semibold mb-4">
                        Build a plan around your business goals, preferred platforms and monthly budget.
                    </p>

                    <div class="d-flex flex-column gap-2">
                        <label class="service-check-box p-2 rounded border bg-white d-flex align-items-center">
                            <input class="form-check-input me-3" type="checkbox" name="services[]" value="content_volume">
                            <span class="small fw-semibold text-dark">Number of posts, reels and stories</span>
                        </label>
                        <label class="service-check-box p-2 rounded border bg-white d-flex align-items-center">
                            <input class="form-check-input me-3" type="checkbox" name="services[]" value="production">
                            <span class="small fw-semibold text-dark">Photoshoots and product showcase videos</span>
                        </label>
                        <label class="service-check-box p-2 rounded border bg-white d-flex align-items-center">
                            <input class="form-check-input me-3" type="checkbox" name="services[]" value="social_channels">
                            <span class="small fw-semibold text-dark">Facebook, Instagram and YouTube support</span>
                        </label>
                        <label class="service-check-box p-2 rounded border bg-white d-flex align-items-center">
                            <input class="form-check-input me-3" type="checkbox" name="services[]" value="paid_ads">
                            <span class="small fw-semibold text-dark">Meta Ads and Google Ads management</span>
                        </label>
                        <label class="service-check-box p-2 rounded border bg-white d-flex align-items-center">
                            <input class="form-check-input me-3" type="checkbox" name="services[]" value="local_seo">
                            <span class="small fw-semibold text-dark">Google Business Profile and local SEO</span>
                        </label>
                        <label class="service-check-box p-2 rounded border bg-white d-flex align-items-center">
                            <input class="form-check-input me-3" type="checkbox" name="services[]" value="lead_reporting">
                            <span class="small fw-semibold text-dark">Lead-generation campaigns and reporting</span>
                        </label>
                    </div>
                </div>

                <!-- Price estimation middle card -->
                <div class="col-lg-4 text-center" data-aos="zoom-in" data-aos-delay="150">
                    <div class="custom-quote-card p-4 p-md-5 bg-white rounded-4 shadow-sm border">
                        <span class="text-secondary small text-uppercase fw-semibold d-block mb-1">Tailored Proposal</span>
                        <h4 class="fw-bold mb-2 fs-5 text-dark">Tell us your budget &amp; what you want to achieve.</h4>
                        <p class="text-secondary small mb-3">We will prepare a tailored service proposal and quotation.</p>
                        <div class="p-3 bg-light rounded-3 mb-4 text-start small">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="bi bi-envelope text-primary"></i>
                                <a href="mailto:partners@sargnexus.digital" class="text-dark text-decoration-none fw-semibold">partners@sargnexus.digital</a>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-telephone text-primary"></i>
                                <a href="tel:+918763585769" class="text-dark text-decoration-none fw-semibold">+91 8763585769</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-purple-gradient text-white fw-semibold rounded-pill px-4 py-2 w-100">
                            Request Custom Quotation &rarr;
                        </button>
                    </div>
                </div>

                <!-- Right checklist notebook photo -->
                <div class="col-lg-3" data-aos="fade-left" data-aos-delay="200">
                    <div class="custom-plan-notes-box">
                        <img src="<?= Yii::getAlias('@web/images/custom-plan-notes.jpg') ?>" alt="Marketing plan checklist notepad" class="img-fluid w-100 rounded-4 shadow-sm">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>

<!-- 8. SERVICE GUIDELINES & CONTACT (PAGE 8) -->
<section id="service-guidelines" class="service-guidelines-section py-5 bg-white">
    <div class="container custom-nav-container">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-tag text-uppercase mb-2 d-inline-block">TRANSPARENT TERMS</span>
            <h2 class="section-title mb-2">
                Service Guidelines &amp; <span class="text-purple">Deliverables</span>
            </h2>
            <p class="section-subtitle mb-0">
                Transparent deliverables and flexible commercial arrangements.
            </p>
        </div>

        <!-- 9 Guidelines Grid -->
        <div class="row g-4 mb-5">
            <?php
            $guidelines = [
                ['num' => '01', 'title' => 'Service activation', 'desc' => 'Work begins after onboarding and confirmation of the agreed payment terms.'],
                ['num' => '02', 'title' => 'Media budget', 'desc' => 'Meta, Google, YouTube or other advertising platform spend is paid separately by the client.'],
                ['num' => '03', 'title' => 'Creative reviews', 'desc' => 'Up to two reasonable revision rounds per approved creative or video deliverable.'],
                ['num' => '04', 'title' => 'Monthly allocation', 'desc' => 'The committed deliverables apply to each monthly service cycle and do not automatically carry forward.'],
                ['num' => '05', 'title' => 'Client inputs', 'desc' => 'Brand assets, product details, relevant permissions and content approvals should be provided on time.'],
                ['num' => '06', 'title' => 'On-site shoots', 'desc' => 'Included shoots are valid within Bhubaneswar city limits only: Ignite 1, Spark 3, Momentum 5 and Velocity 7 shoots per month. Shoots outside Bhubaneswar may attract additional travel and production charges; locations, visit duration and any special production requirements are agreed in advance.'],
                ['num' => '07', 'title' => 'Performance expectations', 'desc' => 'Campaigns are optimized for agreed objectives; specific sales, leads, rankings or revenue are not guaranteed.'],
                ['num' => '08', 'title' => 'Scope changes', 'desc' => 'Extra creatives, shoots, platforms or other work outside the selected plan are quoted separately.'],
                ['num' => '09', 'title' => 'Taxes and renewal', 'desc' => 'Applicable taxes, invoicing, billing dates and renewal terms will be specified in the client quotation.'],
            ];
            ?>
            <?php
            $guidelineIcons = [
                'bi-play-circle', 'bi-currency-dollar', 'bi-pencil-square',
                'bi-calendar-check', 'bi-folder2-open', 'bi-camera',
                'bi-speedometer2', 'bi-arrows-angle-expand', 'bi-receipt'
            ];
            ?>
            <?php foreach ($guidelines as $index => $g): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= ($index % 3 + 1) * 100 ?>">
                    <div class="guideline-card h-100 p-4 rounded-4 border bg-light-subtle transition-hover">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <span class="guideline-num-circle fw-bold"><?= Html::encode($g['num']) ?></span>
                            <div>
                                <h5 class="fw-bold fs-6 mb-1 text-dark d-flex align-items-center gap-2">
                                    <i class="bi <?= $guidelineIcons[$index] ?? 'bi-check-circle' ?> text-primary" style="font-size: 15px;"></i>
                                    <?= Html::encode($g['title']) ?>
                                </h5>
                                <p class="text-secondary small mb-0 lh-base">
                                    <?= Html::encode($g['desc']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Registered Company Box -->
        <div class="p-4 p-md-5 rounded-4 text-white shadow-sm" style="background: linear-gradient(135deg, #070a12 0%, #171d31 100%); border: 1px solid rgba(255,255,255,0.08);" data-aos="zoom-in">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-7">
                    <span class="text-uppercase fw-bold tracking-wider mb-2 d-inline-block text-primary small">
                        OFFICIAL HEADQUARTERS
                    </span>
                    <h3 class="fw-bold text-white mb-2 fs-3">SARGNEXUS PRIVATE LIMITED</h3>
                    <p class="text-white-50 small mb-3">
                        <i class="bi bi-geo-alt-fill text-primary me-2"></i>Sreekhetra Vihar, Patrapada, Bhubaneswar, Odisha - 751019
                    </p>
                    <p class="text-white-50 small mb-0">
                        Digital Marketing &amp; Brand Development | Service &amp; Pricing Guide 2026
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <div class="d-flex flex-column gap-2 align-items-lg-end">
                        <a href="mailto:partners@sargnexus.digital" class="btn btn-sm btn-outline-light rounded-pill px-4 py-2">
                            <i class="bi bi-envelope me-1"></i> partners@sargnexus.digital
                        </a>
                        <a href="tel:+918763585769" class="btn btn-sm btn-outline-light rounded-pill px-4 py-2">
                            <i class="bi bi-telephone me-1"></i> +91 8763585769
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. TESTIMONIALS SECTION -->
<section class="testimonials-section py-5">
    <div class="container custom-nav-container">
        <!-- Section Header with carousel arrows -->
        <div class="d-flex justify-content-between align-items-end mb-4" data-aos="fade-up">
            <div>
                <span class="section-tag text-uppercase mb-1 d-inline-block">TESTIMONIALS</span>
                <h2 class="section-title mb-0">What Our Clients Say</h2>
            </div>
            <div class="d-flex gap-2">
                <button class="testimonial-nav-btn" aria-label="Previous testimonial"><i class="bi bi-arrow-left"></i></button>
                <button class="testimonial-nav-btn" aria-label="Next testimonial"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>

        <!-- 3 Client Feedback Cards -->
        <div class="row g-4">
            <!-- Review 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card">
                    <p class="testimonial-quote mb-4">
                        &ldquo;The team understood what our business needed and made digital marketing much easier for us.&rdquo;
                    </p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="testimonial-author-avatar">
                            <span>RM</span>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Rohan Mehta</h6>
                            <small class="text-secondary">Mehta Construction</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card">
                    <p class="testimonial-quote mb-4">
                        &ldquo;Great results and a very professional team. Our online presence has improved a lot.&rdquo;
                    </p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="testimonial-author-avatar">
                            <span>PS</span>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Priya Sharma</h6>
                            <small class="text-secondary">Sharma Boutique</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card">
                    <p class="testimonial-quote mb-4">
                        &ldquo;Highly recommend SARGNEXUS Digital for any business looking to grow online.&rdquo;
                    </p>
                    <div class="d-flex align-items-center gap-3">
                        <div class="testimonial-author-avatar">
                            <span>AP</span>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-0 text-dark">Amit Patnaik</h6>
                            <small class="text-secondary">Patnaik Enterprises</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 8. BOTTOM CTA BANNER -->
<section id="contact" class="cta-banner-section py-5 text-white" data-aos="fade-up">
    <div class="container custom-nav-container py-3">
        <div class="row align-items-center justify-content-between g-4">
            <div class="col-lg-7">
                <span class="agency-tag text-uppercase mb-2 d-inline-block">LET'S GROW TOGETHER</span>
                <h2 class="fw-bold mb-2 fs-2">Ready to Grow Your Business Online?</h2>
                <p class="text-secondary mb-0">Let's find the right digital marketing plan for your business.</p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <a href="<?= Url::to(['/site/quote']) ?>" class="btn btn-purple-gradient text-white fw-semibold px-4 py-3 rounded-pill d-inline-block mb-3">
                    Get Your Free Quote <i class="bi bi-arrow-right ms-1"></i>
                </a>
                <ul class="list-unstyled cta-perks d-flex flex-wrap gap-3 justify-content-lg-end mb-0">
                    <li><i class="bi bi-check-circle-fill text-primary"></i> No complicated plans.</li>
                    <li><i class="bi bi-check-circle-fill text-primary"></i> No unnecessary services.</li>
                    <li><i class="bi bi-check-circle-fill text-primary"></i> Just the right strategy for your business.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
