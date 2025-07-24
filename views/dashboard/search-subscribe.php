<?php require 'partials/head.php'?>
<?php if(!empty($search_data)): ?>
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
            <?php foreach($search_data as $subscriber): ?>
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

    <?php else: ?>
        <article class="flex justify-center items-center flex-col h-screen">
            <h1 class="text-neutral-700 text-3xl"  style="font-family: SuisseIntl;  font-weight: 500;">No Search Found for <span class="italic text-neutral-500" style="font-family: SuisseIntl;  font-weight: 500;"><?= $_POST['search'] ?>...</span></h1>
            <svg class="size-15 text-neutral-600" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.3536 2.35355C13.5488 2.15829 13.5488 1.84171 13.3536 1.64645C13.1583 1.45118 12.8417 1.45118 12.6464 1.64645L10.6828 3.61012C9.70652 3.21671 8.63759 3 7.5 3C4.30786 3 1.65639 4.70638 0.0760002 7.23501C-0.0253338 7.39715 -0.0253334 7.60288 0.0760014 7.76501C0.902945 9.08812 2.02314 10.1861 3.36061 10.9323L1.64645 12.6464C1.45118 12.8417 1.45118 13.1583 1.64645 13.3536C1.84171 13.5488 2.15829 13.5488 2.35355 13.3536L4.31723 11.3899C5.29348 11.7833 6.36241 12 7.5 12C10.6921 12 13.3436 10.2936 14.924 7.76501C15.0253 7.60288 15.0253 7.39715 14.924 7.23501C14.0971 5.9119 12.9769 4.81391 11.6394 4.06771L13.3536 2.35355ZM9.90428 4.38861C9.15332 4.1361 8.34759 4 7.5 4C4.80285 4 2.52952 5.37816 1.09622 7.50001C1.87284 8.6497 2.89609 9.58106 4.09974 10.1931L9.90428 4.38861ZM5.09572 10.6114L10.9003 4.80685C12.1039 5.41894 13.1272 6.35031 13.9038 7.50001C12.4705 9.62183 10.1971 11 7.5 11C6.65241 11 5.84668 10.8639 5.09572 10.6114Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>

            <div class="mt-5">
            <a class="text-xl text-sky-600 hover:underline" style="font-family: SuisseIntlMono;  font-weight: 200;" href="/dashboard/subscribes">Go back to Dashboard</a>
        </div>
        </article>
<?php endif; ?>
<?php require 'partials/footer.php'?>