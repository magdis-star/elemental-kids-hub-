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
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'),
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
 *
 * La portada es la «Imagen destacada», el texto de venta va en el editor y el «Extracto» es el texto corto
 * de la tarjeta de la página de inicio. Aquí sólo lo que no tiene sitio en WordPress.
 */
function elemental_kids_book_details_callback($post) {
    wp_nonce_field('book_details_nonce', 'book_details_nonce');

    $volume = get_post_meta($post->ID, '_book_volume', true);
    $amazon_link = get_post_meta($post->ID, '_book_amazon_link', true);
    $status = get_post_meta($post->ID, '_book_status', true);
    $badge = get_post_meta($post->ID, '_book_badge', true);
    $pages = get_post_meta($post->ID, '_book_pages', true);
    $bonus = get_post_meta($post->ID, '_book_bonus', true);
    $sample_ids = get_post_meta($post->ID, '_book_sample_ids', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="book_volume">Volumen</label></th>
            <td><input type="text" id="book_volume" name="book_volume" value="<?php echo esc_attr($volume); ?>" class="regular-text" placeholder="VOLUMEN 3"></td>
        </tr>
        <tr>
            <th><label for="book_amazon_link">Enlace de Amazon</label></th>
            <td><input type="url" id="book_amazon_link" name="book_amazon_link" value="<?php echo esc_attr($amazon_link); ?>" class="regular-text" placeholder="https://www.amazon.es/dp/...">
                <p class="description">Si lo dejas vacío, el botón lleva a tu tienda de autora.</p></td>
        </tr>
        <tr>
            <th><label for="book_pages">Número de páginas</label></th>
            <td><input type="number" id="book_pages" name="book_pages" value="<?php echo esc_attr($pages); ?>" class="small-text" placeholder="80"></td>
        </tr>
        <tr>
            <th>Regalo</th>
            <td><label><input type="checkbox" name="book_bonus" value="1" <?php checked($bonus, '1'); ?>> Incluye bonus descargable</label></td>
        </tr>
        <tr>
            <th><label for="book_badge">Etiqueta</label></th>
            <td><input type="text" id="book_badge" name="book_badge" value="<?php echo esc_attr($badge); ?>" class="regular-text" placeholder="NUEVO LIBRO">
                <p class="description">Opcional. Sale en rosa encima del título.</p></td>
        </tr>
        <tr>
            <th><label for="book_status">Estado</label></th>
            <td>
                <select id="book_status" name="book_status">
                    <option value="available" <?php selected($status, 'available'); ?>>A la venta</option>
                    <option value="coming-soon" <?php selected($status, 'coming-soon'); ?>>Próximamente (sin botón de Amazon)</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Páginas de muestra</th>
            <td>
                <input type="hidden" id="book_sample_ids" name="book_sample_ids" value="<?php echo esc_attr($sample_ids); ?>">
                <div id="book_sample_preview" style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:8px">
                    <?php foreach (elemental_kids_ids($sample_ids) as $id) { echo wp_get_attachment_image($id, 'thumbnail', false, array('style' => 'width:80px;height:auto;border:1px solid #ddd')); } ?>
                </div>
                <button type="button" class="button" id="book_sample_button">Elegir páginas de muestra</button>
                <button type="button" class="button-link" id="book_sample_clear" style="margin-left:8px">Quitar todas</button>
                <p class="description">Elige 6 (o las que quieras) en la Biblioteca de medios. Salen en el orden en que las marques.</p>
            </td>
        </tr>
    </table>
    <script>
    jQuery(function ($) {
        var marco;
        $('#book_sample_button').on('click', function (e) {
            e.preventDefault();
            if (!marco) {
                marco = wp.media({ title: 'Páginas de muestra', button: { text: 'Usar estas imágenes' }, library: { type: 'image' }, multiple: 'add' });
                marco.on('select', function () {
                    var elegidas = marco.state().get('selection').toJSON();
                    $('#book_sample_ids').val(elegidas.map(function (a) { return a.id; }).join(','));
                    $('#book_sample_preview').html(elegidas.map(function (a) {
                        var url = (a.sizes && a.sizes.thumbnail) ? a.sizes.thumbnail.url : a.url;
                        return '<img src="' + url + '" style="width:80px;height:auto;border:1px solid #ddd">';
                    }).join(''));
                });
            }
            marco.open();
        });
        $('#book_sample_clear').on('click', function (e) {
            e.preventDefault();
            $('#book_sample_ids').val('');
            $('#book_sample_preview').empty();
        });
    });
    </script>
    <?php
}

/** "12,15,18" → [12, 15, 18] */
function elemental_kids_ids($lista) {
    return array_filter(array_map('absint', explode(',', (string) $lista)));
}

/** El selector de la Biblioteca de medios, sólo en la pantalla de los libros. */
function elemental_kids_admin_media($hook) {
    $screen = get_current_screen();
    if ($screen && $screen->post_type === 'book') {
        wp_enqueue_media();
    }
}
add_action('admin_enqueue_scripts', 'elemental_kids_admin_media');

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

    $fields = array('book_volume', 'book_status', 'book_badge', 'book_pages');

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field(wp_unslash($_POST[$field])));
        }
    }

    if (isset($_POST['book_amazon_link'])) {
        update_post_meta($post_id, '_book_amazon_link', esc_url_raw(wp_unslash($_POST['book_amazon_link'])));
    }
    if (isset($_POST['book_sample_ids'])) {
        update_post_meta($post_id, '_book_sample_ids', implode(',', elemental_kids_ids($_POST['book_sample_ids'])));
    }
    // Una casilla sin marcar no llega en el formulario
    update_post_meta($post_id, '_book_bonus', isset($_POST['book_bonus']) ? '1' : '0');
}
add_action('save_post_book', 'elemental_kids_save_book_meta');

/**
 * Helper Function: Get All Books
 */
function elemental_kids_get_books() {
    $args = array(
        'post_type' => 'book',
        'posts_per_page' => -1,
        'orderby' => array('menu_order' => 'ASC', 'date' => 'ASC'),
    );

    return new WP_Query($args);
}
