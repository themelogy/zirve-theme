<div class="owl-carousel owl-slider owl-carousel-area visible-lg" data-nav="false" data-items="1" data-autoplay="5000">
    @foreach($slides as $slide)
    <div class="bg-holder full">
        <div class="bg-mask"></div>
        <div class="bg-img" style="background-image:url({!! $slide->present()->firstImage(1100,400,'fit',50) !!});"></div>
    </div>
    @endforeach
</div>