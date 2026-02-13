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
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'elemental-kids'),
    ));
}
add_action('after_setup_theme', 'elemental_kids_setup');

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
        'view_item'             => 'Ver Libro',
        'search_items'          => 'Buscar Libros',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'menu_icon'             => 'dashicons-book',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'               => array('slug' => 'libro'),
        'show_in_rest'          => true,
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

    $volume = get_post_meta($post->ID, '_book_volume', true);
    $amazon_link = get_post_meta($post->ID, '_book_amazon_link', true);
    $status = get_post_meta($post->ID, '_book_status', true);
    $color = get_post_meta($post->ID, '_book_color', true);
    $badge = get_post_meta($post->ID, '_book_badge', true);
    $features = get_post_meta($post->ID, '_book_features', true);
    $pages = get_post_meta($post->ID, '_book_pages', true);
    $sample_images = get_post_meta($post->ID, '_book_sample_images', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="book_volume">Volumen (LIBRO 1, LIBRO 2, etc.)</label></th>
            <td><input type="text" id="book_volume" name="book_volume" value="<?php echo esc_attr($volume); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_amazon_link">Enlace de Amazon</label></th>
            <td><input type="url" id="book_amazon_link" name="book_amazon_link" value="<?php echo esc_attr($amazon_link); ?>" class="regular-text"></td>
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
            <th><label for="book_color">Color del Borde (Hex como #A8E6A1)</label></th>
            <td><input type="text" id="book_color" name="book_color" value="<?php echo esc_attr($color); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_badge">Texto de Badge (ej: NUEVO LIBRO)</label></th>
            <td><input type="text" id="book_badge" name="book_badge" value="<?php echo esc_attr($badge); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_features">Características</label></th>
            <td><textarea id="book_features" name="book_features" rows="5" class="large-text"><?php echo esc_textarea($features); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="book_pages">Número de Páginas</label></th>
            <td><input type="number" id="book_pages" name="book_pages" value="<?php echo esc_attr($pages); ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th><label for="book_sample_images">URLs de Imágenes de Muestra (una por línea)</label></th>
            <td>
                <textarea id="book_sample_images" name="book_sample_images" rows="5" class="large-text" placeholder="https://example.com/muestra1.jpg&#10;https://example.com/muestra2.jpg"><?php echo esc_textarea($sample_images); ?></textarea>
                <p class="description">Añade URLs de imágenes de muestra, una por línea. Puedes subir las imágenes a la Biblioteca de Medios y copiar las URLs aquí.</p>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Save Book Meta Data
 */
function elemental_kids_save_book_meta($post_id) {
    if (!isset($_POST['book_details_nonce']) || !wp_verify_nonce($_POST['book_details_nonce'], 'book_details_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = array('book_volume', 'book_amazon_link', 'book_status', 'book_color', 'book_badge', 'book_features', 'book_pages', 'book_sample_images');

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
