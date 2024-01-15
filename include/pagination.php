      <!-- pagination -->

      <?php
      if ($page > 1) {
        $switch = "";
      } else {
        $switch = "display:none;";
      }
      if ($page < $total_posts) {
        $nswitch = "";
      } else {
        $nswitch = "display:none;";
      }
      ?>
      <div class="flex justify-center mt-10 items-center">
        <a href="<?php echo weburl;?>/projects?technology=<?php echo $techology; ?>&search=<?php echo $search; ?>&page=<?php echo $page - 1 ?>" style="<?php echo $switch; ?>" class="mx-1 text-sm font-semibold text-gray-900">
          ← Previous
        </a>

        <?php
        for ($opage = 1; $opage <= $total_posts; $opage++) {
        ?>
          <a href="<?php echo weburl;?>/projects?technology=<?php echo $techology; ?>&search=<?php echo $search; ?>&page=<?php echo $opage; ?>" class="mx-1 flex items-center rounded-md border border-gray-400 px-3 py-1 text-gray-900 hover:scale-105">
            <?php echo $opage; ?>
          </a>
        <?php }; ?>
        
        <a href="<?php echo weburl;?>/projects?technology=<?php echo $techology; ?>&search=<?php echo $search; ?>&page=<?php echo $page + 1 ?>" style="<?php echo $nswitch; ?>" class="mx-2 text-sm font-semibold text-gray-900">
          Next →
        </a>
      </div>
      <!-- pagination -->