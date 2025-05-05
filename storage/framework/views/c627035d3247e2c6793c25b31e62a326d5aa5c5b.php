<?php $__env->startSection('content'); ?>

<style type="text/css">

    .th-blog {
     /* Set the fixed width you need */
/*    height: 800px; 
*/    overflow: hidden;
    position: relative;
}

.blog-img img {
    width: 100%;
    height: auto;
}

.blog-content {
    height: calc(100% - 60px); /* Adjust height based on your design */
    overflow: hidden;
    padding: 10px;
    box-sizing: border-box;
}

/*.blog-title {
    margin: 10px 0;
    font-size: 18px;
    line-height: 1.5;
}*/

.blog-text {
    font-size: 14px;
    line-height: 1.5;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2; 
    overflow: hidden;
    text-overflow: ellipsis;
}

/*.blog-meta {
    margin-bottom: 10px;
}*/

/*.th-btn {
*//*    display: inline-block;
*/    /*padding: 10px 15px;
    border: 1px solid #333;
    text-decoration: none;
}
*/
</style>

 <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Blog Post</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index-2.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom" style="background-color: #A4B5BA !important;">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <img src="<?php echo e(config('app.baseURL')); ?>/storage/app/<?php echo e($blogs->image); ?>" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog-1.html"><i class="far fa-user"></i>by Propberries</a>
                                <a href="#"><i class="far fa-clock"></i><?php echo e(\Carbon\Carbon::parse($blogs->created_at)->format('d F, Y')); ?></a>                               
                                <a href="#"><i class="far fa-house-building"></i><?php echo e($blogs->type); ?></a>
                            </div>
                            <h2 class="blog-title"><?php echo e($blogs->title); ?></h2>
                            <p class="blog-text"><?php echo e($blogs->description); ?></p>
                            <a href="<?php echo e(config('app.baseURL')); ?>/blog-details?id=<?php echo e($blogs->id); ?>" class="th-btn style-border2 th-btn-icon">Read More</a>
                        </div>
                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


                   
                   

                    

                  <?php if($blog->lastPage() > 1): ?>
    <div class="th-pagination">
        <ul>
            <!-- Previous Page Link -->
            <?php if($blog->onFirstPage()): ?>
                <li><span class="prev-page disabled"><i class="far fa-arrow-left me-2"></i>Previous</span></li>
            <?php else: ?>
                <li><a class="prev-page" href="<?php echo e($blog->previousPageUrl()); ?>"><i class="far fa-arrow-left me-2"></i>Previous</a></li>
            <?php endif; ?>

            <!-- Pagination Elements -->
            <?php $__currentLoopData = $blog->getUrlRange(1, $blog->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($page == $blog->currentPage()): ?>
                    <li><span class="active"><?php echo e($page); ?></span></li>
                <?php else: ?>
                    <li><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Next Page Link -->
            <?php if($blog->hasMorePages()): ?>
                <li><a class="next-page" href="<?php echo e($blog->nextPageUrl()); ?>">Next<i class="far fa-arrow-right ms-2"></i></a></li>
            <?php else: ?>
                <li><span class="next-page disabled">Next<i class="far fa-arrow-right ms-2"></i></span></li>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>

                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        
                      
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details-1.html"><img src="assets/img/blog/recent-post-1-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details-1.html">Exploring The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog-1.html"><i class="far fa-calendar"></i>22/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details-1.html"><img src="assets/img/blog/recent-post-1-2-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details-1.html">Harmony With Nature Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog-1.html"><i class="far fa-calendar"></i>25/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details-1.html"><img src="assets/img/blog/recent-post-1-3-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details-1.html">Exploring The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog-1.html"><i class="far fa-calendar"></i>27/6/2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!--  <div class="widget widget_tag_cloud  ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog-1.html">Business</a>
                                <a href="blog-1.html">Buyer</a>
                                <a href="blog-1.html">Rent</a>
                                <a href="blog-1.html">Innovate</a>
                                <a href="blog-1.html">Real estate</a>
                                <a href="blog-1.html">Modern</a>
                                <a href="blog-1.html">Luxury</a>
                                <a href="blog-1.html">Sale</a>
                            </div>
                        </div> -->
                        <div class="widget widget_banner  " data-bg-src="assets/img/widget/widget-banner.png">
                            <div class="widget-banner text-center">
                                <h3 class="title">Need Help? We Are Here To Help You</h3>
                                <div class="logo"><img src="assets/img/propberries.jpeg" alt="img"></div>
                                <h4 class="subtitle">You Get Online support</h4>
                                <h5 class="link"><a href="tel:9975706345">+91-997-570-6345</a></h5>
                                <h5 class="link"><a href="tel:9560365659">+91-956-036-5659</a></h5>
                                <a href="<?php echo e(config('app.baseURL')); ?>/contact" class="th-btn style-border th-btn-icon">Read More</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/propberries/public_html/resources/views/blog.blade.php ENDPATH**/ ?>