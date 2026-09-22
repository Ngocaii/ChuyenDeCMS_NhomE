<?php
/**
 * Trang hiển thị Kết quả Tìm kiếm
 */
get_header();
?>

<main style="max-width: 1200px; margin: 30px auto; padding: 0 20px;">
    <div style="background: #ffffff; padding: 30px; border-radius: 8px; border: 1px solid #e2e8f0;">
        
        <!-- Tiêu đề hiển thị từ khóa người dùng vừa tìm -->
        <h1 style="font-size: 1.6rem; color: #2d3748; margin-bottom: 20px; border-bottom: 2px solid #edf2f7; padding-bottom: 10px;">
            Kết quả tìm kiếm cho: "<span style="color: #2b6cb0;"><?php echo esc_html( get_search_query() ); ?></span>"
        </h1>

        <!-- Vòng lặp Loop lấy danh sách bài viết tìm được -->
        <?php if ( have_posts() ) : ?>
            <p style="color: #718096; margin-bottom: 20px;">Tìm thấy <?php echo $wp_query->found_posts; ?> kết quả phù hợp:</p>
            
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article style="border: 1px solid #e2e8f0; border-radius: 6px; padding: 16px;">
                        <h2 style="font-size: 1.2rem; margin-bottom: 8px;">
                            <a href="<?php the_permalink(); ?>" style="color: #2b6cb0; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div style="color: #718096; font-size: 0.85rem; margin-bottom: 8px;">
                            📅 Ngày đăng: <?php echo get_the_date(); ?> | 📁 Chuyên mục: <?php the_category(', '); ?>
                        </div>
                        <div style="color: #4a5568;">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

        <?php else : ?>
            <p style="color: #e53e3e; font-size: 1rem; padding: 20px 0;">
                Không tìm thấy bài viết nào phù hợp với từ khóa "<strong><?php echo esc_html( get_search_query() ); ?></strong>".
            </p>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
?>
