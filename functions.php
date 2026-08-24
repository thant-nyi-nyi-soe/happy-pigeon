<?php
/**
 * happypigeon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package happypigeon
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'happypigeon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function happypigeon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on happypigeon, use a find and replace
		 * to change 'happypigeon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'happypigeon', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'happypigeon' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'happypigeon_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'happypigeon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function happypigeon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'happypigeon_content_width', 640 );
}
add_action( 'after_setup_theme', 'happypigeon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function happypigeon_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'happypigeon' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'happypigeon' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'happypigeon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function happypigeon_scripts() {
	wp_enqueue_style('style-css', get_stylesheet_uri());
	wp_enqueue_style('import-css', get_template_directory_uri().'/assets/css/import.css');
  wp_enqueue_style('slick-css', get_template_directory_uri().'/assets/css/slick.css');
  wp_enqueue_style('slick-theme-css', get_template_directory_uri().'/assets/css/slick-theme.css');
  wp_enqueue_style('happypigeon-style', get_template_directory_uri().'/assets/css/style.css');

 wp_enqueue_script('script', get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js', array('jquery'), '', true);
	wp_enqueue_script('html5shiv-script', get_template_directory_uri().'/assets/js/html5shiv.js', array('jquery'), '', true);
	wp_enqueue_script('slick-libray', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), '', true);
	wp_enqueue_script('jquery.matchHeight', get_template_directory_uri().'/assets/js/jquery.matchHeight.js', array('jquery'), '', true);
  wp_enqueue_script('common-script', get_template_directory_uri().'/assets/js/common.js', array('jquery'), '', true);
   wp_enqueue_script('faq-script', get_template_directory_uri().'/assets/js/faq.js', array('jquery'), '', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'happypigeon_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load  breadcrumb Upload file.
 */
require get_template_directory().'/inc/breadcrumb.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Template URL */
function template_uri() {
   return get_template_directory_uri();
}
add_shortcode("template_uri", "template_uri");

function remove_jquery_migrate_notice()
{
	$m = $GLOBALS['wp_scripts']->registered['jquery-migrate'];
	$m->extra['before'][] = 'temp_jm_logconsole = window.console.log; window.console.log = null;';
	$m->extra['after'][] = 'window.console.log = temp_jm_logconsole;';
}
// add_action('init', 'remove_jquery_migrate_notice', 5);

add_action('template_redirect', function () {

    if (isset($_GET['clear_wc_cart']) && $_GET['clear_wc_cart'] === '1') {

        if (function_exists('WC') && WC()->cart) {
            WC()->cart->empty_cart();
        }

        wp_safe_redirect(remove_query_arg('clear_wc_cart'));
        exit;
    }

});














/**
 * FREE BONUS SYSTEM
 *
 * Main product: 1244
 *
 * Bonus products:
 * 1250 = Pet Dish
 * 1251 = Collar
 *
 * Rules:
 * < 3kg  = 0 bonuses
 * >= 3kg = 1 bonus
 * >= 10kg = 2 bonuses
 */


/* =========================================================
 * 1. GET VARIATION WEIGHT
 * ========================================================= */

function az_get_variation_weight($variation_id) {

    $variation = wc_get_product($variation_id);

    if (!$variation || !$variation->is_type('variation')) {
        return 0;
    }

    /*
     * Get the actual displayed value of the Weight attribute.
     *
     * Example:
     * 1kg
     * 1kg × 3
     * 3kg
     * 6kg
     * 10kg
     */

    $weight_value = $variation->get_attribute('Weight');

    // If your attribute is NOT a global attribute called "Weight",
    // use this instead:
    //
    // $weight_value = $variation->get_attribute('Weight');

    if (!$weight_value) {
        error_log(
            'AZ BONUS: No weight found for variation ' . $variation_id
        );

        return 0;
    }

    error_log(
        'AZ BONUS: Variation ' . $variation_id .
        ' weight value = ' . $weight_value
    );


    /*
     * Get the first number before "kg".
     *
     * 1kg × 3 -> 1
     * 3kg     -> 3
     * 10kg    -> 10
     */

    if (!preg_match('/([\d.]+)\s*kg/i', $weight_value, $matches)) {

        error_log(
            'AZ BONUS: Could not parse weight: ' . $weight_value
        );

        return 0;
    }

    $weight = (float) $matches[1];


    /*
     * Handle:
     *
     * 1kg × 3
     * 3kg × 1
     *
     */

    if (
        preg_match(
            '/kg.*?[x×]\s*(\d+)/iu',
            $weight_value,
            $quantity_match
        )
    ) {

        $weight *= (int) $quantity_match[1];
    }


    error_log(
        'AZ BONUS: Final calculated weight for variation ' .
        $variation_id .
        ' = ' . $weight . 'kg'
    );

    return $weight;
}


/* =========================================================
 * 2. GET WEIGHT ALREADY IN CART
 * ========================================================= */

function az_get_cart_weight() {

    $total_weight = 0;

    if (!WC()->cart) {
        return 0;
    }

    foreach (WC()->cart->get_cart() as $cart_item) {

        /*
         * Never count bonus products.
         */
        if (!empty($cart_item['az_free_bonus'])) {
            continue;
        }

        $variation_id = !empty($cart_item['variation_id'])
            ? (int) $cart_item['variation_id']
            : 0;

        if (!$variation_id) {
            continue;
        }

        $weight = az_get_variation_weight($variation_id);

        $quantity = !empty($cart_item['quantity'])
            ? (int) $cart_item['quantity']
            : 1;

        $total_weight += $weight * $quantity;
    }

    return $total_weight;
}

/* =========================================================
 * 3. DETERMINE BONUS COUNT
 * ========================================================= */

function az_get_bonus_count($weight) {

    if ($weight >= 10) {
        return 2;
    }

    if ($weight >= 3) {
        return 1;
    }

    return 0;
}

/* =========================================================
 * 4. BONUS SELECTION UI & FRONTEND LOGIC
 * ========================================================= */

add_action('woocommerce_before_add_to_cart_button', function () {

    global $product;

    if (!$product || $product->get_id() != 1244) {
        return;
    }

    // Pre-calculate variation weights
    $variation_weights = [];
    if ($product->is_type('variable')) {
        foreach ($product->get_children() as $variation_id) {
            $variation_weights[$variation_id] = az_get_variation_weight($variation_id);
        }
    }
    ?>

    <div
        id="az-free-bonus"
        style="
            display:none;
            margin:20px 0;
            padding:15px;
            border:1px solid #ddd;
        "
    >
        <!-- <strong> Free Bonus</strong> -->

        <div id="az-bonus-message" style="margin:10px 0; color: #27ae60; font-weight: bold;"></div>

        <div
            id="az-bonus-1"
            style="display:none; margin-bottom:10px;"
        >
            <label>
                Bonus 1:
                <select name="az_bonus_1" autocomplete="off">
                    <option value="">Choose a bonus</option>
                    <option value="1250">Pet Dish</option>
                    <option value="1251">Collar</option>
                </select>
            </label>
        </div>

        <div
            id="az-bonus-2"
            style="display:none;"
        >
            <label>
                Bonus 2:
                <select name="az_bonus_2" autocomplete="off">
                    <option value="">Choose a bonus</option>
                    <option value="1250">Pet Dish</option>
                    <option value="1251">Collar</option>
                </select>
            </label>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        const variationWeights = <?php echo json_encode($variation_weights); ?>;

        function resetBonusSelections() {
            $('#az-bonus-1 select, #az-bonus-2 select').val('');
        }

        function parseWeightFromString(str) {
            if (!str) return 0;
            const match = str.match(/([\d.]+)\s*kg/i);
            if (!match) return 0;

            let weight = parseFloat(match[1]) || 0;
            const multMatch = str.match(/kg.*?[x×]\s*(\d+)/i);
            if (multMatch) {
                weight *= parseInt(multMatch[1], 10);
            }
            return weight;
        }

        function getSelectedWeight() {
            const $form = $('form.cart');
            const variationId = parseInt($form.find('input[name="variation_id"]').val()) || 0;

            if (variationId && typeof variationWeights[variationId] !== 'undefined') {
                return variationWeights[variationId];
            }

            let parsedWeight = 0;
            $form.find('.variations select').each(function() {
                const selectedOptionText = $(this).find('option:selected').text();
                const selectedValue = $(this).val();
                const combinedString = selectedOptionText + ' ' + selectedValue;

                if (/kg/i.test(combinedString)) {
                    const weight = parseWeightFromString(combinedString);
                    if (weight > 0) {
                        parsedWeight = weight;
                    }
                }
            });

            return parsedWeight;
        }

        function updateBonusUI() {
            const itemWeight = getSelectedWeight();

            let bonusCount = 0;
            if (itemWeight >= 10) {
                bonusCount = 2;
            } else if (itemWeight >= 3) {
                bonusCount = 1;
            }

            if (bonusCount > 0) {
                $('#az-free-bonus').show();
                
                const bonusText = bonusCount === 1 
                    ? '' 
                    : '';
                
                $('#az-bonus-message').text(bonusText);

                if (bonusCount >= 1) {
                    $('#az-bonus-1').show();
                } else {
                    $('#az-bonus-1').hide();
                    $('#az-bonus-1 select').val('');
                }

                if (bonusCount >= 2) {
                    $('#az-bonus-2').show();
                } else {
                    $('#az-bonus-2').hide();
                    $('#az-bonus-2 select').val('');
                }
            } else {
                $('#az-free-bonus').hide();
                resetBonusSelections();
            }
        }

        // Always reset select placeholders on fresh load
        resetBonusSelections();

        // Event Listeners
        $(document).on('change', 'form.cart .variations select', function() {
            updateBonusUI();
        });

        $(document).on('found_variation', 'form.cart', function() {
            updateBonusUI();
        });

        $(document).on('reset_data', 'form.cart', function() {
            $('#az-free-bonus').hide();
            resetBonusSelections();
        });

        // Clear selects after AJAX add-to-cart completes
        $(document.body).on('added_to_cart', function() {
            resetBonusSelections();
        });

        // Run UI check on ready
        updateBonusUI();
    });
    </script>

    <?php
});

/* =========================================================
 * 5. ADD SELECTED BONUS PRODUCTS TO CART
 * ========================================================= */

add_action('woocommerce_add_to_cart', function ($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data) {
    // Prevent infinite recursion when adding bonus items
    static $is_adding_bonus = false;
    if ($is_adding_bonus) {
        return;
    }

    if ($product_id != 1244) {
        return;
    }

    $is_adding_bonus = true;

    // Process Bonus 1
    if (!empty($_POST['az_bonus_1'])) {
        $bonus_1_id = (int) sanitize_text_field($_POST['az_bonus_1']);
        if ($bonus_1_id > 0) {
            WC()->cart->add_to_cart(
                $bonus_1_id,
                1,
                0,
                array(),
                array('az_free_bonus' => true)
            );
        }
    }

    // Process Bonus 2
    if (!empty($_POST['az_bonus_2'])) {
        $bonus_2_id = (int) sanitize_text_field($_POST['az_bonus_2']);
        if ($bonus_2_id > 0) {
            WC()->cart->add_to_cart(
                $bonus_2_id,
                1,
                0,
                array(),
                array('az_free_bonus' => true)
            );
        }
    }

    $is_adding_bonus = false;
}, 10, 6);


/* =========================================================
 * 6. FORCE BONUS ITEM PRICE TO $0 IN CART
 * ========================================================= */

add_action('woocommerce_before_calculate_totals', function ($cart) {
    if (is_admin() && !defined('DOING_AJAX')) {
        return;
    }

    foreach ($cart->get_cart() as $cart_item) {
        if (!empty($cart_item['az_free_bonus'])) {
            $cart_item['data']->set_price(0);
        }
    }
}, 1000);

/* =========================================================
 * 7. EXCLUDE BONUS ITEMS FROM CART BADGE / CONTENT COUNT
 * ========================================================= */

add_filter('woocommerce_cart_contents_count', function ($count) {
    if (!WC()->cart) {
        return $count;
    }

    $bonus_count = 0;
    foreach (WC()->cart->get_cart() as $cart_item) {
        if (!empty($cart_item['az_free_bonus'])) {
            $bonus_count += $cart_item['quantity'];
        }
    }

    return max(0, $count - $bonus_count);
});


/* =========================================================
 * 8. EXCLUDE BONUS ITEMS FROM SHIPPING WEIGHT CALCULATIONS
 * ========================================================= */

add_filter('woocommerce_cart_item_weight', function ($weight, $cart_item) {
    if (!empty($cart_item['az_free_bonus'])) {
        return 0;
    }
    return $weight;
}, 10, 2);

/* =========================================================
 * 9. LOCK BONUS ITEM QUANTITY TO 1 ON CART PAGE
 * ========================================================= */

// 1. Replace quantity selector with static "1" in cart table
add_filter('woocommerce_cart_item_quantity', function ($product_quantity, $cart_item_key, $cart_item) {
    if (!empty($cart_item['az_free_bonus'])) {
        return sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
    }
    return $product_quantity;
}, 10, 3);

// 2. Server-side guard: Force quantity back to 1 if a request bypasses UI
add_action('woocommerce_after_cart_item_quantity_update', function ($cart_item_key, $quantity, $old_quantity, $cart) {
    if (!empty($cart->cart_contents[$cart_item_key]['az_free_bonus']) && $quantity > 1) {
        $cart->cart_contents[$cart_item_key]['quantity'] = 1;
    }
}, 10, 4);