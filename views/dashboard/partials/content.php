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
    
    <h1 class="text-neutral-900 text-xl mt-5" style="font-family: SuisseIntl;  font-weight: 500;">All Subscribers</h1>

  <div class="mt-2">
    <div class="overflow-x-auto shadow-md rounded-lg">
      <table class="min-w-full divide-y divide-neutral-200">
        <thead class="bg-sky-100">
          <tr>
            <th scope="col" style="font-family: SuisseIntl;  font-weight: 500;" class="px-6 py-3 text-left text-sm font-medium text-neutral-700">Names</th>
            <th scope="col" style="font-family: SuisseIntl;  font-weight: 500;" class="px-6 py-3 text-left text-sm font-medium text-neutral-700">Email</th>
            <th scope="col" style="font-family: SuisseIntl;  font-weight: 500;" class="px-6 py-3 text-left text-sm font-medium text-neutral-700">Joined Date</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-neutral-100">
          <?php foreach($subscribers as $subscriber): ?>
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
              <td class="px-6 py-4 text-neutral-800" style="font-family: SuisseIntl;  font-weight: 200;"><?=htmlspecialchars(date_format(date_create($subscriber['Date']), 'Y/M/l'))?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Pagination -->
  <section>
      <article class="mt-6 flex justify-between">
        <aside class="flex gap-1 items-center">
            <p class="text-neutral-500" style="font-family: SuisseIntl;  font-weight: 200;">showing</p>
            <p class="text-neutral-500" style="font-family: SuisseIntl;  font-weight: 200;">1</p>
            <div class="h-[1px] w-[15px] bg-neutral-500"></div>
            <p class="text-neutral-500" style="font-family: SuisseIntl;  font-weight: 200;">4</p>
            <p class="text-neutral-500" style="font-family: SuisseIntl;  font-weight: 200;">50 entries</p>
        </aside>

        <aside class="flex gap-3 items-center" >
            <a href="" style="font-family: SuisseIntl;  font-weight: 200;" class="size-8 flex justify-center items-center rounded-xl text-neutral-800 border border-neutral-400">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.85355 3.85355C7.04882 3.65829 7.04882 3.34171 6.85355 3.14645C6.65829 2.95118 6.34171 2.95118 6.14645 3.14645L2.14645 7.14645C1.95118 7.34171 1.95118 7.65829 2.14645 7.85355L6.14645 11.8536C6.34171 12.0488 6.65829 12.0488 6.85355 11.8536C7.04882 11.6583 7.04882 11.3417 6.85355 11.1464L3.20711 7.5L6.85355 3.85355ZM12.8536 3.85355C13.0488 3.65829 13.0488 3.34171 12.8536 3.14645C12.6583 2.95118 12.3417 2.95118 12.1464 3.14645L8.14645 7.14645C7.95118 7.34171 7.95118 7.65829 8.14645 7.85355L12.1464 11.8536C12.3417 12.0488 12.6583 12.0488 12.8536 11.8536C13.0488 11.6583 13.0488 11.3417 12.8536 11.1464L9.20711 7.5L12.8536 3.85355Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </a>
            <a href="" style="font-family: SuisseIntl;  font-weight: 200;" class="size-8 flex justify-center items-center rounded-xl text-neutral-800 border border-neutral-400">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.84182 3.13514C9.04327 3.32401 9.05348 3.64042 8.86462 3.84188L5.43521 7.49991L8.86462 11.1579C9.05348 11.3594 9.04327 11.6758 8.84182 11.8647C8.64036 12.0535 8.32394 12.0433 8.13508 11.8419L4.38508 7.84188C4.20477 7.64955 4.20477 7.35027 4.38508 7.15794L8.13508 3.15794C8.32394 2.95648 8.64036 2.94628 8.84182 3.13514Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </a>
            <a href="" style="font-family: SuisseIntl;  font-weight: 200;" class="size-8 flex justify-center items-center rounded-xl text-white bg-sky-600">1</a>
            <a href=""  style="font-family: SuisseIntl;  font-weight: 200;" class="size-8 flex justify-center items-center rounded-xl text-neutral-800 border border-neutral-400">2</a>
            <a href="" style="font-family: SuisseIntl;  font-weight: 200;" class="size-8 flex justify-center items-center rounded-xl text-neutral-800 border border-neutral-400">3</a>
            <span style="font-family: SuisseIntl;  font-weight: 200;" class="text-neutral-800">...</span>
            <a href="" style="font-family: SuisseIntl;  font-weight: 200;" class="size-8 flex justify-center items-center rounded-xl text-neutral-800 border border-neutral-400">10</a>
            <a href="" style="font-family: SuisseIntl;  font-weight: 200;" class="size-8 flex justify-center items-center rounded-xl text-neutral-800 border border-neutral-400">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.1584 3.13508C6.35985 2.94621 6.67627 2.95642 6.86514 3.15788L10.6151 7.15788C10.7954 7.3502 10.7954 7.64949 10.6151 7.84182L6.86514 11.8418C6.67627 12.0433 6.35985 12.0535 6.1584 11.8646C5.95694 11.6757 5.94673 11.3593 6.1356 11.1579L9.565 7.49985L6.1356 3.84182C5.94673 3.64036 5.95694 3.32394 6.1584 3.13508Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </a>
            <a href=""style="font-family: SuisseIntl;  font-weight: 200;" class="size-8 flex justify-center items-center rounded-xl text-neutral-800 border border-neutral-400"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.14645 11.1464C1.95118 11.3417 1.95118 11.6583 2.14645 11.8536C2.34171 12.0488 2.65829 12.0488 2.85355 11.8536L6.85355 7.85355C7.04882 7.65829 7.04882 7.34171 6.85355 7.14645L2.85355 3.14645C2.65829 2.95118 2.34171 2.95118 2.14645 3.14645C1.95118 3.34171 1.95118 3.65829 2.14645 3.85355L5.79289 7.5L2.14645 11.1464ZM8.14645 11.1464C7.95118 11.3417 7.95118 11.6583 8.14645 11.8536C8.34171 12.0488 8.65829 12.0488 8.85355 11.8536L12.8536 7.85355C13.0488 7.65829 13.0488 7.34171 12.8536 7.14645L8.85355 3.14645C8.65829 2.95118 8.34171 2.95118 8.14645 3.14645C7.95118 3.34171 7.95118 3.65829 8.14645 3.85355L11.7929 7.5L8.14645 11.1464Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></a>
        </aside>
      </article>
  </section>
</section>
</main>
