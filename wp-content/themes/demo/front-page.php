<?php
/**
 * Front page template.
 *
 * @package demo
 */

get_header();
?>

<main id="primary" class="site-main demo-landing" aria-label="<?php esc_attr_e( 'Landing page content', 'demo' ); ?>">
	<section class="demo-hero" id="hero">
		<div class="demo-hero__bg-shape demo-hero__bg-shape--one" aria-hidden="true"></div>
		<div class="demo-hero__bg-shape demo-hero__bg-shape--two" aria-hidden="true"></div>
		<div class="demo-wrap">
			<p class="demo-kicker"><?php esc_html_e( 'Crafted with speed and style', 'demo' ); ?></p>
			<h1><?php printf( esc_html__( '%s turns ideas into pages that convert', 'demo' ), esc_html( get_bloginfo( 'name' ) ) ); ?></h1>
			<p class="demo-lead"><?php esc_html_e( 'Launch a polished web presence in days, not months, with a system built for modern teams and storytellers.', 'demo' ); ?></p>
			<div class="demo-hero__actions">
				<a class="demo-btn demo-btn--solid" href="#start"><?php esc_html_e( 'Start your project', 'demo' ); ?></a>
				<a class="demo-btn demo-btn--ghost" href="#features"><?php esc_html_e( 'Explore features', 'demo' ); ?></a>
			</div>
			<ul class="demo-stats" aria-label="<?php esc_attr_e( 'Performance highlights', 'demo' ); ?>">
				<li><strong>99.9%</strong><span><?php esc_html_e( 'Uptime', 'demo' ); ?></span></li>
				<li><strong>4x</strong><span><?php esc_html_e( 'Faster delivery', 'demo' ); ?></span></li>
				<li><strong>320+</strong><span><?php esc_html_e( 'Projects launched', 'demo' ); ?></span></li>
			</ul>
		</div>
	</section>

	<section class="demo-features" id="features">
		<div class="demo-wrap">
			<h2><?php esc_html_e( 'A visual system that actually works in production', 'demo' ); ?></h2>
			<div class="demo-grid">
				<article class="demo-card">
					<h3><?php esc_html_e( 'Design direction', 'demo' ); ?></h3>
					<p><?php esc_html_e( 'Bold typography, layered textures, and intentional motion cues that give your brand a memorable voice.', 'demo' ); ?></p>
				</article>
				<article class="demo-card">
					<h3><?php esc_html_e( 'Content flexibility', 'demo' ); ?></h3>
					<p><?php esc_html_e( 'Component-driven sections make it easy to scale pages, campaigns, and launches without redesign debt.', 'demo' ); ?></p>
				</article>
				<article class="demo-card">
					<h3><?php esc_html_e( 'Performance first', 'demo' ); ?></h3>
					<p><?php esc_html_e( 'Lean templates and optimized assets keep pages fast, stable, and search-friendly from day one.', 'demo' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="demo-proof" aria-label="<?php esc_attr_e( 'Customer testimonial', 'demo' ); ?>">
		<div class="demo-wrap demo-proof__layout">
			<blockquote>
				<p><?php esc_html_e( '“We replaced a fragmented site with this landing experience and saw conversion jump by 42% in the first month.”', 'demo' ); ?></p>
				<cite><?php esc_html_e( 'Mina Q., Product Marketing Lead', 'demo' ); ?></cite>
			</blockquote>
			<div class="demo-proof__panel">
				<p class="demo-proof__label"><?php esc_html_e( 'Average launch timeline', 'demo' ); ?></p>
				<p class="demo-proof__value"><?php esc_html_e( '10 business days', 'demo' ); ?></p>
				<p><?php esc_html_e( 'From kickoff to a production-ready landing page, including QA and analytics setup.', 'demo' ); ?></p>
			</div>
		</div>
	</section>

	<section class="demo-cta" id="start">
		<div class="demo-wrap">
			<h2><?php esc_html_e( 'Ready to ship your next big story?', 'demo' ); ?></h2>
			<p><?php esc_html_e( 'Bring your idea, campaign, or product launch and we will shape it into a page people remember.', 'demo' ); ?></p>
			<a class="demo-btn demo-btn--solid" href="<?php echo esc_url( home_url( '/wp-admin/post-new.php?post_type=page' ) ); ?>"><?php esc_html_e( 'Create your first page', 'demo' ); ?></a>
		</div>
	</section>
</main>

<?php
get_footer();
