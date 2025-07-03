<?php require_once '../controllers/get-subscribers.php'?>

<main class="bg-neutral-50 px-10 pt-20 ">
    <section class="">
        <article>
       <aside class="bg-white border border-neutral-300 rounded-xl p-4">
            <div class="size-[40px] bg-sky-400 rounded-full flex justify-center items-center">
                <svg class="size-[25px] text-neutral-600" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 0.875C5.49797 0.875 3.875 2.49797 3.875 4.5C3.875 6.15288 4.98124 7.54738 6.49373 7.98351C5.2997 8.12901 4.27557 8.55134 3.50407 9.31167C2.52216 10.2794 2.02502 11.72 2.02502 13.5999C2.02502 13.8623 2.23769 14.0749 2.50002 14.0749C2.76236 14.0749 2.97502 13.8623 2.97502 13.5999C2.97502 11.8799 3.42786 10.7206 4.17091 9.9883C4.91536 9.25463 6.02674 8.87499 7.49995 8.87499C8.97317 8.87499 10.0846 9.25463 10.8291 9.98831C11.5721 10.7206 12.025 11.8799 12.025 13.5999C12.025 13.8623 12.2376 14.0749 12.5 14.0749C12.7623 14.075 12.975 13.8623 12.975 13.6C12.975 11.72 12.4778 10.2794 11.4959 9.31166C10.7244 8.55135 9.70025 8.12903 8.50625 7.98352C10.0187 7.5474 11.125 6.15289 11.125 4.5C11.125 2.49797 9.50203 0.875 7.5 0.875ZM4.825 4.5C4.825 3.02264 6.02264 1.825 7.5 1.825C8.97736 1.825 10.175 3.02264 10.175 4.5C10.175 5.97736 8.97736 7.175 7.5 7.175C6.02264 7.175 4.825 5.97736 4.825 4.5Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </div>

            <p class="text-neutral-500 text-xl mt-5" style="font-family: SuisseIntl;  font-weight: 200;">Total Subscribers</p>
              <p class="mt-2 text-5xl" style="font-family: SuisseIntl;  font-weight: 500;"><?= number_format($number_of_subs)?>
                </p>
    </aside>
    </article>
    </section>

  <section class="mt-10">

  <aside class="flex justify-between items-center">
      <h1 class="text-neutral-900 text-xl mt-5" style="font-family: SuisseIntl;  font-weight: 500;">All Subscribers</h1>

      <form action="/search-subscribers" method="post">
          <div class="md:w-100 lg:w-160 h-full flex gap-1 bg-neutral-100 rounded-xl px-2 py-1 focus-within:outline focus-within:outline-sky-500" style="transition: background 0.2s linear;">
              <svg  class="w-[30px] h-[30px] cursor-pointer text-neutral-600" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 6.5C10 8.433 8.433 10 6.5 10C4.567 10 3 8.433 3 6.5C3 4.567 4.567 3 6.5 3C8.433 3 10 4.567 10 6.5ZM9.30884 10.0159C8.53901 10.6318 7.56251 11 6.5 11C4.01472 11 2 8.98528 2 6.5C2 4.01472 4.01472 2 6.5 2C8.98528 2 11 4.01472 11 6.5C11 7.56251 10.6318 8.53901 10.0159 9.30884L12.8536 12.1464C13.0488 12.3417 13.0488 12.6583 12.8536 12.8536C12.6583 13.0488 12.3417 13.0488 12.1464 12.8536L9.30884 10.0159Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>

              <input class="w-full outline-0 border-0" placeholder="search subscribers..." type="text" name="search" type="search" id="search" style="font-family: SuisseIntl; font-weight: 200;">
              <button class="">
              <svg class="w-[20px] h-[20px] cursor-pointer text-neutral-600 hover:text-sky-500" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.20308 1.04312C1.00481 0.954998 0.772341 1.0048 0.627577 1.16641C0.482813 1.32802 0.458794 1.56455 0.568117 1.75196L3.92115 7.50002L0.568117 13.2481C0.458794 13.4355 0.482813 13.672 0.627577 13.8336C0.772341 13.9952 1.00481 14.045 1.20308 13.9569L14.7031 7.95693C14.8836 7.87668 15 7.69762 15 7.50002C15 7.30243 14.8836 7.12337 14.7031 7.04312L1.20308 1.04312ZM4.84553 7.10002L2.21234 2.586L13.2689 7.50002L2.21234 12.414L4.84552 7.90002H9C9.22092 7.90002 9.4 7.72094 9.4 7.50002C9.4 7.27911 9.22092 7.10002 9 7.10002H4.84553Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
              </button>
        </div>
      </form>
  </aside>

  <div class="mt-2">
    <div class="overflow-x-auto shadow-md rounded-lg">
      <table class="min-w-full divide-y divide-neutral-200">
        <thead class="bg-sky-100">
          <tr>
            <th scope="col" style="font-family: SuisseIntl;  font-weight: 500;" class="px-6 py-3 text-left text-sm font-medium text-neutral-700">Names</th>
            <th scope="col" style="font-family: SuisseIntl;  font-weight: 500;" class="px-6 py-3 text-left text-sm font-medium text-neutral-700">Email</th>
            <th scope="col" style="font-family: SuisseIntl;  font-weight: 500;" class="px-6 py-3 text-left text-sm font-medium text-neutral-700">Joined Date</th>
            <th scope="col" style="font-family: SuisseIntl;  font-weight: 500;" class="px-6 py-3 text-left text-sm font-medium text-neutral-700"></th>
          </tr>
        </thead>
        <?php foreach($subscribers as $subscriber): ?>
        <tbody class="bg-white divide-y divide-neutral-100 relative">
            <tr class="hover:bg-sky-50">
              <td class="px-6 py-4 text-neutral-800" style="font-family: SuisseIntl;  font-weight: 200;">
                <?php
                $localPart = explode('@', htmlspecialchars($subscriber['email']))[0];
                  $names = explode('.', $localPart);
                  $prettyName = implode(' ', array_map('ucfirst', $names));
                  echo $prettyName;
                ?>
              </td>
              <td class="px-6 py-4 text-neutral-800" style="font-family: SuisseIntl;  font-weight: 200;"><?= htmlspecialchars($subscriber['email'])?></td>
              <td class="px-6 py-4 text-neutral-800" style="font-family: SuisseIntl;  font-weight: 200;"><?=htmlspecialchars(date_format(date_create($subscriber['Date']), 'Y/M/l'))?>
            </td>
            <td>
                <a href="/delete-subscribers?delete=<?= $subscriber['id']?>" class="group">
                  <svg class="size-[20px] text-neutral-700 group-hover:text-red-700" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 1C5.22386 1 5 1.22386 5 1.5C5 1.77614 5.22386 2 5.5 2H9.5C9.77614 2 10 1.77614 10 1.5C10 1.22386 9.77614 1 9.5 1H5.5ZM3 3.5C3 3.22386 3.22386 3 3.5 3H5H10H11.5C11.7761 3 12 3.22386 12 3.5C12 3.77614 11.7761 4 11.5 4H11V12C11 12.5523 10.5523 13 10 13H5C4.44772 13 4 12.5523 4 12V4L3.5 4C3.22386 4 3 3.77614 3 3.5ZM5 4H10V12H5V4Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </a>
            </td> 
            </tr>
          </tbody>
          <?php endforeach; ?>
      </table>
    </div>
  </div>

  <!-- Pagination -->
  <section>
      <article class="mt-2 flex justify-between">
        <aside class="flex gap-1 items-center">
          <?php 
              $showing_from = $start + 1;
              $showing_to = min($start + $page_limit, $number_of_subs);
          ?>
            <p class="text-neutral-500" style="font-family: SuisseIntl;  font-weight: 200;">
              Showing <?= $showing_from ?> to <?= $showing_to ?> of <?= $number_of_subs ?>
              entries
            </p>
        </aside>

        <?php 
            $current_page = isset($_GET['page_number']) ? (int)$_GET['page_number'] : 1;
            $prev_page = max(1, $current_page - 1);
            $next_page = min($number_of_pages, $current_page + 1);
        ?>

        <aside class="flex gap-3 items-center">
            <?php
              $current_page = isset($_GET['page_number']) ? (int)$_GET['page_number'] : 1;
              $prev_page = max(1, $current_page - 1);
              $next_page = min($number_of_pages, $current_page + 1);
?>

<aside class="flex gap-3 items-center mt-6">

  <!-- Previous -->
  <a href="?page_number=<?= $prev_page ?>" 
     class="size-8 flex justify-center items-center rounded-xl 
            text-neutral-800 border border-neutral-400 hover:bg-neutral-100"
     style="font-family: SuisseIntl; font-weight: 200;">
    ‹
  </a>

  <!-- Page Numbers -->
  <?php
      $range = 2; // Number of pages to show on either side of current page
      $show_ellipsis = false;
?>

<?php for ($i = 1; $i <= $number_of_pages; $i++): ?>
  <?php if (
    $i === 1 || 
    $i === $number_of_pages || 
    ($i >= $current_page - $range && $i <= $current_page + $range)
  ): ?>
    <?php if ($i == $current_page): ?>
      <span class="size-8 flex justify-center items-center rounded-xl 
                  bg-sky-600 text-white font-medium"
            style="font-family: SuisseIntl;">
        <?= $i ?>
      </span>
    <?php else: ?>
      <a href="?page_number=<?= $i ?>"
        class="size-8 flex justify-center items-center rounded-xl 
                text-neutral-800 border border-neutral-400 hover:bg-neutral-100"
        style="font-family: SuisseIntl; font-weight: 200;">
        <?= $i ?>
      </a>
    <?php endif; ?>
    <?php $show_ellipsis = true; ?>
  <?php elseif ($show_ellipsis): ?>
    <span class="px-2 text-neutral-800" style="font-family: SuisseIntl;">...</span>
    <?php $show_ellipsis = false; ?>
  <?php endif; ?>
<?php endfor; ?>


  <!-- Next -->
  <a href="?page_number=<?= $next_page ?>" 
     class="size-8 flex justify-center items-center rounded-xl 
            text-neutral-800 border border-neutral-400 hover:bg-neutral-100"
     style="font-family: SuisseIntl; font-weight: 200;">
    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.1584 3.13508C6.35985 2.94621 6.67627 2.95642 6.86514 3.15788L10.6151 7.15788C10.7954 7.3502 10.7954 7.64949 10.6151 7.84182L6.86514 11.8418C6.67627 12.0433 6.35985 12.0535 6.1584 11.8646C5.95694 11.6757 5.94673 11.3593 6.1356 11.1579L9.565 7.49985L6.1356 3.84182C5.94673 3.64036 5.95694 3.32394 6.1584 3.13508Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
  </a>
</aside>

        </aside>
      </article>
  </section>
</section>
</main>
