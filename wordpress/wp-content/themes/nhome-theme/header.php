<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        
        <!-- KHỐI TRÁI: Logo + Nút Home + Form Search -->
        <div class="header-left">
            <!-- 1. Tên Nhóm / Brand -->
            <div class="site-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Group E</a>
            </div>

            <!-- 2. Nút Home -->
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-home">Home</a>

            <!-- 3. Form Tìm kiếm chuẩn của WordPress -->
            <form role="search" method="get" class="header-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input 
                    type="search" 
                    class="header-search-input" 
                    placeholder="Search" 
                    value="<?php echo get_search_query(); ?>" 
                    name="s" 
                    required 
                />
                <button type="submit" class="header-search-submit">Submit</button>
            </form>
        </div>

        <!-- KHỐI PHẢI: Menu Danh mục động + Action Icons -->
        <div class="header-right">
            
            <!-- 1. Load Menu Danh Mục ĐỘNG từ WP-Admin -->
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'container'      => 'nav',
                'container_class'=> 'primary-nav',
                'menu_class'     => 'primary-menu',
                'fallback_cb'    => false, // Không hiện menu mặc định nếu chưa gán
            ) );
            ?>

            <!-- 2. Các nút Icon (Menu, Search, Account) -->
            <div class="header-actions">
                
                <!-- Icon Menu (3 chấm) -->
                <button type="button" class="action-item" title="Menu">
                    <svg viewBox="0 0 24 24">
                        <circle cx="5" cy="12" r="2"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                        <circle cx="19" cy="12" r="2"></circle>
                    </svg>
                    <span>Menu</span>
                </button>

                <!-- Icon Search (Kính lúp) -->
                <button type="button" class="action-item" title="Search">
                    <svg viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 14z"/>
                    </svg>
                    <span>Search</span>
                </button>

                <!-- Icon Account (Người dùng) -->
                <a href="<?php echo esc_url( wp_login_url() ); ?>" class="action-item" title="Account">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
                    </svg>
                    <span>Account ▾</span>
                </a>

            </div>

        </div>

    </div>
</header>
