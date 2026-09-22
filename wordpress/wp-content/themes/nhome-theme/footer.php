<footer class="site-footer">
    <div class="footer-container">
        
        <!-- KHỐI 3 CỘT DỮ LIỆU ĐỘNG TỪ DATABASE -->
        <div class="footer-columns">
            
            <!-- CỘT 1: BÀI VIẾT MỚI NHẤT (Last Posts) -->
            <div class="footer-col">
                <h3 class="footer-title"><span>|</span> Bài viết mới</h3>
                <ul class="footer-links">
                    <?php
                    $recent_posts = wp_get_recent_posts( array(
                        'numberposts' => 5,
                        'post_status' => 'publish'
                    ) );
                    if ( ! empty( $recent_posts ) ) :
                        foreach ( $recent_posts as $post_item ) :
                    ?>
                        <li>
                            <a href="<?php echo esc_url( get_permalink( $post_item['ID'] ) ); ?>">
                                &raquo; <?php echo esc_html( $post_item['post_title'] ); ?>
                            </a>
                        </li>
                    <?php 
                        endforeach;
                        wp_reset_query();
                    else : 
                    ?>
                        <li><a href="#">&raquo; Chưa có bài viết</a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- CỘT 2: CHUYÊN MỤC (Categories) -->
            <div class="footer-col">
                <h3 class="footer-title"><span>|</span> Chuyên mục</h3>
                <ul class="footer-links">
                    <?php
                    $categories = get_categories( array(
                        'orderby'    => 'name',
                        'order'      => 'ASC',
                        'hide_empty' => false,
                        'number'     => 5
                    ) );
                    if ( ! empty( $categories ) ) :
                        foreach ( $categories as $category ) :
                    ?>
                        <li>
                            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                                &raquo; <?php echo esc_html( $category->name ); ?>
                            </a>
                        </li>
                    <?php 
                        endforeach;
                    else : 
                    ?>
                        <li><a href="#">&raquo; Chưa có chuyên mục</a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- CỘT 3: BÌNH LUẬN MỚI NHẤT (Comments) -->
            <div class="footer-col">
                <h3 class="footer-title"><span>|</span> Bình luận mới</h3>
                <ul class="footer-links">
                    <?php
                    $comments = get_comments( array(
                        'number' => 5,
                        'status' => 'approve'
                    ) );
                    if ( ! empty( $comments ) ) :
                        foreach ( $comments as $comment ) :
                    ?>
                        <li>
                            <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                                &raquo; <?php echo esc_html( $comment->comment_author ); ?>: <?php echo esc_html( wp_trim_words( $comment->comment_content, 5 ) ); ?>
                            </a>
                        </li>
                    <?php 
                        endforeach;
                    else : 
                    ?>
                        <li><a href="#">&raquo; Chưa có bình luận</a></li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>

        <!-- HÀNG 5 ICON MẠNG XÃ HỘI (Facebook, Twitter, Instagram, Google+, Mail) -->
        <div class="footer-social">
            <!-- 1. Facebook -->
            <a href="https://facebook.com" target="_blank" title="Facebook">
                <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            </a>
            <!-- 2. Twitter -->
            <a href="https://twitter.com" target="_blank" title="Twitter">
                <svg viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
            </a>
            <!-- 3. Instagram -->
            <a href="https://instagram.com" target="_blank" title="Instagram">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
            </a>
            <!-- 4. Google+ -->
            <a href="https://plus.google.com" target="_blank" title="Google+">
                <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14.5a4.5 4.5 0 1 1 0-9 4.3 4.3 0 0 1 3 1.2l-1.2 1.2a2.6 2.6 0 0 0-1.8-.7 2.8 2.8 0 1 0 0 5.6 2.5 2.5 0 0 0 2.6-2h-2.6v-1.6h4.3a4.2 4.2 0 0 1 .1 1 4.7 4.7 0 0 1-4.4 4.3zm5.5-4.5h-1.5v1.5h-1v-1.5h-1.5v-1h1.5V9.5h1v1.5h1.5z"/></svg>
            </a>
            <!-- 5. Email -->
            <a href="mailto:admin@example.com" title="Email">
                <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6" fill="none" stroke="#006644" stroke-width="2"/></svg>
            </a>
        </div>

        <!-- HÀNG BẢN QUYỀN & MÔ TẢ -->
        <div class="footer-bottom">
            <p><a href="<?php echo esc_url( home_url('/') ); ?>">National Transaction Corporation</a> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
            <p>&copy; All right Reversed. Sunlimetech</p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
