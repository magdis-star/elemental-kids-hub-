<?php
/**
 * Elemental Kids Club Theme Functions
 *
 * @package Elemental_Kids
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function elemental_kids_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'elemental-kids'),
    ));
}
add_action('after_setup_theme', 'elemental_kids_setup');

/**
 * Enqueue Styles and Scripts
 */
function elemental_kids_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style('elemental-kids-style', get_stylesheet_uri(), array(), '1.0.0');

    // Tailwind CSS (compiled)
    wp_enqueue_style('elemental-kids-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');

    // Google Fonts - Bangers and Inter
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Bangers&family=Inter:wght@400;500;600;700&display=swap', array(), null);

    // Custom JavaScript
    wp_enqueue_script('elemental-kids-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'elemental_kids_enqueue_assets');

/**
 * Register Custom Post Type: Books
 */
function elemental_kids_register_books_cpt() {
    $labels = array(
        'name'                  => 'Libros',
        'singular_name'         => 'Libro',
        'menu_name'             => 'Libros',
        'add_new'               => 'Añadir Nuevo',
        'add_new_item'          => 'Añadir Nuevo Libro',
        'edit_item'             => 'Editar Libro',
        'new_item'              => 'Nuevo Libro',
        'view_item'             => 'Ver Libro',
        'search_items'          => 'Buscar Libros',
        'not_found'             => 'No se encontraron libros',
        'not_found_in_trash'    => 'No se encontraron libros en la papelera',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'menu_icon'             => 'dashicons-book',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'               => array('slug' => 'libro'),
        'show_in_rest'          => true, // Enable Gutenberg
    );

    register_post_type('book', $args);
}
add_action('init', 'elemental_kids_register_books_cpt');

/**
 * Add Custom Meta Boxes for Books
 */
function elemental_kids_add_book_meta_boxes() {
    add_meta_box(
        'book_details',
        'Detalles del Libro',
        'elemental_kids_book_details_callback',
        'book',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'elemental_kids_add_book_meta_boxes');

/**
 * Meta Box Callback
 */
function elemental_kids_book_details_callback($post) {
    wp_nonce_field('book_details_nonce', 'book_details_nonce');

    // Get existing values
    $volume = get_post_meta($post->ID, '_book_volume', true);
    $element = get_post_meta($post->ID, '_book_element', true);
    $age_range = get_post_meta($post->ID, '_book_age_range', true);
    $pages = get_post_meta($post->ID, '_book_pages', true);
    $amazon_link = get_post_meta($post->ID, '_book_amazon_link', true);
    $status = get_post_meta($post->ID, '_book_status', true);
    $color = get_post_meta($post->ID, '_book_color', true);
    $badge = get_post_meta($post->ID, '_book_badge', true);
    $badge_color = get_post_meta($post->ID, '_book_badge_color', true);
    $features = get_post_meta($post->ID, '_book_features', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="book_volume">Volumen</label></th>
            <td><input type="text" id="book_volume" name="book_volume" value="<?php echo esc_attr($volume); ?>" placeholder="LIBRO 1" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_element">Elemento</label></th>
            <td><input type="text" id="book_element" name="book_element" value="<?php echo esc_attr($element); ?>" placeholder="fuego, agua, aire" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_age_range">Edad Recomendada</label></th>
            <td><input type="text" id="book_age_range" name="book_age_range" value="<?php echo esc_attr($age_range); ?>" placeholder="8-12 años" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_pages">Número de Páginas</label></th>
            <td><input type="number" id="book_pages" name="book_pages" value="<?php echo esc_attr($pages); ?>" placeholder="100" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_amazon_link">Enlace de Amazon</label></th>
            <td><input type="url" id="book_amazon_link" name="book_amazon_link" value="<?php echo esc_attr($amazon_link); ?>" placeholder="https://www.amazon.es/..." class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_status">Estado</label></th>
            <td>
                <select id="book_status" name="book_status">
                    <option value="available" <?php selected($status, 'available'); ?>>Disponible</option>
                    <option value="new" <?php selected($status, 'new'); ?>>Nuevo</option>
                    <option value="coming-soon" <?php selected($status, 'coming-soon'); ?>>Próximamente</option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="book_color">Color del Borde (Hex)</label></th>
            <td><input type="text" id="book_color" name="book_color" value="<?php echo esc_attr($color); ?>" placeholder="#A8E6A1" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_badge">Texto de Badge</label></th>
            <td><input type="text" id="book_badge" name="book_badge" value="<?php echo esc_attr($badge); ?>" placeholder="NUEVO LIBRO" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_badge_color">Color de Badge</label></th>
            <td><input type="text" id="book_badge_color" name="book_badge_color" value="<?php echo esc_attr($badge_color); ?>" placeholder="bg-[#FF6B7A]" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_features">Características (una por línea)</label></th>
            <td><textarea id="book_features" name="book_features" rows="10" class="large-text"><?php echo esc_textarea($features); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * Save Book Meta Data
 */
function elemental_kids_save_book_meta($post_id) {
    // Verify nonce
    if (!isset($_POST['book_details_nonce']) || !wp_verify_nonce($_POST['book_details_nonce'], 'book_details_nonce')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save meta fields
    $fields = array(
        'book_volume',
        'book_element',
        'book_age_range',
        'book_pages',
        'book_amazon_link',
        'book_status',
        'book_color',
        'book_badge',
        'book_badge_color',
        'book_features',
    );

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post_book', 'elemental_kids_save_book_meta');

/**
 * Helper Function: Get All Books
 */
function elemental_kids_get_books() {
    $args = array(
        'post_type' => 'book',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );

    return new WP_Query($args);
}
