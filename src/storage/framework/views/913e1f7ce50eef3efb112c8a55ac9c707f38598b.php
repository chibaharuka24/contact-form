<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('/css/index.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<form class="contact-form" action="/contacts/confirm" method="post">
    <div class="title">
    <h2>お問い合わせ</h2>
    </div>
        <div class="contact-form_name">
            <div class="name">お名前</div>
            <input type="text" name="name" value="テスト太郎">
        </div>
        <div class="contact-form_email">
            <div class="email">メールアドレス</div>
            <input type="email" name="email" value="">
        </div>
        <div class="contact-form_tel">
            <div class="tel">電話番号</div>
            <input type="text" name="tel" value="">
        </div>
        <div class="contact-form_content">
            <div class="content">お問い合わせ内容</div>
            <input type="textBox" name="content" value="">
        </div>
        <div class="contact-form_button">
            <input type="submit" name="button" value="送信">
        </div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/index.blade.php ENDPATH**/ ?>