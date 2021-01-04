<?php /* Template Name: accordion */
get_header(); 
 ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<!-- Start Faq -->
<section class="faq">
    <div class="container px-0">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="accordion" id="accordionExample">
                    <?php $list = get_field("faq_list");
if(is_array($list)) {
$cn=0;
foreach($list as $item) { ?>
                    <div class="card-faq">
                        <div class="card-header p-0" id="heading<?php echo $cn; ?>">
                            <h4 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapse<?php echo $cn; ?>" aria-expanded="false"
                                    aria-controls="collapse<?php echo $cn; ?>" title="<?php echo $item['title']; ?>">
                                    <?php echo $item['title']; ?>
                                </button>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $cn; ?>" class="collapse"
                            aria-labelledby="heading<?php echo $cn; ?>" data-parent="#accordionExample">
                            <div class="card-body-faq">
                                <?php echo $item['description']; ?>
                            </div>
                        </div>
                    </div>
                    <?php $cn++;
}
}
?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Faq -->


<?php endwhile;
endif; 
?>