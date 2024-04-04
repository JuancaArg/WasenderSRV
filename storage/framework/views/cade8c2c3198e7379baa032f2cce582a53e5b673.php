<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.layouts.header-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb-height p-relative grey-bg"
         data-background="<?php echo e(asset('frontend/img/breadcrumb/breadcrumb.jpg')); ?>">
         <div class="breadcrumb__scroll-bottom smooth">
            <a href="#blog">
               <i class="far fa-arrow-down"></i>
            </a>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center">
                     <h3 class="breadcrumb__title"><?php echo e(__('Recent Blogs')); ?></h3>
                     <div class="breadcrumb__list">
                        <span><a href="<?php echo e(url('/')); ?>"><?php echo e(__('Home')); ?></a></span>
                        <span class="dvdr"><i class="fa fa-angle-right"></i></span>
                        <span><?php echo e(__('Blog')); ?></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- postbox area start -->
      <div class="postbox__area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xxl-8 col-xl-8 col-lg-8">
                  <div id="blog" class="postbox__wrapper pr-20">
                     <?php $__currentLoopData = $blogs ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <article class="postbox__item format-image mb-50 transition-3">
                        <div class="postbox__thumb w-img">
                           <a href="<?php echo e(url('/blog',$blog->slug)); ?>">
                              <img src="<?php echo e(asset($blog->preview->value ?? '')); ?>" alt="">
                           </a>
                        </div>
                        <div class="postbox__content">
                           <div class="postbox__meta">
                              <span><a href="<?php echo e(url('/blogs')); ?>"><i class="fal fa-user-circle"></i> <?php echo e(__('Admin')); ?> </a></span>
                              <span><a href="<?php echo e(url('/blogs?date='.$blog->created_at->format('d-m-Y'))); ?>"><i class="fal fa-clock"></i> <?php echo e($blog->created_at->format('F d,Y')); ?></a></span>
                              
                           </div>
                           <h3 class="postbox__title">
                              <a href="<?php echo e(url('blog',$blog->slug)); ?>"><?php echo e($blog->title); ?></a>
                           </h3>
                           <div class="postbox__text">
                              <p><?php echo e(Str::limit($blog->shortDescription->value ?? '',200)); ?></p>
                           </div>
                           <div class="post__button">
                              <a class="tp-btn-blue-square" href="<?php echo e(url('blog',$blog->slug)); ?>"><span><?php echo e(__('READ MORE')); ?></span></a>
                           </div>
                        </div>
                     </article>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php if(count($blogs) == 0): ?>
                     <div class="alert alert-warning" role="alert">
                      <?php echo e(__('Opps there is no blog post available')); ?>

                     </div>
                     <?php endif; ?>
                     <div class="basic-pagination">
                       <?php echo e($blogs->appends($request->all())->links('vendor.pagination.bootstrap-5')); ?>

                     </div>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="sidebar__wrapper">
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title"><?php echo e(__('Search Here')); ?></h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__search">
                              <form>
                                 <div class="sidebar__search-input-2">
                                    <input type="text" name="search" value="<?php echo e($request->search ?? ''); ?>" placeholder="<?php echo e(__('Search your keyword...')); ?>">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <?php if(count($recent_blogs) > 0): ?>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title"><?php echo e(__('Recent Posts')); ?></h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__post rc__post">
                              <?php $__currentLoopData = $recent_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent_blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="rc__post mb-20 d-flex">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="<?php echo e(url('/blog',$recent_blog->slug)); ?>">
                                       <img src="<?php echo e(asset($recent_blog->preview->value ?? '')); ?>" alt="">
                                    </a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span><?php echo e($recent_blog->created_at->format('d F, Y')); ?></span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="<?php echo e(url('/blog',$recent_blog->slug)); ?>"><?php echo e(Str::limit($recent_blog->title,35)); ?></a>
                                    </h3>
                                 </div>
                              </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                        </div>
                     </div>
                     <?php endif; ?>
                     <?php if(count($categories) > 0): ?>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title"><?php echo e(__('Categories')); ?></h3>
                        <div class="sidebar__widget-content">
                           <ul>
                              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><a href="<?php echo e(url('category/'.$category->slug.'/'.$category->id)); ?>"><?php echo e($category->title); ?><span><i class="fal fa-angle-right"></i></span></a></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             
                           </ul>
                        </div>
                     </div>
                     <?php endif; ?>
                     <?php if(count($tags) > 0): ?>
                     <div class="sidebar__widget mb-40">
                        <h3 class="sidebar__widget-title"><?php echo e(__('Tags')); ?></h3>
                        <div class="sidebar__widget-content">
                           <div class="tagcloud">
                              <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <a href="<?php echo e(url('tag/'.$tag->slug.'/'.$tag->id)); ?>"><?php echo e($tag->title); ?></a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                        </div>
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- postbox area end -->
   </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/my-works/laravel/whatsserver/resources/views/frontend/blog/list.blade.php ENDPATH**/ ?>