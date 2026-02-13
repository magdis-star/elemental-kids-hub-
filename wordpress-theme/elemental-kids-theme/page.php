<?php
/**
 * Default Page Template
 *
 * @package Elemental_Kids
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="min-h-screen py-16 px-5" style="
    background-color: #FEF3C7;
    background-image:
        linear-gradient(rgba(245, 158, 11, 0.15) 1px, transparent 1px),
        linear-gradient(90deg, rgba(245, 158, 11, 0.15) 1px, transparent 1px);
    background-size: 20px 20px;
">
    <div class="max-w-4xl mx-auto">
        <?php
        while (have_posts()) :
            the_post();
            ?>

            <h1 class="text-4xl md:text-5xl font-bangers text-[#5BC0EB] mb-6 text-center">
                <?php the_title(); ?>
            </h1>

            <div class="bg-white rounded-3xl shadow-lg p-8 md:p-12 mb-8">
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
