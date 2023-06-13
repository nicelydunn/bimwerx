<?php
$position = block_value( 'image-position' );
?>

<div class="grid md:grid-cols-2 gap-8 items-center mt-16">
    <div class="aspect-[1/1] <?php if ( $position === 'right' ) { echo 'lg:order-2'; } ?>">
        <img class="h-full w-full object-cover" src="<?php block_field( 'image' ); ?>" alt="">
    </div>
    <div class="<?php if ( $position === 'right' ) { echo 'lg:order-1'; } ?>">
        <div class="w-16 border-b-2 border-orange-dark"></div>
        <h2 class="text-3xl uppercase mt-4"><?php block_field( 'title' ); ?></h2>
        <div class="mt-8"><?php block_field( 'description' ); ?></div>
    </div>
</div>