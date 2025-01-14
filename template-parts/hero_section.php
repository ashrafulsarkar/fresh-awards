<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fresh Awards
 */

?>
<?php if ( ! is_front_page() ) :
    $sm_title = 'page-title';
    if(is_single()){
        $sm_title = 'post-title';
    }
?>
<section class="sm-hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="site-title">
                    <h1 class="<?php echo $sm_title; ?>"><?php single_post_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>