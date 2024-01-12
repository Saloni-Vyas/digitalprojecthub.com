<?php
$projectcount = mysqli_fetch_array(mysqli_query($con, "SELECT count(pid) FROM project;"));
$categorycount = mysqli_fetch_array(mysqli_query($con, "SELECT count(cid) FROM category;"));
$transactioncount = mysqli_fetch_array(mysqli_query($con, "SELECT count(transactionId) FROM transactions;"));
?>
<section class="bg-white dark:bg-gray-900" style="background: rgb(161,54,130);
background: linear-gradient(344deg, rgba(161,54,130,1) 0%, rgba(88,48,179,1) 61%);">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><?php echo $projectcount[0]; ?>+</dt>
                <dd class="font-light text-white">Projects</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><?php echo $categorycount[0];?>+</dt>
                <dd class="font-light text-white">Category</dd>
            </div>
            <div class="flex flex-col items-center justify-center">
                <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><?php echo $transactioncount[0];?>+</dt>
                <dd class="font-light text-white">Downloads</dd>
            </div>
        </dl>
    </div>
</section>