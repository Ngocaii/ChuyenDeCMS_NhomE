<?php
/**
 * Trang hiển thị Chi tiết Bài viết (Single Post)
 */
get_header();
?>

<main class="site-main">
    <div class="welcome-card" style="padding: 40px; min-height: auto;">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
            <!-- Tiêu đề bài viết -->
            <h1 style="font-size: 2rem; color: #1a202c; margin-bottom: 12px;">
                <?php the_title(); ?>
            </h1>

            <!-- Thông tin ngày đăng, tác giả, chuyên mục -->
            <div style="color: #718096; font-size: 0.9rem; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid #e2e8f0;">
                <span>📅 Ngày đăng: <?php echo get_the_date(); ?></span> | 
                <span>✍️ Tác giả: <?php the_author(); ?></span> | 
                <span>📁 Chuyên mục: <?php the_category(', '); ?></span>
            </div>

            <!-- Nội dung chi tiết bài viết -->
            <div style="font-size: 1.05rem; line-height: 1.8; color: #2d3748;">
                <?php the_content(); ?>
            </div>

            <!-- Khung bình luận (Comment) -->
            <div style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #e2e8f0;">
                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </div>

        <?php
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
?>
